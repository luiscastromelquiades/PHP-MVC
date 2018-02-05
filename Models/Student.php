<?php namespace Models;
  class Student{
    private $id;
    private $nombre;
    private $edad;
    private $promedio;
    private $imagen;
    private $id_seccion;
    private $fecha;

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
      $query = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion=t2.id ORDER BY nombre ASC";
      $data = $this->conn->responseQuery($query);
      return $data;
    }

    public function add(){
      $query = "INSERT INTO estudiantes(id, nombre, edad, promedio, imagen, id_seccion, fecha)
                VALUES(null, '{$this->nombre}', '{$this->edad}', '{$this->promedio}', '{$this->imagen}', '{$this->id_seccion}', NOW())";
      $this->conn->simpleQuery($query);
    }

    public function edit(){
      $query = "UPDATE estudiantes SET nombre ='{$this->nombre}', edad ='{$this->edad}', promedio ='{$this->promedio}',
                imagen ='{$this->imagen}', id_seccion ='{$this->id_seccion}' WHERE id='{$this->id}'";
      $this->conn->simpleQuery($query);
    }

    public function delete(){
      $query = "DELETE FROM estudiantes WHERE id='{$this->id}'";
      $this->conn->simpleQuery($query);
    }

    public function view(){
      $query = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2
                ON t1.id_seccion=t2.id WHERE t1.id='{$this->id}'";
      $data = $this->conn->responseQuery($query);
      $row = mysqli_fetch_assoc($data);
      return $row;
    }
  }
?>
