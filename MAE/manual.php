<?php
// Ruta del archivo
$archivo = 'C:\xampp\htdocs\Integrador\MAE\Manual.pdf';

// Nombre que tendrá el archivo cuando se descargue
$nombre_archivo = 'Manual.pdf';

// Definir las cabeceras para forzar la descarga
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $nombre_archivo . '"');

// Leer el archivo y enviar su contenido al navegador
readfile($archivo);

// Asegurar que el archivo se descargue completamente antes de redirigir
flush();
ob_flush();

// Redirigir a la página principal después de descargar el archivo
header('Location: interfaz_usuario.php');
exit; // Asegura que el script se detenga aquí para evitar cualquier salida adicional
?>