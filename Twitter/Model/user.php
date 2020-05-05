<?php

require_once "model.php";
//require_once "tweet.php";

Class User extends Model{
    public $id=null;
    public $username="";
    public $password="";
    public $image_serial="";
    public $status="offline";

    public function __construct($username, $password,$email,$image_serial)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email=$email;
        $this->image_serial=$image_serial;
    }

    public function create(){
        $user_statment = self::$conn->prepare("INSERT INTO user_information 
      (`username`,`email`,`password`,`image_serial`) VALUES (:username,:email,:password,:image_serial)");
      $user_statment->bindParam(':username', $this->username);
      $user_statment->bindParam(':password', $this->password);
      $user_statment->bindParam(':email', $this->email);
      $user_statment->bindParam(':image_serial', $this->image_serial);
      $user_statment->execute();
    }

    public function find(){
        $regex_Email='/[a-zA-Z0-9]+@[a-z]+\.[a-z]+/';
        if(preg_match($regex_Email,$this->email)){
            $user_statment = self::$conn->prepare("SELECT * from user_information where`email`=:email");
            $user_statment->bindParam(':email',$this->email);
          }
        $user_statment->execute(); 
        $users=$user_statment->fetch(PDO::FETCH_OBJ);
        return $users;
    }
    public function login(){
        $user_statment = self::$conn->prepare("SELECT * FROM user_information WHERE email=:email AND password=:password");
        $user_statment->bindParam(':email', $this->email);
        $user_statment->bindParam(':password', $this->password);
        $user_statment->execute(); 
        $users=$user_statment->fetch(PDO::FETCH_OBJ);
        return $users;
    }
    public static function get_tweets($user_id){
        $tweets=new Tweet("",$user_id,"");
        $user_tweets=$tweets->find();
        return $user_tweets;
    }
    public static function update($user_info){
        $empty=NULL;
        if($user_info['new_password']){
        $user_statment = self::$conn->prepare("UPDATE user_information SET `password`=:password where id=:id");
        $user_statment->bindParam(':password', $user_info['new_password']);
        }
        elseif($user_info['new_username']){
        $user_statment = self::$conn->prepare("UPDATE user_information SET username=:username where id=:id");
        $user_statment->bindParam(':username', $user_info['new_username']);
        }
        elseif($user_info['new_profile_picture']){
            $user_statment = self::$conn->prepare("UPDATE user_information SET image_serial=:image_serial where id=:id");
            $user_statment->bindParam(':image_serial', $user_info['new_profile_picture']);
        }       
        elseif($user_info['new_profile_picture']==0) {
            $user_statment = self::$conn->prepare("UPDATE user_information SET image_serial=:image_serial where id=:id");
            $user_statment->bindParam(':image_serial',$empty);
        }
        $user_statment->bindParam(':id',$user_info['id']);
        $user_statment->execute(); 
    }
    public static function get_user_by_id($id){
        $user_statment = self::$conn->prepare("SELECT * from user_information where`id`=:id");
        $user_statment->bindParam(':id',$id);
        $user_statment->execute();
        $user=$user_statment->fetch(PDO::FETCH_OBJ);
        return $user;
    }
    public static function get_user_id($email){
        $user_statment = self::$conn->prepare("SELECT * from user_information where`email`=:email");
        $user_statment->bindParam(':email',$email);
        $user_statment->execute();
        $user=$user_statment->fetch(PDO::FETCH_OBJ);
        return $user->id;
    }
    public static function update_user_status($status,$email){
        $user_statment=self::$conn->prepare("UPDATE user_information SET `status`=:status where email=:email");
        $user_statment->bindParam(':email',$email);
        $user_statment->bindParam(':status',$status);
        $user_statment->execute();
    }

}
User::init();