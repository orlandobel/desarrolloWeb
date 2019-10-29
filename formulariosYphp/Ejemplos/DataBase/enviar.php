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
    $al  = $_POST['ale'];
    $ps  = $_POST['psa'];
    $dp  = $_POST['depo'];
    $ac  = $_POST['acu'];

    $newUser = "INSERT INTO users(usuario,correo,pass,tipo) VALUES('$u','$e','$p',1)";
    $res = $con->query($newUser);
    $id = mysqli_insert_id($con);
    if(!$res) {
        echo "error en la consulta <br/>";
        echo "error: ".$con->error."<br/>";
        exit();
    }

    $newPersonal = "INSERT INTO datosPersonales(nombre, apPaterno, apMaterno,
                                                edad, sexo, calle, colonia,num, cp, user_id)
                           VALUES ('$n','$ap','$am','$ed','$s','$c','$col','$num','$cp',$id)";
    $res = $con->query($newPersonal);
    if(!$res) {
        echo "error en la consulta <br/>";
        echo "error: ".$con->error."<br/>";
        exit();
    }

    $newEscolar = "INSERT INTO  datosEscolares(uAcademica,programa,semestre,grupo,user_id)
                          VALUES('$ua','$pa',$sem,'$g',$id)";
    $res = $con->query($newEscolar);
    if(!$res) {
        echo "error en la consulta <br/>";
        echo "error: ".$con->error."<br/>";
        exit();
    }

    $newCultural = "INSERT INTO deportivoCultural(seguro,Alergia,problemasSalud,deporte,aCultural,user_id)
                           VALUES($sm,'$al','$ps','$dp','$ac',$id)";
    $res = $con->query($newCultural);
    if(!$res) {
        echo "error en la consulta <br/>";
        echo "error: ".$con->error."<br/>";
        exit();
    }
?>
