<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR MESA</h3>
    <div class="text-center">
      <a href="<?php echo site_url('mesas/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($mesaEditar): ?>
        <form class="" action="<?php echo site_url('mesas/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_mesa" value="<?php echo $mesaEditar->id_mesa; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NÚMERO:</label>
              </div>
            <div class="col-md-7">
                <input type="number" name="numero_mesa" value="<?php echo $mesaEditar->numero_mesa; ?>" class="form-control" placeholder="Ingrese el número de mesa" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('mesas/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró la mesa :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
