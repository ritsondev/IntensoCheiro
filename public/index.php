<?php


require_once '../src/core/Verify.php';

$verify = new Verify();

// pega a página pedida
$page = $_GET['page'] ?? 'home';


// verifica se a página existe e é permitida
$pageFile = $verify->resolvePublicPage($page);

// carrega layout
include_once("templates/header.php");

include_once($pageFile);

include_once("templates/footer.php");

?>