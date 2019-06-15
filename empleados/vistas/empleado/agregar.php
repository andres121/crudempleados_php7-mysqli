
<?php require_once '../../modelos/empleado.php' ?>
<?php require_once 'inic/header.php' ?>
<div class="col-md-6 offset-md-3">
                   <span class="anchor" id="formRegister"></span>
                   <hr class="mb-5">

                   <!-- form card register -->
                   <div class="card card-outline-secondary">
                       <div class="card-header">
                           <h3 class="mb-0">registrar</h3>
                       </div>
                       <div class="card-body">
                           <form class="form" action="../../controladores/empleados.php?a=agregar"  method="post">
                               <div class="form-group">
                                   <label for="nombre">nombre *</label>
                                   <input type="text" name="nombre"class="form-control" id="nombre" placeholder="nombre" required>
                               </div>
                               <div class="form-group">
                                   <label for="correo">correo *</label>
                                   <input type="email" name="email" class="form-control" id="correo" placeholder="correo" required>
                               </div>
                               <div class="form-group">
                                   <label for="telefono">sexo *</label>
                                   <div class="form-check">
                                   <label class="form-check-label">
                                     <input type="radio" class="form-check-input" name="sexo" value="mujer">mujer
                                   </label>
                                 </div>
                                 <div class="form-check">
                                   <label class="form-check-label">
                                     <input type="radio" class="form-check-input" name="sexo" value="hombre" >hombre
                                   </label>
                                 </div>
                               </div>
                               <div class="form-group">
                                <label for="area">area *</label>
                                <select class="form-control" id="area" name="area_id" required>
                                  <?php foreach (empleado::selectArea() as $fila): ?>
                                    <option value="<?= $fila[0]?>"><?= $fila[1]?></option>

                                  <?php endforeach; ?>

                                </select>
                              </div>
                                 <div class="form-group">
                                    <label for="descripcion">descripcion *</label>
                                    <textarea class="form-control" name="descripcion" rows="5" id="descripcion" placeholder="descripcion"></textarea>
                                  </div>
                               </div>

                               <div class="form-group">
                                   <button type="submit" class="btn btn-success btn-lg float-right">registrar</button>
                               </div>
                           </form>
                       </div>
                   </div>
                   <!-- /form card register -->

<?php require_once 'inic/footer.php' ?>
