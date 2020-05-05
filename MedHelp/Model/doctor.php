<?php
require_once "model.php";




Class Doctor extends Model{

    public $id=null;
    public $full_name="";
    public $national_number="";
    public $syndicate_number="";
    public $password="";
    public $gender="";
    public $profile_picture="";
    public $proficiency="";
    public $phone_number="";
    public $work_address="";


    public function __construct($doc_info){//){//,$syndicte_number){//,$password){//,$gender,$profile_picture,$proficiency,$phone_number,$work_address){
        $this->full_name=$doc_info['name'];
        $this->national_number=$doc_info['national_number'];
        $this->syndicate_number=$doc_info['syndicate_number'];
        $this->password=$doc_info['password'];
        $this->gender=$doc_info['gender'];
        $this->profile_picture=$doc_info['image'];
        $this->proficiency=$doc_info['pro_field'];
        $this->phone_number=$doc_info['phone_num'];
        $this->work_address=$doc_info['work_address'];
    }
     public function create(){
        $doc_statment = self::$conn->prepare("INSERT INTO doctors 
        (`full_name`,`national_number`,`syndicate_number`,`password`,`gender`,`profile_picture`,`proficiency`,`phone_number`,`work_address`)
         VALUES (:full_name,:national_number,:syndicate_number,:password,:gender,:profile_picture,:proficiency,:phone_number,:work_address)");
        $doc_statment->bindParam(':full_name', $this->full_name);
        $doc_statment->bindParam(':national_number', $this->national_number);
        $doc_statment->bindParam(':syndicate_number', $this->syndicate_number);
        $doc_statment->bindParam(':password', $this->password);
        $doc_statment->bindParam(':gender', $this->gender);
        $doc_statment->bindParam(':profile_picture', $this->profile_picture);
        $doc_statment->bindParam(':proficiency', $this->proficiency);
        $doc_statment->bindParam(':phone_number', $this->phone_number);
        $doc_statment->bindParam(':work_address', $this->work_address);
        $doc_statment->execute();
     }
     public static function find(){
        $doctor_statment = self::$conn->prepare("SELECT * from doctors ");
        $doctor_statment->execute(); 
        $doctors=[];
        $counter=0;
        while($row=$doctor_statment->fetch(PDO::FETCH_ASSOC)){
            $doctors[$counter]['id']=$row['id'];
            $doctors[$counter]['full_name']=$row['full_name'];
            $doctors[$counter]['national_number']=$row['national_number'];
            $doctors[$counter]['syndicate_number']=$row['syndicate_number'];
            $doctors[$counter]['password']=$row['password'];
            $doctors[$counter]['gender']=$row['gender'];
            $doctors[$counter]['profile_picture']=$row['profile_picture'];
            $doctors[$counter]['proficiency']=$row['proficiency'];
            $doctors[$counter]['phone_number']=$row['phone_number'];
            $doctors[$counter]['work_address']=$row['work_address'];
            $counter++;
        }

        return $doctors;
}








}
Doctor::init();


// var_dump(Doctor::sss());