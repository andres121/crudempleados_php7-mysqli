<?php
  require_once 'conexion.php';

  class Empleado{
    public $empleado_id;
    public $nombre;
    public $email;
    public $sexo;
    public $area_id;
    public $descripcion;
    private $conexion;

    public function __construct () {
      $this->empleado_id = 0;
  		$this->nombre = '';
      $this->email = '';
      $this->sexo = '';
      $this->area_id = '';
      $this->descripcion = '';
  		$this->conexion = new Conexion();
	 }

      public function listar()
      {
        $conexion = new Conexion;
        $lista = $conexion->consultar('
           SELECT e.empleado_id, e.nombre, e.email, e.sexo, a.nombre as Area, e.descripcion FROM empleados e
            INNER JOIN areas a ON a.area_id = e.area_id
          ');
        $conexion->cerrar();
        return $lista;
      }

      public function ObtenerID($id)
      {
        $conexion = new Conexion ();
        $lista = $conexion->consultar("
        SELECT e.empleado_id, e.nombre, e.email, e.sexo, a.area_id, a.nombre Area, e.descripcion
        FROM empleados e INNER JOIN areas a ON a.area_id = e.area_id where e.empleado_id = $id"
      );
      $conexion->cerrar();
        return $lista[0];
      }

      public function selectArea()
      {
        $conexion = new Conexion;
        $lista = $conexion->consultar('SELECT * FROM areas');
        $conexion->cerrar();
        return $lista;
      }
      public function agregar()
      {
        $C = "INSERT INTO empleados (nombre, email, sexo,area_id,descripcion)
        VALUES ('$this->nombre' , '$this->email', '$this->sexo', '$this->area_id', '$this->descripcion')";
    		$resultado = $this->conexion->actualizar($C);
        $this->conexion->cerrar();
    		return $resultado;

      }

      public function editar()
      {
        $C = "UPDATE empleados SET nombre = '$this->nombre', email = '$this->email', sexo = '$this->sexo',
        area_id = '$this->area_id', descripcion = '$this->descripcion'
         WHERE empleado_id = $this->empleado_id";
    		$resultado = $this->conexion->actualizar($C);
        $this->conexion->cerrar();
    		return $resultado;
      }

      public function eliminar()
      {

      	$C = "DELETE FROM empleados WHERE empleado_id = $this->empleado_id";
    		$resultado = $this->conexion->actualizar($C);
        $this->conexion->cerrar();
    		return $resultado;
	    }


  }
