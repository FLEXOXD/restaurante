<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA MATRÍCULA
</legend>
<form class="" action="<?php echo site_url('matriculas/guardarMatricula'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">ESTUDIANTE:</label>
      </div>
    <div class="col-md-7">
      <select class="form_control" name="fk_id_est" id="fk_id_est" required>
        <option value="">-----Seleccione el estudiante-----</option>
        <?php if ($listadoEstudiantes): ?>
          <?php foreach ($listadoEstudiantes->result()
          as $estudianteTemporal): ?>
          <option value="<?php echo $estudianteTemporal->id_est; ?>">
            <?php echo $estudianteTemporal->apellido_est; ?>
            <?php echo $estudianteTemporal->nombre_est; ?>
          </option>
        <?php endforeach; ?>
      <?php endif; ?>
    </select>
    </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">ASIGNATURA:</label>
      </div>
    <div class="col-md-7">
      <select class="form_control" name="fk_id_asig" id="fk_id_asig" required>
        <option value="">-----Seleccione la asignatura-----</option>
        <?php if ($listadoAsignaturas): ?>
          <?php foreach ($listadoAsignaturas->result()
          as $asignaturaTemporal): ?>
          <option value="<?php echo $asignaturaTemporal->id_asig; ?>">
            <?php echo $asignaturaTemporal->nombre_asig; ?>
          </option>
        <?php endforeach; ?>
      <?php endif; ?>
      </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FECHA:</label>
      </div>
    <div class="col-md-7">
        <input type="DATE" name="fecha_mat" id="fecha_mat" value="" class="form-control" placeholder="Ingrese la fecha" required>
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
