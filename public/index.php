<?php

    session_start();
    require_once '../src/core/Verify.php';
    require_once '../src/controllers/usercontroler.php';
    $file=basename(__FILE__);
    $verify = new Verify();

// pega a página pedida
$page = $_GET['page'] ?? 'home';
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

if(!empty($_GET['prod'])){

$prod=$_GET['prod'];

}

// verifica se a página existe e é permitida
$pageFile = $verify->resolvePublicPage($page);


// carrega layout
include_once("templates/header.php");

include_once($pageFile);

include_once("templates/footer.php");

?>