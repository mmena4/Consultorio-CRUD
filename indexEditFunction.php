<?php

require("Database.php");

$queryToModify = showItem($_GET['id']); 

function showItem($id) {

    $db = new App\Database();
 
    $query = $db->mysql->query("SELECT * FROM `citasconsultorio` WHERE id = {$id}");

    $result = $query->fetchAll();

    return $result[0];

}


$updateItem = updateItem($_GET['id']);

function updateItem($id) {

    $db = new App\Database();
 
$query = $db->mysql->query("UPDATE `citasconsultorio` SET name='$name', subjet='$subject' WHERE id={$id}");

    $result = $query->fetchAll();

    if (isset($_POST['update'])) {
        
        $name = $_POST['name'];
        $subject = $_POST['subject'];

    mysqli_query($db, "id");

    $_SESSION['message'] = "Address updated!";
    
    header('location: index.php');

}

} 


?>
