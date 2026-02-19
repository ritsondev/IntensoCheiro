<?php

$autorization=$_GET['autorizetion'];



if(isset($autorization)){

if($autorization==false){

    header('Location:../../public/index.php?page=home');

}
}

?>