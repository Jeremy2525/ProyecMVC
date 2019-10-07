<?php require_once 'View/layout/header_admin.php';?>


<div id="all-user-container">
    <div id="all-user-content">
        
        <a href=""><p class="all-lot">Todos<span>(5)</span></p></a>
        <a href=""><p class="all-lot">Administrador<span>(2)</span></p></a>
        <a href=""><p class="all-lot">Cliente<span>(3)</span></p></a>      

        <form action="">
            <div>
                <select name="" class="input-user all-user-delete" id="">
                    <option value="">Acciones</option>
                </select>
                <input type="submit" class="btnn btnn-shape-round-extra-small btnn-size-extra-small btnn-letter-default all-user-btn-delete " value="Aplicar">
            </div>

            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" name="" id=""></th>
                        <th>Nombre de usuario</th>
                        <th>Nombre</th>
                        <th>Correo Electronico</th>
                        <th>Perfil</th>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>



<?php require_once 'View/layout/footer_admin.php';?>