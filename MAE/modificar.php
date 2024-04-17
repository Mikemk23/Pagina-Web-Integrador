<?php
session_start();
$ID = $_SESSION['IDRegistro'];
$USUARIO = $_SESSION['ID'];

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

                                                         
                    $sql_consulta = "SELECT ID, Nombre, Apellido_P, Apellido_M, Edad, NumeroTelefonico,
                    Localidad, IDMaquina FROM Usuarios WHERE ID = '$USUARIO'";
                    $result_consulta = mysqli_query($conn, $sql_consulta);

                    $data = array();
                    if ($row = mysqli_fetch_assoc($result_consulta))
                       {                        
                         $id = $row['ID'];                     
                         $Nombre = $row['Nombre'];
                         $Apellido_P = $row['Apellido_P'];
                         $Apellido_M = $row['Apellido_M'];                     
                         $Edad = $row['Edad'];
                         $NumeroTelefonico = $row['NumeroTelefonico'];
                         $Localidad = $row['Localidad'];
                         $IDMaquina = $row['IDMaquina'];
                       }

                       ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    h1 {
      text-align: center;
    }
    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid black;
      border-radius: 5px;
    }
    input, select {
      display: block;
      margin-bottom: 10px;
      width: 95%;
      padding: 8px;
      font-size: 16px;
      border: 1px solid black;
      border-radius: 5px;
      background-color: black;
      color: white;
    }
    label
    {
        color: yellow;
    }
    input[type="submit"], input[type="reset"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: auto;
      display: inline-block; 
      margin-right: 10px; 
    }
    input[type="submit"]:hover, input[type="reset"]:hover {
      background-color: #45a049;
    }
    .back-link {
      text-align: center;
      margin-top: 20px;
    }
    .back-link a {
      color: #007BFF;
      text-decoration: none;
      font-size: 14px;
    }
    .back-link a:hover {
      text-decoration: underline;
      color: purple;
    }

  </style>
</head>
<body background="fondo de sesion.jpg">


  <h1>Formulario de Registro</h1>
  <form action="modificar2.php" method="POST">

    <label for="ID">ID:</label>
    <input type="text" id="ID" name="ID" maxlength="4" value="<?php echo $USUARIO; ?>" readonly>

    <label for="Nombre">Nombre:</label>
    <input type="text" id="Nombre" name="Nombre" maxlength="50" value="<?php echo $Nombre; ?>">

    <label for="Apellido_P">Apellido Paterno:</label>
    <input type="text" id="Apellido_P" name="Apellido_P" maxlength="20" value="<?php echo $Apellido_P; ?>">

    <label for="Apellido_M">Apellido Materno:</label>
    <input type="text" id="Apellido_M" name="Apellido_M" maxlength="20" value="<?php echo $Apellido_M; ?>">

    <label for="Edad">Edad:</label>
    <input type="text" id="Edad" name="Edad" maxlength="2" value="<?php echo $Edad; ?>">

    <label for="NumeroTelefonico">Numero Telefónico:</label>
    <input type="numer" id="NumeroTelefonico" name="NumeroTelefonico" value="<?php echo $NumeroTelefonico; ?>">

    <label for="Localidad">Localidad:</label>
    <input type="text" id="Localidad" name="Localidad" maxlength="100" value="<?php echo $Localidad; ?>">

    <label for="IDMaquina">ID de Máquina:</label>
    <input type="number" id="IDMaquina" name="IDMaquina" maxlength="5" value="<?php echo $IDMaquina; ?>" readonly>

    <input type="submit" value="Actualizar" name="actualizar">
    <input type="reset" value="Limpiar">
  </form>
  
  <div class="back-link">
    <a href="modificar.html">Regresar</a>
  </div>
</body>
</html>

<?php

$conn->close();             

?>

