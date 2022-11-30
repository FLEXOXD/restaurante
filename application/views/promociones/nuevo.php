<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVA PROMOCIÓN
</legend>
<form class="" action="<?php echo site_url('promociones/guardarPromocion'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">PLATO:</label>
      </div>
    <div class="col-md-7">
      <select class="form_control" name="fk_id_plato" id="fk_id_plato" required>
        <option value="">-----Seleccione el plato-----</option>
        <?php if ($listadoPlatos): ?>
          <?php foreach ($listadoPlatos->result()
          as $platoTemporal): ?>
          <option value="<?php echo $platoTemporal->id_plato; ?>">
            <?php echo $platoTemporal->nombre_plato; ?>
          </option>
        <?php endforeach; ?>
      <?php endif; ?>
    </select>
    </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DESCRIPCIÓN:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="descripcion_prom" id="descripcion_prom" value="" class="form-control" placeholder="Ingrese la descripción" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('promociones/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
