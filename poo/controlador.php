<?php
require_once('modelo.php');

//crear un nuevo funcionario
if (isset($_POST['insertar'])) {
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$clave=$_POST['clave'];
	$email=$_POST['email'];
	
	
$datos_nuevo_funcionario=array(
  'nombre'=>$nombre,
  'apellido'=>$apellido,
  'email'=>$email,
  'clave'=>$clave
  
);
$funcionario2= new Usuario();
$funcionario2->set($datos_nuevo_funcionario);
$funcionario2->get($datos_nuevo_funcionario['email']);

print $funcionario2->nombre.''.$funcionario2->apellido.'<br>El usuario ha sido  creado con éxito <br>';

}
//traer datos de un funcionario
if (isset($_POST['consultar'])) {
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$clave=$_POST['clave'];
	$email=$_POST['email'];
	

$funcionario = new Usuario();
$funcionario->get($email);
print $funcionario->nombre.' '.$funcionario->apellido.'El ususario si existe <br>';
}

if (isset($_POST['eliminar'])) {
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$clave=$_POST['clave'];
	$email=$_POST['email'];
	

//eliminar funcionario
$funcionario4= new Usuario();
$funcionario4->get($email);
$funcionario4->delete($email);
print $funcionario4->nombre.' '.$funcionario4->apellido.'El usuario ha  sido eliminado correctamente <br>';
}

//editar datos de un funcionario
if (isset($_POST['editar'])) {
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$clave=$_POST['clave'];
	$email=$_POST['email'];
	

$datos_usuario_editados=array(
 'nombre'=>$nombre,
  'apellido'=>$apellido,
  'email'=>$email,
  'clave'=>$clave
  
);

$funcionario3=new Usuario();
$funcionario3->edit($datos_usuario_editados);
$funcionario3->get($datos_usuario_editados['email']);
print $funcionario3->nombre.' '.$funcionario3->apellido.'ha sido editado <br>';

} 
?>
