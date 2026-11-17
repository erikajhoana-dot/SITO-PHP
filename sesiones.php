<?php include __DIR__."/includes/sesion.php";?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include __DIR__."/includes/header.php";?>
    <?php include __DIR__."/includes/menu.php";?>
    <?php include __DIR__."/includes/informacion_sesion.php";?>

    <?php

    if (!isset($_SESSION["contador_visitas"])) {
        $_SESSION["contador_visitas"] = 0;
    }

    $_SESSION["contador_visitas"]++;

    $contador_visitas = $_SESSION["contador_visitas"];

    ?>

    <main>
        <h2>Manejo de sesiones en PHP</h2>

        <p>
            En esta sección exploraremos el manejo de sesiones en PHP,
            aprenderemos cómo almacenar y recuperar información temporal
            y cómo permiten mantener datos disponibles mientras navegamos por el sitio.
        </p>

        <div class="contenedor-tarjetas">

            <div class="tarjeta">

                <h4>¿Qué es una sesión?</h4>

                <p>
                    Una sesión es un mecanismo de PHP que permite almacenar
                    información de un usuario y conservarla mientras navega
                    entre las diferentes páginas de un sitio web.
                </p>

                <p>
                    A diferencia de las variables normales, los datos de una
                    sesión permanecen disponibles entre distintas solicitudes
                    mientras la sesión siga activa.
                </p>

                <p>
                    Para trabajar con sesiones se utiliza la variable
                    superglobal $_SESSION.
                </p>

            </div>

            <div class="tarjeta">

                <h4>Almacenamiento de información</h4>

                <p>
                    Para guardar información en una sesión se utiliza
                    $_SESSION, que funciona como un arreglo asociativo.
                    Cada dato se almacena mediante una clave y un valor.
                </p>

                <p>Ejemplo de almacenamiento:</p>

                <p>$_SESSION["nombre"] = "Estudiante";</p>

                <p>
                    Para recuperar el dato almacenado podemos utilizar
                    la misma clave:
                </p>

                <p>$nombre = $_SESSION["nombre"];</p>

            </div>

            <div class="tarjeta">

                <h4>Contador de visitas</h4>

                <p>
                    En este ejemplo utilizamos una variable de sesión para
                    contar cuántas veces se visita esta página durante
                    una misma sesión.
                </p>

                <p>Visitas a esta página:</p>

                <h2><?php echo $contador_visitas;?></h2>

                <p>
                    Si actualizas la página, el contador aumentará.
                    Si visitas otra sección y regresas, el valor anterior
                    seguirá almacenado.
                </p>

            </div>

            <div class="tarjeta">

                <h4>Finalización de una sesión</h4>

                <p>
                    Cuando ya no necesitamos conservar la información,
                    podemos finalizar una sesión utilizando la función
                    session_destroy().
                </p>

                <p>
                    En este proyecto contamos con un botón para reiniciar
                    la sesión, eliminar los datos anteriores y comenzar
                    una nueva.
                </p>

            </div>

        </div>

    </main>

    <?php include __DIR__."/includes/footer.php";?>
</body>

</html>
