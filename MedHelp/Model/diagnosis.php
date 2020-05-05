<?php

require_once "model.php";


Class Diagnosis extends Model{

    public $id=null;
    public $diagnosis_text="";
    public $patient_id=null;
    public $Doctor_id=null;
    public $prescribed_medicine="";
    public $period_of_drug_use="";
    public $requested_lab_analysis_id="";
    public $date_of_diagnosis="";
    public $concentration="";


    public function __construct($diagnosis_text,$patient_id,$Doctor_id,
    $prescribed_medicine,$period_of_drug_use,$requested_lab_analysis_id,
    $date_of_diagnosis,$concentration){
        $this->diagnosis_text=$diagnosis_text;
        $this->patient_id=$patient_id;
        $this->Doctor_id=$Doctor_id;
        $this->prescribed_medicine=$prescribed_medicine;
        $this->period_of_drug_use=$period_of_drug_use;
        $this->requested_lab_analysis_id=$requested_lab_analysis_id;
        $this->date_of_diagnosis=$date_of_diagnosis;
        $this->concentration=$concentration;
    }

    public function create(){
        $dg_statment = self::$conn->prepare("INSERT INTO diagnoses 
        (`diagnosis`,`patient_id`,`Doctor_id`,`prescribed_medicine`,`period_of_drug_use(days)`,`requested_lab_analysis_id`,`date_of_diagnosis`,`concentration`)
         VALUES (:diagnosis,:patient_id,:Doctor_id,:prescribed_medicine,:period_of_drug_use,:requested_lab_analysis_id,:date_of_diagnosis,:concentration)");
        $dg_statment->bindParam(':diagnosis', $this->diagnosis_text);
        $dg_statment->bindParam(':patient_id', $this->patient_id);
        $dg_statment->bindParam(':Doctor_id', $this->Doctor_id);
        $dg_statment->bindParam(':prescribed_medicine', $this->prescribed_medicine);
        $dg_statment->bindParam(':period_of_drug_use', $this->period_of_drug_use);
        $dg_statment->bindParam(':requested_lab_analysis_id', $this->requested_lab_analysis_id);
        $dg_statment->bindParam(':date_of_diagnosis', $this->date_of_diagnosis);
        $dg_statment->bindParam(':concentration', $this->concentration);
        $dg_statment->execute();
    }
    public  static function find(){
        $dg_statment = self::$conn->prepare("SELECT * from diagnoses WHERE patient_id=:id ");
        $dg_statment->bindParam(':id', $this->patient_id);
        $dg_statment->execute(); 
        $dgs=[];
        $counter=0;
        while($row=$dg_statment->fetch(PDO::FETCH_ASSOC)){
            $dgs[$counter]['id']=$row['id'];
            $dgs[$counter]['diagnosis_text']=$row['diagnosis'];
            $dgs[$counter]['prescribed_medicine']=$row['prescribed_medicine'];
            $dgs[$counter]['conc']=$row['concentration'];
            $dgs[$counter]['date']=$row['date_of_diagnosis'];
            $counter++;
        }

        return $dgs;
    }
    public  function find_patient(){
        $dg_statment = self::$conn->prepare("SELECT * from diagnoses WHERE patient_id=:id ");
        $dg_statment->bindParam(':id', $this->patient_id);
        $dg_statment->execute(); 
        $dgs=[];
        $counter=0;
        while($row=$dg_statment->fetch(PDO::FETCH_ASSOC)){
            $dgs[$counter]['id']=$row['id'];
            $dgs[$counter]['diagnosis_text']=$row['diagnosis'];
            $dgs[$counter]['prescribed_medicine']=$row['prescribed_medicine'];
            $dgs[$counter]['conc']=$row['concentration'];
            $dgs[$counter]['date']=$row['date_of_diagnosis'];
            $counter++;
        }

        return $dgs;
    }


}