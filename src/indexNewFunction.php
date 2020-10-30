<?php

use phpDocumentor\Reflection\Location;

require("indexList.php");



if (!empty($_POST)) {
    $database = new App\Database();
    //echo "Enviado por método: POST";
    //var_dump($_POST);
    //echo "NAME: " . $_POST["name"];

    $database->mysql->query("INSERT INTO `citasconsultorio` (`name`,`subject`) VALUES ('{$_POST["name"]}','{$_POST["subject"]}');");
   

    header('Location: indexList.php');
}



?>

