<?php 

    require_once 'Model/Usuario.php';

    class AdminController{

        public function index(){
            Utils::isAdmin();
            require_once 'View/admin/index.php';
        }

        public function Nuevo(){
            Utils::isAdmin();
            //$t = isset($_GET['t'])?$_GET['t']:'';
            require_once 'View/admin/new-user.php';
        }

        public function Profile(){
            require_once 'View/admin/perfil.php';  
        }

        public function Ver(){
            require_once 'View/admin/all-user.php';
        }

        public function VerClientes(){
            Utils::isAdmin();
            $clientes = new Usuario();
            $clientes->setIdTipo(2);
            $cliente = $clientes->getAll();
            
            require_once 'View/admin/ListCliente.php';
        }

        public function VerAdmin(){
            Utils::isAdmin();
            $admin = new Usuario();
            $admin->setIdTipo(1);
            $admins = $admin->getAll();
            
            require_once 'View/admin/ListAdmin.php';
        }

        public function add(){
            Utils::isAdmin();

            if(isset($_POST)){
               echo $tipo = isset($_POST['c'])?2:1;
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
                    
                if($_POST['c']){
                    header('Location:'.URL.'admin/VerClientes');
                }else{
                    header('Location:'.URL.'admin/VerAdmin');
                }
                
            }

        }
        
        public function Up(){
            Utils::isAdmin();

            if(isset($_POST)){
                $up = new Usuario(); 
                $up->setNombre($_POST['nombre']);
                $up->setApellido($_POST['apellido']);
                $up->setEmail($_POST['email']);
                $up->setId($_POST['id']);
                $save = $up->Up();
                
                if($save){
                    $_SESSION['actualizar'] = 'Complete';
                }else{
                    $_SESSION['actualizar'] = 'Failed';
                }

                if($_POST['c']){
                    header('Location:'.URL.'admin/VerClientes');
                }else{
                    header('Location:'.URL.'admin/VerAdmin');
                }
            }
        }

        public function Delete(){
            Utils::isAdmin();
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