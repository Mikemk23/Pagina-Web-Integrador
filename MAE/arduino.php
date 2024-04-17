<?php
// Ruta del archivo
$archivo = 'C:\xampp\htdocs\Integrador\MAE\Arduino.txt';

// Nombre que tendrá el archivo cuando se descargue
$nombre_archivo = 'Arduino.txt';

// Definir las cabeceras para forzar la descarga
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $nombre_archivo . '"');

// Leer el archivo y enviar su contenido al navegador
readfile($archivo);

// Asegurar que el archivo se descargue completamente antes de redirigir
flush();
ob_flush();

// Redirigir a la página principal después de descargar el archivo
header('Location: maquina.php');
exit; // Asegura que el script se detenga aquí para evitar cualquier salida adicional
?>

