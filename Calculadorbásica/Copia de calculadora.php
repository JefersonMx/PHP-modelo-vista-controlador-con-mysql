<html>  
<head>  
<title>Calculadora</title> 
<style type="text/css">
	table{border-radius: 10px;}
	td{border-radius: 10px;}
	tr{border-radius: 10px;}
	input{border-radius: 20px}
	h1{border: 2px;border-color: red; border-radius: 20px}
	body{width: 95%;height: 95%}
	div{height: 25.5%}
	img{height: 250px;width: 300px}
	b{height: 30%}
	</style> 
</head>  

<body bgcolor="#cccccc">
<center>
	<marquee>
<header><h1><font face="Tahoma">Calculadora Automática 8000ms </font></h1></header>

</marquee>
<br>
<br>
<div><table border="1" bgcolor="#45645645" borderadio="5">
<form method="POST"> 
	<tr>
		<td>	
    <p> <input type="text" name="txt1" size="20" placeholder="Primer Valor"> </p> 
    <p> <input type="text" name="txt2" size="20" placeholder="Segundo Valor"> </p> 
		</td>
		<td>
    <p><input type="submit" value="Calcular" name="Calcular" onClick="Calcular" ></p> 
    <p><input type="button" value="Nueva Operacion" onClick="window.location='calculadora.php'"></p>
 		</td>
<td>
<?php

if (isset($_REQUEST['Calcular'])){ 

$valor1 = $_REQUEST['txt1']; 
$valor2 = $_REQUEST['txt2'];

if ($valor1==false){
	echo "Usted ha ingresado en la primera casilla un valor 0 o no ha ingresado un valor en ella. <br>"; 
}
if ($valor2==0){
	echo "La division por 0 no existe o no ha ingresado un valor en la segunda casilla.<br>";
}else{
	echo "<br> Resultados de la operación:<br>";

	$div = $valor1 / $valor2 ;
	$suma = $valor1 + $valor2 ; 
	$resta = $valor1 - $valor2 ; 
	$mult = $valor1 * $valor2 ; 

		echo "$valor1 + $valor2 = $suma";
		echo "<br> "; 

		echo "$valor1 - $valor2 = $resta";
		echo "<br> "; 

		echo "$valor1 * $valor2 = $mult";
		echo "<br> "; 

		if ($valor2<=0){
			echo "La division por cero no existe";
		}else{
			echo "$valor1 / $valor2 = $div";
			echo "<br> ";
		}
}
}
?> 
</td>
</tr>
</form>
</table>
</div>
<div><img src="/usco.jpg" border="1"></div>
<br>
<br>
<br>
<br><br><br>
<b><footer>create by: Jeferson Andrès Sanabria-20152139538 <br>
Juan David Chimbaco Herrera-20152141144</footer></b>
</center>
</body> 
</html> 