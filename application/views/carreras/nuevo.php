<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA CARRERA
</legend>
<form class="" action="<?php echo site_url('carreras/guardarCarrera'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_car" value="" class="form-control" placeholder="Ingrese el nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DECANO:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="decano_car" value="" class="form-control" placeholder="Ingrese el nombre del decano" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FACULTAD:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="facultad_car" value="" class="form-control" placeholder="Ingrese la facultad" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">BLOQUE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="bloque_car" value="" class="form-control" placeholder="Ingrese el bloque" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TELÉFONO:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="telefono_car" value="" class="form-control" placeholder="Ingrese el teléfono" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('carreras/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
