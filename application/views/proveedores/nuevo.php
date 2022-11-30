<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO PROVEEDOR
</legend>
<form class="" action="<?php echo site_url('proveedores/guardarProveedor'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE DE LA EMPRESA:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="empresa_pro" value="" class="form-control" placeholder="Ingrese el nombre de la empresa" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE DEL PRODUCTO:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="producto_pro" value="" class="form-control" placeholder="Ingrese del producto" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">APELLIDO DEL PROVEEDOR:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="apellido_pro" value="" class="form-control" placeholder="Ingrese los dos apellidos" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE DEL PROVEEDOR:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_pro" value="" class="form-control" placeholder="Ingrese los dos nombres" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TELÉFONO:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="telefono_pro" value="" class="form-control" placeholder="Ingrese la teléfono" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DIRECCIÓN:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="direccion_pro" value="" class="form-control" placeholder="Ingrese la dirección" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('proveedores/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
