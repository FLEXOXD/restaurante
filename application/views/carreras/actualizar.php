<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR CARRERA</h3>
    <div class="text-center">
      <a href="<?php echo site_url('carreras/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($carreraEditar): ?>
        <form class="" action="<?php echo site_url('carreras/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_car" value="<?php echo $carreraEditar->id_car; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="nombre_car" value="<?php echo $carreraEditar->nombre_car; ?>" class="form-control" placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DECANO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="decano_car" value="<?php echo $carreraEditar->decano_car; ?>" class="form-control" placeholder="Ingrese el nombre del decano" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">FACULTAD:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="facultad_car" value="<?php echo $carreraEditar->facultad_car; ?>" class="form-control" placeholder="Ingrese la facultad" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">BLOQUE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="bloque_car" value="<?php echo $carreraEditar->bloque_car; ?>" class="form-control" placeholder="Ingrese el bloque" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">TELÉFONO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="telefono_car" value="<?php echo $carreraEditar->telefono_car; ?>" class="form-control" placeholder="Ingrese el teléfono" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('carreras/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró la carrera :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
