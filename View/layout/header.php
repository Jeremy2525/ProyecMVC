<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIENDA ONLINE</title>

    <link rel="stylesheet" href="<?=URL?>assets/bootstrap/css/bootstrap.min.css">

    <style>
        #header{
            border: 1px solid black;
            width: 100%;
        }

        header div .links{
            display: inline-block;
        }
        .rigth{
            float: right;
            margin-right: 30px;
            
        }
        ul{
            list-style-type: none;
        }
    </style>    
</head>
<body>
    <header id = "header">
       <div>
           <a class="links" href="<?=URL?>">Inicio</a>
       
            <?php if(!isset($_SESSION['identity'])){ ?>
                <div class="links"><a href="<?=URL?>Login/index">Iniciar Sesión</a></div>
            <?php }else{ ?>
                <div class="links rigth">
                    <ul class="aaa">
                        <li>
                            <?=$_SESSION['identity']->nombre . ' ' . $_SESSION['identity']->apellido ;?>
                            <ul>
                                <li>
                                    <a class="rigth" href="<?=URL?>Login/layout">Cerrar Sesión</a>
                                </li>
                            </ul>        
                        </li>
                        
                    </ul>
                </div>
                
            <?php } ?>
        </div>
    </header>
<hr>

