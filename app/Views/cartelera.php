<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CINE</title>
    <link rel="stylesheet" href="css/catalogoestilos.css">
</head>
<body>
    <!-- Es aqui en donde se tendra el div del titulo -->
    <div class="principal">
    <h1>Las mejores peliculas</h1>
    <!-- <a href="<?php echo base_url('Cine/formulario'); ?>">Comprar entradas</a> -->
    </div>

    <!-- Es aqui en donde se tendra el div de la cartelera -->
<div class="secundaria">

<div class="cartelera">
<div class="info">
    <div class="pelicula">
<a href="<?php echo base_url('Cine/formulario?nombre=Sin aire'); ?>"><img src="<?php echo base_url('resources/Psinaire.jpeg'); ?>" alt="Sin Aire" class="imagenes"></a>
<h2>Sin Aire</h2>
<p>Descripción de la película...</p>
<p>Horarios:</p>
<ul>
<li>Horario 1</li>
<li>Horario 2</li>
</ul>
</div>
</div>

<a href="<?php echo base_url('Cine/formulario?nombre=Asesinos'); ?>"><img src="<?php echo base_url('resources/Pasesinos.jpg'); ?>" alt="Asesinos" class="imagenes"></a>
<a href="<?php echo base_url('Cine/formulario?nombre=The killer'); ?>"><img src="<?php echo base_url('resources/Pkiller.jpeg'); ?>" alt="Killer" class="imagenes"></a>
<a href="<?php echo base_url('Cine/formulario?nombre=Saltburn'); ?>"><img src="<?php echo base_url('resources/Psaltburn.jpeg'); ?>" alt="Saltburn" class="imagenes"></a>
<a href="<?php echo base_url('Cine/formulario?nombre=Adentro'); ?>"><img src="<?php echo base_url('resources/Padentro.jpeg'); ?>" alt="Adentro" class="imagenes"></a>
<a href="<?php echo base_url('Cine/formulario?nombre=Oppenhaimer'); ?>"><img src="<?php echo base_url('resources/Poppenhaimer.jpg'); ?>" alt="Openhaimer" class="imagenes"></a>
<a href="<?php echo base_url('Cine/formulario?nombre=Dejar atras'); ?>"><img src="<?php echo base_url('resources/Pdejar.jpg'); ?>" alt="Dejar" class="imagenes"></a>
<a href="<?php echo base_url('Cine/formulario?nombre=Saw'); ?>"><img src="<?php echo base_url('resources/Psaw.jpg'); ?>" alt="Saw" class="imagenes"></a>
<a href="<?php echo base_url('Cine/formulario?nombre=La sociedad de la nieve'); ?>"><img src="<?php echo base_url('resources/Pnieve.jpg'); ?>" alt="La sociedad de la nieve" class="imagenes"></a>

</div>
</div>
</body>
</html>