<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA ASIGNATURA
</legend>
<form class="" action="<?php echo site_url('asignaturas/guardarAsignatura'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_asig" value="" class="form-control" placeholder="Ingrese el nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CRÉDITOS:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="creditos_asig" value="" class="form-control" placeholder="Ingrese el número de créditos" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('asignaturas/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
