<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO PLATO
</legend>
<form class="" action="<?php echo site_url('platos/guardarPlato'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_plato" value="" class="form-control" placeholder="Ingrese el nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">PRECIO:</label>
      </div>
    <div class="col-md-7">
        <input type="decimal" name="precio_plato" value="" class="form-control" placeholder="Ingrese el precio" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DESCRIPCIÓN:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="descripcion_plato" value="" class="form-control" placeholder="Ingrese la descripción" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('platos/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
