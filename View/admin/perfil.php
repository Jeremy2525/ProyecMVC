<?php require_once 'View/layout/header_admin.php';?>

<div id="new-usser">
    <h2>Perfil</h2>

    <p class="ptext">Opciones personales</p>

    <form action="">
        <div class="div-user">
            <label for="name_user" class="label-user">Nombre de usuario</label>
            <input type="text" class="input-user" name="name_user">
            <span class="label-user span-use"><i>El nombre de usuario no puede cambiarse.</i></span>
        </div>

        <div class="div-user">
            <label for="profile" class="label-user">Perfil</label>
            <select class="input-user input-profile" name="profile">
                <option value="">Administrador</option>
                <option value="">Cliente</option>
            </select>
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Nombre</label>
            <input type="text" class="input-user" name="name">
        </div>
        
        <div class="div-user">
            <label for="firs_name" class="label-user">Apellido</label>
            <input type="text" class="input-user" name="firs_name">
        </div>

        <h2>Información de contacto</h2>

        <div class="div-user">
            <label for="correo_user" class="label-user">Correo electronico<span><i>(obligatorio)</i></span></label>
            <input type="text" class="input-user" name="correo_user">
        </div>

        <h2>Acerca del usuario</h2>

        <div class="div-user-button">
            <label for="acerca_user" class="label-user">Información Biografica</label>
            <textarea name="acerca_user" class="input-user" style="height:100px" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="div-user div-user-img">
            <label for="img_user" class="label-user">Imagen de perfil</label>

            <nav class="input-user img"> <input type="file" class="img-user" name="img-user" id=""> <img src="<?=URL?>assets/images/admin/user-default.png" alt=""></nav>
        </div>

        <h2>Gestion de la cuenta</h2>
        <br>
        <div class="div-user">
            <label for="correo_user" class="label-user">Nueva contraseña</label>
            <input type="text" class="input-user" name="correo_user">
        </div>
<br>
        <h2>Dirrección de pedido del cliente</h2>
        <br>
        <div class="div-user">
            <label for="name" class="label-user">Apellido</label>
            <input type="text" class="input-user" name="name">
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Empresa</label>
            <input type="text" class="input-user" name="name">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Dirrección, linea 1</label>
            <input type="text" class="input-user" name="name">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Dirrección, linea 2</label>
            <input type="text" class="input-user" name="name">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Ciudad</label>
            <input type="text" class="input-user" name="name">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Código postal</label>
            <input type="text" class="input-user" name="name">
        </div>

        <div class="div-user">
            <label for="pais" class="label-user">País</label>
            <select class="input-user input-profile" name="pais">
                <option value="">Elige un país... </option>
            </select>
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Región/Provincia</label>
            <input type="text" class="input-user" name="name">
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Telefono</label>
            <input type="text" class="input-user" name="name">
        </div>

        <div class="div-user">
            <label for="correo_user" class="label-user">Correo electronico</label>
            <input type="text" class="input-user" name="correo_user">
        </div>
<br>

        <h2>Dirrección de envio del cliente</h2>
        <br>
        <div class="div-user">
            <label for="name" class="label-user">Apellido</label>
            <input type="text" class="input-user" name="name">
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Empresa</label>
            <input type="text" class="input-user" name="name">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Dirrección, linea 1</label>
            <input type="text" class="input-user" name="name">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Dirrección, linea 2</label>
            <input type="text" class="input-user" name="name">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Ciudad</label>
            <input type="text" class="input-user" name="name">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Código postal</label>
            <input type="text" class="input-user" name="name">
        </div>

        <div class="div-user">
            <label for="pais" class="label-user">País</label>
            <select class="input-user input-profile" name="pais">
                <option value="">Elige un país... </option>
            </select>
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Región/Provincia</label>
            <input type="text" class="input-user" name="name">
        </div>

        <input type="submit" class="btnn btnn-color-black btnn-style-bordered btnn-shape-round-extra-small btnn-size-extra-small btnn-letter-default" value="Actualizar usuario">
    </form>

</div>

<?php require_once 'View/layout/footer_admin.php';?>
