<?php require_once 'View/layout/header_admin.php';?>


<div id="all-user-container">
    <div id="all-user-content">
        
        <a href="" class="all-a"><p class="all-lot">Todos<span>(5)</span></p></a>
        <a href=""><p class="all-lot">Administrador<span>(2)</span></p></a>
        <a href=""><p class="all-lot">Cliente<span>(3)</span></p></a>      

        <form action="">
            <div>
                <select name="" class="input-user all-user-delete" id="">
                    <option value="">Acciones</option>
                </select>
                <input type="submit" class="btnn btnn-shape-round-extra-small btnn-size-extra-small btnn-letter-default all-user-btn-delete " value="Aplicar">
            </div>

            <div class="all-user-div-bus">
                <input type="search" class="input-user all-user-bus" >
                <input type="submit" class="btnn btnn-shape-round-extra-small btnn-size-extra-small btnn-letter-default all-user-btn-delete " value="Buscar usuario">
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
                    <tr>
                        <td scope="row"><input type="checkbox" class="case" name="case[]" id=""></td>
                        <td>Jery</td>
                        <td>Jeremy</td>
                        <td>solo.nunca21@gmail.com</td>
                        <td>Administrador</td>
                        <td>07-10-2019</td>
                    </tr>
                    <tr>
                        <td scope="row"><input type="checkbox" class="case" name="case[]" id=""></td>
                        <td>Eli</td>
                        <td>Eliana</td>
                        <td>eli@gmail.com</td>
                        <td>Administrador</td>
                        <td>07-10-2019</td>
                    </tr>
                    <tr>
                        <td scope="row"><input type="checkbox" class="case" name="case[]" id=""></td>
                        <td>Rafa</td>
                        <td>Rafael</td>
                        <td>rafa@gmail.com</td>
                        <td>Cliente</td>
                        <td>07-10-2019</td>
                    </tr>
                    <tr>
                        <td scope="row"><input type="checkbox" class="case" name="case[]" id=""></td>
                        <td>Eri</td>
                        <td>Erika</td>
                        <td>eri@gmail.com</td>
                        <td>Cliente</td>
                        <td>07-10-2019</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>



<?php require_once 'View/layout/footer_admin.php';?>