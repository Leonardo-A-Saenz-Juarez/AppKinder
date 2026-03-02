<?php
$servername =   "fdb1034.awardspace.net";
$username   =   "4736455_kinder";
$password   =   "L.?G*2M#0}6tCxbN";
$dbname     =   "4736455_kinder";

//Crear la conexión
$conn   =   new mysqli($servername,$username,$password,$dbname);
//Verificar conexión
if($conn->connect_error){
    die("La conexión fue terminada: ". $conn->connect_error);
}
echo "Bienvenido tu conexión fue aprovada.";

?>