<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>resultado</title>
    </head>
    <body>
        <?php
            $n = $_POST['nombre'];
            $p = $_POST["pass"];
            $u = $_POST['user'];
            $ap = $_POST['ap'];
            $am = $_POST['am'];
            $edad = $_POST['edad'];
            $calle = $_POST['calle'];
            $num = $_POST['num'];
            $col = $_POST['col'];
            $email = $_POST['email'];

            echo "nombre: ".$n."<br/>";
            echo "contraseña: ".$p."<br/>";
            echo "contraseña: ".$u."<br/>";
            echo "contraseña: ".$ap."<br/>";
            echo "contraseña: ".$am."<br/>";
            echo "contraseña: ".$edad."<br/>";
            echo "contraseña: ".$calle."<br/>";
            echo "contraseña: ".$num."<br/>";
            echo "contraseña: ".$col."<br/>";
            echo "contraseña: ".$email."<br/>";
        ?>
    </body>
</html>
