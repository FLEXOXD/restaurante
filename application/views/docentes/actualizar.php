<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR DOCENTE</h3>
    <div class="text-center">
      <a href="<?php echo site_url('docentes/index');?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($docenteEditar): ?>
        <form class="" action="<?php echo site_url('docentes/procesarActualizacion'); ?>" method="post">
            <center> <input type="hidden" name="id_doc" value="<?php echo $docenteEditar->id_doc; ?> "> </center>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">CÉDULA:</label>
              </div>
            <div class="col-md-7">
                <input type="number" name="cedula_doc" value="<?php echo $docenteEditar->cedula_doc; ?>" class="form-control" placeholder="Ingrese el número de cédula" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">APELLIDO:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="apellido_doc" value="<?php echo $docenteEditar->apellido_doc; ?>" class="form-control" placeholder="Ingrese los dos apellidos" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="nombre_doc" value="<?php echo $docenteEditar->nombre_doc; ?>" class="form-control" placeholder="Ingrese los dos nombres" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">TELÉFONO:</label>
              </div>
            <div class="col-md-7">
                <input type="number" name="telefono_doc" value="<?php echo $docenteEditar->telefono_doc; ?>" class="form-control" placeholder="Ingrese el número de teléfono" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">DIRECCIÓN:</label>
              </div>
            <div class="col-md-7">
                <input type="text" name="direccion_doc" value="<?php echo $docenteEditar->direccion_doc; ?>" class="form-control" placeholder="Ingrese la dirección" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">FECHA DE NACIMIENTO:</label>
              </div>
            <div class="col-md-7">
                <input type="date" name="fecha_nacimiento_doc" value="<?php echo $docenteEditar->fecha_nacimiento_doc; ?>" class="form-control" placeholder="Seleccione la fecha de nacimiento" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-7">
                <button type="submit" name="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Actualizar</button>
                <a href="<?php echo site_url('docentes/index');?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
              </div>
            </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontró al docente :s</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
