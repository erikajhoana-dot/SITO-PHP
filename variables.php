<?php include __DIR__."/includes/sesion.php";?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
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
    $cadena = "Karen";
    $entero = 20;
    $flotante = 25.3;
    $booleano = TRUE;
    $colores = ["Rojo", "Azul", "Verde"];

    $tipos_datos = [
        [
            "nombre" => "String (Cadena de texto)",
            "descripcion" => "Almacena texto.",
            "declaracion" => '$cadena = "Karen";',
            "valor" => $cadena,
            "tipo" => gettype($cadena)
        ],
        [
            "nombre" => "Integer (Número entero)",
            "descripcion" => "Almacena números enteros.",
            "declaracion" => '$entero = 20;',
            "valor" => $entero,
            "tipo" => gettype($entero)
        ],
        [
            "nombre" => "Float (Número decimal)",
            "descripcion" => "Almacena números decimales.",
            "declaracion" => '$flotante = 25.3;',
            "valor" => $flotante,
            "tipo" => gettype($flotante)
        ],
        [
            "nombre" => "Booleano (Valor lógico)",
            "descripcion" => "Almacena valores verdadero o falso.",
            "declaracion" => '$booleano = TRUE;',
            "valor" => $booleano,
            "tipo" => gettype($booleano)
        ],
        [
            "nombre" => "Array (Arreglo)",
            "descripcion" => "Permite almacenar varios valores dentro de una misma variable.",
            "declaracion" => '$colores = ["Rojo", "Azul", "Verde"];',
            "valor" => $colores,
            "tipo" => gettype($colores)
        ]
    ];
    ?>

    <main>
        <h2>Variables y tipos de datos</h2>
        <p>En esta sección aprenderemos cómo declarar variables y utilizar diferentes tipos de datos en PHP.</p>

        <h3>Declaración de variables y los tipos</h3>
        <p>En PHP, las variables se crean utilizando el símbolo $ seguido de un nombre y se les asigna un valor mediante el operador =. PHP identifica automáticamente el tipo de dato según el valor asignado.</p>

        <div class="contenedor-tarjetas">

            <?php foreach ($tipos_datos as $dato) { ?>

                <div class="tarjeta">

                    <h4><?php echo $dato["nombre"];?></h4>

                    <p><?php echo $dato["descripcion"];?></p>

                    <p>Declaración: <?php echo $dato["declaracion"];?></p>

                    <p>Valor:

                        <?php 
                        if ($dato["tipo"] == "boolean") {
                            echo $dato["valor"] ? "Verdadero" : "Falso";
                        } elseif ($dato["tipo"] == "array") {
                            echo "Varios elementos";
                        } else {
                            echo $dato["valor"];
                        }
                        ?>

                    </p>

                    <p>Tipo de dato: <?php echo $dato["tipo"];?></p>

                    <?php if ($dato["tipo"] == "array") { ?>

                        <p>Elementos almacenados:</p>

                        <ul>
                            <?php foreach ($dato["valor"] as $color) { ?>
                                <?php echo $color;?>
                            <?php } ?>
                        </ul>

                    <?php } ?>

                </div>

            <?php } ?>

        </div>
    </main>

    <?php include __DIR__."/includes/footer.php";?>
</body>

</html>
