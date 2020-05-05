<?php
require_once "../Model/diagnosis.php";
require_once "../Model/patient.php";
require_once "../Model/pharmacist_comment.php";
header('Content-Type: application/json');
session_start();


if(isset($_POST['diag'])){

    $diagnosis=new Diagnosis($_POST['dg_body'],$_SESSION['patient_id'],$_SESSION['loger_id'],$_POST['medicine'],$_POST['days'],$_POST['analysis_name'],$_POST['date'],$_POST['conc']);
    $diagnosis->create();
    echo json_encode(['response'=>'your diagnosis is now recorded successfully']);
    
}
if(isset($_POST['comph'])){

    $pharmacistComment=new Pharmacist_comment($_POST['comment_body'],$_POST['date_of_sold'],$_SESSION['patient_id']);
    $pharmacistComment->create();
    echo json_encode(['response'=>'your comment is now recorded successfully']);
    
}
// echo json_encode(['response'=>'your comment is now recorded successfully']);
if(isset($_POST['history'])){
    $id="";
    if(isset($_SESSION['loger_id']) && $_SESSION['identity']=='patient'){
        $id=$_SESSION['loger_id'];
    }
    if(isset($_SESSION['patient_id'])){
        $id=$_SESSION['patient_id'];
     }
    $diagnosis=new Diagnosis('',$id,'','','','','','');
    $diagnosi=$diagnosis->find_patient();
    $diagno="";
    if(empty($diagnosi)){
        echo json_encode(['response'=>'no previous diagnosises detected for this patient']);
        return;
    }
    foreach($diagnosi as $diag){
        $diagno.=PHP_EOL."Diagnosis:".PHP_EOL.$diag['diagnosis_text'].PHP_EOL.PHP_EOL."Prescribed medicine:".PHP_EOL.$diag['prescribed_medicine'].PHP_EOL.PHP_EOL."concentration:".PHP_EOL.$diag['conc'].PHP_EOL.PHP_EOL."Date of diagnosis:".PHP_EOL.$diag['date'].PHP_EOL.PHP_EOL.PHP_EOL;
    }
    echo json_encode(['response'=>$diagno,
        'length'=>count($diagnosi)]);
    // else{
       // echo json_encode(['response'=>'ther was an error']);
    // }

}
