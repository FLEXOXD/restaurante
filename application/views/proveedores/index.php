<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i><b> Gestión de Proveedores</b>
  <hr>
  <center>
  <a href="<?php echo site_url('proveedores/nuevo');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Agregar Nuevo</a>
  </center>
  <br>
  <br>
</legend>
<hr>
<?php if ($listadoProveedores): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE DE LA EMPRESA</th>
        <th class="text-center">NOMBRE DEL PRODUCTO</th>
        <th class="text-center">APELLIDO DEL PROVEEDOR</th>
        <th class="text-center">NOMBRE DEL PROVEEDOR</th>
        <th class="text-center">TELÉFONO</th>
        <th class="text-center">DIRECCIÓN</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listadoProveedores->result() as $proveedorTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $proveedorTemporal->id_pro; ?></td>
          <td class="text-center"><?php echo $proveedorTemporal->empresa_pro; ?></td>
          <td class="text-center"><?php echo $proveedorTemporal->producto_pro; ?></td>
          <td class="text-center"><?php echo $proveedorTemporal->apellido_pro; ?></td>
          <td class="text-center"><?php echo $proveedorTemporal->nombre_pro; ?></td>
          <td class="text-center"><?php echo $proveedorTemporal->telefono_pro; ?></td>
          <td class="text-center"><?php echo $proveedorTemporal->direccion_pro; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('proveedores/actualizar'); ?>/<?php echo $proveedorTemporal->id_pro; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar</a>
            <a href="<?php echo site_url('proveedores/borrar'); ?>/<?php echo $proveedorTemporal->id_pro; ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar?');"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3 class="text-center"><b>No existen Proveedores</b></h3>
<?php endif; ?>
