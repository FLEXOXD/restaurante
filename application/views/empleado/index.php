<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Empleados</b>
  <hr>
  <center>
  <a href="<?php echo site_url('empleados/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoEmpleados): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">CÉDULA</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">TELÉFONO</th>
        <th class="text-center">DIRECCIÓN</th>
        <th class="text-center">CORREO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoEmpleados->result() as $empleadoTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $empleadoTemporal->id_emp; ?></td>
          <td class="text-center"><?php echo $empleadoTemporal->cedula_emp; ?></td>
          <td class="text-center"><?php echo $empleadoTemporal->nombre_emp; ?></td>
          <td class="text-center"><?php echo $empleadoTemporal->apellido_emp; ?></td>
          <td class="text-center"><?php echo $empleadoTemporal->telefono_emp; ?></td>
          <td class="text-center"><?php echo $empleadoTemporal->direccion_emp; ?></td>
          <td class="text-center"><?php echo $empleadoTemporal->correo_emp; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('empleados/actualizar'); ?>/<?php echo $empleadoTemporal->id_emp; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('empleados/borrar'); ?>/<?php echo $empleadoTemporal->id_emp; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen empleados</b></h3>
<?php endif; ?>
