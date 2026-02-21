<?php
class Contato{

public $status;
public $nome;
public $numero;
public $msg;
public $data;


public function __construct($status){

 $this->status = $status;

}

public function Create_Contato($nome,$numero,$msg,$data){

if(!empty($numero)){

$this->nome=$nome;
$this->numero=$numero;
$this->msg=$msg;
$this->data=$data;


if($this->status==true){

$pdo = Database::connect();

$stmt = $pdo->prepare('SELECT COUNT(*) FROM contato WHERE numero = :numero AND data = :data');
$stmt->bindParam(':numero', $this->numero);
$stmt->bindParam(':data', $this->data);
$stmt->execute();

$count = $stmt->fetchColumn();


if($count<1){

$stmt=$pdo->prepare('INSERT INTO contato(nome,numero,msg,data) VALUES(:nome,:numero,:msg,:data)');
$stmt->bindparam(':nome',$this->nome);
$stmt->bindparam(':numero',$this->numero);
$stmt->bindparam(':msg',$this->msg);
$stmt->bindparam(':data',$this->data);
$stmt->execute();
return true;

}else{

return false;

}

}

}else{

return false;

}


}



}

?>