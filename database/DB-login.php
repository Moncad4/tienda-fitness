<?php
class Database{
  private $host = 'localhost';
  private $username = 'root';
  private $password = '';
  private $datebase = 'tiendaFitness';
  private $conn;

  public function __construct(){
    $this->conn = new mysqli($this->host, $this->username, $this->password, $this->datebase);

    if ($this->conn->connect_error){
      die("Error de conexión a la base de datos: " . $this->conn->connect_error);
    }
  }
    
  public function getConnection(){
    return $this->conn;
  }
  }
?>