
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include __DIR__."/includes/header.php";?>
    <?php include __DIR__."/includes/menu.php";?>

    <main>
        <h2>Estructuras condicionales</h2>
        <p>En esta sección exploraremos ejemplos de las estructuras if y switch, conoceremos cómo se utilizan para evaluar condiciones y tomar decisiones durante la ejecución de un programa.</p>

        <div class="contenedor-tarjetas">

            <div class="tarjeta">
                <h4>Condicional if - else</h4>
                <p>Código implementado</p>
                <img src="" alt="Código de ejemplo de if y else">

                <p>La estructura if permite comprobar si una condición es verdadera para ejecutar un bloque de instrucciones. Si la condición no se cumple, se ejecuta el bloque definido por else, proporcionando una alternativa.</p>

                <p>Ingresa tu edad para evaluar si eres mayor o menor de edad.</p>

                <form method="POST">
                    <label>Ingresa tu edad:</label>
                    <input type="number" name="edad" min="0" required>
                    <button type="submit">Evaluar edad</button>
                </form>

                <?php

                if (isset($_POST["edad"])) {

                    $edad = (int) $_POST["edad"];

                    if ($edad < 0) {
                        echo "<p>La edad ingresada no es válida.</p>";
                    } elseif ($edad >= 18) {
                        echo "<p>Eres mayor de edad</p>";
                    } else {
                        echo "<p>Eres menor de edad</p>";
                    }

                }

                ?>
            </div>

            <div class="tarjeta">
                <h4>Condicional if - elseif - else</h4>
                <p>Código implementado</p>
                <img src="" alt="Código de ejemplo de if, elseif y else">

                <p>La estructura elseif permite evaluar condiciones adicionales cuando la condición del if anterior no se cumple. De esta manera, es posible comprobar diferentes posibilidades en orden y ejecutar el bloque de instrucciones correspondiente a la primera condición que resulte verdadera.</p>

                <p>Ingresa tu promedio para recibir un mensaje.</p>

                <form method="POST">
                    <label>Ingresa tu promedio:</label>
                    <input type="number" name="promedio" min="0" max="100" required>
                    <button type="submit">Enviar promedio</button>
                </form>

                <?php

                if (isset($_POST["promedio"])) {

                    $promedio = (int) $_POST["promedio"];

                    if ($promedio >= 90 and $promedio <= 100) {
                        echo "<p>Excelente</p>";
                    } elseif ($promedio >= 80 and $promedio <= 89) {
                        echo "<p>Muy bien</p>";
                    } elseif ($promedio >= 70 and $promedio <= 79) {
                        echo "<p>Bien</p>";
                    } elseif ($promedio >= 60 and $promedio <= 69) {
                        echo "<p>Suficiente</p>";
                    } else {
                        echo "<p>No aprobado</p>";
                    }

                }

                ?>
            </div>

            <div class="tarjeta">
                <h4>Condicional switch</h4>
                <p>Código implementado</p>
                <img src="" alt="Código de ejemplo de switch">

                <p>La estructura switch permite comparar el valor de una expresión con diferentes opciones mediante la instrucción case. Cuando encuentra una coincidencia, ejecuta el bloque correspondiente. La instrucción break detiene la ejecución del switch y default establece una alternativa cuando no existe ninguna coincidencia.</p>

                <p>Selecciona un número para conocer el día de la semana correspondiente.</p>

                <form method="POST">
                    <label>Selecciona un día:</label>

                    <select name="dia" required>
                        <option value="">Selecciona una opción</option>
                        <option value="1">1 - Lunes</option>
                        <option value="2">2 - Martes</option>
                        <option value="3">3 - Miércoles</option>
                        <option value="4">4 - Jueves</option>
                        <option value="5">5 - Viernes</option>
                        <option value="6">6 - Sábado</option>
                        <option value="7">7 - Domingo</option>
                    </select>

                    <button type="submit">Consultar día</button>
                </form>

                <?php

                if (isset($_POST["dia"]) && $_POST["dia"] != "") {

                    $dia = (int) $_POST["dia"];

                    switch ($dia) {

                        case 1:
                            echo "<p>El día seleccionado es lunes.</p>";
                            break;

                        case 2:
                            echo "<p>El día seleccionado es martes.</p>";
                            break;

                        case 3:
                            echo "<p>El día seleccionado es miércoles.</p>";
                            break;

                        case 4:
                            echo "<p>El día seleccionado es jueves.</p>";
                            break;

                        case 5:
                            echo "<p>El día seleccionado es viernes.</p>";
                            break;

                        case 6:
                            echo "<p>El día seleccionado es sábado.</p>";
                            break;

                        case 7:
                            echo "<p>El día seleccionado es domingo.</p>";
                            break;

                        default:
                            echo "<p>El número ingresado no corresponde a un día válido.</p>";
                            break;

                    }

                }

                ?>
            </div>

        </div>
    </main>

    <?php include __DIR__."/includes/footer.php";?>
</body>

</html>
