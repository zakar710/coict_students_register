<?php

$usr = "root";

$pwd  = "";

$db   = "students_coict";

$host = "localhost";

$conn = mysqli_connect($host,$usr,$pwd,$db);

if (!$conn) {

 echo("ERROR: " . mysqli_error()

 . "\n");

}



?>
