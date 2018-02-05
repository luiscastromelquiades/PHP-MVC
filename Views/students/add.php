<div class="panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Agregar un nuevo estudiante</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nombre" class="control-label">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" required>
            <p class="help-block">Introduce tu nombre completo</p>
          </div>
          <div class="form-group">
            <label for="edad" class="control-label">Edad</label>
            <input type="number" class="form-control" name="edad" id="edad" placeholder="" required>
            <p class="help-block">Introduce tu edad</p>
          </div>
          <div class="form-group">
            <label for="promedio" class="control-label">Promedio</label>
            <input type="number" step="0.1" class="form-control" name="promedio" id="promedio" placeholder="" required>
            <p class="help-block">Introduce el promedio</p>
          </div>
          <div class="form-group">
            <label for="imagen" class="control-label"></label>
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="" required>
            <p class="help-block">Selecciona una imagen</p>
          </div>
          <div class="form-group">
            <label for="id_seccion" class="control-label">Sección</label>
            <select class="form-control" name="id_seccion" id="id_seccion">
              <?php while($row = mysqli_fetch_array($data)){ ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre'];?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Registrar</button>
            <p class="help-block">Registrar alumno</p>
          </div>
        </form>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>
