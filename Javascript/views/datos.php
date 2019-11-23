
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            include "../DataBase/conexion.php";

            $sql = "SELECT id,usuario,correo FROM users";
            $query = $con->query($sql);

            if($query) {
        ?>
        <table id="example" class="display table table-striped table-bordered dataTable" role="grid" aria-describedby="example_info" style="width: 100%;" width="100%" cellspacing="0">
			<thead>
				<tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 112px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Usuario</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 189px;" aria-label="Position: activate to sort column ascending">correo</th>
                    <th colspan="2" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 77px;" aria-label="Office: activate to sort column ascending">Acciones</th>
			</thead>
			<tbody>
                <?php
                while($row = $query->fetch_assoc()) {
				echo "<tr role='row' class='odd'>";
                    echo "<input type='hidden' value='".$row['id']."' id='id_".$row['id']."'>";

					echo "<td>";
                        echo "<input type='text' value='".$row['usuario']."' class='form-control' id='us_".$row['id']."' disabled>";
                    echo "</td>";

                    echo "<td>";
                        echo "<input type='text' value='".$row['correo']."' class='form-control' id='ce_".$row['id']."' disabled>";
                    echo "</td>";

                    echo "<td>";
                        echo "<button type='button' class='btn btn-inline' name='button'>";
                            echo "<span class='font-icon font-icon-pencil'></span>";
                        echo "</button>";

                        echo "<button type='button' class='btn btn-inline' name='button' hidden>";
                            echo "<span class='font-icon font-icon-ok'></span>";
                        echo "</button>";
                    echo "</td>";

					echo "<td>";
                        echo "<button type='button' class='btn btn-inline btn-danger' name='button'>";
                            echo "<span class='font-icon font-icon-trash'></span>";
                        echo "</button>";

                        echo "<button type='button' class='btn btn-inline btn-danger' name='button' hidden>";
                        echo "<span class='font-icon font-icon-del'></span>";
                        echo "</button>";
                    echo "</td>";
				echo "</tr>";
                }
                ?>
            </tbody>
		</table>
        <?php
            }
        ?>
    </body>
</html>
