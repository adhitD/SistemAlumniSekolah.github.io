<?php
$serverhost ="localhost";
$username ="root";
$password = "";
$database = "sistemAlumni";

$conn = new mysqli($serverhost, $nama, $password, $database);

if(!$conn){
echo("error");
}
?>
