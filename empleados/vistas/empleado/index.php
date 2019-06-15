<?php require_once '../../modelos/empleado.php' ?>
<?php require_once 'inic/header.php' ?>
<div class="col-md-8 offset-md-3">
  <span class="anchor" </span>
  <hr class="mb-5">
                   <!-- form card register -->
                   <div class="card card-outline-secondary">

                       <div class="card-header">
                           <h3 class="mb-0">empleados</h3>
                           <a href="agregar.php" class="btn btn-success btn-lg float-right" role="button"><i class="fas fa-plus-circle"></i>agregar</a>

                       </div>

                       <div class="container">

                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Email</th>
                              <th>Sexo</th>
                              <th>Area</th>
                              <th>descripcion</th>
                              <th>modificar</th>
                              <th>Eliminar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <?php foreach (empleado::listar() as $fila) { ?>
                              <td><?= $fila[1] ?></td>
                              <td><?= $fila[2] ?></td>
                              <td><?= $fila[3] ?></td>
                              <td><?= $fila[4] ?></td>
                              <td><?= $fila[5] ?></td>
                              <td>
                              <a href="editar.php?id=<?=$fila[0]?>" role="button"><i class="fas fa-edit"></i></a>
                              </td>
                              <td>
                              <a  href="../../controladores/empleados.php?a=eliminar&id=<?=$fila[0]?>" onclick="return confirm('¿Desea eliminar?')"><i class="fas fa-trash-alt"></i></a>
                              </td>

                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                       </div>
                   </div>


<?php require_once 'inic/footer.php' ?>
