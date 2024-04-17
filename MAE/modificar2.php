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

            if (isset($_POST['ID'])) 
            {
                $id = $_POST['ID'];
                if (!empty($id)) 
                {
                        $Nombre = $_POST['Nombre'];
                        $Apellido_P = $_POST['Apellido_P'];
                        $Apellido_M = $_POST['Apellido_M'];
                        $Edad = $_POST['Edad'];
                        $NumeroTelefonico = $_POST['NumeroTelefonico'];
                        $Localidad = $_POST['Localidad'];
                        $IDMaquina = $_POST['IDMaquina'];

                            $sql_actualizar = "UPDATE Usuarios SET
                                    ID = '$id',                    
                                    Nombre = '$Nombre',
                                    Apellido_P = '$Apellido_P',
                                    Apellido_M = '$Apellido_M',
                                    Edad = '$Edad',
                                    NumeroTelefonico = '$NumeroTelefonico',
                                    Localidad = '$Localidad',
                                    IDMaquina = '$IDMaquina'
                                    WHERE ID = '$id'";

                            $result_actualizar = mysqli_query($conn, $sql_actualizar);
            
                            if ($conn->query($sql_actualizar) === TRUE) 
                            {
                                echo '<div style = "' . $estilos . '"> <p> Datos actualizados correctamente </p> </div><br>';
                            } else {
                                echo '<div style = "' . $estilos . '"> <p> Error al actualizar los datos: ' . $conn->error . ' </p> </div><br>';
                            }
                        }
                        else
                        {
                            echo '<div style = "' . $estilos . '"> <p> Tu campo está vacío, por favor llénalo </p> </div><br>';
                        }
            } 
            else 
            {
            echo '<div style = "' . $estilos . '"> <p> No se encontraron datos para el ID proporcionado </p> </div><br>';
            }
                 
                    
            
            
            $conn->close();
            ?>
                       

<!DOCTYPE html>
<html>
<head>
    <title>Consulta y Tabla PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }


        a:hover {
            background-color: #0056b3;
        }

        body {
            text-align: center;
        }
    </style>
</head>
<body>

<?php


        echo "<table>";
      echo "<tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Edad</th>
            <th>Número Telefónico</th>
            <th>Localidad</th>
            </tr>";
        echo "<tr>";
        echo "<td>" .$Nombre. "</td>";
        echo "<td>" .$Apellido_P. "</td>";
        echo "<td>" .$Apellido_M. "</td>";
        echo "<td>" .$Edad."</td>";
        echo "<td>" .$NumeroTelefonico. "</td>";
        echo "<td>" .$Localidad. "</td>";
        echo "</tr>";
    
    echo "</table>";


?>
<a href="usuarios.php">Regresar al usuario</a>
</body>
</html>

