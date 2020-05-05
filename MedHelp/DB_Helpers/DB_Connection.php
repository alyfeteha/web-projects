<?php
include "../Helpers/Constants.php";


if(!function_exists('db_connect_pdo')){
    function db_connect_pdo(){
        $connection_string = "mysql:host=";
        $connection_string .= HOST ; 
        $connection_string .= ";dbname=";
        $connection_string .= DB_NAME;
    try{
        $conn = new PDO($connection_string,USER,PASSWORD);   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
    }catch(\Exception $e)
    {
        echo $e->getMessage();
    }
        return $conn ? $conn : false ;
    }
}
?>