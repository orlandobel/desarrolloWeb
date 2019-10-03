<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="../src/css_custom/hoja.css">
    </head>
    <body>
        <?php
            $u = $_POST['user'];
            $p = $_POST['pass'];
            $e = $_POST['email'];

            $n = $_POST['nombre'];
            $ap = $_POST['ap'];
            $am = $_POST['am'];
            $ed = $_POST['edad'];
            $s = $_POST['sexo'];
            $c = $_POST['calle'];
            $num = $_POST['num'];
            $col = $_POST['col'];
            $cp = $_POST['cp'];
        ?>

        <div class="contenedor">
            <div class="formulario caja">
                <form action="registro4.php" method="post">
                    <div class="input">
                        <label>Unidad Academica</label><br/>
                        <select name="ua">
                            <option value="ESCOM">ESCOM</option>
                            <option value="UPIITA">UPIITA</option>
                            <option value="UPIIZ">UPIIZ</option>
                            <option value="UPIICSA">UPIICSA</option>
                        </select><br/>
                    </div>

                    <div class="input">
                        <label>Programa Academico</label><br/>
                        <input type="text" name="pa" required id="prog"><br/>
                    </div>

                    <div class="input">
                        <label>Semestre</label><br/>
                        <input type="number" name="sem" required id="num"><br/>
                    </div>

                    <div class="input">
                        <label>Grupo</label><br/>
                        <input type="text" name="grupo" required minlength="4"maxlength="4" id="grupo"><br/>
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
                    ?>

                    <div class="boton">
                        <input type="submit" class="btn-rounded btn-continuar" name="enviar" value="Continuar">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
