<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO DOCENTE
</legend>
<form class="" action="<?php echo site_url('docentes/guardarDocente'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CÉDULA:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="cedula_doc" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">APELLIDO:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="apellido_doc" value="" class="form-control" placeholder="Ingrese los dos apellidos" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_doc" value="" class="form-control" placeholder="Ingrese los dos nombres" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TELÉFONO:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="telefono_doc" value="" class="form-control" placeholder="Ingrese el número de teléfono" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DIRECCIÓN:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="direccion_doc" value="" class="form-control" placeholder="Ingrese la dirección" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FECHA DE NACIMIENTO:</label>
      </div>
    <div class="col-md-7">
        <input type="date" name="fecha_nacimiento_doc" value="" class="form-control" placeholder="Seleccione la fecha de nacimiento" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('docentes/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>
</form>
