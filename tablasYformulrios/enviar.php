<?php
    include "coneccion.php";

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

    $insert = "INSERT INTO user(user,correo,pass,tipo) VALUES('$u','$e','$p',1)";
    $res = $con->query($insert);
    $id = mysqli_insert_id($con);

    $insPersonal = "INSERT INTO datosPersonales(nombre, apPaterno, apMaterno, edad, sexo,calle, colonia, cp, user_id) VALUES ('$n','$ap','$am',$ed,$s,'$c','$num','$col','$cp',$id)";
    $res = $con->query($insPersonal);
    if(!$res) {
        echo "error en la consulta";
    }
?>
