<?php
require_once "model.php";

Class Tweet extends Model{

    public $id="";
    public $body_text="";
    public $image_serial="";
    public $sender_id="";

    public function __construct($body_text, $sender_id,$image_serial)
    {
        $this->body_text = $body_text;
        $this->sender_id = $sender_id;
        $this->image_serial=$image_serial;
    }
    public function create(){
        $tweet_statment = self::$conn->prepare("INSERT INTO tweet_info
        (`body_text`,`image_serial`,`sender_id`) VALUES (:body_text,:image_serial,:sender_id)");
        $tweet_statment->bindParam(':body_text', $this->body_text);
        $tweet_statment->bindParam(':image_serial', $this->image_serial);
        $tweet_statment->bindParam(':sender_id', $this->sender_id);
        $tweet_statment->execute();
    }
    public function find(){
        $tweet_statment = self::$conn->prepare("SELECT * FROM tweet_info WHERE sender_id=:id");
        $tweet_statment->bindParam(':id', $this->sender_id);
        $tweet_statment->execute(); 
            $counter=0;
        while($row=$tweet_statment->fetch(PDO::FETCH_ASSOC)){
            $tweets[$counter]['id']=$row['id'];
            $tweets[$counter]['body_text']=$row['body_text'];
            $tweets[$counter]['image_serial']=$row['image_serial'];
            $counter++;
        }
        if(!isset($tweets)){
            return NULL;
        }
        return array_reverse($tweets);
    }
    public static function update($tweet_info){
        $empty=NULL;
        if($tweet_info['body_text']!=NULL){
        $tweet_statment = self::$conn->prepare("UPDATE tweet_info SET `body_text`=:body_text  where id=:id");
        $tweet_statment->bindParam(':body_text',$tweet_info['body_text']);
        }
        elseif($tweet_info['image_serial']!=NULL){
            $tweet_statment = self::$conn->prepare("UPDATE tweet_info SET `image_serial`=:image_serial where id=:id");
            $tweet_statment->bindParam(':image_serial',$tweet_info['image_serial']);
            }
        else{
            $tweet_statment = self::$conn->prepare("UPDATE tweet_info SET `image_serial`=:image_serial where id=:id");
            $tweet_statment->bindParam(':image_serial',$empty);
        }
        $tweet_statment->bindParam(':id',$tweet_info['id']);
        $tweet_statment->execute();
    }
    public static function get_all_tweets(){
        $tweet_statment = self::$conn->prepare("SELECT * FROM tweet_info");
        $tweet_statment->execute(); 
        $counter=0;
        while( $tweets=$tweet_statment->fetch(PDO::FETCH_ASSOC)){
            $tweet[$counter]['id']=$tweets['id'];
            $tweet[$counter]['sender_id']=$tweets['sender_id'];
            $tweet[$counter]['body_text']=$tweets['body_text'];
            $tweet[$counter]['image_serial']=$tweets['image_serial'];
            $counter++;
        }
        return array_reverse($tweet);
    }
    public static function get_tweet_by_id($id){
        $tweet_statment=self::$conn->prepare("SELECT * FROM tweet_info WHERE id=:id");
        $tweet_statment->bindParam(":id",$id);
        $tweet_statment->execute();
        $tweet=$tweet_statment->fetch(PDO::FETCH_OBJ);
        return $tweet;
    }
    public static function delete($id){
        
        $tweet_statment=self::$conn->prepare("DELETE FROM tweet_info WHERE id =:id");
        $tweet_statment->bindParam(":id",$id);
        $tweet_statment->execute();
        
        

    }
}
Tweet::init();