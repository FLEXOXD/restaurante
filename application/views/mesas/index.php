<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Mesas</b>
  <hr>
  <center>
  <a href="<?php echo site_url('mesas/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoMesas): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NÚMERO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoMesas->result() as $mesaTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $mesaTemporal->id_mesa; ?></td>
          <td class="text-center"><?php echo $mesaTemporal->numero_mesa; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('mesas/actualizar'); ?>/<?php echo $mesaTemporal->id_mesa; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('mesas/borrar'); ?>/<?php echo $mesaTemporal->id_mesa; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen mesas</b></h3>
<?php endif; ?>
