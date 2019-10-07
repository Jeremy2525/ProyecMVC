<?php 
session_start();

require_once 'Conexion/config.php';
require_once 'autoload.php';
require_once 'parametros.php';
require_once 'helpers/Utils.php';

//require_once 'View/layout/header.php';

if(isset($_GET['controller'])){
    $nombre_controller = $_GET['controller'] . 'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controller = ContollerDefault;
}else{
    echo "La Pagina que buscas no existe";
}

if(class_exists($nombre_controller)){
    $controller = new $nombre_controller();

    if(isset($_GET['action']) && method_exists($controller,$_GET['action'])){
        $action = $_GET['action'];
        $controller->$action();

    }elseif(isset($_GET['controller']) || !isset($_GET['action'])){
        $actiondefault = ActionDefault;
        $controller->$actiondefault();

    }else{
        echo "La Pagina que buscas no existe";
    }

}else{
    echo "La Pagina que buscas no existe";
}

//require_once 'View/layout/footer.php';


?>