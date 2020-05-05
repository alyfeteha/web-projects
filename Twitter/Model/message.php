<?php
require_once "model.php";

Class Message extends Model{

    public $id=NULL;
    public $body_text="";
    public $reciever_id=NULL;
    public $sender_id=NULL;
    public $image_serial=NULL;
    public $time="";

    public function __construct($body_text, $reciever_id,$sender_id,$image_serial)
{
    $this->image_serial=$image_serial;
    $this->body_text=$body_text;
    $this->sender_id=$sender_id;
    $this->reciever_id=$reciever_id;
}
     public function create(){
    $msg_statment = self::$conn->prepare("INSERT INTO message_info
        (`body_text`,`image_serial`,`sender_id`,`receiver_id`) VALUES (:body_text,:image_serial,:sender_id,:receiver_id)");
        $msg_statment->bindParam(':body_text', $this->body_text);
        $msg_statment->bindParam(':image_serial', $this->image_serial);
        $msg_statment->bindParam(':sender_id', $this->sender_id);
        $msg_statment->bindParam(':receiver_id', $this->reciever_id);
        $msg_statment->execute();
        $last_id=self::$conn->lastInsertId();
        return $last_id;
}
     public function find(){
        $msg_statment = self::$conn->prepare("SELECT * FROM message_info");
        //$msg_statment->bindParam(':id', $this->sender_id);
        $msg_statment->execute(); 
        $msgs = [];
        while ($row = $msg_statment->fetch(PDO::FETCH_ASSOC)) {
            if(($this->reciever_id==$row['receiver_id'] && $this->sender_id==$row['sender_id'] )||($this->reciever_id==$row['sender_id'] && $this->sender_id==$row['receiver_id'] )){
            $message_object = new Message($row['body_text'], $row['reciever_id'],$row['sender_id'],$row['image_serial']);
            $message_object->id = $row['id'];
            $message_object->time = $row['time'];
            $msgs[] = $message_object;
          }
          //var_dump($row['sender_id'],$row['receiver_id']);
        }
       
       // exit(0);
        
        return $msgs;
    }
    public static function get_all_after($msg,$resvr,$sender){
        $msg_statment = self::$conn->prepare("SELECT * FROM `message_info` WHERE id > :id");
        $msg_statment->bindParam(':id', $msg);
        $msg_statment->execute(); //bind object with database
        $result = [];
        //var_dump($msg_statment->fetch(PDO::FETCH_ASSOC),$msg->id);
        while ($row = $msg_statment->fetch(PDO::FETCH_ASSOC)) {
           if(($resvr->id==$row['receiver_id'] && $sender->id==$row['sender_id'] )||($resvr->id==$row['sender_id'] && $sender->id==$row['receiver_id'] )){
            $message_object = new Message($row['body_text'], $row['reciever_id'],$row['sender_id'],$row['image_serial']);
            $message_object->id = $row['id'];
            $message_object->time = $row['time'];
            $result[] = $message_object;
            $r=$message_object;
            }
            
        }
        return $r;
        //return $result;
        // if(($resvr->id==$row['receiver_id'] && $sender->id==$row['sender_id'] )||($resvr->id==$row['sender_id'] && $sender->id==$row['receiver_id'] )){
        //         $message_object = new Message($row['body_text'], $row['reciever_id'],$row['sender_id'],$row['image_serial']);
        //         $message_object->id = $row['id'];
        //         $message_object->time = $row['time'];
        //         $result[] = $message_object;
        // //exit(0);
        $r=$result[0];
        return $r;
    }
    public static function get_last_msg_id(){
        $msg_statment = self::$conn->prepare("SELECT * from message_info ORDER by id DESC LIMIT 1");
        //$msg_statment->bindParam(':time',$time);
        $msg_statment->execute();
        $msg=$msg_statment->fetch(PDO::FETCH_OBJ);
        return $msg;
    }


}
Message::init();