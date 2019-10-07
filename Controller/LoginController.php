<?php 

require_once 'Model/Usuario.php';

class LoginController{

    public function index(){

        require_once 'View/Login/index.php';
    }

    public function Register(){
        if(isset($_POST)){
            $tipo = 2;
            $usuario = new Usuario();
            $usuario->setIdTipo($tipo);
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido($_POST['apellido']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPass($_POST['pwd']);
            
            $save = $usuario->add();

            if($save){
                $_SESSION['registro'] = 'Complete';
            }else{
                $_SESSION['registro'] = 'Failed';
            }

            header('Location:'.URL.'Login/index');
        }

    }

    public function verify(){
        if(isset($_POST)){

            $usuario = new Usuario();
            $usuario ->setEmail($_POST['email']);

            $identity = $usuario ->login($_POST['pwd']);
            
            if(is_object($identity) && $identity){
                $_SESSION['identity'] = $identity;
                
                if($identity->idperfil == 1){
                    $_SESSION['admin'] = true;
                    header('Location: '.URL.'Admin/');
                    die();
                }
            }else{
                $_SESSION['error_login'] = 'failed';
            }
        }

        header('Location: ' . URL);
        
    }

    public function layout(){
            
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }

        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }

        header('Location: ' . URL);
    }

}






?>