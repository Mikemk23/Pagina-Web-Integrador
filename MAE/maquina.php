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


    $sql = "SELECT ID, humidity, temperature, fecha FROM dht11";
    $sql2 = "SELECT IDMaquina, NoCalentadores, NoVentiladores, ID FROM Maquina WHERE ID = $USUARIO";
    $result = $conn->query($sql);
    $result2 = $conn->query($sql2);


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

        <label style="color: red;">Máquina</label>

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
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">Este apartado podrás verificar el funcionamiento de la máquina.</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">Los valores que se van a poder revisar si funcionan bien o no son:</p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">- Temperatura</p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">- Humedad</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">En el caso del peso, los ventiladores y calentadores no se podrán medir (por ahora) debido a que esos son de consiencia en cuanto tiempo se le da a los ventiladores y calentadores conforme al peso de lo que intenten deshidratar.</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">Para saber que significan los valores que se van a revisar es lo siguiente:</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;"> * Temperatura: Es el valor que nos permite medir la cantidad de grados a la que se encuentra el ambiente de la máquina, en este caso si los grados se encuentran entre 80° - 120° (aproximadamente) significa que funcionan bien los calentadores. </p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;"> * Humedad: Este valor nos permite medir cuanto porcentaje de vapor de agua hay en la máquina, por ejemplo si la maquina tiene un porcentaje menor a 50% significa que los ventiladores funcionan bien.</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left; color: red;">¡ADVERTENCIA!</p>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left; color: orange;">La máquina puede soportar altas temperaturas y porcentajes de vapor menores, pero debe considerar los siguientes puntos.</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left; color: darkred;">1.- No puede tener menos de 20° ni mayor a 130°, eso significa que los calentadores dejaron de funcionar correctamente.</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left; color: darkred;">2.- No deben superar más del 80% de vapor en la máquina, porque esto puede significar que los ventiladores tampoco esten funcionando correctamente.</p>    
</div>

<!----------------------------------------------------->

<div class="contenedor">
    <h1>Últimos valores verificados</h1>
    <br>
        <table border="1">
            <tr>
                <th>Humedad</th>
                <th>Temperatura</th>
                <th>Fecha y Hora</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["humidity"] . " %</td>";
                    echo "<td>" . $row["temperature"] . " °C</td>";
                    echo "<td>" . $row["fecha"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay resultados</td></tr>";
            }
            ?>
        </table>
    <br><br><br><br>
    <h1>Información de la máquina</h1>
        <table border="1">
            <tr>
                <th>ID de máquina</th>
                <th>No Calentadores</th>
                <th>No Ventiladores</th>
                <th>ID del usuario</th>
            </tr>
            <?php
            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["IDMaquina"] . "</td>";
                    echo "<td>" . $row["NoCalentadores"] . "</td>";
                    echo "<td>" . $row["NoVentiladores"] . "</td>";
                    echo "<td>" . $row["ID"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay resultados</td></tr>";
            }
            ?>
        </table>
</div>

<!----------------------------------------------------->

<div class="contenedor">
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">¿Tienes dudas sobre como funcionan tus componentes de la máquina?</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">Abajo hay un botón que te permite evaluar los valores de la temperatura y la humedad de la máquina,
     esto tiene un fin de saber los rangos a los que se encuentra cada componente.</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">Tienes que hacer una espera de 5 minutos para la evaluación de los valores,
     estos se verán reflejados en tu tabla de inicio y con ello revisas para ver si estan correctos o de alto riesgo.</p>
     <br>
     <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">Primero tienes que descargar la aplicación de ARDUINO IDE para que comience a realizar las pruebas.</p>
     <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">Segundo tienes que abrir la aplicación y copiar el siguiente código para que funcione. <a href="arduino.php" style="text-decoration: none; color: red;">Descargar código de arduino</a></p>
     <br>
     <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">Tercero tendrá que vincular todos los datos con arduino y con eso inicias las pruebas, esperamos 5 minutos para que los datos se guarden en la tabla y regresas nuevamente a esta interfaz.</p>
     <br>
     <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left;">Por último, revisas tus datos en la tabla y con ello verificas que todo este en el rango correcto, si no realizas el reporte en "Soporte Técnico" y listo.</p>
     <br>
     <button><a href="dht.php" style="text-decoration: none; color: red; ">Revisar máquina</a></button>
</div>

<!----------------------------------------------------->
</div>

</header>

<?php
    $conn->close();
?>
