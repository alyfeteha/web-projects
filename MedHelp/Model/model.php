<?php
require_once "base_entity.php";

define("HOST","localhost");
define("USER","alyfeteha99");
define("PASSWORD","92199900ablo2");
define("DB_NAME","medhelp");

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

abstract class Model extends BaseEntity
{
    public static $conn = null;

    public static function init()
    {
        if (!self::$conn) {
            self::$conn = db_connect_pdo();
        }
    }
    abstract public function create();
    //abstract public static function find();
    //abstract public static function update($data);
}
?>

