<?php
require_once "model.php";


Class Pharmacist_comment extends Model{

    public $id=null;
    public $pharmacist_comment_text="";
    public $date_of_selling="";
    public $patient_id=null;


    public function __construct($pharmacist_comment_text,$date_of_selling,$diagnosis_id){

        $this->pharmacist_comment_text=$pharmacist_comment_text;
        $this->date_of_selling=$date_of_selling;
        $this->patient_id=$diagnosis_id;

    }

    public function create(){
        $patient_statment = self::$conn->prepare("INSERT INTO pharmacist_comments 
        (`pharmacist_comment_text`,`date_of_selling`,`patient_id`)VALUES (:pharmacist_comment_text,:date_of_selling,:patient_id)");
        $patient_statment->bindParam(':pharmacist_comment_text', $this->pharmacist_comment_text);
        $patient_statment->bindParam(':date_of_selling', $this->date_of_selling);
        $patient_statment->bindParam(':patient_id', $this->patient_id);
        $patient_statment->execute();
    }
        public  function find_patient(){
        $pc_statment = self::$conn->prepare("SELECT * from pharmacist_comments WHERE patient_id=:id ");
        $pc_statment->bindParam(':id', $this->patient_id);
        $pc_statment->execute(); 
        $pcs=[];
        $counter=0;
        while($row=$dg_statment->fetch(PDO::FETCH_ASSOC)){
            $pcs[$counter]['id']=$row['id'];
            $pcs[$counter]['pharmacist_comment_text']=$row['pharmacist_comment_text'];
            $pcs[$counter]['diagnosis_id']=$row['diagnosis_id'];
            $pcs[$counter]['date_of_selling']=$row['date_of_selling'];
            $counter++;
        }

        return $pcs;

    }


}
Pharmacist_comment::init();