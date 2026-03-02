<?php
$servername =   "fdb1034.awardspace.net";
$username   =   "4736455_kinder";
$password   =   "L.?G*2M#0}6tCxbN";
$dbname     =   "4736455_kinder";

try {
    // Primera conexión sin especificar DB
    $conn = new PDO("mysql:host=$servername;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Crear DB si no existe
    $sql = "CREATE DATABASE IF NOT EXISTS `$dbname`";
    $conn->exec($sql);
    //echo "La base de datos fue creada con éxito<br>";
 
    // Conectar a la DB específica
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "¡Conexión exitosa!";
    
} catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
} 
?>