<?php
function proficiency_validation(){
    if(empty($_POST['pro_field'])){
        $response=[
                 'response'=>"pro_field",
                 'error'=>"empty"
        ];
            $flag=1;
            return $response;
    }
    return 0;
}
function name_validation(){
    if(empty($_POST['name'])){
            $response=[
                    'response'=>"name",
                    'error'=>"empty"
            ];
            return $response;
        
    }
    return 0;
}
function national_number_validation(){
    if(empty($_POST['national_number'])){
            $response=[
                    'response'=>"national_number",
                    'error'=>"empty"
                    ];
                    return $response;
            
    }
    elseif(!is_numeric($_POST['national_number'])){
            $response=[
                'response'=>"national_number",
                'error'=>"format"
            ];
            return $response;
           
    }
    return 0;
}
function password_only(){
    if(empty($_POST['password'])){
        $response=[
            'response'=>"password",
            'error'=>"empty"
        ];
        return $response;
       
}
}
function password_validation(){
    if(empty($_POST['password'])){
            $response=[
                'response'=>"password",
                'error'=>"empty"
            ];
            return $response;
           
    }
    elseif(empty($_POST['c_password'])){
        $response=[
            'response'=>"c_password",
            'error'=>"empty"
        ];
        return $response;
       
    }
    elseif($_POST['password']!=$_POST['c_password']){
           $response=[
                'response'=>"c_password",
                'error'=>"confirmation"
                ];
                return $response;
    }
    return 0;
}

function Syndicate_membership_validation(){
    if(empty($_POST['job_number'])){
        $response=[
                'response'=>"job_number",
                'error'=>"empty"
            ];
            return $response;
    }
    elseif(!is_numeric($_POST['job_number'])){
            $response=[
                'response'=>"job_number",
                'error'=>"format"
            ];
            return $response;
    }
    return 0;
}
function work_address_validation(){
    if(empty($_POST['work_address'])){
        echo json_encode([
            'response'=>"work_address",
            'error'=>"empty"
        ]);
        $flag=1;
        $response=[
            'response'=>"work_address",
            'error'=>"empty"
        ];
        return $response;
    }
    return 0;
}
function phone_number_validation(){
    if(empty($_POST['phone_num'])){
        $response=[
            'response'=>"phone_num",
            'error'=>"empty"
        ];
        return $response;
    }
    
    elseif(substr($_POST['phone_num'],0,2)!='03'){
            $response=[
                    'response'=>"phone_num",
                    'error'=>"format"
            ];
            return $response;
            
    }
    return 0;
}
