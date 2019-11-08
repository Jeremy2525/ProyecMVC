<?php 
    $host= $_SERVER["HTTP_HOST"];
    
    define('URL',"http://".$host."/");
    define('ContollerDefault','ProductoController');
    define('ActionDefault','index');
?>