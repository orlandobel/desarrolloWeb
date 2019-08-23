<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
    </head>
    <body>
        <?php
            $u = $_POST['user'];
            $p = $_POST['pass'];
            $e = $_POST['email'];
        ?>
        <form action="resultado.php" method="post">
            <label>Nombre(s)</label><br/>
            <input type="text" name="nombre" required id="nombre"><br/>
            <label>Apellido paterno</label><br/>
            <input type="text" name="ap" required id="ap"><br/>
            <label>Apellido materno</label><br/>
            <input type="text" name="am" required id="am"><br/>
            <label>Edad</label><br/>
            <input type="number" name="edad" required maxlength="3" id="edad"><br/>
            <label>Sexo</label><br/>
            <input type="radio" name="sexo" value="0">Hombre<br/>
            <input type="radio" name="sexo" value="1">Mujer<br/>
            <label>Calle</label><br/>
            <input type="text" name="calle" required id="calle"><br/>
            <label>Numero</label><br/>
            <input type="number" name="num" required id="num"><br/>
            <label>Colonia o Fraccionamiento</label><br/>
            <input type="text" name="col" required id="col"><br/>

            <?php
                echo "<input type='hidden' name='user' value=$u>";
                echo "<input type='hidden' name='pass' value=$p>";
                echo "<input type='hidden' name='email' value=$e>";
            ?>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
</html>
