<?php
require_once "../Model/Analysis_lab.php";
require_once "../Model/doctor.php";
require_once "../Model/patient.php";
require_once "../Model/Pharmacist.php";
require_once "../Helpers/Registeration_validation.php";
header('Content-Type: application/json');
session_start();


if(isset($_POST['pharm'])){
    $response=person_validation();
    if($response==0){
    $pharmas=Pharmacist::find();
    if(empty($pharmas)){
        echo json_encode(['response'=>"no account available using these data "]);
        return;
    }
        foreach($pharmas as $pharma){
            if(password_verify($_POST['national_number'],$pharma['national_number'])){
                if(password_verify($_POST['password'],$pharma['password'])){
                    $_SESSION['identity']='pharma';
                    $_SESSION['loger_id']=$pharma['id'];
                    $_SESSION['loger_name']=$pharma['full_name'];
                    $_SESSION['loger_image']=$pharma['profile_picture'];
                    $_SESSION['gender']=$pharma['gender'];
                    $_SESSION['contact']=$pharma['phone_number'];
                    $_SESSION['address']=$pharma['work_address'];
                    echo json_encode(['response'=>'valid']);
                    break;
                }
                else{
                    echo json_encode(['response'=>'invalid national number or password']);
                }
            }
        }
                            
    }
    else{
        echo json_encode($response);
    }
}
// echo json_encode(['response'=>'hi']);
 if(isset($_POST['pat'])){
    $response=person_validation();
    
   if($response==0){
    $patients=Patient::find();
    if(empty($patients)){
        echo json_encode(['response'=>"no account available using these data "]);
    }
        foreach($patients as $patient){
            if(password_verify($_POST['national_number'],$patient['national_number'])){
                if(password_verify($_POST['password'],$patient['password'])){
                    $_SESSION['identity']='patient';
                    $_SESSION['loger_id']=$patient['id'];
                    $_SESSION['loger_name']=$patient['full_name'];
                    $_SESSION['national_number']=$patient['national_number'];
                    $_SESSION['dob']=$patient['date_of_birth'];
                    $_SESSION['address']=$patient['address'];
                    $_SESSION['loger_image']=$patient['profile_picture'];
                    $_SESSION['gender']=$patient['gender'];
                    $_SESSION['contact']=$patient['phone_number'];
                    echo json_encode(['response'=>'valid']);
                    break;
                }
                else{
                    echo json_encode(['response'=>'invalid national number or password']);
                }
            }
        }
   }
    else{
        echo json_encode($response);
    }
 }

if(isset($_POST['doc'])){
    
   $response=person_validation();
   if($response==0){
    $doctors=Doctor::find();
    if(empty($doctors)){
        echo json_encode(['response'=>"no account available using these data "]);
    }
        foreach($doctors as $doctor){
            if(password_verify($_POST['national_number'],$doctor['national_number'])){
                if(password_verify($_POST['password'],$doctor['password'])){
                    $_SESSION['identity']='doctor';
                    $_SESSION['loger_id']=$doctor['id'];
                    $_SESSION['loger_name']=$doctor['full_name'];
                    $_SESSION['proficiency']=$doctor['proficiency'];
                    $_SESSION['address']=$doctor['work_address'];
                    $_SESSION['loger_image']=$doctor['profile_picture'];
                    $_SESSION['gender']=$doctor['gender'];
                    $_SESSION['contact']=$doctor['phone_number'];
                    echo json_encode(['response'=>'valid']);
                    break;
                }
                else{
                    echo json_encode(['response'=>'invalid national number or password']);
                }
            }
        }
   }
   else{
      echo json_encode($response);
   }
}

if(isset($_POST['lab'])){
    
    $response=analysis_lab_validation();
    if($response==0){
     $labs=AnalysisLab::find();
     if(empty($labs)){
         echo json_encode(['response'=>"no account available using these data"]);
         return;
     }else{
         foreach($labs as $lab){
             if(password_verify($_POST['password'],$lab['password'])){
                $_SESSION['identity']='lab';
                $_SESSION['loger_id']=$lab['id'];
                $_SESSION['loger_name']=$lab['commercial_name'];
                $_SESSION['address']=$lab['work_address'];
                $_SESSION['contact']=$lab['phone_number'];
                echo json_encode(['response'=>"valid"]);
                    return;    
             }
         }
            echo json_encode(['response'=>'invalid commercial name or password']);
        }
}
    else{
       echo json_encode($response);
    }

}














function analysis_lab_validation(){
    $nv=name_validation();
    if($nv!=0){
        return  $nv;
    }
    $pv=password_only();
    if($pv!=0){
        return $pv;
    }
    return 0;
}

function person_validation(){
   $nnv=national_number_validation();
    if($nnv!=0){
        return $nnv;
    }
    $pv=password_only();
    if($pv!=0){
        return $pv;
    }
    return 0;
}