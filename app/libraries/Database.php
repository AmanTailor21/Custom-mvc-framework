<?php
class Database
{
    private $dbhost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;

    private $statment;
    private $dbHandelerl;
    private $error;

    public function __construct()
    {
        $conn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->dbHandelerl = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
        //query
    public function query($sql)
    {
        $this->statment = $this->dbHandelerl->prepare($sql);
        return $this->statment;
    }

    public function bind($parameter, $value, $type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        $this->statment->bindValue($parameter, $value, $type);
    }

    public function execute()
    {
        return $this->statment->execute();
    }
    public function resulSet(){
        $this->execute();
        return $this->statment->fetchAll(PDO::FETCH_OBJ);
    }
    public function single(){
        $this->execute();
        return $this->statment->fetch(PDO::FETCH_OBJ);
    }
    public function rowCount(){
        return $this->statment->rowCount();
    }
}