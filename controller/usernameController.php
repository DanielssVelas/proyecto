<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once "../../model/usernameModel.php";
            $this->model = new usernameModel();
        }
        public function guardar($nombre, $direccion, $telefono, $email, $password){
            $id = $this->model->insertar($nombre, $direccion, $telefono, $email, $password);
            return ($id!=false) ? header("Location: head.php") : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : false;
        }
        public function CambiarEstado($estado, $id){
            $result = $this->model->cambiarEstado($estado, $id);
            return ($result!=false) ? header("Location: head.php") : header("Location:estado.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id,$nombre, $direccion, $telefono, $email){
            return ($this->model->update($id,$nombre, $direccion, $telefono, $email) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location: head.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>