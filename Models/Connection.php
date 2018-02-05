<?php namespace Models;

class Connection{
  private $conn_data = array(
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "db" => "php_poo"
  );
  private $conn;

  public function __construct(){
    $this->conn = new \mysqli($this->conn_data['host'],$this->conn_data['user'],$this->conn_data['pass'],$this->conn_data['db']);
    mysqli_set_charset($this->conn,"utf8");
  }



  public function simpleQuery($query){
    $this->conn->query($query);
    mysqli_close($this->conn);
  }

  public function responseQuery($query){
    $data = $this->conn->query($query);
    return $data;
    mysqli_close($this->conn);
  }


}
 ?>
