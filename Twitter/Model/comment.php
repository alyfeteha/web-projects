<?php
require_once "model.php";

Class Comment extends Model{
public $id=NULL;
public $image_serial="";
public $body_text="";
public $sender_id=NULL;
public $tweet_id=NULL;

public function __construct($image_serial, $body_text,$sender_id,$tweet_id)
{
    $this->image_serial=$image_serial;
    $this->body_text=$body_text;
    $this->sender_id=$sender_id;
    $this->tweet_id=$tweet_id;
}
 public function create(){
    $empty=NULL;
    $comment_statment=self::$conn->prepare("INSERT INTO comment_info (`image_serial`,`body_text`,`sender_id`,`tweet_id`) 
    VALUES (:image_serial,:body_text,:sender_id,:tweet_id)");
      $comment_statment->bindParam(":sender_id",$this->sender_id);
      $comment_statment->bindParam(":tweet_id",$this->tweet_id);
      if($this->body_text==""){
        $comment_statment->bindParam(":body_text",$empty);
     }
     else{
         $comment_statment->bindParam(":body_text",$this->body_text);
     }
     if($this->image_serial==""){
        $comment_statment->bindParam(":image_serial",$empty);
     }
     else{
         $comment_statment->bindParam(":image_serial",$this->image_serial);
     }
     $comment_statment->execute();

}
public function find(){
    $comment_statment = self::$conn->prepare("SELECT * FROM comment_info WHERE tweet_id=:id");
    $comment_statment->bindParam(':id', $this->tweet_id);
    $comment_statment->execute(); 
    $counter=0;
    while($row=$comment_statment->fetch(PDO::FETCH_ASSOC)){
        $comments[$counter]['id']=$row['id'];
        $comments[$counter]['body_text']=$row['body_text'];
        $comments[$counter]['image_serial']=$row['image_serial'];
        $comments[$counter]['sender_id']=$row['sender_id'];
        $counter++;
    }
    if(isset($comments))
    return array_reverse($comments);
    return $comments;
}
public static function update($comment_info){
    $empty=NULL;
        if($comment_info['body_text']!=NULL){
        $comment_statment = self::$conn->prepare("UPDATE comment_info SET `body_text`=:body_text  where id=:id");
        $comment_statment->bindParam(':body_text',$comment_info['body_text']);
        }
        elseif($comment_info['image_serial']!=NULL){
            $comment_statment = self::$conn->prepare("UPDATE comment_info SET `image_serial`=:image_serial where id=:id");
            $comment_statment->bindParam(':image_serial',$comment_info['image_serial']);
            }
        else{
            $comment_statment = self::$conn->prepare("UPDATE comment_info SET `image_serial`=:image_serial where id=:id");
            $comment_statment->bindParam(':image_serial',$empty);
        }
        $comment_statment->bindParam(':id',$comment_info['id']);
        $comment_statment->execute();
}

public static function delete($id){
    $comment_statment=self::$conn->prepare("DELETE FROM comment_info WHERE id =:id");
    $comment_statment->bindParam(":id",$id);
    $comment_statment->execute();

}
public static function delete_tweet_comments($tweet_id){
    $comment_statment=self::$conn->prepare("DELETE FROM comment_info WHERE tweet_id =:id");
    $comment_statment->bindParam(":id",$tweet_id);
    $comment_statment->execute();
}

}
Comment::init();