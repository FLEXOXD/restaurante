<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR PROVEEDOR</h3>
    <div class="text-center">
      <a href="<?php echo site_url('proveedores/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($proveedorEditar): ?>
        <form class="" action="<?php echo site_url('proveedores/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_pro" value="<?php echo $proveedorEditar->id_pro; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE DE LA EMPRESA:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="empresa_pro" value="<?php echo $proveedorEditar->empresa_pro; ?>" class="form-control" placeholder="Ingrese el nombre de la empresa" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE DEL PRODUCTO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="producto_pro" value="<?php echo $proveedorEditar->producto_pro; ?>" class="form-control" placeholder="Ingrese el nombre del producto" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">APELLIDO DEL PROVEEDOR:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="apellido_pro" value="<?php echo $proveedorEditar->apellido_pro; ?>" class="form-control" placeholder="Ingrese los dos apellidos del PROVEEDOR" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE DEL PROVEEDOR:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="nombre_pro" value="<?php echo $proveedorEditar->nombre_pro; ?>" class="form-control" placeholder="Ingrese los dos nombre del PROVEEDOR" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">TELÉFONO:</label>
              </div>
            <div class="col-md-7">
                <input type="number" name="telefono_pro" value="<?php echo $proveedorEditar->telefono_pro; ?>" class="form-control" placeholder="Ingrese el telefono del PROVEEDOR" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DIRECCIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="direccion_pro" value="<?php echo $proveedorEditar->direccion_pro; ?>" class="form-control" placeholder="Ingrese la dirección" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('proveedores/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró al proveedor :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
