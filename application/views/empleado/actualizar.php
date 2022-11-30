<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR EMPLEADO</h3>
    <div class="text-center">
      <a href="<?php echo site_url('empleados/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($empleadoEditar): ?>
        <form class="" action="<?php echo site_url('empleados/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_emp" value="<?php echo $empleadoEditar->id_emp; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">CÉDULA:</label>
              </div>
            <div class="col-md-7">
                <input type="number" name="cedula_emp" value="<?php echo $empleadoEditar->cedula_emp; ?>" class="form-control" placeholder="Ingrese el número de cédula" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="nombre_emp" value="<?php echo $empleadoEditar->nombre_emp; ?>" class="form-control" placeholder="Ingrese los dos nombres" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">APELLIDO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="apellido_emp" value="<?php echo $empleadoEditar->apellido_emp; ?>" class="form-control" placeholder="Ingrese los dos apellidos" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">TELÉFONO:</label>
              </div>
            <div class="col-md-7">
                <input type="number" name="telefono_emp" value="<?php echo $empleadoEditar->telefono_emp; ?>" class="form-control" placeholder="Ingrese el número de teléfono" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DIRECCIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="direccion_emp" value="<?php echo $empleadoEditar->direccion_emp; ?>" class="form-control" placeholder="Ingrese la dirección" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">CORREO:</label>
              </div>
            <div class="col-md-7">
                <input type="date" name="correo_emp" value="<?php echo $empleadoEditar->correo_emp; ?>" class="form-control" placeholder="Seleccione el correo" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('empleados/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró al empleado :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
