<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO COLEGIO
</legend>
<form class="" action="<?php echo site_url('colegios/guardarColegio'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_mkd" value="" class="form-control" placeholder="Ingrese el nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DIRECTOR:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="director_mkd" value="" class="form-control" placeholder="Ingrese el director" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DIRECCIÓN:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="direccion_mkd" value="" class="form-control" placeholder="Ingrese la dirección" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CORREO:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="correo_mkd" value="" class="form-control" placeholder="Ingrese el correo" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('colegios/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
