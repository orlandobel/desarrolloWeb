<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <style type="text/css"></style>
        <link rel="stylesheet" type="text/css" href="src/css_custom/hoja.css">
    </head>
    <body>
        <?php
            $u = $_POST['user'];
            $p = $_POST['pass'];
            $e = $_POST['email'];
        ?>

        <div class="contenedor">
            <div class="formulario caja">
                <form action="registro3.php" method="post">
                    <div class="input">
                        <label>Nombre(s)</label><br/>
                        <input type="text" name="nombre" required id="nombre"><br/>
                    </div>
                    <div class="input">
                        <label>Apellido paterno</label><br/>
                        <input type="text" name="ap" required id="ap"><br/>
                    </div>
                    <div class="input">
                        <label>Apellido materno</label><br/>
                        <input type="text" name="am" required id="am"><br/>
                    </div>
                    <div class="input">
                        <label>Edad</label><br/>
                        <input type="number" name="edad" required maxlength="3" id="edad"><br/>
                    </div>
                    <div class="input">
                        <label>Sexo</label><br/>
                        <input type="radio" name="sexo" value="0">Hombre<br/>
                        <input type="radio" name="sexo" value="1">Mujer<br/>
                    </div>
                    <div class="input">
                        <label>Calle</label><br/>
                        <input type="text" name="calle" required id="calle"><br/>
                    </div>
                    <div class="input">
                        <label>Numero</label><br/>
                        <input type="number" name="num" required id="num"><br/>
                    </div>
                    <div class="input">
                        <label>Colonia o Fraccionamiento</label><br/>
                        <input type="text" name="col" required id="col"><br/>
                    </div>
                    <div class="input">
                        <label>Código postal</label><br/>
                        <input type="number" name="cp" required minlengh="5" maxlength="5" id="cp"><br/>
                    </div>

                    <?php
                    echo "<input type='hidden' name='user' value=$u>";
                    echo "<input type='hidden' name='pass' value=$p>";
                    echo "<input type='hidden' name='email' value=$e>";
                    ?>
                    <div class="boton">
                        <input type="submit" class="btn-rounded btn-continuar" name="enviar" value="Continuar">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
