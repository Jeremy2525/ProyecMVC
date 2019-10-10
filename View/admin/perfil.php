<?php require_once 'View/layout/header_admin.php';?>

<div id="new-usser">
    <h2>Perfil</h2>

    <p class="ptext">Opciones personales</p>

    <form action="<?=URL?>Admin/Up" method="post">
        <div class="div-user">
            <label for="name_user" class="label-user">Nombre de usuario</label>
            <input type="text" class="input-user" style="background-color:#D4D1D1;" name="name_user" value="<?=isset($user->name_user)?$user->name_user:''?>">
            <span class="label-user span-use"><i>El nombre de usuario no puede cambiarse.</i></span>
        </div>

        <div class="div-user">
            <label for="profile" class="label-user">Perfil</label>
            <select class="input-user input-profile" name="profile">
                <?php 
                    $perfil = Utils::allPerfil();
                    foreach($perfil as $per):
                ?>
                    <option value="<?=$per->id;?>" <?=($per->id == $user->idperfil)?'selected':''?> ><?=$per->nombre;?></option>
                <?php endforeach;?>
            </select>
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Nombre</label>
            <input type="text" class="input-user" name="name" value="<?=isset($user->name_user)?$user->nombre:''?>">
        </div>
        
        <div class="div-user">
            <label for="firs_name" class="label-user">Apellido</label>
            <input type="text" class="input-user" name="firs_name" value="<?=isset($user->name_user)?$user->apellido:''?>">
        </div>

        <h2>Información de contacto</h2>

        <div class="div-user">
            <label for="correo_user" class="label-user">Correo electronico<span><i>(obligatorio)</i></span></label>
            <input type="text" class="input-user" name="correo_user" value="<?=isset($user->name_user)?$user->email:''?>">
        </div>

        <h2>Acerca del usuario</h2>

        <div class="div-user-button">
            <label for="info_user" class="label-user">Información Biografica</label>
            <textarea name="info_user" class="input-user" style="height:100px" id="" cols="30" rows="10" value="<?=isset($user->biografia)?$user->biografia:''?>"><?=isset($user->biografia)?$user->biografia:''?></textarea>
        </div>

        <div class="div-user div-user-img">
            <label for="img_user" class="label-user">Imagen de perfil</label>
            <nav class="input-user img"> <input type="file" class="img-user" name="img-user" id=""> <img src="<?=isset($user->foto)? URL.'assets/images/admin/'.$user->foto:''?>" alt=""></nav>
        </div>

        <h2>Gestion de la cuenta</h2>
        <br>
        <div class="div-user">
            <input type="hidden" name="pass" value="<?=isset($user->pass)?$user->pass:''?>" >
            <label for="correo_user" class="label-user">Nueva contraseña</label>
            <input type="text" class="input-user" name="passnew_user">
        </div>
<br>
        <h2>Dirrección de pedido del cliente</h2>
        <br>
        <div class="div-user">
            <label for="name" class="label-user">Apellido</label>
            <input type="text" class="input-user" name="fname_p_user">
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Empresa</label>
            <input type="text" class="input-user" name="empresa_p_user">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Dirrección, linea 1</label>
            <input type="text" class="input-user" name="dir1_p_user">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Dirrección, linea 2</label>
            <input type="text" class="input-user" name="dir2_p_user">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Ciudad</label>
            <input type="text" class="input-user" name="ciu_p_user">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Código postal</label>
            <input type="text" class="input-user" name="cp_p_user">
        </div>

        <div class="div-user">
            <label for="pais" class="label-user">País</label>
            <select class="input-user input-profile" name="pais_p_user">
                <option value="">Elige un país... </option>
            </select>
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Región/Provincia</label>
            <input type="text" class="input-user" name="rp_p_user">
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Telefono</label>
            <input type="text" class="input-user" name="tel_p_user">
        </div>

        <div class="div-user">
            <label for="correo_user" class="label-user">Correo electronico</label>
            <input type="text" class="input-user" name="correo_p_user">
        </div>
<br>

        <h2>Dirrección de envio del cliente</h2>
        <br>
        <div class="div-user">
            <label for="name" class="label-user">Apellido</label>
            <input type="text" class="input-user" name="fname_e_user">
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Empresa</label>
            <input type="text" class="input-user" name="empresa_e_user">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Dirrección, linea 1</label>
            <input type="text" class="input-user" name="dir1_e_user">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Dirrección, linea 2</label>
            <input type="text" class="input-user" name="dir2_e_user">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Ciudad</label>
            <input type="text" class="input-user" name="ciu_e_user">
        </div>
        <div class="div-user">
            <label for="name" class="label-user">Código postal</label>
            <input type="text" class="input-user" name="cp_e_user">
        </div>

        <div class="div-user">
            <label for="pais" class="label-user">País</label>
            <select class="input-user input-profile" name="pais_e_user">
                <option value="">Elige un país... </option>
            </select>
        </div>

        <div class="div-user">
            <label for="name" class="label-user">Región/Provincia</label>
            <input type="text" class="input-user" name="rp_e_user">
        </div>

        <input type="submit" class="btnn btnn-color-black btnn-style-bordered btnn-shape-round-extra-small btnn-size-extra-small btnn-letter-default" value="Actualizar usuario">
    </form>

</div>

<?php require_once 'View/layout/footer_admin.php';?>
