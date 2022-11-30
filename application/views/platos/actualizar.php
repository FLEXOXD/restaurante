<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR PLATO</h3>
    <div class="text-center">
      <a href="<?php echo site_url('platos/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($platoEditar): ?>
        <form class="" action="<?php echo site_url('platos/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_plato" value="<?php echo $platoEditar->id_plato; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="nombre_plato" value="<?php echo $platoEditar->nombre_plato; ?>" class="form-control" placeholder="Ingrese el nombre" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">PRECIO:</label>
              </div>
            <div class="col-md-7">
                <input type="decimal" name="precio_plato" value="<?php echo $platoEditar->precio_plato; ?>" class="form-control" placeholder="Ingrese el precio" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DESCRIPCIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="descripcion_plato" value="<?php echo $platoEditar->descripcion_plato; ?>" class="form-control" placeholder="Ingrese la descripción" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('platos/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró el plato :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
