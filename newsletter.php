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
                    <h2>Unete a mi comunidad</h2>
                    <h1>Recibiras 30% de descuento en tu primer compra</h1><br/><br/>
                    <form action="registro_usuario.php" method="post" id="formato_formulario">
                        <ul>
                            <li class="alig_derecha">Nombre: <input type="text" size="20" maxlength="30" name="nombre" required class="input_text"></li><br/>
                            <li class="alig_derecha">Apellido: <input type="text" size="20" maxlength="30" name="apellido" required class="input_text"></li><br/>
                            <li class="alig_derecha">email: <input type="email" size="20" maxlength="40" name="email" required class="input_text"></li><br/>
                        </ul>
                        <input type="submit" value="Suscribirse" class="botones">
                    </form>
                </div>
                
            </section>
        </section>
        <footer>
            <?php
                include('pie.html');
            ?>
        </footer>
    </section>
</body>
</html>
