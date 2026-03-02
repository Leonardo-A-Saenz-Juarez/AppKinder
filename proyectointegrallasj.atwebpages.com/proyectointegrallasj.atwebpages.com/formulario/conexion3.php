<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kinder";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Conexión terminada: " . mysqli_connect_error());
}

echo "Conexión aprovada.";
?>