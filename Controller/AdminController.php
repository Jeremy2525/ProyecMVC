<?php 

    require_once 'Model/Usuario.php';

    class AdminController{

        public function index(){
            Utils::isAdmin();
            require_once 'View/admin/index.php';
        }

        public function Nuevo(){
            Utils::isAdmin();
            require_once 'View/admin/new-user.php';
        }

        public function Profile(){
            Utils::isAdmin();
            $id = isset($_GET['cod'])?$_GET['cod']:'';
            $usuario = new Usuario();
            $usuario->setId($id);
            $user = $usuario->getOne();

            require_once 'View/admin/perfil.php';  
        }

        public function Ver(){
            Utils::isAdmin();

            $bus = '';
            if(isset($_POST['bus'])){
                $bus = isset($_POST['txtbus'])?$_POST['txtbus']:'';
            }

            if(isset($_GET['ct'])){
                $bus = isset($_GET['ct'])?$_GET['ct']:'';
            }

            if(isset($_POST['exec']) && $_POST['action'] == "B"){
                return $this->Delete();
            }

            $usuarios = new Usuario();
            $usuario = $usuarios->getAll($bus);
            require_once 'View/admin/all-user.php';
        }

        public function add(){
            Utils::isAdmin();

            if(isset($_POST)){
                $tipo = isset($_POST['profile'])?$_POST['profile']:'';
                
                $name_user = !empty($_POST['name_user'])?$_POST['name_user']:'';
                $correo_user = !empty($_POST['correo_user'])?$_POST['correo_user']:'';
                $pass_user = !empty($_POST['pass_user'])?$_POST['pass_user']:'';

                if($name_user && $correo_user && $pass_user){
                    $usuario = new Usuario();
                    $usuario->setId($name_user);
                    $usuario->setEmail($correo_user);
                    $usuario->setNombre(isset($_POST['name'])?$_POST['name']:NULL);
                    $usuario->setApellido(isset($_POST['firs_name'])?$_POST['firs_name']:NULL);
                    $usuario->setPass($pass_user);
                    $usuario->setIdTipo($tipo);

                    $save = $usuario->add();

                    if($save){
                        $_SESSION['registro'] = 'Complete';
                    }else{
                        $_SESSION['registro'] = 'Failed';
                    }
                }else{
                    $_SESSION['failed'] = 'failed';
                }
                header('location:'.URL.'Admin/Ver');
                
            }

        }
        
        public function Up(){
            Utils::isAdmin();

            if(isset($_POST)){

                $name_user = !empty($_POST['name_user'])?$_POST['name_user']:'';
                $correo_user = !empty($_POST['correo_user'])?$_POST['correo_user']:'';
                $pass = !empty($_POST['pass'])?$_POST['pass']:'';
               
                if($name_user && $correo_user){
                    if(!empty($_POST['passnew_user'])){
                      echo $verifi = $_POST['passnew_user']; 
                      $ve=true;
                    }elseif(empty($_POST['passnew_user'])){
                        echo $verifi = $pass; 
                        $ve = false;
                    }
                    
                    $up = new Usuario(); 
                    $up->setId($name_user);
                    $up->setEmail($correo_user);
                    $up->setNombre(!empty($_POST['name'])?$_POST['name']:NULL);
                    $up->setApellido(!empty($_POST['firs_name'])?$_POST['firs_name']:NULL);
                    $up->setPass($verifi,$ve);
                    $up->setIdTipo($_POST['profile']);
                    $up->setBiografia(!empty($_POST['info_user'])?$_POST['info_user']:NULL);
                    $up->setFoto(!empty($_POST['img_user'])?$_POST['img_user']:NULL);
                    $save = $up->Up();
                    
                    if($save){
                        $_SESSION['up'] = 'Complete';
                    }else{
                        $_SESSION['up'] = 'Failed';
                    }

                    header('location:'.URL.'Admin/Ver');
                }
            }
        }

        public function Delete(){
            Utils::isAdmin();
            echo "borrando";
            die();
            $usuario = new Usuario();
            $usuario->setId($_GET['id']);
            
            $delete = $usuario->delete();

            if(!$delete){
                $_SESSION['error_detele'] = 'failed';
            }

            header('Location: ' . URL . 'Admin/VerClientes');
        }

        public function Editar(){
            Utils::isAdmin();
            if(isset($_GET['id'])){
                $edit = true;
                $id=$_GET['id'];

                $usuario = new Usuario();
                $usuario->setId($id);
                $user = $usuario->getOne();

                require_once 'View/admin/addup.php';
            }else{
                header('location'. URL . 'admin/VerClientes');
            }
        }
    }

?>