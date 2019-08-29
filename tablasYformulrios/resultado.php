<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>resultado</title>
    </head>
    <body>
        <?php
            $u   = $_POST['user'];
            $p   = $_POST['pass'];
            $e   = $_POST['email'];

            $n   = $_POST['nombre'];
            $ap  = $_POST['ap'];
            $am  = $_POST['am'];
            $ed  = $_POST['edad'];
            $s   = $_POST['sexo'];
            $c   = $_POST['calle'];
            $num = $_POST['num'];
            $col = $_POST['col'];
            $cp  = $_POST['cp'];

            $ua  = $_POST['ua'];
            $pa  = $_POST['pa'];
            $sem = $_POST['sem'];
            $g   = $_POST['grupo'];

            $sm  = $_POST['seguro'];
            $al  = $_Post['ale'];
            $ps  = $_POST['psa'];
            $dp  = $_POST['depo'];
            $ac  = $_POST['acu'];

            echo "usuario: ".$n."<br/>";
            echo "contraseña: ".$p."<br/>";
            echo "email: ".$e."<br/>";

            echo "nombre: ".$n."<br/>";
            echo "Aoellido paterno: ".$ap."<br/>";
            echo "Apellido materno: ".$am."<br/>";
            echo "Edad: ".$ed."<br/>";
            echo "Calle: ".$c."<br/>";
            echo "Número: ".$num."<br/>";
            echo "Colonia: ".$col."<br/>";
            echo "Códig postal: ".$cp."<br/>";

            echo "Unidad academica: ".$ua."<br/>";
            echo "Programa academico: ".$pa."<br/>";
            echo "Semestre: ".$sem."<br/>";
            echo "Grupo: ".$g."<br/>";

            echo "Seguro médico: ".$g."<br/>";
            echo "Alergia: ".$al."<br/>";
            echo "Problemas de salud: ".$ps."<br/>";
            echo "Deporte: ".$dp."<br/>";
            echo "Actividad cultural: ".$ac."<br/>";
        ?>
    </body>
</html>
