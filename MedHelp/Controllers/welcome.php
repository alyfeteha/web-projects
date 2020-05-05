<?php
require_once "../Helpers/Registeration_validation.php";
require_once "../Model/patient.php";
header('Content-Type: application/json');
session_start();

if(isset($_POST['pat'])){
    $response=national_number_validation();
    if($response==0){
        $patients=Patient::find();
        if(empty($patients)){
            echo json_encode(['response'=>'no such patient exist']);
            return;
        }
        else{
            foreach($patients as $patient){
                if(password_verify($_POST['national_number'],$patient['national_number'])){
                    $_SESSION['patient_id']=$patient['id'];
                    $_SESSION['patient_name']=$patient['full_name'];
                    $_SESSION['patient_dob']=$patient['date_of_birth'];
                    $_SESSION['image']=$patient['profile_picture'];
                    $_SESSION['gender']=$patient['gender'];
                    $_SESSION['contact']=$patient['phone_number'];
                    echo json_encode(['response'=>'valid']);
                    return;
                }
            }
            echo json_encode(['response'=>'invalid patient national number']);
            return;
        }
    }
    else{
        echo json_encode($response);
        return;
    }
}