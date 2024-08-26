<div id="logo">
    <a href="index.php"> <img src="css/imagenes/logo9.png" alt="Imagen Logo Empresa" title="Santiago Artesanias"/></a>
</div>
<div id="marca">
    <hgroup>
        <h1 class="texto_centrado">Santiago Artesanias</h1>
        <h4 class="texto_centrado">diseños en madera</h4>
    </hgroup>
</div>
<div id="registro">
    <a href="newsletter.php?solapa=0">Newsletter</a>
</div>
<?php
    if ($_GET['solapa']==1){?>
<nav id="botonera">
    <ul>
        <li><a href="index.php?solapa=1" class="seleccionado">Inicio</a></li>
        <li><a href="confirmacion_cons.php?solapa=2&formulario=3">Quienes Somos</a></li>
        <li><a href="confirmacion_cons.php?solapa=3&formulario=3">Como llegar</a></li>
        <li><a href="contacto.php?solapa=4">Contacto</a></li>
    </ul>
</nav>
<?php }
    elseif($_GET['solapa']==2){?>
<nav id="botonera">
    <ul>
        <li><a href="index.php?solapa=1">Inicio</a></li>
        <li><a href="confirmacion_cons.php?solapa=2&formulario=3" class="seleccionado">Quienes Somos</a></li>
        <li><a href="confirmacion_cons.php?solapa=3&formulario=3">Como llegar</a></li>
        <li><a href="contacto.php?solapa=4">Contacto</a></li>
    </ul>
</nav>
<?php }
    if ($_GET['solapa']==3){?>
<nav id="botonera">
    <ul>
        <li><a href="index.php?solapa=1">Inicio</a></li>
        <li><a href="confirmacion_cons.php?solapa=2&formulario=3">Quienes Somos</a></li>
        <li><a href="confirmacion_cons.php?solapa=3&formulario=3" class="seleccionado">Como llegar</a></li>
        <li><a href="contacto.php?solapa=4">Contacto</a></li>
    </ul>
</nav>
<?php }
    elseif($_GET['solapa']==4){?>
<nav id="botonera">
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="confirmacion_cons.php?solapa=2&formulario=3">Quienes Somos</a></li>
        <li><a href="confirmacion_cons.php?solapa=3&formulario=3">Como llegar</a></li>
        <li><a href="contacto.php?solapa=4" class="seleccionado">Contacto</a></li>
    </ul>
</nav>
<?php }
elseif($_GET['solapa']==0){?>
<nav id="botonera">
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="confirmacion_cons.php?solapa=2&formulario=3">Quienes Somos</a></li>
        <li><a href="confirmacion_cons.php?solapa=3&formulario=3">Como llegar</a></li>
        <li><a href="contacto.php?solapa=4">Contacto</a></li>
    </ul>
</nav>
<?php }
    ?>