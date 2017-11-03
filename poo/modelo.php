<?php
require_once('conexion.php');
class Usuario extends conexion{
  public $nombre;
  public $apellido;
  public $email;
  public $clave;
  public $id;

    function __construct(){
      $this->db_name='mydb';
    }

    public function get($email_usuario=''){
      if ($email_usuario !=''){
        $this->query="SELECT id,nombre,apellido,email,clave FROM usuarios WHERE email='$email_usuario'";
        $this->resultado_query();
      }
      if (count($this->row)==1){
        foreach ($this->row[0] as $propiedad => $valor) {
          $this->$propiedad=$valor;
        }
        $this->mensaje='Registro encontrado';
      }else{
          $this->mensaje='Registro no encontrado';
        }
      }
      //Insertar datos del usuario
    public function set($datos_usuario=array()){
      if (array_key_exists('email',$datos_usuario)):
        $this->get($datos_usuario['email']);
        if ($datos_usuario['email']!=$this->email):
          foreach ($datos_usuario as $campo => $valor):
            $$campo=$valor;
          endforeach;
          $this->query="INSERT INTO usuarios (nombre, apellido, email, clave) VALUES ('$nombre', '$apellido', '$email', $clave)";
          $this->ejecutar_query();
          $this->mensaje='registro insertado de manera exitosa';
        endif;
      endif;

          }
          //Modificar datos del usuario

    public function edit ($dato_usuario=array()){
      foreach ($dato_usuario as $campo => $valor) {
          $$campo=$valor;
      }
      $this->query="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', clave='$clave' WHERE email='$email'";
      $this->ejecutar_query();
      $this->mensaje='Registro alterado';
       }

    public function delete ($email_usuario=''){
      $this->query="DELETE FROM usuarios WHERE email='$email_usuario'";
      $this->ejecutar_query();
      $this->mensaje='Registro eliminado con éxito';
    }

    function __destruct(){
      unset($this->mensaje);
    }

}
?>
