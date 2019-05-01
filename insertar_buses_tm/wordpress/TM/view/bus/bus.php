<!--index principal de la pagina, depende del header.php-->
<h1 class="page-header" style="color:#DECF12">Administrar Buses de Transmilenio Abordados</h1>

<style>
    h1{
        font-size: 150%;
        font-family: "Homer Simpson"; /*letra del titulo*/
    }
</style>

<form action="bus.php" method="get">
    <div class="form-group">
        <input type="search" class="form-control" name="buscar" id="buscador" aria-describedby="emailHelp" placeholder="Buscar camion">
        <small id="emailHelp" class="form-text text-muted">Buscar alguna caracterisitica de algun bus.</small>
    </div>
    <div>
        <button type="submit" class="btn btn-success" name="enviando"  id="BtnBuscar"><i class="fas fa-search"></i> Buscar</button>
    </div>
</form>

<!--<div>
    <i class="fab fa-facebook"></i>
</div>-->

<div>
    <a class="btn btn-primary pull-right" href="?ab=bus&a=Agregar" id="BtnAgregar"><i class="fas fa-truck"></i> Nuevo Bus</a>
</div>


<!--la ruta la conforman los atributos "ac"-->

<div class="table-bordered" style="">
    <table class="table  table-striped  table-hover" id="tabla">
        <thead>
        <tr>
            <th style="width:60px; background-color: #DE6C12; color:#fff">Numero</th>
            <th style="width:120px; background-color: #DE6C12; color:#fff">Movil</th>
            <th style="width:120px; background-color: #DE6C12; color:#fff">Operador</th>
            <th style="width:120px; background-color: #DE6C12; color:#fff">Modelo</th>
            <th style="width:120px; background-color: #DE6C12; color:#fff">Carroceria</th>
            <th style="width:120px; background-color: #DE6C12; color:#fff">Marca</th>
            <th style="width:120px; background-color: #DE6C12; color:#fff">Tipologia</th>
            <th style="width:60px; background-color: #DE6C12; color:#fff"></th>
            <th style="width:60px; background-color: #DE6C12; color:#fff"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $b): ?>
            <tr>
                <td><?php echo $b->id; ?></td>
                <td><?php echo $b->Movil; ?></td>
                <td><?php echo $b->Operador; ?></td>
                <td><?php echo $b->Modelo; ?></td>
                <td><?php echo $b->Carroceria; ?></td>
                <td><?php echo $b->Marca; ?></td>
                <td><?php echo $b->Tipologia; ?></td>
                <td>
                    <a  class="btn btn-warning" href="?ab=bus&a=Editar&id=<?php echo $b->id; ?>">Editar</a>
                </td>
                <td>
                    <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este Bus?');" href="?ac=bus&a=Eliminar&id=<?php echo $b->id; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>

</html>
