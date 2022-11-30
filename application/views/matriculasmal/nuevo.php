<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA MATRÍCULA
</legend>
<form class="" action="<?php echo site_url('matriculas/guardarMatricula'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TIPO:</label>
      </div>
    <div class="col-md-7">
      <select class="form_control" name="tipo_mat">
        <option value="">-----Seleccione el tipo-----</option>
        <option value="Ordinaria">Ordinaria</option>
        <option value="Extraordinaria">Extraordinaria</option>
        <option value="Especial">Especial</option>
        <option value="Anulada">Anulada</option>
      </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_mat" value="" class="form-control" placeholder="Ingrese el nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">OBSERVACIONES:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="observaciones_mat" value="" class="form-control" placeholder="Ingrese sus observaciones" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">ESTADO:</label>
      </div>
    <div class="col-md-7">
      <select class="form_control" name="estado_mat" required>
        <option value="">-----Seleccione el tipo-----</option>
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
      </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('matriculas/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
