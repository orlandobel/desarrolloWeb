<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="src/css_custom/hoja.css">
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
        ?>

        <div class="contenedor">
            <div class="formulario caja">
                <form action="resultado.php" method="post">
                    <div class="input">
                        <label>¿Cuentas con seguro médico?</label><br/>
                        <input type="radio" name="seguro" value="si" required id="seguro">Si<br/>
                        <input type="radio" name="seguro" value="no" required id="seguro">No<br/>
                    </div>

                    <div class="input">
                        <label>¿Cuentas con alguna alergia?</label><br/>
                        <input type="radio" name="al" value="si" required id="al">Si<br/>
                        <input type="radio" name="al" value="no" required id="al">No<br/>
                        <input type="text" name="ale" placeholder="¿Cuál?" id="ale"><br/>
                    </div>

                    <div class="input">
                        <label>¿Cuentas con algun problema de salud (asma, problemas cárdiacos, etc.)?</label><br/>
                        <input type="radio" name="ps" value="si" required id="ps">Si<br/>
                        <input type="radio" name="ps" value="no" required id="ps">No<br/>
                        <input type="text" name="psa" placeholder="¿Cuáles?" id="psa"><br/>
                    </div>

                    <div class="input">
                        <label>¿Practicas algun deporte?</label><br/>
                        <input type="radio" name="dep" value="si" required id="dep">Si<br/>
                        <input type="radio" name="dep" value="no" required id="dep">No<br/>
                        <input type="text" name="depo" placeholder="¿Cuál?" id="depo"><br/>
                    </div>

                    <div class="input">
                        <label>¿Practicas alguna actividad cultural(pintura, música, cinematograía, etc.)?</label><br/>
                        <input type="radio" name="ac" value="si" required id="ac">Si<br/>
                        <input type="radio" name="ac" value="no" required id="ac">No<br/>
                        <input type="text" name="acu" placeholder="¿Cuál?" id="acu"><br/>
                    </div>

                    <?php
                    echo "<input type='hidden' name='user' value=$u id='user'>";
                    echo "<input type='hidden' name='pass' value=$p id='pass'>";
                    echo "<input type='hidden' name='email' value=$e id='email'>";
                    echo "<input type='hidden' name='nombre' value=$n id='nombre'>";
                    echo "<input type='hidden' name='ap' value=$ap id='ap'>";
                    echo "<input type='hidden' name='am' value=$am id='am'>";
                    echo "<input type='hidden' name='edad' value=$ed id='edad'>";
                    echo "<input type='hidden' name='sexo' value=$s id='sexo'>";
                    echo "<input type='hidden' name='calle' value=$c id='calle'>";
                    echo "<input type='hidden' name='num' value=$num id='num'>";
                    echo "<input type='hidden' name='col' value=$col id='col'>";
                    echo "<input type='hidden' name='cp' value=$cp id='cp'>";

                    echo "<input type='hidden' name='ua' value=$ua id='ua'>";
                    echo "<input type='hidden' name='pa' value=$pa id='pa'>";
                    echo "<input type='hidden' name='sem' value=$sem id='sem'>";
                    echo "<input type='hidden' name='grupo' value=$g id='grupo'>";
                    ?>

                    <div class="boton">
                        <input type="submit" class="btn-rounded btn-enviar" name="enviar" value="Continuar">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
