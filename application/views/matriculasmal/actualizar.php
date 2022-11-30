<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR MATRICULA</h3>
    <div class="text-center">
      <a href="<?php echo site_url('matriculas/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($matriculaEditar): ?>
        <form class="" action="<?php echo site_url('matriculas/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_mat" value="<?php echo $matriculaEditar->id_mat; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">TIPO:</label>
              </div>
            <div class="col-md-7">
              <select class="form_control" name="tipo_mat" required>
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
                <input type="text" name="nombre_mat" value="<?php echo $matriculaEditar->nombre_mat; ?>" class="form-control" placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">OBSERVACIONES:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="observaciones_mat" value="<?php echo $matriculaEditar->observaciones_mat; ?>" class="form-control" placeholder="Ingrese sus observaciones" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">ESTADO:</label>
              </div>
            <div class="col-md-7">
              <select class="form_control" name="estado_mat" required>
                <option value="">-----Seleccione el estado-----</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
              </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
                <a href="<?php echo site_url('matriculas/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró la matrícula :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
