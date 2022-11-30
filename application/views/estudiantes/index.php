<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Estudiantes</b>
  <hr>
  <center>
  <a href="<?php echo site_url('estudiantes/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoEstudiantes): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">CÉDULA</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">TELÉFONO</th>
        <th class="text-center">DIRECCIÓN</th>
        <th class="text-center">FECHA NACIMIENTO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoEstudiantes->result() as $estudianteTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $estudianteTemporal->id_est; ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->cedula_est; ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->apellido_est; ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->nombre_est; ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->telefono_est; ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->direccion_est; ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->fecha_nacimiento_est; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('estudiantes/actualizar'); ?>/<?php echo $estudianteTemporal->id_est; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('estudiantes/borrar'); ?>/<?php echo $estudianteTemporal->id_est; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen estudiantes</b></h3>
<?php endif; ?>
