<?php
session_start();
$NombreServer = "localhost";
$Usuario = "root";
$Password = "";
$NombreBD = "MAE";

error_reporting(0);
ini_set('display_errors', 0);
    
$conn = new mysqli($NombreServer, $Usuario, $Password, $NombreBD);
    
if ($conn -> connect_error) 
{
    die("Conexión fallida: " . $conn->connect_error);
}


$estilos = 'background-image: linear-gradient(to bottom right, #1e90ff, #87cefa);
    color: #ffffff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    font-size: 18px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    max-width: 400px;';

    #----------------------------------------------------------------------------


    if (isset($_POST['IDSesion']) && isset($_POST['PassSesion'])) 
    {
    $condicion_id = $_POST['IDSesion'];
    $condicion_password = $_POST['PassSesion'];

    date_default_timezone_set('America/Mexico_City');
    $fecha_iniciada = date('Y/m/d');
    $tiempo_iniciada = date('H:i:s');                    
                                
    
    $sql = "SELECT IDRegistro, PassRegistro FROM Registro WHERE IDRegistro = '$condicion_id' ";
    $result = mysqli_query($conn, $sql);
    
        
    $sql2 = "INSERT INTO InicioSesion (IDSesion, PassSesion, FechaInicio, HoraInicio) 
    VALUES ('$condicion_id', '$condicion_password', '$fecha_iniciada', '$tiempo_iniciada')";
    
    
    if (!empty($condicion_id) && !empty($condicion_password)) 
    {
               $data = array();
               if ($row = mysqli_fetch_assoc($result))
                  {
                    $valor_id = $row['IDRegistro'];
                    $valor_password = $row['PassRegistro'];
                    $_SESSION['IDRegistro'] = $valor_id;
                    $_SESSION['PassRegistro'] = $valor_password;
                  }        
    }

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Información Registrada</title>
      <link rel="stylesheet" href="xd2.css">
    </head>
    <body>

    <style>
        a
        {
            text-decoration: none;
            color: purple;
            text-align: center;
        }
    </style>
      <div class="container">

      <?php

if($condicion_id == $valor_id)
{
    echo '<h2>Información de sesión</h2>';
    echo '<div class="datos">';
    echo '<p><strong>ID de Sesion:</strong> Correcto </p>';
    echo '</div>';                                                                                                 
}
else
{
    echo '<h2>Información de sesion</h2>';
    echo '<div class="datos">';
    echo '<p><strong>ID de Sesion:</strong> Incorrecto </p>';
    echo '</div>';
}


if($condicion_password == $valor_password)
{
    echo '<div class="datos">';
    echo '<p><strong>Contraseña:</strong> Correcto </p>';
    echo '</div>';
}
else
{
    echo '<div class="datos">';
    echo '<p><strong>Contraseña:</strong> Incorrecto </p>';
    echo '</div>';
}


if($condicion_id == $valor_id && $condicion_password == $valor_password)
{                                                
    if($conn->query($sql2) === TRUE )
       {

        echo '<div class="datos">';
        echo '<p><strong>Datos:</strong> Guardados </p>';
        echo '<p><strong>Fecha Iniciada:</strong> '.$fecha_iniciada.' </p>';
        echo '<p><strong>Hora Iniciada:</strong> '.$tiempo_iniciada.' </p>';
        echo '<p style="text-align: center;"> <a href="usuario.php">Ir a la pagina</a></p>';
        echo '</div>';                                                                                   
       }
}


if($condicion_id == $valor_id && $condicion_password != $valor_password)
{
        echo '<div class="datos">';
        echo '<p><strong>Datos:</strong> No guardados </p>';
        echo '<p><strong>Sugerencia:</strong> El ID o la Contraseña están mal, revisalas </p>';
        echo '</div>';    
}                
    }
    else
    {
        echo '<div style = "' .$estilos. '" <p> Un campo o varios de ellos estan vacios, llenalos </p> </div><br>';
    }

    $conn->close();

    ?>
    </div>
    </body>
    </html>