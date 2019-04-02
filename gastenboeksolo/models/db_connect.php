<?php

class db
{
  private $host, $username, $password, $dbname;

  protected $conn;
  public $numOfRows;

  public function __construct($host = 'localhost', $username ='root', $password ='', $dbname ='gastenboek')
  {
    $this->host =$host;
    $this->username =$username;
    $this->password =$password;
    $this->dbname = $dbname;


    try {
    $this->conn = new PDO("mysql:host=".$this->host.";dbname=". $this->dbname, $this->username, $this->password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
  }

    public function getAllData($table){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        $this->numOfRows = sizeof($result);
        return $result;
  }

  public function insertData($table,$id=NULL, $naam, $email, $bericht){
    $stmt = $this->conn->prepare("INSERT INTO $table (`id`, `naam`, `email`, `bericht`) VALUES (?,?,?,?)");
    $stmt->execute([NULL, $naam, $email, $bericht]);
  }
}
