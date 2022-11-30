<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA MESA
</legend>
<form class="" action="<?php echo site_url('mesas/guardarMesa'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NÚMERO:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="numero_mesa" value="" class="form-control" placeholder="Ingrese el número de mesa" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('mesas/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
