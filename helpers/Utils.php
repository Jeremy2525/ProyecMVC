<?php 

    class Utils{

        public static function DeleteSesion($name){
            if(isset($_SESSION[$name])){
                unset($_SESSION[$name]);
            }
        }
        
        public static function isAdmin(){
            if(!isset($_SESSION['admin'])){
               header('Location: '. URL); 
            }
        }
        
        public static function countUser($c){
            require_once 'Model/Usuario.php';
            $count = new Usuario();
            $contar = $count->getCount($c);
            $result = '';
            foreach ($contar as $fila) {
                $result =  $fila['count'];
            }
            return $result;
        }

        public static function allPerfil(){
            require_once 'Model/Usuario.php';
            $perfil = new Usuario();
            $per = $perfil->getPerfil();
            
            return $per;
        }

    }
    
?>