<?php
$username = 'root';
$password = '';
$database = 'db';
$mysqli = new mysqli('localhost', $username, $password, $database);

$query = "SELECT * FROM semester";
echo "<b> <center>Database Output</center> </b> <br> <br>";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["semID"];
        $field2name = $row["semester"];
        $field3name = $row["year"];

        echo '<b>'.$field1name.$field2name.'</b><br />';
        echo $field3name.'<br />';
    }

/*freeresultset*/
$result->free();
}