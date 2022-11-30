<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Platos</b>
  <hr>
  <center>
  <a href="<?php echo site_url('platos/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoPlatos): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">PRECIO</th>
        <th class="text-center">DESCRIPCIÓN</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoPlatos->result() as $platoTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $platoTemporal->id_plato; ?></td>
          <td class="text-center"><?php echo $platoTemporal->nombre_plato; ?></td>
          <td class="text-center"><?php echo $platoTemporal->precio_plato; ?></td>
          <td class="text-center"><?php echo $platoTemporal->descripcion_plato; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('platos/actualizar'); ?>/<?php echo $platoTemporal->id_plato; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('platos/borrar'); ?>/<?php echo $platoTemporal->id_plato; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen platos</b></h3>
<?php endif; ?>
