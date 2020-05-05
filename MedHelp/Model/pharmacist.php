<?php
require_once "model.php";




Class Pharmacist extends Model{

public $id=null;
public $full_name="";
public $national_number="";
public $syndicate_number="";
public $password="";
public $gender="";
public $profile_picture="";
public $phone_number="";
public $work_address="";

// public function 
public function __construct($full_name,$national_number,$syndicate_number,$password,$gender,$profile_picture,$phone_number,$work_address){
    $this->full_name=$full_name;
    $this->national_number=$national_number;
    $this->syndicate_number=$syndicate_number;
    $this->password=$password;
    $this->gender=$gender;
    $this->profile_picture=$profile_picture;
    $this->phone_number=$phone_number;
    $this->work_address=$work_address;
}

 public function create(){
    $pharma_statment = self::$conn->prepare("INSERT INTO pharmacists 
    (`full_name`,`national_number`,`syndicate_number`,`password`,`gender`,`profile_picture`,`work_phone_number`,`work_place_address`)
     VALUES (:full_name,:national_number,:syndicate_number,:password,:gender,:profile_picture,:phone_number,:work_address)");
    $pharma_statment->bindParam(':full_name', $this->full_name);
    $pharma_statment->bindParam(':national_number', $this->national_number);
    $pharma_statment->bindParam(':syndicate_number', $this->syndicate_number);
    $pharma_statment->bindParam(':password', $this->password);
    $pharma_statment->bindParam(':gender', $this->gender);
    $pharma_statment->bindParam(':profile_picture', $this->profile_picture);
    $pharma_statment->bindParam(':phone_number', $this->phone_number);
    $pharma_statment->bindParam(':work_address', $this->work_address);
    $pharma_statment->execute();
 }
 public static function find(){
        $pharma_statment = self::$conn->prepare("SELECT * from pharmacists ");
        $pharma_statment->execute(); 
        $pharma=[];
        $counter=0;
        while($row=$pharma_statment->fetch(PDO::FETCH_ASSOC)){
            $pharma[$counter]['id']=$row['id'];
            $pharma[$counter]['full_name']=$row['full_name'];
            $pharma[$counter]['national_number']=$row['national_number'];
            $pharma[$counter]['syndicate_number']=$row['syndicate_number'];
            $pharma[$counter]['password']=$row['password'];
            $pharma[$counter]['gender']=$row['gender'];
            $pharma[$counter]['profile_picture']=$row['profile_picture'];
            $pharma[$counter]['phone_number']=$row['work_phone_number'];
            $pharma[$counter]['work_address']=$row['work_place_address'];
            $counter++;
        }

        return $pharma;
 }







}
Pharmacist::init();
?>