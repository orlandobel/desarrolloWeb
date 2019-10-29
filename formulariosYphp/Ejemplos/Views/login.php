<?php
    include "../DataBase/coneccion.php";
    $user = $_POST['nombre'];
    $pass = $_POST['pass'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <link rel="stylesheet" href="../src/css_custom/hoja.css">
    </head>
    <body>
        <div class="contenedor">
            <?php
                if($user != null && $pass != null) {
                    $sql = "SELECT * FROM users WHERE usuario = '$user' AND pass = '$pass'";
                    $query = $con->query($sql);

                    if($query->fetch_assoc() == null) {
                        echo "<div> Credenciales incorrectas</div></br>";
                    } else {
                        echo "<div> Usuario encontrado</div></br>";
                    }
                }
            ?>
            <div class="caja formulario">
                <form action="" method="post">
                    <div class="input">
                        <label>Nombre de usuario</label><br/>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div class="input">
                        <label>Contraseña</label><br/>
                        <input type="password" name="pass" id="pass" required><br/>
                    </div>
                    <div class="boton">
                        <input type="submit" class="btn-rounded btn-enviar" name="enviar" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
