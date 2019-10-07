<?php

class Config{

    public static function getConnect(){
        try{
            $con = new PDO('mysql:host=localhost;dbname=TIENDAONLINE;charset=utf8','root','');
            $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $con;

        }catch(PDOException $ex){
            echo "Error en la BD " . $ex->getMessage();
        }
    }

}


?>