<?php namespace Controllers;

  use Models\Section as Section;
  class sectionsController{
    private $section;
    public function __construct(){
      $this->section = new Section();
    }
    public function index(){
      $data = $this->section->list_all();
      return $data;
    }

    public function add(){
      if($_POST){
        $this->section->set("nombre",$_POST['nombre']);
        $this->section->add();
        header("Location: " . URL . "sections" . DS );
      }

    }
  }
  $sections = new sectionsController();
 ?>
