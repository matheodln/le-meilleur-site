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

    public function findCount($primaryKey){
        return $this->find(array('fields'=>'COUNT('.$primaryKey.')'));

    }
    public function delete($primaryKeyValue, $primaryKeyName){
        $this->bdd->query('USE mamaroma_base');
        $sql = "DELETE FROM ($this->table) WHERE ($primaryKeyName) = $primaryKeyValue";
        $this->bdd->query($sql);
    }
    public function save($data, $primaryKeyName){
        //Assure d'utiliser la bonne bdd:
        $this->bdd->query('USE mamaroma_base');
        $fields = array();
        $d = array();
        foreach($data as $k=>$v){
            $fields[] = "$k=:$k";
            $d[":$k"] = $v;
        }
        if(isset($data->$primaryKeyName) && !empty($data->$primaryKeyName)){
            $sql = 'UPDATE '.$this->table.' SET '.implode(',',$fields).' WHERE '.$primaryKeyName.'=:'.$primaryKeyName;
        }
        $pre = $this->bdd->prepare($sql);
        $pre->execute($d);
        return true;
    }
    public function insert($data){
        $this->bdd->query('USE mamaroma_base');
        $fields = array();
        $placeholders = array();
        $values = array();

        foreach($data as $k => $v){
            $fields[] = $k;
            $placeholders[] = ":$k";
            $values[":$k"] = $v;
        }

        $sql = "INSERT INTO ".$this->table." (".implode(',', $fields).") VALUES (".implode(',', $placeholders).")";
        $pre = $this->bdd->prepare($sql);
        $pre->execute($values);
        return true;
    }
}