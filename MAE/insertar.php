<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
$ID = $_SESSION['IDRegistro'];
$USUARIO = $_SESSION['ID']; 

$NombreServer = "localhost";
$Usuario = "root";
$Password = "";
$NombreBD = "MAE";
    
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

    if(isset($_POST['ID']) && isset($_POST['Nombre']) && isset($_POST['Apellido_P']) && isset($_POST['Apellido_M'])
    && isset($_POST['Edad']) && isset($_POST['NumeroTelefonico']) && isset($_POST['Localidad']) && isset($_POST['IDMaquina']))
    {
        $id = $_POST['ID'];
        $nombre = $_POST['Nombre'];
        $apellido_paterno = $_POST['Apellido_P'];
        $apellido_materno = $_POST['Apellido_M'];
        $edad = $_POST['Edad'];
        $numero_telefonico = $_POST['NumeroTelefonico'];
        $localidad = $_POST['Localidad'];
        $id_maquina = $_POST['IDMaquina'];
        $_SESSION['ID'] = $id;

        if(!empty($id) && !empty($nombre) && !empty($apellido_paterno) && !empty($apellido_materno) && !empty($edad) && !empty($numero_telefonico)
        && !empty($localidad) && !empty($id_maquina))
        {

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Información Registrada</title>
  <link rel="stylesheet" href="css\xd2.css">
</head>
<body>
  <div class="container">
    <?php 
           $sql_insertar = "INSERT INTO Usuarios (ID, Nombre, Apellido_P, Apellido_M, Edad, NumeroTelefonico, Localidad, IDMaquina)
            VALUES ('$id', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad','$numero_telefonico', '$localidad', '$id_maquina')";


           if($conn->query($sql_insertar) === TRUE)
           {
            echo '<h2>Información registrada</h2>';
             echo '<div class="datos">';
             echo '<p><strong>ID de Usuario:</strong> '.$id.' </p>';
             echo '<p><strong>Nombre:</strong> '.$nombre.' </p>';
             echo '<p><strong>Apellido paterno:</strong> '.$apellido_paterno.' </p>';
             echo '<p><strong>Apellido materno:</strong> '.$apellido_materno.' </p>';
             echo '<p><strong>Edad:</strong> '.$edad.' </p>';
             echo '<p><strong>Numero telefónico:</strong> '.$numero_telefonico.' </p>';
             echo '<p><strong>Localidad:</strong> '.$localidad.' </p>';
             echo '<p><strong>ID de Maquina:</strong> '.$id_maquina.' </p>';
             echo '<p><strong>Datos:</strong> Guardados </p>';
             echo '</div>';
           }
           else
           {
            echo "Error en la inserción: " . mysqli_error($conn);
           }
        }
        else
        {
            echo '<div style = "' .$estilos. '" class="datos"> <p> Un campo u otros campos estan vacios </p> </div><br>';
        }

    }

    ?>
</div>
</body>
</html>


<?php
    $conn->close();
?>

