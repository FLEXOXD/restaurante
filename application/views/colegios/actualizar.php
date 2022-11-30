<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR COLEGIOS</h3>
    <div class="text-center">
      <a href="<?php echo site_url('colegios/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($colegioEditar): ?>
        <form class="" action="<?php echo site_url('colegios/procesarActualizacion'); ?>" method="post">
          <center> <input type="hidden" name="id_mkd" value="<?php echo $colegioEditar->id_mkd; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="nombre_mkd" value="<?php echo $colegioEditar->nombre_mkd; ?> " class="form-control" placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DIRECTOR:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="director_mkd" value="<?php echo $colegioEditar->director_mkd; ?> " class="form-control" placeholder="Ingrese el director" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DIRECCIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="direccion_mkd" value="<?php echo $colegioEditar->direccion_mkd; ?> " class="form-control" placeholder="Ingrese la dirección" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">CORREO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="correo_mkd" value="<?php echo $colegioEditar->correo_mkd; ?> " class="form-control" placeholder="Ingrese el correo" required>
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
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró el colegio :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
