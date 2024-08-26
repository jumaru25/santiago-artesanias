<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Santiago Artesanias</title>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>
    <section id="contenedor">
        <header>
            <?php
                include('cabecera.php');
            ?>
        </header>
        <section id="contenido">
            <?php
                include('lateral_izq.html');
            ?>
            <section id="lateral_der">
                
                    <nav id="botonera_imagen">
                        <ul>
                            <li><a href="cocina.php?id=1&solapa=0">1</a></li>
                            <li><a href="cocina.php?id=2&solapa=0">2</a></li>
                            <li><a href="cocina.php?id=3&solapa=0">3</a></li>
                            <li><a href="cocina.php?id=4&solapa=0">4</a></li>
                            <li><a href="cocina.php?id=5&solapa=0">5</a></li>
                        </ul>
                    </nav>
                <?php
                    if($_GET['id']==1){
                        $producto='Bol con utensillos';
                        $precio='$249.00';
                        $descripcion='Bol de 25cm de diametro con chuchara, tenedor y espatula, todos hechos en madera de algarrobo.';
                        $imagen='imagen_8.jpg';
                    }
                    elseif($_GET['id']==2){
                        $producto='Utensillos';
                        $precio='$45.00 c/u';
                        $descripcion='Utensillos varios hechos en madera de algarrobo.';
                        $imagen='imagen_9.jpg';
                    }
                    elseif($_GET['id']==3){
                        $producto='Ensaladera';
                        $precio='$199.00 c/u';
                        $descripcion='Ensaladeras en varios colores hechas en madera de algarrobo.';
                        $imagen='imagen_7.jpg';
                    }
                    elseif($_GET['id']==4){
                        $producto='Mates';
                        $precio='$149.00 c/u';
                        $descripcion='Variedad de mates en madera de palo santo con diferentes motivos para coleccionar.';
                        $imagen='imagen_14.jpg';
                    }
                    elseif($_GET['id']==5){
                        $producto='Especiero';
                        $precio='$199.00 c/u';
                        $descripcion='Especiero con cuatro compertimentos hecho con madera de pino.';
                        $imagen='imagen_12.jpg';
                    }
                    
                ?>
                <div id="contenedor_imagen">
                    <h4 class="colortexto">Producto: <?php echo "<span class='colorspan'>".$producto."</span>";?></h4>
                    <h4 class="colortexto">Precio: <?php echo "<span class='colorspan'>".$precio."</span>";?></h4>
                    <h4 class="colortexto">Descripción: <?php echo "<span class='colorspan'>".$descripcion."</span>";?></h4>
                    <h4 class="colortexto">Imagen:</h4>
                    <img src="css/imagenes/<?php echo $imagen;?>" id="imagen"/>
                </div>
                
                <!--<p><strong id="info">$199</strong></p>-->
            </section>
        </section>
        <!--<aside></aside>-->
        <footer>
            <?php
                include('pie.html');
            ?>
        </footer>
    </section>
</body>
</html>
