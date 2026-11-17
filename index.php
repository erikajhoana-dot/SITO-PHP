<?php

session_start();

if (isset($_SESSION["hora_inicio"])) {
    session_unset();
    session_destroy();
}

include __DIR__."/includes/sesion.php";

?>

<?php include __DIR__."/includes/sesion.php";?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio informativo sobre PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include __DIR__."/includes/header.php";?>
    <?php include __DIR__."/includes/menu.php";?>
    <?php include __DIR__."/includes/informacion_sesion.php";?>

    <main>
       <h2>Bienvenido al sitio informativo sobre PHP</h2> 
       <P>Explora los fundamentos de la programación del lado del servidor con PHP.</P>
       <br>
       <img src="/images/php.png">
    </main>
    
    <?php include __DIR__."/includes/footer.php";?>
</body>

</html>