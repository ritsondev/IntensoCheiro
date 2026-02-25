    <?php

    require_once __DIR__ . '/../autoload.php';

    class Controller{

    public $action;
    public $nome;
    public $email;
    public $numero;
    public $msg;
    public $dataAtual;
    public $inputdata;
    public $analise;


    public function __construct($action){
    
    $this->action=$action;

    }

    public function insertCustomer($email){

    if(isset($this->action)){

    $this->email=$email;
    $this->dataAtual = new DateTime("now", new DateTimeZone('Africa/Luanda'));
    $this->inputdata=$this->dataAtual->format('Y-m-d H:i:s');

    if(!isset($this->email,$this->inputdata)){
        
        header('Location:../index.php?page=notfound');
    }

    $customer=new Customer(true);
    $this->analise=$customer->Create_Customer($this->email,$this->inputdata);

    if($this->analise){

    $_SESSION['auth']='ok';
    header('Location:../index.php?page=messages/emaildone');
    exit;

    }else{

    $_SESSION['auth']='ok';
    header('Location:../index.php?page=messages/emailcap');

    }

    }
    
    }



    public function insertContato($nome,$numero,$msg){

    if(isset($this->action)){

        $this->nome= $nome;
        $this->numero= $numero;
        $this->msg= $msg;
    
        $this->dataAtual = new DateTime("now", new DateTimeZone('Africa/Luanda'));
        $this->inputdata = $this->dataAtual->format('Y-m-d');
        $contato=new Contato(true);
        $this->analise=$contato->Create_Contato($this->nome,$this->numero,$this->msg,$this->inputdata);

        if(!isset($this->nome,$this->numero,$this->msg)){

        header('Location:../index.php?page=notfound');

        }

    if($this->analise){

    $_SESSION['auth']='ok';
    header('Location:../index.php?page=messages/smsdone');
    exit;

    }else{

    $_SESSION['auth']='ok';
    header('Location:../index.php?page=messages/smscap');

    }  
    

    }

    } 

    }

    ?>