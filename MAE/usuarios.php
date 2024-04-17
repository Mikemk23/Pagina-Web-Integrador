<?php
session_start();
$ID = $_SESSION['IDRegistro'];

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


    $sql = "SELECT ID, Nombre, Apellido_P, Apellido_M, Edad, NumeroTelefonico,
                    Localidad, IDMaquina FROM Usuarios";
                    $result = mysqli_query($conn, $sql);                    

                    $data = array();
                    if ($row = mysqli_fetch_assoc($result))
                       {
                         $id = $row['ID'];
                         $nombre = $row['Nombre'];
                         $apellido_paterno = $row['Apellido_P'];
                         $apellido_materno = $row['Apellido_M'];                     
                         $edad = $row['Edad'];
                         $numero_telefonico = $row['NumeroTelefonico'];
                         $localidad = $row['Localidad'];
                         $id_maquina = $row['IDMaquina'];
                         $_SESSION['ID'] = $id;
                       }


?>

<html>

<head>
    <link rel="stylesheet" href="css\cssindex.css">
</head>
<header>
    
    <nav>

        <div id="logo">

            <img src="images/MAE.png" width="50" height="60">
            Machine Automatization <br> Enterprise
        </div>
        <label style="color: red;">Información del Usuario</label>
        <div id="utility">
            <a href="interfaz_usuario.php">
            <span class="material-symbols-outlined">
                <img src="https://cdn-icons-png.flaticon.com/128/310/310818.png" width="30" height="30">
            </span>
            </a>
        </div>
    </nav>
    
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
    }

    table {
        border-collapse: collapse;
        width: 80%;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .container button {
        margin: 0 50px; 
    }

    #insertar {
        padding: 10px 20px;
        background-color: lime;
        border: none;
        cursor: pointer;
    }

    #modificar {
        padding: 10px 20px;
        background-color: orange;
        border: none;
        cursor: pointer;
    }

    #eliminar {
        padding: 10px 20px;
        background-color: darkred;
        border: none;
        cursor: pointer;
    }

    button a {
        text-decoration: none;
        color: black;
    }
</style>
    
<div class="container">
    <table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Número Telefónico</th>
                    <th>Localidad</th>
                    <th>ID Máquina</th>
                </tr>
                <tr>
                    <?php
                    echo "<td>".$id."</td>";
                    echo "<td>".$nombre."</td>";
                    echo "<td>".$apellido_paterno."</td>";
                    echo "<td>".$apellido_materno."</td>";
                    echo "<td>".$edad."</td>";
                    echo "<td>".$numero_telefonico."</td>";
                    echo "<td>".$localidad."</td>";
                    echo "<td>".$id_maquina."</td>";
                    ?>
                </tr>
        </table>
</div>

<!---------------------------------------------------->

<div class="container">
    <button id="insertar"><a href="insertar.html" style="text-decoration: none; color: black;">Insertar</a></button>
    <button id="modificar"><a href="modificar.php" style="text-decoration: none; color: black;">Modificar</a></button>
</div>
    

</header>

<?php
    $conn->close();
?>