<?php
require_once "base_entity.php";
require_once "../db_helpers/db_connection_pdo.php";

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
    abstract public function find();
    //abstract public static function update($data);
}
?>

