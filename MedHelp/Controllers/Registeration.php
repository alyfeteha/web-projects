<?php
include "../Helpers/Registeration_validation.php";
require_once "../Model/doctor.php";
require_once "../Model/pharmacist.php";
require_once "../Model/patient.php";
require_once "../Model/Analysis_lab.php";
 header('Content-Type: application/json');
session_start();

if(isset($_POST['pharm'])){
    $response=pharmacist_validation();
    if($response==0){
        $passwordHashed=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $nationalNumberHashed=password_hash($_POST['national_number'],PASSWORD_DEFAULT);
        $syndicateNumberHashed=password_hash($_POST['job_number'],PASSWORD_DEFAULT);
        $pharmacist=new Pharmacist($_POST['name'],$nationalNumberHashed,$syndicateNumberHashed, $passwordHashed,$_POST['gender'],$_SESSION['image'],$_POST['phone_num'],$_POST['work_address']);
        $pharmacist->create();
        $_SESSION['image']=null;
        echo json_encode(['response'=>'account_created']);
                            
    }
    else{
        echo json_encode($response);
    }
}

 if(isset($_POST['pat'])){
    $response=patient_validation();
    if($response==0){
        $passwordHashed=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $nationalNumberHashed=password_hash($_POST['national_number'],PASSWORD_DEFAULT);
        $dob=$_POST['dob-year']."-".$_POST['dob-month']."-".$_POST['dob-day'];
        $patient=new Patient($_POST['name'],$nationalNumberHashed, $passwordHashed,$dob,$_POST['gender'],$_SESSION['image'],$_POST['phone_num'],$_POST['work_address']);
        $patient->create();
        $_SESSION['image']=null;
        echo json_encode(['response'=>'account_created']);             
    }
    else{
        echo json_encode($response);
    }
 }

if(isset($_POST['doc'])){
    
   $response=doctor_validation();
   if($response==1){
        $passwordHashed=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $nationalNumberHashed=password_hash($_POST['national_number'],PASSWORD_DEFAULT);
        $syndicateNumberHashed=password_hash($_POST['job_number'],PASSWORD_DEFAULT);
        $doc_info['name']=$_POST['name'];
        $doc_info['national_number']=$nationalNumberHashed;
        $doc_info['syndicate_number']=$syndicateNumberHashed;
        $doc_info['password']=$passwordHashed;
        $doc_info['gender']=$_POST['gender'];
        $doc_info['image']=$_SESSION['loger_image'];
        $doc_info['pro_field']=$_POST['pro_field'];
        $doc_info['phone_num']=$_POST['phone_num'];
        $doc_info['work_address']=$_POST['work_address'];
        $doctor=new Doctor($doc_info);
        $doctor->create();
        $_SESSION['image']=null;
         echo json_encode(["response"=>"account_created"]);
   }
   else{
      echo json_encode($response);
   }
}

if(isset($_POST['lab'])){
    
    $response=analysis_lab_validation();
    if($response==0){
        $passwordHashed=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $lab=new AnalysisLab($_POST['name'],$passwordHashed,$_POST['phone_num'],$_POST['work_address']);
        $lab->create();
        echo json_encode(['response'=>'account_created']);
    }
    else{
        echo json_encode($response);
    }

}




 function doctor_validation(){
    $nv=name_validation();
    if($nv!=0){
        return  $nv;
    }
    $nnv=national_number_validation();
    if($nnv!=0){
        return $nnv;
    }
    $smv=Syndicate_membership_validation();
    if($smv!=0){
        return $smv;
    }
    $pv=password_validation();
    if($pv!=0){
        return $pv;
    }
    $wav=work_address_validation();
    if($wav!=0){
        return $wav;
    }
    $pnv=phone_number_validation();
    if($pnv!=0){
        return $pnv;
    }
    $pvp=proficiency_validation();
    if($pvp!=0){
        return $pvp;
    }
    return 1;
   
}


function analysis_lab_validation(){
    $nv=name_validation();
    if($nv!=0){
        return  $nv;
    }
    $pv=password_validation();
    if($pv!=0){
        return $pv;
    }
    $wav=work_address_validation();
    if($wav!=0){
        return $wav;
    }
    $pnv=phone_number_validation();
    if($pnv!=0){
        return $pnv;
    }
    return 0;
}











function patient_validation(){
    $nv=name_validation();
   if($nv!=0){
       return  $nv;
   }
   $nnv=national_number_validation();
    if($nnv!=0){
        return $nnv;
    }
    $pv=password_validation();
    if($pv!=0){
        return $pv;
    }
    $wav=work_address_validation();
    if($wav!=0){
        return $wav;
    }
    $pnv=phone_number_validation();
    if($pnv!=0){
        return $pnv;
    }
    return 0;
}
function pharmacist_validation(){
    $nv=name_validation();
   if($nv!=0){
       return  $nv;
   }
   $nnv=national_number_validation();
    if($nnv!=0){
        return $nnv;
    }
    $smv=Syndicate_membership_validation();
    if($smv!=0){
        return $smv;
    }
    $pv=password_validation();
    if($pv!=0){
        return $pv;
    }
    $wav=work_address_validation();
    if($wav!=0){
        return $wav;
    }
    $pnv=phone_number_validation();
    if($pnv!=0){
        return $pnv;
    }
    return 0;
}


