<!DOCTYPE html>
<html lang="es">
    <meta charset="utf-8">
    <head>
     <title>Consulta de datos</title>
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
     <link href='tema.css' rel="stylesheet" type="text/css" href="">

    </head>
  <body>
    <form method="POST" action="controlador.php" class="login">
      <h2>Registrate</h2>
      <input name="nombre" placeholder='Nombre' type='text'>
      <input name="apellido" placeholder='Apeliido' type='text'>
      <input name="clave" id='pw' placeholder='Clave' type='password'>
      <input name="email" placeholder='Dirección E-mail' type='text'><br></br>
        
      <input name="insertar"  class='animated' type='submit' value='Registrar'><br></br>
      <input name="consultar" class='animated' type='submit' value='Consultar' onClick="window.location = 'consulta.php';"><br></br>
      <input name="edita" class='animated' type='submit' value='Editar'> <br></br>
      <input name="eliminar" class='animated' type='submit' value='Eliminar'>

    </form>
  </body>
</html>