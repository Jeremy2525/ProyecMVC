<?php require_once 'View/layout/header_admin.php';?>


<?php if(isset($t) && $t=='c' || isset($edit) && isset($user) && is_object($user)): ?>
    <?php if(isset($edit) && isset($user) && is_object($user)){
        $url = URL."admin/Up";
    ?>
        <h1>Actualizar Cliente <?=$user->nombre?></h1>

    <?php }else{
        $url = URL."admin/add";
    ?>
        <h1>Nuevo Cliente</h1>
    <?php } ?>
<?php elseif(isset($t) && $t=='a' || isset($edit) && isset($user) && is_object($user)): ?>
    <?php if(isset($edit) && isset($user) && is_object($user)){
        $url = URL."admin/Up";
    ?>
        <h1>Actualizar Administrador <?=$user->nombre?></h1>

    <?php }else{
        $url = URL."admin/add";
    ?>
        <h1>Nuevo Administrador</h1>
    <?php } ?>
<?php endif;?>


<br>
<form action="<?=$url?>" method="post">
    <input type="hidden" name="id" value="<?=(isset($edit) && isset($user))?$user->id:'';?>">
    <div class="form-row-collapsed menu">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="inputEmail4" value="<?=(isset($edit) && isset($user))?$user->nombre:'';?>" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Apellidos</label>
            <input type="text" value="<?=(isset($edit) && isset($user))?$user->apellido:'';?>" class="form-control" name="apellido" id="inputPassword4" placeholder="Apellidos">
        </div>
        <div class="form-group- col-md-6">
            <label for="inputAddress">Email</label>
            <input type="email" value="<?=(isset($edit) && isset($user))?$user->email:'';?>" class="form-control" name="email" id="inputAddress" placeholder="Correo Electronico">
        </div>
        <?php if(!isset($edit)){ ?>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Contraseña</label>
                <input type="password" class="form-control" name="pwd" id="inputAddress2" placeholder="Contraseña">
            </div>
        <?php } ?>
        <input type="submit" name="<?=(isset($t) && $t=='c')?'c':'a'; ?>" class="btn btn-primary" value="<?=(isset($edit))?'Actualizar':'Guardar'?>">
    </div>
    
</form>

<?php require_once 'View/layout/footer_admin.php';?>