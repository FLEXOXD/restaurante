<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Docentes</b>
  <hr>
  <center>
  <a href="<?php echo site_url('docentes/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoDocentes): ?>
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
      <?php foreach ($listadoDocentes->result() as $docenteTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $docenteTemporal->id_doc; ?></td>
          <td class="text-center"><?php echo $docenteTemporal->cedula_doc; ?></td>
          <td class="text-center"><?php echo $docenteTemporal->apellido_doc; ?></td>
          <td class="text-center"><?php echo $docenteTemporal->nombre_doc; ?></td>
          <td class="text-center"><?php echo $docenteTemporal->telefono_doc; ?></td>
          <td class="text-center"><?php echo $docenteTemporal->direccion_doc; ?></td>
          <td class="text-center"><?php echo $docenteTemporal->fecha_nacimiento_doc; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('docentes/actualizar'); ?>/<?php echo $docenteTemporal->id_doc; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="<?php echo site_url('docentes/borrar'); ?>/<?php echo $docenteTemporal->id_doc; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen docentes</b></h3>
<?php endif; ?>
