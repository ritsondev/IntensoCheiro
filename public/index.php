<?php

    session_start();
    define('CONTROL',true);
    require_once '../src/core/Verify.php';
    require_once '../src/controllers/usercontroler.php';
    $file=basename(__FILE__);
    $verify = new Verify();

// pega a página pedida
$page = $_GET['page'] ?? 'home';

if(!empty(filter_input(INPUT_POST,'action'))){

$insert=filter_input(INPUT_POST,'action');

if($insert=='customer' || $insert=='contato'){

    $insertdatas=new Controller($insert);
    if($insert=='customer'){
    $email=filter_input(INPUT_POST,'email'); 
    $insertdatas->insertCustomer($email);
}

if($insert=='contato'){
    $nome=filter_input(INPUT_POST,'nome');
    $numero=filter_input(INPUT_POST,'numero');
    $msg=filter_input(INPUT_POST,'msg');
    $insertdatas->insertContato($nome,$numero,$msg);
}

}

}

//verificação das paginas de message

     $messagespage = [
        'messages/emaildone',
        'messages/emailcap',
        'messages/smsdone',
        'messages/smscap'
    ];

    if (in_array($page, $messagespage)) {

    if (($_SESSION['auth'] ?? null) == 'ok') {
    

    $_SESSION['auth']='off';
    unset($_SESSION['auth']);

    }else{
    header('Location:index.php?page=home');

    }

}

if($page=='' || $page==null){

$page = $_GET['page']= 'home';

}

if(!empty($_GET['prod'])){

$prod=$_GET['prod'];

}

//carrinho logica

if (isset($_SESSION['carrinho'])) {
        $prodcar_inf=$_SESSION['carrinho'];
        $subtotal=0;
        $total=0;
}

if (isset($_GET['delete'])) {

    $index = (int) $_GET['delete']; // força ser número

    if (isset($_SESSION['carrinho'][$index])) {
        unset($_SESSION['carrinho'][$index]);
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
        // evita repetir a remoção ao atualizar página
        header("Location:index.php?page=carrinho");
        exit();
  
}
}


if ($page === 'checkout') {

    // Se o carrinho estiver vazio ou nenhum POST enviado
    if (empty($_SESSION['carrinho']) || empty($_POST)) {
        header('Location: index.php?page=carrinho');
        exit;
    }

}

// verifica se a página existe e é permitida
$pageFile = $verify->resolvePublicPage($page);


// carrega layout
include_once("templates/header.php");

include_once($pageFile);

include_once("templates/footer.php");

?>