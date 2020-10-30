<?php


include ("Database.php");
/*hacer que nos muestre la entrada de la cual hemos picado el boton y luego haga update a esa entrada*/

$datos="SELECT * FROM citasconsultorio";

$id_citasconsultorio=$_POST['citasconsultorio'];

$name= $_POST['name'];
$subject= $_POST['subject'];

$consulta= mysql_query($datos, "UPDATE citasconsultorio SET name=$name, subject=$subject WHERE $id_citasconsultorio='citasconsultorio'");


?>
