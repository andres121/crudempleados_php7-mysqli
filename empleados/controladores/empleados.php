<?php require_once '../modelos/empleado.php';

          $accion = $_POST['a'] ?? $_GET['a'] ?? '';

          if ($accion != '') {
          	$empleado = new empleado();

          	switch ($accion) {
          		case 'agregar':

          			$empleado->nombre = $_POST['nombre'];
                $empleado->email = $_POST['email'];
                $empleado->sexo = $_POST['sexo'];
                $empleado->area_id = $_POST['area_id'];
                $empleado->descripcion = $_POST['descripcion'];

          			$empleado->agregar();
          			break;
          		case 'editar':
                $empleado->empleado_id = $_POST['id'];
                $empleado->nombre = $_POST['nombre'];
                $empleado->email = $_POST['email'];
                $empleado->sexo = $_POST['sexo'];
                $empleado->area_id = $_POST['area_id'];
                $empleado->descripcion = $_POST['descripcion'];

          			$empleado->editar();
          			break;
          		case 'eliminar':
                $empleado->empleado_id = $_GET['id'];
          			$empleado->eliminar();
          			break;

              }
          }

header('Location: ../vistas/empleado');
