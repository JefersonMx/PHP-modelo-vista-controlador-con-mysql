<?php
	abstract class Conexion{

	  private static $db_host='localhost';
	  private static $db_user='root';
	  private static $db_pass='';	

	  protected $db_name='mydb';
	  protected $query;
	  protected $row=array();

	  private $conn;
	  public $mensaje='Todo bien :)';

	 //Métodos abstractos del crud, es decir consultas.
	  abstract protected function get();
	  abstract protected function set();
	  abstract protected function edit();
	  abstract protected function delete();

		  //Conectarse a la base de datos.s
		  private function abrir_conexion(){
		 	    $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
		    }
		  //Desconectar la base de datos
		  private function cerrar_conexion(){
		  		$this->conn->close();
		    }

		  protected function ejecutar_query (){
		      if ($_POST){
		       	 	$this->abrir_conexion();
		        	$this->conn->query($this->query);
		        	$this->cerrar_conexion();
		      }
		      else {
		       		 $this->mensaje="No se pudo ejecutar la consulta conrrectamente, por favor revisela de nuevo";
		      }
		  }

		  //Mostrar los resultados de la consulta.
		  protected function resultado_query(){
		    $this->abrir_conexion();
		    $resultado=$this->conn->query($this->query);

		    while ($this->rows[] = $resultado->fetch_assoc());
		    $resultado->close();
		    $this->cerrar_conexion();
		    array_pop($this->rows);
		  }
	}
?>
