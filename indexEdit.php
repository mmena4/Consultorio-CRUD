<?php
require("indexEditFunction.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit Page </title>
</head>
<body>


<h1>Edit Request</h1>



<form action="indexEditFunction.php" method="POST">
    <label for="name">Name: </label>
    <input type="text" id="name" required name="name" value="<?php echo $queryToModify["name"];?>">
    <label for="subject">Subject: </label>
    <input type="text" id="subject" required name="subject" value="<?php echo $queryToModify["subject"];?>">
    <input type="submit" value="CONFIRM.$updateItem">
    <a href="indexList.php"><input type="button" value="Cancel"></a>

</form>



   
</body>
</html>