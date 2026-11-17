<div class="informacion-sesion">

    <h3>Información de la sesión</h3>

    <p>Hora de inicio: <?php echo $hora_inicio_formato;?></p>

    <p>Hora actual: <?php echo $hora_actual_formato;?></p>

    <p>Tiempo activo: <?php echo $minutos;?> minutos y <?php echo $segundos;?> segundos</p>
    
    <form action="includes/reiniciar_sesion.php" method="POST">
        <button type="submit">Reiniciar sesión</button>
    </form>

</div>
