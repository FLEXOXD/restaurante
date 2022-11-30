<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO PEDIDO
</legend>
<form class="" action="<?php echo site_url('pedidos/guardarPedido'); ?>" method="post">
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
        <label for="">MESA:</label>
      </div>
    <div class="col-md-7">
      <select class="form_control" name="fk_id_mesa" id="fk_id_mesa" required>
        <option value="">-----Seleccione la mesa-----</option>
        <?php if ($listadoMesas): ?>
          <?php foreach ($listadoMesas->result()
          as $mesaTemporal): ?>
          <option value="<?php echo $mesaTemporal->id_mesa; ?>">
            <?php echo $mesaTemporal->numero_mesa; ?>
          </option>
        <?php endforeach; ?>
      <?php endif; ?>
      </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('pedidos/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
