
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include __DIR__."/includes/header.php";?>
    <?php include __DIR__."/includes/menu.php";?>

    <?php
    $instrumentos_musicales = ["Guitarra", "Piano", "Batería", "Violín", "Saxofón"];

    $videojuego = [
        "nombre" => "Minecraft",
        "desarrollador" => "Mojang",
        "genero" => "Supervivencia",
        "multijugador" => TRUE,
        "precio" => 599.00
    ];

    $catalogo_peliculas = [
        [
            "pelicula" => "Coco",
            "director" => "Lee Unkrich",
            "año" => "2017",
            "genero" => "Animación",
            "duracion" => 105
        ],
        [
            "pelicula" => "Interstellar",
            "director" => "Christopher Nolan",
            "año" => "2014",
            "genero" => "Ciencia ficción",
            "duracion" => 169
        ],
        [
            "pelicula" => "Shrek",
            "director" => "Andrew Adamson",
            "año" => "2001",
            "genero" => "Comedia",
            "duracion" => 90
        ]
    ];
    ?>

    <main>
        <h2>Arreglos y manipulación de datos</h2>
        <p>En esta sección exploraremos ejemplos de arreglos indexados, asociativos y multidimensionales, aprenderemos cómo manipular sus datos y recorrer sus elementos en PHP.</p>

        <div class="contenedor-tarjetas">

            <div class="tarjeta">
                <h4>Arreglo indexado</h4>
                <p>Código implementado</p>
                <img src="images/A1.png" alt="Código de ejemplo de arreglo indexado">

                <p>Los arreglos indexados almacenan varios elementos dentro de una misma variable y cada elemento tiene una posición numérica que comienza desde cero.</p>

                <p>Instrumentos musicales:</p>

                <?php
                foreach ($instrumentos_musicales as $posicion => $instrumento) {

                    echo "<p>Posición en el arreglo [$posicion]: " . $instrumento . "</p>";

                    if ($instrumento == "Batería") {
                        echo "<p>Este instrumento pertenece a la familia de percusión.</p>";
                    }

                }
                ?>
            </div>

            <div class="tarjeta">
                <h4>Arreglo asociativo</h4>
                <p>Código implementado</p>
                <img src="images/A2.png" alt="Código de ejemplo de arreglo asociativo">

                <p>Los arreglos asociativos almacenan información mediante claves personalizadas, las cuales permiten identificar cada valor dentro del arreglo.</p>

                <p>Información del videojuego:</p>

                <?php
                foreach ($videojuego as $clave => $valor) {

                    if ($clave == "multijugador") {
                        $valor = $valor ? "Sí" : "No";
                    } elseif ($clave == "precio") {
                        $valor = "$" . number_format($valor, 2);
                    }

                    echo "<p>Clave: $clave - Valor: $valor</p>";

                }
                ?>
            </div>

            <div class="tarjeta">
                <h4>Arreglo multidimensional</h4>
                <p>Código implementado</p>
                <img src="images/A3.png" alt="Código de ejemplo de arreglo multidimensional">

                <p>Los arreglos multidimensionales permiten almacenar otros arreglos dentro de una misma estructura, facilitando la organización de información relacionada.</p>

                <p>Catálogo de películas:</p>

                <?php
                foreach ($catalogo_peliculas as $pelicula) {

                    echo "<p><strong>" . $pelicula["pelicula"] . "</strong></p>";
                    echo "<p>Director: " . $pelicula["director"] . "</p>";
                    echo "<p>Año: " . $pelicula["año"] . "</p>";
                    echo "<p>Género: " . $pelicula["genero"] . "</p>";
                    echo "<p>Duración: " . $pelicula["duracion"] . " minutos</p>";

                    if ($pelicula["duracion"] >= 120) {
                        echo "<p>Esta película dura dos horas o más.</p>";
                    } else {
                        echo "<p>Esta película dura menos de dos horas.</p>";
                    }

                    echo "<hr>";

                }
                ?>
            </div>

        </div>
    </main>

    <?php include __DIR__."/includes/footer.php";?>
</body>

</html>
