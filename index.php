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
                $_GET['solapa']=1;
                include('cabecera.php');
            ?>
        </header>
        <section id="contenido">
            <?php
                include('lateral_izq.html');
            ?>
            <section id="lateral_der">
                <div id="imagen1"></div>
                <div id="imagen2"></div>
                <div id="imagen3"></div>
                <div id="imagen4"></div>
                <div id="imagen5"></div>
                <div id="imagen6"></div>
                <div id="imagen7"></div>
                <div id="imagen8"></div>
                <div id="imagen9"></div>
                <div id="imagen10"></div>
                <div id="imagen11"></div>
                <div id="imagen12"></div>
                <div id="imagen13"></div>
                <div id="imagen14"></div>
                <div id="imagen15"></div>
                <div id="imagen16"></div>
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
