<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include __DIR__."/includes/header.php";?>
    <?php include __DIR__."/includes/menu.php";?>

    <?php
    $arreglo_dias_semana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

    $lista_carrito_de_compras = [
        "Laptop",
        "Mouse",
        "Teclado",
        "Audífonos"
    ];

    $datos_empleados = [
        [
            "id" => 101,
            "nombre" => "Ana Gómez",
            "puesto" => "Analista",
            "salario" => 18500.00,
            "activo" => TRUE
        ],
        [
            "id" => 102,
            "nombre" => "Luis Torres",
            "puesto" => "Desarrollador",
            "salario" => 24000.50,
            "activo" => TRUE
        ],
        [
            "id" => 103,
            "nombre" => "Sofía Ruiz",
            "puesto" => "Diseñadora",
            "salario" => 17200.00,
            "activo" => FALSE
        ]
    ];
    ?>

    <main>
        <h2>Bucles y estructuras repetitivas</h2>
        <p>En esta sección exploraremos ejemplos de los ciclos for, while y foreach, conoceremos cómo funcionan y cómo permiten realizar repeticiones en PHP.</p>

        <div class="contenedor-tarjetas">

            <div class="tarjeta">
                <h4>Bucle for</h4>
                <p>Código implementado</p>
                <img src="images/B1.png" alt="Código de ejemplo de for">

                <p>
                    La estructura for permite repetir un bloque de instrucciones
                    un número determinado de veces. Se compone de una inicialización,
                    una condición que determina cuándo termina el ciclo y una
                    actualización que modifica la variable de control en cada repetición.
                </p>

                <p>Días de la semana:</p>

                <?php
                for ($dia = 0; $dia < count($arreglo_dias_semana); $dia++) {
                    echo "<p>Posición del arreglo: $dia - " . $arreglo_dias_semana[$dia] ."</p>";
                }
                ?>
            </div>

            <div class="tarjeta">
                <h4>Bucle foreach</h4>
                <p>Código implementado</p>
                <img src="images/B2.png" alt="Código de ejemplo de foreach">

                <p>
                    La estructura foreach permite recorrer los elementos de un
                    arreglo sin necesidad de controlar manualmente sus posiciones.
                    También puede utilizarse dentro de otro foreach para recorrer
                    arreglos multidimensionales.
                </p>

                <p>Información de los empleados:</p>

                <table border="1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Puesto</th>
                            <th>Salario</th>
                            <th>Activo</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($datos_empleados as $empleado) { ?>

                            <tr>
                                <td><?php echo $empleado["id"];?></td>
                                <td><?php echo $empleado["nombre"];?></td>
                                <td><?php echo $empleado["puesto"];?></td>
                                <td><?php echo "$" . number_format($empleado["salario"], 2);?></td>
                                <td>
                                    <?php echo $empleado["activo"] ? "Sí" : "No";?>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="tarjeta">
                <h4>Bucle while</h4>
                <p>Código implementado</p>
                <img src="images/B3.png" alt="Código de ejemplo de while">

                <p>
                    La estructura while permite repetir un bloque de instrucciones
                    mientras una condición sea verdadera. En cada repetición se
                    comprueba nuevamente la condición y el ciclo termina cuando
                    esta deja de cumplirse.
                </p>

                <p>Productos del carrito de compras:</p>

                <ul>
                    <?php
                    $posicion = 0;

                    while ($posicion < count($lista_carrito_de_compras)) {

                        echo $lista_carrito_de_compras[$posicion] . "<br>";

                        $posicion++;

                    }
                    ?>
                </ul>
            </div>

        </div>
    </main>

    <?php include __DIR__."/includes/footer.php";?>
</body>

</html>
