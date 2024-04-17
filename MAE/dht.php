<?php
session_start();
$ID = $_SESSION['IDRegistro'];

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

    error_reporting(0);
    ini_set('display_errors', 0);

if ($conn) 
{
    #echo "Conexion con base de datos exitosa! ";

    if(isset($_POST['temperature'])) 
    {
        $temperature = $_POST['temperature']; 
        echo "Estación meteorológica"; 
        echo "Temperatura: ".$temperature;
    }
    
    if(isset($_POST['humidity'])) 
    {
        $humidity = $_POST['humidity'];
        echo "humedad: ".$humidity;
    }

    date_default_timezone_set('america/bogota');
        $fecha_actual = date("Y-m-d H:i:s");
        $consulta = "INSERT INTO Dht11 (humidity, temperature, fecha) VALUES ('$humidity', '$temperature', '$fecha_actual')";
        $resultado = mysqli_query($conn, $consulta);
        
        if ($conn->query($resultado) == TRUE)
        {
            echo "Registo en base de datos OK! ";
        }
        else 
        {
            echo "No registrado";
        }
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

        <label style="color: red;">Revisión de datos</label>

        <div id="utility">
            <a href="interfaz_usuario.php">
            <span class="material-symbols-outlined">
                <img src="https://cdn-icons-png.flaticon.com/128/310/310818.png" width="30" height="30">
            </span>
            </a>
        </div>
    </nav>

<style>
    #contenedor-padre {
        display: flex;
        justify-content: center; /* Cambiamos de space-between a center para centrar los contenedores */
        width: 100%;
        padding: 10px;
    }

    .contenedor {
        width: 900px;
        height: auto; /* Cambiamos la altura a automática para adaptarse al contenido */
        margin: 20px;
        text-align: center;
    }

    #izquierda {
        background-color: blue;
    }

    #centro {
        background-color: green;
    }

    #derecha {
        background-color: red;
    }

    .contenedor img {
        max-width: 100%; /* Aseguramos que la imagen no se desborde del contenedor */
        display: block; /* Hacemos que la imagen sea un bloque para poder aplicar márgenes automáticos */
        margin: 0 auto; /* Centramos la imagen horizontalmente */
    }

    .contenedor button {
        margin-top: 10px; /* Agregamos un margen superior al botón */
    }
</style>

<div id="contenedor-padre">
<!----------------------------------------------------->

<div class="contenedor">
    <img src="images/espera.gif">
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20;">Espere un tiempo estimado de *5 MINUTOS*, esto para guardar la información de forma correcta.</p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20;">Los datos que tienen que mandar para cada valor son los siguientes:</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20;">Temperatura:</p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20; color: green;"> - De 80° hasta 120° </p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20; color: orange;"> - De 50° hasta 100° </p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20; color: red;"> - < 40° hasta > 130° </p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20;">Humedad:</p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20; color: green;"> - De 0 hasta 25% </p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20; color: orange;"> - De 30 hasta 50% </p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20; color: red;"> - < 50 hasta > 100% </p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; font-size: 20;">Cuando haya concluido el tiempo presiona la opción de abajo para regresa y verificar la información.</p>
    <br>
    <a href="maquina.php" style="text-decoration: none; color: blue; font-size: 30;">Regresar para revisión</a>
</div>

<!----------------------------------------------------->
</div>

    

</header>