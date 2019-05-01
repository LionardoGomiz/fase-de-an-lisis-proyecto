<h1 class="page-header" style="color:#DECF12">Ver Buses de Transmilenio Abordados</h1>

<style>
.h1 {
    font-size: 150%;
    font-family: "Homer Simpson";
}
</style>
<br><br><br>

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
            </tr>
        <?php endforeach; ?>
        </tbody>
</table> 
</div>

</body>
<script  src="assets/js/datatable.js"></script>
<script src="assets/js/popover.js"></script>
</html>