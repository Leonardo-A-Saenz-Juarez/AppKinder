<?php
$servername = "p:localhost"; // la "p:" activa persistencia
$username = "root";
$password = "";
$dbname = "kinder";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Conexión terminada: " . $conn->connect_error);
}

echo "Conexión persistente de MySQLi exitosa.";
?>