<?php
include "Model.php.php";



Class Relation extends Model{

    abstract public function create();
    abstract public function find();
    abstract public static function update($data);
}