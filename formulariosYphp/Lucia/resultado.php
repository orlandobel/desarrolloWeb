<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>resultado</title>

        <link rel="stylesheet" href="src/css/lib/datatables-net/datatables.min.css">

    <link rel="stylesheet" href="src/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/main.css">
    </head>
    <body>
        <?php
            include "../DataBase/coneccion.php";
        ?>

        <div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Datatables.net</h2>
							<div class="subtitle">Welcome to Ultimate Dashboard</div>
						</div>
					</div>
				</div>
			</header>
			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Usuario</th>
							<th>Email</th>
							<th>Nombre</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Edad</th>
							<th>Sexo</th>
							<th>Calle</th>
							<th>Numero</th>
                            <th>Código Postal</th>
                            <th>Colonia</th>
                            <th>Unidad <br/>Academica</th>
                            <th>Programa <br/> Academico</th>
                            <th>Semestre</th>
                            <th>Grupo</th>
                            <th>Seguro<br/>medico</th>
                            <th>Alegias</th>
                            <th>Problemas de<br/>Salud</th>
                            <th>Deporte</th>
                            <th>Actividad <br/> Cultural</th>
						</tr>
						</thead>
						<tfoot>

                            <?php
                                $sql = "SELECT * FROM users; ";
                                $res = $con->query($sql);

                                if(!$res) {
                                    echo $con->error;
                                    exit();
                                }

                                while($row = $res->fetch_assoc()) {
                                    echo "<tr>";
                                        echo "<td>".$row['usuario']."</td>";
                                        echo "<td>".$row['correo']."</td>";

                                        $sql2 = "SELECT * FROM datosPersonales INNER JOIN users ON user_id =".$row['id'];
                                        $res2 = $con->query($sql2);

                                        if($row2 = $res2->fetch_assoc()) {
                                            echo "<td>".$row2['nombre']."</td>";
                                            echo "<td>".$row2['apPaterno']."</td>";
                                            echo "<td>".$row2['apMaterno']."</td>";
                                            echo "<td>".$row2['edad']."</td>";
                                            if($row2['sexo'] == 0) {
                                                echo "<td>Hombre</td>";
                                            } else {
                                                echo "<td>Mujer</td>";
                                            }
                                            echo "<td>".$row2['calle']."</td>";
                                            echo "<td>".$row2['num']."</td>";
                                            echo "<td>".$row2['cp']."</td>";
                                            echo "<td>".$row2['colonia']."</td>";
                                        }

                                        $sql2 = "SELECT * FROM datosEscolares INNER JOIN users ON user_id = ".$row['id'];
                                        $res2 = $con->query($sql2);

                                        if(!$res2) {
                                            echo "error ".$con->error;
                                        }

                                        if($row2 = $res2->fetch_assoc()) {
                                            echo "<td>".$row2['uAcademica']."</td>";
                                            echo "<td>".$row2['programa']."</td>";
                                            echo "<td>".$row2['semestre']."</td>";
                                            echo "<td>".$row2['grupo']."</td>";
                                        }

                                        $sql2 = "SELECT * FROM deportivoCultural INNER JOIN users ON user_id = ".$row['id'];
                                        $res2 = $con->query($sql2);

                                        if($row2 = $res2->fetch_assoc()) {
                                            echo "<td>".$row2['seguro']."</td>";
                                            if($row2['Alergia'] == null) {
                                                echo "<td>Ninguna</td>";
                                            } else {
                                                echo "<td>".$row2['Alergia']."</td>";
                                            }
                                            if($row2['problemasSalud'] == null) {
                                                echo "<td>Ninguno</td>";
                                            } else {
                                                echo "<td>".$row2['problemasSalud']."</td>";
                                            }
                                            echo "<td>".$row2['deporte']."</td>";
                                            echo "<td>".$row2['aCultural']."</td>";
                                        }
                                    echo "</tr>";
                                }
                            ?>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    </body>
</html>
