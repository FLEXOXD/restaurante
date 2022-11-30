<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR ASIGNATURA</h3>
    <div class="text-center">
      <a href="<?php echo site_url('asignaturas/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($asignaturaEditar): ?>
        <form class="" action="<?php echo site_url('asignaturas/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_asig" value="<?php echo $asignaturaEditar->id_asig; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="nombre_asig" value="<?php echo $asignaturaEditar->nombre_asig; ?> " class="form-control" placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NÚMERO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="numero_asig" value="<?php echo $asignaturaEditar->numero_asig; ?> " class="form-control" placeholder="Ingrese el número de asignatura" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DESCRIPCIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="descripcion_asig" value="<?php echo $asignaturaEditar->descripcion_asig; ?> " class="form-control" placeholder="Ingrese la descripción" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">JORNADA:</label>
              </div>
            <div class="col-md-7">
              <select class="form_control" name="jornada_asig" required>
                <option value="">-----Seleccione la jornada-----</option>
                <option value="Matutina">Matutina</option>
                <option value="Vespertina">Vespertina</option>
                <option value="Nocturna">Nocturna</option>
              </select>
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
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró la asignatura :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
