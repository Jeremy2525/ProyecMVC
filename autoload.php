<?php 

function autoLoad($className){
    include 'Controller/' . $className . '.php';
}

spl_autoload_register('autoLoad');

?>