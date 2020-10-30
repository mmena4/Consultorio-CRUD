<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new request</title>
</head>
<body>

<h1>New Request</h1>

<form action="indexNewFunction.php" method="post">
    <label for="name">Name: </label>
    <input type="text" id="name" required placeholder="Enter your name" name="name">
    <label for="subject">Subject: </label>
    <input type="text" id="subject" required placeholder="Describe your issue" name="subject">
    <input type="submit" value="Submit">
    <input type="reset"  value="Reset">
    <a href="indexList.php"><input type="button" value="Cancel"></a>

</form>

    
</body>
</html>