<?php require_once 'View/layout/header_admin.php';?>



<div id="all-user-container">
    <div id="all-user-content">
        
        <a href="<?=URL?>Admin/Ver" class="all-a"><p class="all-lot">Todos<span>(<?=Utils::countUser('');?>)</span></p></a>
        <a href="<?=URL?>Admin/Ver&ct=1"><p class="all-lot">Administrador<span>(<?=Utils::countUser('1');?>)</span></p></a>
        <a href="<?=URL?>Admin/Ver&ct=2"><p class="all-lot">Cliente<span>(<?=Utils::countUser('2');?>)</span></p></a>
        
        <form action="<?=URL?>Admin/Ver" method="post">
            <div>
                <select name="" class="input-user all-user-delete" id="">
                    <option value="">Acciones</option>
                    <option value="">Borrar</option>
                </select>
                <input type="submit" class="btnn btnn-shape-round-extra-small btnn-size-extra-small btnn-letter-default all-user-btn-delete " value="Aplicar">
            </div>

            <div class="all-user-div-bus">
                <input type="search" name="txtbus" class="input-user all-user-bus" >
                <input type="submit" name="bus" class="btnn btnn-shape-round-extra-small btnn-size-extra-small btnn-letter-default all-user-btn-delete " value="Buscar usuario">
            </div>

            <table class="table table-user table-striped">
                <thead class="thead-user">
                    <tr>
                        <th scope="col"><input type="checkbox" id="selectall" class="case" name="case[]" id=""></th>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo Electronico</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">Creación</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($usuario as $user): ?>
                    <tr>
                        <td scope="row"><input type="checkbox" class="case" name="case[]" id=""></td>
                        <td><?=$user->name_user;?><nav><a href="<?=URL?>Admin/Profile&cod=<?=$user->name_user;?>">Edición</nav></p></td>
                        <td><?=!empty($user->nombre)?$user->nombre:'---------';?></td>
                        <td><?=$user->email;?></td>
                        <td><?=$user->perfil;?></td>
                        <td><?=$user->creation_date;?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </form>
        <?php if(isset($_SESSION['registro']) == 'Complete'): ?>
                <p style="color:green;">Usuario agregado correctamente</p>
            <?php elseif(isset($_SESSION['registro']) == 'Failed'): ?>
                <p style="color:red;">No se pudo agrgregar el usuario. Por favor reintentelo</p>
        <?php endif; ?>
    </div>
</div>

<?=Utils::DeleteSesion('registro')?>



<?php require_once 'View/layout/footer_admin.php';?>