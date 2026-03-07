    <?php
    class Cliente{

        public $status;
        public $elementos;
        public $nome;
        public $sobrenome;    
        public $email;
        public $numero;
        public $metodo;
        public $endereco;
        public $subtotal;
        public $total;
        public $data;
        public $prench;


    public function __construct($status){

    $this->status = $status;

    }

    public function Create_cliente($elementos,$nome,$sobrenome,$endereco,$numero,$metodo,$subtotal,$total,$data){

    if(!empty($elementos)){

        $this->nome= $nome;
        $this->sobrenome= $sobrenome;
        $this->endereco= $endereco;
        $this->numero= $numero;
        $this->metodo= $metodo;
        $this->subtotal= $subtotal;
        $this->total= $total;
        $this->data= $data;
        $this->elementos= $elementos;
        $this->prench= 'off';

    if($this->status==true){

    $pdo = Database::connect();
    $stmt = $pdo->prepare('
    INSERT INTO cliente (elementos,nome,sobrenome,endereco,numero,metodo,subtotal,total,data,prench) 
    VALUES (:elementos,:nome,:sobrenome,:endereco,:numero,:metodo,:subtotal,:total,:data,:prench)
    ');
    $stmt->bindParam(':elementos', $this->elementos);
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':sobrenome', $this->sobrenome);
    $stmt->bindParam(':endereco', $this->endereco);
    $stmt->bindParam(':numero', $this->numero);
    $stmt->bindParam(':metodo', $this->metodo);
    $stmt->bindParam(':subtotal', $this->subtotal);
    $stmt->bindParam(':total', $this->total);
    $stmt->bindParam(':data', $this->data);
    $stmt->bindParam(':prench', $this->prench);
    $stmt->execute();
    return true;

    }else{

    return false;

    }

    }else{

    return false;

    }


    }

    }

    ?>