<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Perfil del estudiante</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3">
        <img src="<?php echo URL; ?>Image_data/<?php echo $data['imagen'] ?>" alt="" class="img-responsive">
      </div>
      <div class="col-md-9">
        <ul class="list-group">
          <li class="list-group-item">
            <b>Nombre: </b><?php echo $data['nombre'] ?>
          </li>
          <li class="list-group-item">
            <b>Edad: </b><?php echo $data['edad'] ?>
          </li>
          <li class="list-group-item">
            <b>Promedio: </b><?php echo $data['promedio'] ?>
          </li>
          <li class="list-group-item">
            <b>Sección: </b><?php echo $data['nombre_seccion'] ?>
          </li>
          <li class="list-group-item">
            <b>Fecha de registro: </b><?php echo $data['fecha'] ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
