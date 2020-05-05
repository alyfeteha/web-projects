<?php
require_once "model.php";


Class Patient extends Model{

    public $id=null;
    public $full_name="";
    public $national_number="";
    public $password="";
    public $DOB="";
    public $gender="";
    public $profile_picture="";
    public $phone_number="";
    public $address="";

    public function __construct($full_name,$national_number,$password,$DOB,$gender,$profile_picture,$phone_number,$address){
        $this->full_name=$full_name;
        $this->national_number=$national_number;
        $this->password=$password;
        $this->DOB=$DOB;
        $this->gender=$gender;
        $this->profile_picture=$profile_picture;
        $this->phone_number=$phone_number;
        $this->address=$address;
    }

    public function create(){
        $patient_statment = self::$conn->prepare("INSERT INTO patients_information 
        (`full_name`,`national_number`,`password`,`date_of_birth`,`gender`,`profile_picture`,`phone_number`,`address`)
         VALUES (:full_name,:national_number,:password,:date_of_birth,:gender,:profile_picture,:phone_number,:address)");
        $patient_statment->bindParam(':full_name', $this->full_name);
        $patient_statment->bindParam(':national_number', $this->national_number);
        $patient_statment->bindParam(':date_of_birth', $this->DOB);
        $patient_statment->bindParam(':password', $this->password);
        $patient_statment->bindParam(':gender', $this->gender);
        $patient_statment->bindParam(':profile_picture', $this->profile_picture);
        $patient_statment->bindParam(':phone_number', $this->phone_number);
        $patient_statment->bindParam(':address', $this->address);
        $patient_statment->execute();
     }
     public static function find(){
        $patient_statment = self::$conn->prepare("SELECT * from patients_information ");
        $patient_statment->execute(); 
        $patients=[];
        $counter=0;
        while($row=$patient_statment->fetch(PDO::FETCH_ASSOC)){
            $patients[$counter]['id']=$row['id'];
            $patients[$counter]['full_name']=$row['full_name'];
            $patients[$counter]['national_number']=$row['national_number'];
            $patients[$counter]['password']=$row['password'];
            $patients[$counter]['gender']=$row['gender'];
            $patients[$counter]['date_of_birth']=$row['date_of_birth'];
            $patients[$counter]['profile_picture']=$row['profile_picture'];
            $patients[$counter]['phone_number']=$row['phone_number'];
            $patients[$counter]['address']=$row['address'];
            $counter++;
        }

        return $patients;
     }
    

}
Patient::init();