<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Listado de Secciones</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_array($data)){ ?>
            <tr>
               <td><?php echo $row['id']; ?></td>
               <td><?php echo $row['nombre']; ?></td>
               <td>
                 <a class="btn btn-warning" href="<?php echo URL;?>sections/edit/<?php echo $row['id'] ?>"><span class="responsive-text"><i class="fa fa-edit" ></i>EDITAR</span></a>
                 <a class="btn btn-danger" href="<?php echo URL;?>sections/delete/<?php echo $row['id'] ?>"><span class="responsive-text"><i class="fa fa-trash" ></i>ELIMINAR</span></a>
               </td>
            </tr>

         <?php } ?>

      </tbody>
    </table>
  </div>
</div>
