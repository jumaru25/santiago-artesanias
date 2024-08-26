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
                <div id="formato_formularios">
                    <?php
                        if ($_GET['formulario']==1){?>
                            <h4>Su consulta fue enviada con éxito</h4>
                            <h4>Nos pondremos en contacto con Ud. a la brevedad.</h4>
                        <?php
                            }
                        elseif($_GET['formulario']==2){?>
                            <h4>Se registro con éxito</h4>
                            <h4>Recibirá nuestro newsletter junto con el cupón de descuento a la brevedad.</h4>
                        <?php
                            }
                    elseif($_GET['formulario']==3){?>
                            <h4>Sección en construcción</h4>
                            <h4>Intente nuevamente más tarde.</h4>
                        <?php
                            }?>
                            
                </div>                
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