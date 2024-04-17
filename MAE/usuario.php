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


                $conn->close();
?>


<html>

<head>
    <link rel="stylesheet" href="css\cssindex.css">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<header>
    
    <nav>

        <div id="logo">

            <img src="images/MAE.png" width="50" height="60">
            Machine Automatization <br> Enterprise
        </div>

        <ul class="navigation-menu">
            <li><a href="#Nosotros">Nosotros</a>


            <li><a href="#"></a>
                <ul class="subnav">
                </ul>
            </li>

            <li><a href="#locate">Acerca del Proyecto</a>
            </li>
            <li>
                <a href="#contactos">Contactanos</a>
            </li>
        </ul>
        <div id="utility">
            <a href="interfaz_usuario.php">
            <span class="material-symbols-outlined">
                <img src="https://cdn-icons-png.flaticon.com/128/310/310818.png" width="30" height="30">
            </span>
            </a>
        </div>
    </nav>
</header>
<section class="hero">
    <h1>"Una nueva vida debes disfrutar, no dejes tu salud para último lugar"</h1>

</section>
<section>
    <h2 id="Nosotros">Nosotros</h2>

    <ul class="sts">
        <li class="card-large card-light" id="sup-Pro">
            <div class="card-image"><img src="https://cdn-icons-png.freepik.com/512/2945/2945779.png">
            </div>
            <ul>
                Produccion
                <li><a href="#">El departamento se encarga en mejorar el rendimiento, la eficiencia y la seguridad
                        de una máquina deshidratadora de alimentos, proporcionando control preciso sobre
                        las condiciones de deshidratación y automatizando muchas de las funciones del
                        proceso.</a></li>

            </ul>


        </li>

        <li class="card-large card-dark" id="sup-Ge">
            <div class="card-image"><img src="https://cdn-icons-png.flaticon.com/512/4812/4812760.png">
            </div>
            <ul>
                Gestion
                <li><a href="#">El departamento de gestión desempeña un papel crucial en el funcionamiento
                        eficiente y efectivo de una máquina deshidratadora. Aunque no está directamente
                        involucrado en la operación técnica de la máquina, su función es esencial para
                        asegurar que la producción y el proceso de fabricación se ejecuten sin problemas.</a></li>


            </ul>


        </li>

        <li class="card-large card-dark" id="sup-RH">
            <div class="card-image"><img
                    src="https://digital.practia.global/wp-content/uploads/2020/09/iconos-rrhh-64.png">
            </div>
            <ul>
                Recursos Humanos
                <li><a href="#">El departamento de Recursos Humanos desempeña un papel crucial en la gestión
                        del personal que opera una máquina deshidratadora.
                    </a></li>

            </ul>


        </li>
        <li class="card-large card-light" id="sup-MV">
            <div class="card-image"><img src="https://cdn-icons-png.flaticon.com/512/4949/4949102.png">
            </div>
            <ul>
                Marketing y ventas
                <li><a href="#">El departamento de marketing y ventas puede desempeñar un papel importante en
                        la promoción y comercialización de una máquina deshidratadora, así como de los
                        productos deshidratados que produce. </a></li>


            </ul>


        </li>


        <li class="card-large card-dark" id="sup-Ge">
            <div class="card-image"><img
                    src="https://png.pngtree.com/png-clipart/20230403/original/pngtree-cloud-computing-line-icon-png-image_9023911.png">
            </div>
            <ul>
                TI
                <li><a href="#">Diseñar y desarrollar software
                        especializado para controlar y monitorear la máquina deshidratadora. Esto podría
                        incluir la creación de interfaces de usuario intuitivas para que los operadores puedan
                        controlar el proceso de deshidratación, así como sistemas de monitoreo remoto para
                        supervisar el rendimiento de la máquina desde cualquier ubicación.</a></li>


            </ul>


        </li>
    </ul>
</section>

<section>
    <h2>Lider y equipo de trabajo</h2>

    <ul class="services">
        <li class="card-large card-dark card-wide" id="serv-groom">
            <div class="card-image"><img src="images/lider.jpeg">
            </div>
            <ul>
                Lider<span class="subtitle">Miguel Ángel Díaz Valencia</span>
                <span class="subtitle">Lider encargado de la empresa MAE para la utilidad del proyecto con el fin de
                    presentar un mejor prototipo y modelo de trabajo donde se lleven a cabo cada uno
                    de los usos de las tecnologías, recursos naturales, componentes fisicos y virtuales, entre otros métodos.
                </span>
                <span class="subtitle">No solo es lider de esta empresa, sino también de las áreas que la conforman, ayudando a recabar ideas
                    para una actividad más conectada al proyecto realizado, resolviendo problemas, escuchando propuestas de mejora y sobre todo
                    el uso de nuevas ramas laborales para un desarrollo más sustentable y de bajo costo.
                </span>
                <li><a href="#"></a><span></span></li>

            </ul>


        </li>
        <li class="card-large card-dark card-wide" id="serv-board">
            <div class="card-image"><img src="images/equipo.jpeg">
            </div>
            <ul>
                Equipo de trabajo<span class="subtitle">Un equipo unido por el proyecto</span>
                <span class="subtitle">El equipo de trabajo conformado de 17 personas en distintas áreas de trabajo 
                    dedicadas al uso e implementación de un proyecto más funcional, prospero, seguro y de calidad.
                </span>
                <span class="subtitle">Cada área esta especializada para poder utilizar cada componente, recurso, tecnología o método de trabajo
                    para poder desempeñar un trabajo de calidad, usando distintos factores que ayuden a una mejor forma de mantener los valores
                    más bajo en inseguridad, mantenimiento y procesos.
                </span>
                <li><a href="#"></a><span></span></li>

            </ul>

        </li>
    </ul>
</section>

<section id="locate">

    <div>
        <h2>Acerca del Proyecto</h2>
        <p>Dentro del organigrama se encuentra nuestro director ejecutivo el y un presidente
            los cuales son encargados de la parte mas fundamental de esta empresa ,dentro de
            esta organización también se encuentra 5 departamentos divididos en producción,
            gestión, recursos humanos, marketing y ventas y por ultimo TI, además de que cada
            departamento tiene dos áreas en producción se encuentra electrónica y
            ensamblado ,gestión tiene al área de finanzas y almacén, recursos humanos solo
            tiene una área que es planificación y organización personal ,TI área de desarrollo y
            sistemas y todo el personal que trabaja en cada departamento y áreas. </p>
    </div>
</section>

<footer>
   <h1 id="contactos"></h1>
    <ul>
        Redes Sociales
        <li>
            <img src="images/instagram.png" width="40px" height="40px">
            <a href="#"><h1>Instagram</h1></a>
        </li>
        <li>
            <img src="images/facebook.png" width="40px" height="40px">
            <a href="https://www.facebook.com/profile.php?id=61556567440269"><h1>Facebook</h1></a>
        </li>
        <li>
            <img src="images/gorjeo.png" width="40px" height="40px">
            <a href="https://twitter.com/MAE1482332"><h1>X twitter</h1></a>
        </li>

    </ul>

    <ul>
        Telefono
        <img src="images/telefono.png" width="40px" height="40px">
        <li>            
            Contactanos a
            <a href="7227536699"> 7227536699</a>
        </li>
        <li>
            Contactanos a
            <a href="7291682657"> 7291682657</a>
        </li>

    </ul>


    <ul>
        Correos
        <img src="images/gmail.png" width="40px" height="40px">
        <li>
            mae.enterprise.mx@gmail.com
        </li>
    </ul>


</footer>

</html>