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

    if(isset($_POST['ID']) && isset($_POST['IDMaquina']) && isset($_POST['Problema']) && isset($_POST['CorreoElectronico']))
    {
        $id = $_POST['ID'];
        $id_maquina = $_POST['IDMaquina'];
        $problema = $_POST['Problema'];
        $correoelectronico = $_POST['CorreoElectronico'];
        $_SESSION['ID'] = $id
    
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

        $sql_consulta = "SELECT MAX(IDSoporte) AS max_id FROM SoporteTecnico";
        $result_consulta = mysqli_query($conn, $sql_consulta);
        $ultimo_id = mysqli_fetch_assoc($result_consulta)['max_id'];
        $nuevo_id = $ultimo_id + 1;

        date_default_timezone_set('America/Mexico_City');
        $fecha = date('Y-m-d H:i:s');


        $sql_insertar = "INSERT INTO SoporteTecnico (IDSoporte, ID, IDMaquina, Fecha, Problema, CorreoElectronico)
        VALUES ('$nuevo_id', '$id', '$id_maquina', '$fecha', '$problema', '$correoelectronico')";


           if($conn->query($sql_insertar) === TRUE)
           {
            echo '<h2>Información guardada</h2>';
             echo '<div class="datos">';
             echo '<p><strong>ID de soporte:</strong> '.$nuevo_id.' </p>';
             echo '<p><strong>ID del usuario:</strong> '.$id.' </p>';
             echo '<p><strong>ID de la máquina:</strong> '.$id_maquina.' </p>';
             echo '<p><strong>Problema:</strong> '.$problema.' </p>';
             echo '<p><strong>Fecha:</strong> '.$fecha.' </p>';
             echo '<p><strong>Correo Electrónico:</strong> '.$correoelectronico.' </p>';
             echo '<p><strong>Información:</strong> Enviada con éxito. </p>';
             echo '</div>';
           }
           else
           {
            echo "Error en la inserción: " . mysqli_error($conn);
           }
    }

    ?>
</div>
</body>
</html>


<?php
    $conn->close();
?>

