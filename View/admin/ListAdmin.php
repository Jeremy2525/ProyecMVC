<?php require_once 'View/layout/header_admin.php';?>

<div style="text-align:center">
    <h2> Mantenimiento Administradores</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"> <span><strong> Nombre  </strong></span> </th>
                <th scope="col"> <span><strong> Apellido </strong></span> </th>
                <th scope="col"> <span><strong> Email </strong></span> </th>
                <th scope="col"> <span><strong> Fecha De Creación </strong></span> </th>
                <th scope="col"> <span><strong> Fecha De Actualización </strong></span> </th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($admins as $admin){ ?>
                <tr>
                    <td><?=$admin->nombre?></td>
                    <td><?=$admin->apellido?></td>
                    <td><?=$admin->email?></td>
                    <td><?=$admin->creation_date?></td>
                    <td><?=$admin->update_date?></td>
                    <td><a href="<?=URL?>Admin/Editar&id=<?=$admin->id?>"><i class="edits fas fa-edit"></i></a></td>
                    <td><a href="<?=URL?>Admin/delete&id=<?=$admin->id?>"><i class="edits red fas fa-trash"></i></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php require_once 'View/layout/footer_admin.php';?>