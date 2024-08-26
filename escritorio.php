<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Santiago Artesanias</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/lightbox.min.css">
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
                <div id="div_centrado">
                <a href="css/imagenes/escritorio_grande1.jpg" data-lightbox="example-set" data-title="Escritorio moderno en cedro"><img src="css/imagenes/escritorio_mini1.jpg" alt=""/></a>
                <a href="css/imagenes/escritorio_grande2.jpg" data-lightbox="example-set" data-title="Escritorio para PC en pino"><img src="css/imagenes/escritorio_mini2.jpg" alt=""/></a>
                <a href="css/imagenes/escritorio_grande3.jpg" data-lightbox="example-set" data-title="Escritorio casual en cedro"><img src="css/imagenes/escritorio_mini3.jpg" alt=""/></a>
                <a href="css/imagenes/escritorio_grande4.jpg" data-lightbox="example-set" data-title="Mini escritorio de estudio en pino"><img src="css/imagenes/escritorio_mini4.jpg" alt=""/></a>
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
    <script src="js/lightbox-plus-jquery.min.js"></script>

</body>
</html>
