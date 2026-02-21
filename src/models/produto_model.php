<?php

class Produto{

//validação
public $auth;

//produto inf
public $id;
public $nome;
public $type;
public $descricao;
public $minidesc;
public $tittle1;
public $tittle2;
public $tittle3;
public $preco_base;

//incrementos do produto
public $categoria;
public $genero;
public $intensidade;
public $notas_topo;
public $notas_coracao;
public $notas_base;
public $quantidade;
public $sillage;
public $exp;

//indentificação de arquivo exclusivo
public $exclusive;

//quantidades em ml
public $valor;
public $preco;
public $quantml;

//imagens do produto
public $link;

public function __construct($auth){

if($auth=='true'??'false'){
$this->auth=$auth;
}

}

public function GetProdutoData($id){

if($this->auth=='true'){

$this->id=$id;

$pdo = Database::connect();

//inf
$stmt1=$pdo->prepare('SELECT * FROM produtos WHERE id=:id');
$stmt1->bindParam(':id', $this->id, PDO::PARAM_INT);
$stmt1->execute();
$prodinf = $stmt1->fetchAll(PDO::FETCH_ASSOC);


//inc
$stmt2=$pdo->prepare('SELECT * FROM incrementos WHERE id=:id');
$stmt2->bindParam(':id', $this->id, PDO::PARAM_INT);
$stmt2->execute();
$incrementos = $stmt2->fetchAll(PDO::FETCH_ASSOC);

//exc
$stmt3=$pdo->prepare('SELECT * FROM exclusive WHERE id=:id');
$stmt3->bindParam(':id', $this->id, PDO::PARAM_INT);
$stmt3->execute();
$exclusive = $stmt3->fetchAll(PDO::FETCH_ASSOC);

//quantidade ml
$stmt4=$pdo->prepare('SELECT * FROM ml WHERE id=:id');
$stmt4->bindParam(':id', $this->id, PDO::PARAM_INT);
$stmt4->execute();
$quantidades = $stmt4->fetchAll(PDO::FETCH_ASSOC);

//img produto
$stmt5=$pdo->prepare('SELECT * FROM img_produto WHERE id=:id');
$stmt5->bindParam(':id', $this->id, PDO::PARAM_INT);
$stmt5->execute();
$imagens = $stmt5->fetchAll(PDO::FETCH_ASSOC);

if(!empty($prodinf)){

return [

    'produto' => $prodinf,
    'incrementos' => $incrementos,
    'exclusive' => $exclusive,
    'quantidades' => $quantidades,
    'imagens'=> $imagens

];

}else{

return null;
header('Location:../../public/index.php?page=notfound');

}



}



}


}

?>