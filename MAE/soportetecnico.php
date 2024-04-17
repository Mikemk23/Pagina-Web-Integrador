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


    $sql_consulta1 = "SELECT ID, Nombre, Apellido_P, Apellido_M, Edad, NumeroTelefonico,
                    Localidad, IDMaquina FROM Usuarios WHERE ID = '$USUARIO'";
                    $result_consulta1 = mysqli_query($conn, $sql_consulta1);

                    $data = array();
                    if ($row = mysqli_fetch_assoc($result_consulta1))
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

        <label style="color: red;">Bienvenido(a)</label>

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
            justify-content: center;
            align-items: center;
            height: 100vh;
            gap: 20px; /* Espacio entre los contenedores */
        }

        .contenedor {
            width: 40%; /* Ajusta el ancho del contenedor */
            padding: 20px;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .contenedor form {
            text-align: center;
        }

        .grupo {
            margin-bottom: 10px; /* Reduce el espacio entre grupos */
        }

        .grupo label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px; /* Reduce el tamaño de la etiqueta */
        }

        .grupo input,
        .grupo textarea {
            width: 100%;
            padding: 5px; /* Reduce el espacio interno */
            font-size: 12px; /* Reduce el tamaño del texto */
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 8px; /* Reduce el espacio interno */
            font-size: 14px; /* Reduce el tamaño del texto */
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
</style>

<div id="contenedor-padre">
<!----------------------------------------------------->

<div class="contenedor">
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left; color: pink; font-size: 30;">Si tuviste problemas con la máquina en este espacio podrás mandar tus quejas, problemas o reportar algun inconveniente con los componentes de la máquina.</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; text-align: left; color: pink; font-size: 30;">Tendrás que capturar toda la información necesaria y de esta manera nos llegará todo a nuestro correo para verificar lo que sucede y darte respuesta a tu problema.</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; color: orange; font-size: 25;">¡PRECAUCIÓN!</p>
    <br>
    <p style="font-family: 'Arial Narrow', sans-serif; font-weight: bold; color: red; font-size: 25;">NO HACER ESTO PARA UN CAMBIO DE MÁQUINA O USO DE GARANTÍA CADUCADA, ESTO ES POR PROCESOS DE SEGURIDAD Y DE PROTEGER LA INTEGRIDAD FÍSICA Y TÉCNICA DEL USUARIO Y LA MÁQUINA.</p>
</div>

<!----------------------------------------------------->

<!----------------------------------------------------->

<div class="contenedor">
    <form action="soportetecnico2.php" method="POST">
            <div class="grupo">
                <label for="ID">ID del usuario:</label><br>
                <input type="text" id="ID" name="ID" maxlength="4"><br>
            </div>
            <div class="grupo">
                <label for="IDMaquina">ID de la máquina:</label><br>
                <input type="text" id="IDMaquina" name="IDMaquina"><br>
            </div>
            <div class="grupo">
                <label for="Problema">Problema detectado:</label>
                <input type="text" id="Problema" name="Problema" maxlength="500">
            </div>
            <div class="grupo">
                <label for="CorreoElectronico">Correo Electronico:</label><br>
                <input type="text" id="CorreoElectronico" name="CorreoElectronico"><br>
            </div>
            <button type="submit">Subir información</button>
    </form>
</div>

<!----------------------------------------------------->
</div>

</header>

<?php
    $conn->close();
?>
