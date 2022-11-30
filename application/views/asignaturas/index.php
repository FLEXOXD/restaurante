<legend class="text-center">
  <i class="glyphicon glyphicon-file"></i><b> Gestión de Asignaturas</b>
  <hr>
  <center>
  <a href="<?php echo site_url('asignaturas/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoAsignaturas): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">CRÉDITOS</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoAsignaturas->result() as $asignaturaTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $asignaturaTemporal->id_asig; ?></td>
          <td class="text-center"><?php echo $asignaturaTemporal->nombre_asig; ?></td>
          <td class="text-center"><?php echo $asignaturaTemporal->creditos_asig; ?></td>
          <td class="text-center"><a href="<?php echo site_url('asignaturas/actualizar'); ?>/<?php echo $asignaturaTemporal->id_asig; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a> <a href="<?php echo site_url('asignaturas/borrar'); ?>/<?php echo $asignaturaTemporal->id_asig; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen asignaturas</b></h3>
<?php endif; ?>
