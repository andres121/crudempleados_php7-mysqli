<?php require_once 'inic/header.php' ?>
<?php
	require_once '../../modelos/empleado.php';
	$empleado = empleado::ObtenerID($_GET['id']);

//print_r($empleado); exit();

?>
<div class="col-md-6 offset-md-3">
                   <span class="anchor" ></span>
                   <hr class="mb-5">

                   <!-- form card register -->
                   <div class="card card-outline-secondary">
                       <div class="card-header">
                           <h3 class="mb-0">editar</h3>
                       </div>
                       <div class="card-body">
												 <form class="form" action="../../controladores/empleados.php?a=editar"  method="post">
													 <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
														 <div class="form-group">
																 <label for="nombre">nombre *</label>
																 <input type="text" name="nombre"class="form-control" id="nombre" value="<?= $empleado[1]?>">
														 </div>
														 <div class="form-group">
																 <label for="correo">correo *</label>
																 <input type="email" name="email" class="form-control" id="correo" value="<?= $empleado[2]?>">
														 </div>
														 <div class="form-group">
																 <label for="telefono">sexo *</label>

																	 <?php if ($empleado[3]=='femenino'): ?>
																		<div class="form-check">
																		 <label class="form-check-label">
 	 																	 <input type="radio" class="form-check-input" name="sexo" value="femenino" checked>femenino
 	 																 </label>
 	 															 </div>
																 <div class="form-check">
																	 <label class="form-check-label">
																		 <input type="radio" class="form-check-input" name="sexo" value="masculino" >masculino
																	 </label>
																 </div>
																   <?php else: ?>
																		 <div class="form-check">
																			<label class="form-check-label">
																				<input type="radio" class="form-check-input" name="sexo" value="femenino" >femenino
																			</label>
																		</div>
																		 <div class="form-check">
																			 <label class="form-check-label">
																				 <input type="radio" class="form-check-input" name="sexo" value="masculino" checked>masculino
																			 </label>
																		 </div>
																	 <?php endif; ?>




														 </div>
														 <div class="form-group">
															<label for="area">area *</label>
															<select class="form-control" id="area" name="area_id">
																<option value="<?= $empleado[4]?>"><?= $empleado[5]?></option>
																<?php foreach (empleado::selectArea() as $fila): ?>

																<option value="<?= $fila[0]?>"><?= $fila[1]?></option>

																<?php endforeach; ?>

															</select>
														</div>
															 <div class="form-group">
																	<label for="descripcion">descripcion *</label>
																	<textarea class="form-control" name="descripcion" rows="5" id="descripcion" >
																		<?= $empleado[6]?>
																	</textarea>
																</div>
														 </div>

														 <div class="form-group">
																 <button type="submit" class="btn btn-success btn-lg float-right">editar</button>
														 </div>
												 </form>
                       </div>
                   </div>
                   <!-- /form card register -->

<?php require_once 'inic/footer.php' ?>
