<?php

    class Usuario{
        private $id;
        private $idTipo;
        private $nombre;
        private $apellido;
        private $email;
        private $pass;
        private $biografia;
        private $foto;
        private $con;

        public function __construct()
        {
            $this->con = Config::getConnect();    
        }

        public function getId()
        {
            return $this->id;
        }

        public function getIdTipo()
        {
            return $this->idTipo;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function getApellido()
        {
            return $this->apellido;
        }

        public function getEmail()
        {
            return $this->email;    
        }

        public function getPass()
        {
            return $this->pass;
        }

        public function getBiografia()
        {
            return $this->biografia;
        }

        public function getFoto()
        {
            return $this->foto;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setIdTipo($idTipo)
        {
            $this->idTipo = $idTipo;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setPass($pass,$ve=true)
        {
            if($ve){
                $this->pass = password_hash($pass,PASSWORD_DEFAULT);
            }else{
                $this->pass = $pass;
            }
        }

        public function setBiografia($biografia)
        {
            $this->biografia = $biografia;
        }

        public function setFoto($foto)
        {
            $this->foto = $foto;
        }
    
        public function add(){
            $result = false;
            $sql = "CALL SPS_ADDUP_USUARIO('{$this->getId()}','{$this->getEmail()}','{$this->getNombre()}','{$this->getApellido()}','{$this->getPass()}',{$this->getIdTipo()},NULL,NULL,'I');";
            
            $add = $this->con->prepare($sql);
            $add->execute();

            if($add){
                $result = true;
            }
            
            return $result;
        }

        public function Up(){
            $result = false;
            $sql = "CALL SPS_ADDUP_USUARIO('{$this->getId()}','{$this->getEmail()}','{$this->getNombre()}','{$this->getApellido()}',
                                           '{$this->getPass()}',{$this->getIdTipo()},'{$this->getBiografia()}','{$this->getFoto()}','A')";
            
            $edit = $this->con->prepare($sql);
            $edit->execute();

            if($edit){
                $result = true;
            }
            
            return $result;
        }

        public function delete(){
            $result = false;
            $sql = "DELETE FROM USUARIOS WHERE id = {$this->getId()}";
            $delete = $this->con->prepare($sql);
            $delete->execute();

            if($delete){
                $result = true;
            }
            return $result;
        }

        public function login($password){
            $result = false;
            $email = $this->getEmail();

            $sql = "CALL SPS_BUS_USUARIO('$email','B')";

            $login = $this->con->prepare($sql);
            $login->execute();
            if($login && $login->rowCount() == 1){

                $usuario = $login->fetchObject();
                
                $verify = password_verify($password,$usuario->pass);

                if($verify){
                    $result = $usuario;
                }

            }

            return $result;
        }

        public function getCount($c){
            $sql = "CALL SPS_COUNT_USUARIO('$c');";
            $contar = $this->con->prepare($sql);
            $contar->execute();
            return $contar;
        }
        
        public function getAll($bus){
            $sql = "CALL SPS_BUS_USUARIO('$bus','B');";
            $usuario = $this->con->prepare($sql);
            $usuario->execute();
            $usuarios = $usuario->fetchAll(PDO::FETCH_OBJ);
            return $usuarios;
        }

        public function getOne(){
            $sql = "SELECT * FROM USUARIOS WHERE name_user = '{$this->getId()}'";
            $usuario = $this->con->prepare($sql);
            $usuario->execute();
            $usuarios = $usuario->fetch(PDO::FETCH_OBJ);
            return $usuarios;
        }

        public function getPerfil(){
            $sql = "SELECT * FROM PERFIL";
            $perfil = $this->con->prepare($sql);
            $perfil->execute();
            $per = $perfil->fetchAll(PDO::FETCH_OBJ);
            return $per;
        }

        
        
    }

?>