<?php 
date_default_timezone_set("America/Mexico_City");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["hora_inicio"])){
    $_SESSION["hora_inicio"] = time();
}

$hora_inicio = $_SESSION["hora_inicio"];
$hora_actual = time();

$tiempo_transcurrido = $hora_actual - $hora_inicio;

$minutos = floor($tiempo_transcurrido / 60);
$segundos = $tiempo_transcurrido % 60;

$hora_inicio_formato = date("H:i:s", $hora_inicio);
$hora_actual_formato = date("H:i:s", $hora_actual);

?>