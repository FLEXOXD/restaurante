<legend class="text-center">
  <i class="glyphicon glyphicon-book"></i><b> Gestión de Matrículas</b>
  <hr>
  <center>
  <a href="<?php echo site_url('matriculas/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoMatriculas): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">TIPO</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">OBSERVACIONES</th>
        <th class="text-center">ESTADO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoMatriculas->result() as $matriculaTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $matriculaTemporal->id_mat; ?></td>
          <td class="text-center"><?php echo $matriculaTemporal->tipo_mat; ?></td>
          <td class="text-center"><?php echo $matriculaTemporal->nombre_mat; ?></td>
          <td class="text-center"><?php echo $matriculaTemporal->observaciones_mat; ?></td>
          <td class="text-center"><?php echo $matriculaTemporal->estado_mat; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('matriculas/actualizar'); ?>/<?php echo $matriculaTemporal->id_mat; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('matriculas/borrar'); ?>/<?php echo $matriculaTemporal->id_mat; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen matrículas</b></h3>
<?php endif; ?>
