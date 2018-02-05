<?php $sections = $students->listSections(); ?>
<div class="panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Editar estudiante: <b><?php echo ($data['nombre']) ?></b></h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="<?php echo URL;?>Image_data/<?php echo $data['imagen'] ?>" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nombre" class="control-label">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $data['nombre'] ?>" placeholder="" required>
            <p class="help-block">Modifica el nombre completo</p>
          </div>
          <div class="form-group">
            <label for="edad" class="control-label">Edad</label>
            <input type="number" class="form-control" name="edad" value="<?php echo $data['edad'] ?>" placeholder="" required>
            <p class="help-block">Modifica la edad</p>
          </div>
          <div class="form-group">
            <label for="promedio" class="control-label">Promedio</label>
            <input type="number" step="0.1" class="form-control" name="promedio" value="<?php echo $data['promedio'] ?>" placeholder="" required>
            <p class="help-block">Modifica el promedio promedio</p>
          </div>
          <div class="form-group">
            <label for="imagen" class="control-label"></label>
            <input type="file" class="form-control" name="imagen"  placeholder="" >
            <p class="help-block">Modifica la imagen</p>
          </div>
          <div class="form-group">
            <label for="id_seccion" class="control-label">Sección (<b>Sección actual: <?php echo $data['nombre_seccion'] ?></b>)</label>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="hidden" name="imagen_actual" id="imagen_actual" value="<?php echo $data['imagen'] ?>">
            <select class="form-control" name="id_seccion" id="id_seccion">
              <?php while($row = mysqli_fetch_array($sections)){?>
                <option value="<?php echo $row['id']; ?>" <?php if ($row['nombre']==$data['nombre_seccion']) {
                  echo "selected";
                }?>><?php echo $row['nombre'];?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Editar</button>
            <p class="help-block">Editar alumno</p>
          </div>
        </form>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>
