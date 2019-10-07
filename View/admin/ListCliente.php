<?php require_once 'View/layout/header_admin.php';?>

<div style="text-align:center">
    <h2> Mantenimiento Clientes</h2>

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
            <?php foreach($cliente as $client){ ?>
                <tr>
                    <td><?=$client->nombre?></td>
                    <td><?=$client->apellido?></td>
                    <td><?=$client->email?></td>
                    <td><?=$client->creation_date?></td>
                    <td><?=$client->update_date?></td>
                    <td><a href="<?=URL?>Admin/Editar&id=<?=$client->id?>"><i class="edits fas fa-edit"></i></a></td>
                    <td><a href="<?=URL?>Admin/delete&id=<?=$client->id?>"><i class="edits red fas fa-trash"></i></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php require_once 'View/layout/footer_admin.php';?>