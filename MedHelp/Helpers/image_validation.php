<?php
session_start();

function image_validation(){
    $file=$_FILES['file'];
    $file_name=$_FILES['file']['name'];
    $file_temp_loc_name=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_error=$_FILES['file']['error'];
    $file_type=$_FILES['file']['type'];
    $file_ext=explode(".",$file_name);
    $file_act_ext=strtolower(end($file_ext));
    $allowed_ext=array('jpg','jpeg','png');
    $allowed=1;
    if(in_array($file_act_ext,$allowed_ext)){
        if($file_error===0){
            if($file_size<5000000){
                $serial=uniqid('',true);
                $file_name_new=$serial.".".$file_act_ext;
                $file_dest='../uploads/'.$file_name_new;
                move_uploaded_file($file_temp_loc_name,$file_dest);
            }
            else{
               $allowed=0;
            }
        }
        else{
            $allowed=0;
        }
    }
    else{
        $allowed=0;
    }
    if($allowed==0){
        return 0;
    }
    return $file_name_new;
}
$_SESSION['image']=image_validation();
?>