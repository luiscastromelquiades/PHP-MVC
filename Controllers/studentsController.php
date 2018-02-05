<?php namespace Controllers;
  use Models\Student as Student;
  use Models\Section as Section;
  class studentsController{
    private $student;
    private $section;
    private $permitted = array("image/png", "image/gif", "image/jpg", "image/jpeg");
    private $max_size = 700;
    private $image_name = null;
    public function __construct(){
      $this->student = new Student();
      $this->section = new Section();
    }
    public function index(){
      $data = $this->student->list_all();
      return $data;
    }
    public function add(){
      if(!$_POST){
        $data = $this->section->list_all();
        return $data;
      }else{
        if(in_array($_FILES['imagen']['type'], $this->permitted) && $_FILES['imagen']['size'] <= $this->max_size * 1024){
          $this->image_name = date('si') . $_FILES['imagen']['name'];
          $route = "Image_data" . DS . $this->image_name;
          move_uploaded_file($_FILES['imagen']['tmp_name'], $route);
          $this->student->set("nombre", $_POST['nombre']);
          $this->student->set("edad", $_POST['edad']);
          $this->student->set("promedio", $_POST['promedio']);
          $this->student->set("imagen", $this->image_name);
          $this->student->set("id_seccion", $_POST['id_seccion']);
          $this->student->add();
          header("Location: " . URL . "students" . DS );
        }
      }
    }

    public function edit($id){
      if(!$_POST){
        $this->student->set("id", $id);
        $data = $this->student->view();
        return $data;
      }else{
        if(in_array($_FILES['imagen']['type'], $this->permitted) && $_FILES['imagen']['size'] <= $this->max_size * 1024){
          $imagen_actual = $_POST['imagen_actual'];
          $route = (string)"Image_data" . DS . $imagen_actual;
          unlink($route);
          $this->image_name = date('si') . $_FILES['imagen']['name'];
          $route = "Image_data" . DS . $this->image_name;
          move_uploaded_file($_FILES['imagen']['tmp_name'], $route);
        }
          $this->student->set("id", $_POST['id']);
          $this->student->set("nombre", $_POST['nombre']);
          $this->student->set("edad", $_POST['edad']);
          $this->student->set("promedio", $_POST['promedio']);
          if($this->image_name != null){
            $this->student->set("imagen", $this->image_name);
          }else{
            $this->student->set("imagen", $_POST['imagen_actual']);
          }
          $this->student->set("id_seccion", $_POST['id_seccion']);
          $this->student->edit();
          header("Location: " . URL . "students" . DS );
      }
    }

    public function delete($id){
      $this->student->set("id", $id);
      $this->student->delete();
      header("Location: " . URL . "students" . DS );
    }

    public function view($id){
      $this->student->set("id", $id);
      $data = $this->student->view();
      return $data;

    }

    public function listSections(){
      $data = $this->section->list_all();
      return $data;
    }
  }
  $students = new studentsController();
 ?>
