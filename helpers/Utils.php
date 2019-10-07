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
        

    }
    
?>