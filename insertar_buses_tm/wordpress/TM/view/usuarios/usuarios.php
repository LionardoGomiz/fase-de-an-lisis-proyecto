<!--index principal de la pagina, depende del header.php-->
<h1 class="page-header" style="color:#DECF12">Ver Uusarios Registrados</h1>

<style>
    h1{
        font-size: 150%;
        font-family: "Homer Simpson"; /*letra del titulo*/
    }
</style>

<form action="usuarios.php" method="get">
    <div class="form-group">
        <input type="search" class="form-control" name="buscar" id="buscador" aria-describedby="emailHelp" placeholder="Buscar camion">
        <small id="emailHelp" class="form-text text-muted">Buscar alguna caracterisitica de algun camion.</small>
    </div>
    <div>
        <button type="submit" class="btn btn-success" name="enviando"  id="BtnBuscar"><i class="fas fa-search"></i> Buscar</button>
    </div>
</form>

<!--<div>
    <i class="fab fa-facebook"></i>
</div>-->

<div>
    <a class="btn btn-primary pull-right" href="?au=usuario&a=Agregar" id="BtnAgregar"><i class="fas fa-truck"></i> Nuevo Bus</a>
</div>


<!--la ruta la conforman los atributos "ac"-->

<div class="table-bordered" style="">
    <table class="table  table-striped  table-hover" id="tabla">
        <thead>
            <th style="width:120px; background-color: #DE6C12; color:#fff">correo</th>
            <th style="width:120px; background-color: #DE6C12; color:#fff">contrasena</th>
            <th style="width:120px; background-color: #DE6C12; color:#fff">tipo_usuario</th>
            <th style="width:60px; background-color: #DE6C12; color:#fff"></th>
            <th style="width:60px; background-color: #DE6C12; color:#fff"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $b): ?>
            <tr>
                <td><?php echo $b->id; ?></td>
                <td><?php echo $b->correo; ?></td>
                <td><?php echo $b->contrasena; ?></td>
                <td><?php echo $b->tipo_usuario; ?></td>
                <td>
                    <a  class="btn btn-warning" href="?au=bus&a=Editar&id=<?php echo $b->id; ?>">Editar</a>
                </td>
                <td>
                    <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este camion?');" href="?ac=bus&a=Eliminar&id=<?php echo $b->id; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>

</html>
