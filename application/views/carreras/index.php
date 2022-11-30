<legend class="text-center">
  <i class="glyphicon glyphicon-book"></i><b> Gestión de Carreras</b>
  <hr>
  <center>
  <a href="<?php echo site_url('carreras/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoCarreras): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">DECANO</th>
        <th class="text-center">FACULTAD</th>
        <th class="text-center">BLOQUE</th>
        <th class="text-center">TELÉFONO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoCarreras->result() as $carreraTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $carreraTemporal->id_car; ?></td>
          <td class="text-center"><?php echo $carreraTemporal->nombre_car; ?></td>
          <td class="text-center"><?php echo $carreraTemporal->decano_car; ?></td>
          <td class="text-center"><?php echo $carreraTemporal->facultad_car; ?></td>
          <td class="text-center"><?php echo $carreraTemporal->bloque_car; ?></td>
          <td class="text-center"><?php echo $carreraTemporal->telefono_car; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('carreras/actualizar'); ?>/<?php echo $carreraTemporal->id_car; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('carreras/borrar'); ?>/<?php echo $carreraTemporal->id_car; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen carreras</b></h3>
<?php endif; ?>
