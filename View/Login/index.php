<?php require_once 'View/layout/header.php'; ?>
<h2>Iniciar Sesión</h2>

<form action="<?=URL?>Login/verify" method="post">
    <div class="form-group col-sm-3">
        <label for="exampleInputEmail1">Correo Electronico</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
    </div>
    <div class="form-group col-sm-3">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <input type="submit" class="btn btn-primary col-sm-3" value="Iniciar Sesión">
</form>

<hr>

<?php if(isset($_SESSION['registro']) == 'Complete'){ ?>
    <div> Usuario creado</div>
<?php }elseif(isset($_SESSION['registro']) == 'failed'){ ?>
    <div> Fallo al Registrar</div>
<?php } ?>

<h2>Registro</h2>
<form action="<?=URL?>Login/Register" method="post">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="inputEmail4" placeholder="Nombre">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Apellido</label>
      <input type="text" name="apellido" class="form-control" id="inputPassword4" placeholder="Apellido">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Correo</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" name="pwd" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <input type="submit" name="rcliente" class="btn btn-primary col-sm-6" value="Registar">
</form>

<?=Utils::DeleteSesion('registro')?>

<?php require_once 'View/layout/footer.php'; ?>