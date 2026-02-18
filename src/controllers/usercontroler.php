    <?php

    require_once '../models/cliente_model.php';
    require_once '../models/contato_model.php';
    require_once '../models/customer.php';
    require_once '../models/produto.php';

    $action=filter_input(INPUT_POST,'action');

    if(isset($action)){

    switch($action){

    case 'customer':

    $email= filter_input(INPUT_POST,'email');
    $dataAtual = new DateTime("now", new DateTimeZone('Africa/Luanda'));
    $inputdata=$dataAtual->format('Y-m-d H:i:s');

    if(isset($email)){

    $customer=new Customer(true);
    $analise=$customer->Create_Customer($email,$inputdata);

    }else{

    header('Location:../../public/index.php?page=notfound');

    }

    if($analise){

    header('Location:../../public/index.php?page=messages/emaildone');

    }else{

    header('Location:../../public/index.php?page=messages/emailcap');

    }

    break;

    case 'contato':

        $nome= filter_input(INPUT_POST,'nome');
        $numero= filter_input(INPUT_POST,'numero');
        $msg= filter_input(INPUT_POST,'msg');

        $dataAtual = new DateTime("now", new DateTimeZone('Africa/Luanda'));
        $inputdata = $dataAtual->format('Y-m-d');

        if(isset($nome,$numero,$msg)){

    $contato=new Contato(true);
    $analise=$contato->Create_Contato($nome,$numero,$msg,$inputdata);

    }else{

    header('Location:../../public/index.php?page=notfound');

    }

    if($analise){

    header('Location:../../public/index.php?page=messages/smsdone');

    }else{

    header('Location:../../public/index.php?page=messages/smscap');

    }
    
    break;    

    default:
    header('Location:../../public/index.php?page=notfounded');

    }

    }


    ?>