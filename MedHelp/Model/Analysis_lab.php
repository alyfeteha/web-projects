<?php
require_once "model.php";



Class AnalysisLab extends Model{

    public $id=null;
    public $commercial_name="";
    public $password="";
    public $phone_number=null;
    public $address="";

    public function __construct($commercial_name,$password,$phone_number,$address){

        $this->commercial_name=$commercial_name;
        $this->password=$password;
        $this->phone_number=$phone_number;
        $this->address=$address;
    }

    public function create(){
        $lab_statment = self::$conn->prepare("INSERT INTO analysis_lab 
        (`commercial_name`,`password`,`phone_number(s)`,`address(es)`)VALUES (:commercial_name,:password,:phone_number,:address)");
        $lab_statment->bindParam(':commercial_name', $this->commercial_name);
        $lab_statment->bindParam(':password', $this->password);
        $lab_statment->bindParam(':phone_number', $this->phone_number);
        $lab_statment->bindParam(':address', $this->address);
        $lab_statment->execute();
    }
    public static function find(){
        $lab_statment = self::$conn->prepare("SELECT * from analysis_lab");
        $lab_statment->execute(); 
        $labs=[];
        $counter=0;
        while($row=$lab_statment->fetch(PDO::FETCH_ASSOC)){
            $labs[$counter]['id']=$row['id'];
            $labs[$counter]['commercial_name']=$row['commercial_name'];
            $labs[$counter]['password']=$row['password'];
            $labs[$counter]['phone_number']=$row['phone_number(s)'];
            $labs[$counter]['work_address']=$row['address(es)'];
            $counter++;
        }

        return $labs;
    }




}
AnalysisLab::init();