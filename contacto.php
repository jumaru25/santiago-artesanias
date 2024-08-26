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
                    <h2>Contactenos</h2><br/><br/>
                    <form action="formulario.php" method="post" id="formato_formulario">
                        <ul>
                            <li class="alig_derecha">Nombre: <input type="text" size="20" maxlength="30" name="nombre" required class="input_text"></li><br/>
                            <li class="alig_derecha">Apellido: <input type="text" size="20" maxlength="30" name="apellido" required class="input_text"></li><br/>
                            <li class="alig_derecha">email: <input type="email" size="20" maxlength="40" name="email" required class="input_text"></li><br/>
                            <li><textarea rows="10" cols="31" name="consulta" required class="formato_textarea">Ingrese su consulta...</textarea></li>
                        </ul>
                        <div class="margen_submit">
                            <input type="submit" value="Enviar" class="botones">
                            <input type="reset" value="Borrar" class="botones">
                        </div>
                    </form>
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
