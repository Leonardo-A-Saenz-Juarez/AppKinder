<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kinder";

try{
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password,
        array(PDO::ATTR_PERSISTENT => true)
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión persistente de PDO exitosa.";

}catch(PDOException $e){
    echo "Conexión terminada: " . $e->getMessage();
}
?>