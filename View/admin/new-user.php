<?php require_once 'View/layout/header_admin.php';?>

<div id="new-usser">
    <h2>Añadir nuevo usuario</h2>

    <p class="ptext">Crea un nuevo usuario y añádelo a este sitio.</p>

    <form action="<?=URL?>Admin/add" method="post"> 
        <div class="div-user">
            <label for="name_user" class="label-user">Nombre de usuario <span><i>(obligatorio)</i></span></label>
            <input type="text" class="input-user" name="name_user" required>
        </div>
        <div class="div-user">
            <label for="correo_user" class="label-user">Correo electronico <span><i>(obligatorio)</i></span></label>
            <input type="text" class="input-user" name="correo_user" required>
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Nombre</label>
            <input type="text" class="input-user" name="name">
        </div>
        <div class="div-user">
            <label for="firs_name" class="label-user">Apellido</label>
            <input type="text" class="input-user" name="firs_name">
        </div>
        <div class="div-user">
            <label for="pass_user" class="label-user">Contraseña</label>
            <input type="text" class="input-user" name="pass_user" required>
        </div>

        <div class="div-user">
            <label for="profile" class="label-user">Perfil</label>
            <select class="input-user input-profile" name="profile">
                <?php 
                    $perfil = Utils::allPerfil();
                    foreach($perfil as $per):
                ?>
                    <option value="<?=$per->id;?>"><?=$per->nombre;?></option>
                <?php endforeach;?>
            </select>
        </div>

        <input type="submit" class="btnn btnn-color-black btnn-style-bordered btnn-shape-round-extra-small btnn-size-extra-small btnn-letter-default" value="Añadir nuevo usuario">
    </form>

</div>

<?php require_once 'View/layout/footer_admin.php';?>