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

						<tr>
							<td><?php echo $u; ?></td>
							<td><?php echo $e; ?></td>
							<td><?php echo $n; ?></td>
							<td><?php echo $ap; ?></td>
							<td><?php echo $am; ?></td>
							<td><?php echo $ed; ?></td>
							<td><?php echo $s; ?></td>
							<td><?php echo $c; ?></td>
							<td><?php echo $num; ?></td>
							<td><?php echo $col; ?></td>
							<td><?php echo $cp; ?></td>
							<td><?php echo $ua; ?></td>
							<td><?php echo $pa; ?></td>
							<td><?php echo $sem; ?></td>
							<td><?php echo $g; ?></td>
							<td><?php echo $seg; ?></td>
							<td><?php echo $al; ?></td>
							<td><?php echo $ps; ?></td>
							<td><?php echo $dp; ?></td>
							<td><?php echo $ac; ?></td>
						</tr>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    </body>
</html>
