<?php 

$link = mysqli_connect("localhost","root","","mydb"); 

$result = mysqli_query("SELECT * FROM usuarios", $link); 

if ($row = mysqli_fetch_array($result)){ 

echo "<table border = '1'> \n"; 

echo "<tr> \n"; 

echo "<td><b>Título</b></td> \n"; 

echo "<td><b>Resultados</b></td> \n"; 

echo "</tr> \n"; 

do { 

echo "<tr> \n"; 

echo "<td>".$row["nombre"]."</td> \n"; 
echo "<td>".$row["apellido"]."</td>\n"; 
echo "<td>".$row["email"]."</td>\n";
echo "<td>".$row["id"]."</td>\n"; 

echo "</tr> \n"; 

} while ($row = mysqli_fetch_array($result)); 

echo "</table> \n"; 

} else { 

echo "¡ La base de datos está vacia !"; 

} 

?>