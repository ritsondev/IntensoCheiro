<?php
require_once '../core/database.php';
require_once '../core/verify.php';

class Customer{

public $status;
public $email;
public $data;


public function __construct($status){

 $this->status = $status;

}

public function Create_Customer($email,$data){

if(!empty($email)){

$this->email=$email;
$this->data=$data;

if($this->status==true){

$pdo = Database::connect();

$stmt=$pdo->prepare('SELECT COUNT(email) FROM customer WHERE email=:email');
$stmt->bindparam(':email',$this->email);
$stmt->execute();
$count = $stmt->fetchColumn();

if($count>=1){

return false;

}else{

$stmt=$pdo->prepare('INSERT INTO customer(email,data) VALUES(:email,:data)');
$stmt->bindparam(':email',$this->email);
$stmt->bindparam(':data',$this->data);
$stmt->execute();
return true;

}

}

}else{

return false;

}


}



}

?>