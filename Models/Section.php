<?php namespace Models;
  class Section{
    private $id;
    private $nombre;

    private $conn;

    public function __construct(){
      $this->conn = new Connection();
    }

    public function set($atributo, $contenido){
      $this->$atributo = $contenido;
    }

    public function get($atributo){
      return $this->atributo;
    }

    public function list_all(){
      $query = "SELECT * FROM secciones ORDER BY nombre ASC";
      $data = $this->conn->responseQuery($query);
      return $data;
    }

    public function add(){
      $query = "INSERT INTO secciones(id, nombre) VALUES(null, '{$this->nombre}')";
      $this->conn->simpleQuery($query);
    }

    public function edit(){
      $query = "UPDATE secciones SET nombre='{$this->nombre}' WHERE id= '{$this->id}'";
    }

    public function delete(){
      $query = "DELETE FROM secciones WHERE id='{$this->id}'";
      $this->conn->simpleQuery($query);
    }

    public function view(){
      $query = "SELECT * FROM secciones WHERE id ='{$this->id}' ";
      $data = $this->conn->responseQuery($query);
      $row = mysqli_fetch_assoc($data);
      return $row;
    }

  }
?>
