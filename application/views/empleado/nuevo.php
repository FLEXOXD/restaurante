<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  NUEVO EMPLEADO
</legend>
<form class="" action="<?php echo site_url('empleados/guardarEmpleado'); ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CÉDULA:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="cedula_est" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="apellido_est" value="" class="form-control" placeholder="Ingrese los dos apellidos" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">APELLIDO:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="nombre_est" value="" class="form-control" placeholder="Ingrese los dos nombres" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TELÉFONO:</label>
      </div>
    <div class="col-md-7">
        <input type="number" name="telefono_est" value="" class="form-control" placeholder="Ingrese el número de teléfono" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DIRECCIÓN:</label>
      </div>
    <div class="col-md-7">
        <input type="text" name="direccion_est" value="" class="form-control" placeholder="Ingrese la dirección" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CORREO:</label>
      </div>
    <div class="col-md-7">
        <input type="date" name="fecha_nacimiento_est" value="" class="form-control" placeholder="Seleccione la fecha de nacimiento" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Guardar</button>
        <a href="<?php echo site_url('estudiantes/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
      </div>
    </div>

</form>
