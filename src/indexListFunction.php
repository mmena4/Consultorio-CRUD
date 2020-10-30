<?php

require ("Database.php");

$database = new App\Database();

$coders = $database->mysql->query("SELECT * FROM `citasconsultorio` ");

echo "<table>

<tr> 
    <th>Id</th>
    <th>Name</th>
    <th>Subject</th>
    <th>Creation Date</th>
</tr>";    

/*hacer que cada boton edit y delete coja id de su item de la lista*/
foreach ($coders as $coder) {
    echo "
    <tr>
        <td> {$coder["id"]} </td>
        <td> {$coder["name"]}</td>
        <td>{$coder["subject"]}</td>
        <td>{$coder["date_and_time"]}</td>
        <td><a href='indexEdit.php'><input type='button' value='EDIT'></a></td>
        
        <td><a href='indexEdit.php'><input type='button' value='DELETE'></a></td>
    </tr>";
}
echo "</table>";

?>

<a href="indexNew.php"><input type="button" value="NEW REQUEST"></a>


