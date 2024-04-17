<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambiar si tu servidor de MySQL está en una dirección diferente
$username = "root"; // Cambiar por tu nombre de usuario de MySQL
$password = ""; // Cambiar por tu contraseña de MySQL
$dbname = "valor"; // Cambiar por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos enviados desde Arduino
$temperatura = $_GET['temperatura'];
$humedad = $_GET['humedad'];

// Insertar datos en la base de datos
$sql = "INSERT INTO arduino (humedad, temperatura) VALUES ($humedad, $temperatura)";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>