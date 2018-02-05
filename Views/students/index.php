 <div class="panel panel-success">
   <div class="panel-heading">
     <h3 class="panel-title">Listado de Estudiantes</h3>
   </div>
   <div class="panel-body">
     <table class="table table-striped table-hover">
       <thead>
         <tr>
           <th>Imagen</th>
           <th>Nombre</th>
           <th>Edad</th>
           <th>Sección</th>
           <th>Promedio</th>
           <th>Acciones</th>
         </tr>
       </thead>
       <tbody>
         <?php while($row = mysqli_fetch_array($data)){ ?>
             <tr>
                <td><img src="<?php echo URL;?>Image_data/<?php echo $row['imagen']; ?>"></td>
                <td><a href="<?php echo URL;?>students/view/<?php echo $row['id']; ?>"><?php echo $row['nombre'];?></a></td>
                <td><?php echo $row['edad']; ?></td>
                <td><?php echo $row['nombre_seccion']; ?></td>
                <td><?php echo $row['promedio']; ?></td>
                <td>
                  <a class="btn btn-warning" href="<?php echo URL;?>students/edit/<?php echo $row['id'] ?>"><span class="responsive-text"><i class="fa fa-edit" ></i>EDITAR</span></a>
                  <a class="btn btn-danger" href="<?php echo URL;?>students/delete/<?php echo $row['id'] ?>"><span class="responsive-text"><i class="fa fa-trash" ></i>ELIMINAR</span></a>
                </td>
             </tr>

          <?php } ?>

       </tbody>
     </table>
   </div>
 </div>
