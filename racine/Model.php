<?php
class Model{
    static $connections = array();
    public $conf = 'default';
    public $table = false;
    public $bdd;
    public function __construct(){
        //Initialisation de la variable table:
        if($this->table === false){
            $this->table = strtolower(get_class($this)); //Récupère le nom de la table
        }
        //Connexion à la base
        $conf = Conf::$databases[$this->conf];
        if (isset(Model::$connections[$this->conf])){ //Empeche de charger plusieurs fois la base
            $this->bdd = Model::$connections[$this->conf];
            return true;
        }
        try {
            $pdo = new PDO('mysql:host' . $conf['host'] . ';dbname=' . $conf['database'] . ';',
                $conf['login'],
                $conf['password'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            Model::$connections[$this->conf] = $pdo;
            $this->bdd = $pdo;
        }
        catch(PDOException $e){
            die("erreur de connexion à la base de données");
        }

    }
    public function find($req){
        $this->bdd->query('USE mamaroma_base'); //assure qu'il utilise la bonne base de donnée
        $sql = "SELECT ";
        if(isset($req['fields'])){
            if(is_array($req['fields'])){
                $sql .= implode(', ', $req['fields']);
            }
            else{
                $sql .= $req['fields'];
            }
        }else{
            $sql .= '*';
        }
        $sql .= ' FROM '.$this->table.' as '.get_class($this).' ';
        if(isset($req['conditions'])){
            $sql .= ' WHERE ';
            if(!is_array($req['conditions'])){
                $sql .= $req['conditions'];
            }else{
                $cond = array();
                foreach ($req['conditions'] as $k=>$v){
                    if(!is_numeric($v)){
                        $v = $this->bdd->quote($v);

                    }
                    else{
                    }

                    $cond[] = "$k=$v";
                }
                $sql .= implode(' AND ', $cond);
            }
        }
        if(isset($req['order'])){
            $sql .= ' ORDER BY '.$req['order'];
        }
        if(isset($req['limit'])){
            $sql .= ' LIMIT '.$req['limit'];
        }
        $pre = $this->bdd->prepare($sql);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_OBJ); //Recupere les données sous forme d'objet
    }

    public function findFirst($req){
        return current($this->find($req));
    }

    public function findCount($condition, $primaryKey){
        $this->find(array('fields'=>'COUNT('.$primaryKey.')', 'conditions' => $condition));
    }
}