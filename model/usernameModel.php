<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once "../../config/db.php";
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre, $direccion, $telefono, $email, $password){
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stament = $this->PDO->prepare("INSERT INTO username (nombre, direccion, telefono, email, estado, contrasenia) 
                VALUES (:nombre, :direccion, :telefono, :email, 1, :password)"
            );
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":direccion", $direccion);
            $stament->bindParam(":telefono", $telefono);
            $stament->bindParam(":email", $email);
            $stament->bindParam(":password", $hashed_password);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM username where id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM username");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre, $direccion, $telefono, $email){
            $stament = $this->PDO->prepare("UPDATE username 
                                            SET 
                                            nombre = :nombre,
                                            direccion = :direccion,
                                            telefono = :telefono,
                                            email = :email
                                            WHERE id = :id");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":telefono",$telefono);
            $stament->bindParam(":email",$email);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
        public function getUserByEmail($email) {
            $stament = $this->PDO->prepare("SELECT * FROM username WHERE email = :email and estado = 1");
            $stament->bindParam(":email", $email);
            $stament->execute();
            return $stament->fetch(PDO::FETCH_ASSOC);
        }
        public function cambiarEstado($estado, $id) {
            $stament = $this->PDO->prepare("UPDATE username 
                                            SET 
                                            estado = :estado
                                            WHERE id = :id");
            $stament->bindParam(":estado",$estado);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>