<legend class="text-center">
  <i class="glyphicon glyphicon-education"></i><b> Gestión de Colegios</b>
  <hr>
  <center>
  <a href="<?php echo site_url('colegios/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoColegios): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">DIRECTOR</th>
        <th class="text-center">DIRECCION</th>
        <th class="text-center">CORREO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoColegios->result() as $colegioTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $colegioTemporal->id_mkd; ?></td>
          <td class="text-center"><?php echo $colegioTemporal->nombre_mkd; ?></td>
          <td class="text-center"><?php echo $colegioTemporal->director_mkd; ?></td>
          <td class="text-center"><?php echo $colegioTemporal->direccion_mkd; ?></td>
          <td class="text-center"><?php echo $colegioTemporal->correo_mkd; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('colegios/actualizar'); ?>/<?php echo $colegioTemporal->id_mkd; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('colegios/borrar'); ?>/<?php echo $colegioTemporal->id_mkd; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen colegios</b></h3>
<?php endif; ?>
