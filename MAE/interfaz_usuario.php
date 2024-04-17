<?php

error_reporting(0);
ini_set('display_errors', 0);


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

// Crear un array con los días de la semana
$diasSemana = array(
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
);

$data = array();
foreach ($diasSemana as $dia) {
    $data[$dia] = 0;
}

$sql = "SELECT FechaInicio FROM InicioSesion";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fecha = new DateTime($row["FechaInicio"]);
        $diaSemana = $fecha->format('l'); 
        $data[$diaSemana]++;
    }
}

$data_json = json_encode($data);


?>

<html>

<head>
    <link rel="stylesheet" href="css\cssindex.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<header>
    
    <nav>

        <div id="logo">

            <img src="images/MAE.png" width="50" height="60">
            Machine Automatization <br> Enterprise
        </div>

        <label style="color: red;">Bienvenido(a)</label>

        <div id="utility">
            <a href="index.html">
            <span class="material-symbols-outlined">
                <img src="https://cdn-icons-png.flaticon.com/128/310/310818.png" width="30" height="30">
            </span>
            </a>
        </div>
    </nav>


<style>
   #contenedor-padre {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 10px;
    }

    .contenedor {
        width: 500px;
        height: 500px;
        margin: 20px;
        display: inline-block;
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

    .contenedor button,
    .contenedor table {
        margin: 0 auto;
    }
</style>

<div id="contenedor-padre">
<!----------------------------------------------------->

<div class="contenedor">
    <button><a href="usuarios.php" style="text-decoration: none; color: black;">Usuario</a></button>
    <br><br><br><br><br><br><br><br>
    <button><a href="maquina.php" style="text-decoration: none; color: black;">Maquina</a></button>
    <br><br><br><br><br><br><br><br>
    <button><a href="soportetecnico.php" style="text-decoration: none; color: black;">Soporte Técnico</a></button>
</div>

<!----------------------------------------------------->

<div class="contenedor">
    <br><br><br><br>
    <h1 style="font-family: 'Arial Narrow', sans-serif;">Manual</h1>
    <br><br><br><br>
    <button><a href="manual.php" style="text-decoration: none; color: red;">Descargar PDF</a></button>
    <br><br><br><br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold;">Aqui estará el manual de uso práctico de como poder utilizar la máquina, sin ningún tipo de inconveniente, debido a que te guía paso a paso en su mantenimiento</p>
    <br><br><br><br>
    <form action="cierresesion.php" method="post">  
        <div class="button-container-cerrar"> 
            <button class="button-bottom" type="submit" id="cerrar" name="cerrar">Cerrar Sesion</button>
        </div>
</div>

<!----------------------------------------------------->
<div class="contenedor">
    <canvas id="grafico"></canvas>
<script>
var data = <?php echo $data_json; ?>;

var diasSemana = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

var ctx = document.getElementById('grafico').getContext('2d');

var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: diasSemana,
        datasets: [{
            label: 'Número de Sesiones',
            data: data,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    </script>

</div>

<!----------------------------------------------------->
</div>

</header>

<?php
    $conn->close();
?>
