<?php

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


if (isset($_POST['IDRegistro']) && isset($_POST['PassRegistro'])) 
{
    $IDRegistro = $_POST['IDRegistro'];
    $PassRegistro = $_POST['PassRegistro'];

    $sql = "SELECT IDRegistro FROM Registro WHERE IDRegistro = '$IDRegistro'";
    $result = mysqli_query($conn, $sql);

    
if (!empty($IDRegistro) && !empty($PassRegistro)) 
{
    if (mysqli_num_rows($result) > 0) 
    {
        echo '<div style = "' .$estilos. '" class="datos"> <p> Ese ID ya existe, por favor introduce otro nuevo </p> </div><br>';
    } 
    else
    {    
    $sql2 = "INSERT INTO Registro (IDRegistro, PassRegistro) VALUES ('$IDRegistro', '$PassRegistro')";
    if ($conn->query($sql2) === TRUE) 
    {
        echo '<h2>Información registrada</h2>';
        echo '<div class="datos">';
        echo '<p><strong>ID de Registro:</strong> '.$IDRegistro.' </p>';
        echo '<p><strong>Contraseña:</strong> '.$PassRegistro.' </p>';
        echo '<p><strong>Datos:</strong> Guardados </p>';
        echo '</div>';
    } 
    else 
    {
        echo "Error en la inserción: " . mysqli_error($conn);
    }
    }
        } 
        else
        {
            echo '<div style = "' .$estilos. '" class="datos"> <p> Un campo u otros campos estan vacios </p> </div><br>';
        }        
}

    $conn->close();

?>