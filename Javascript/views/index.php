<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Jvascript demo</title>
        <link rel="stylesheet" href="../rsc/custom-css/style.css">

        <link href="../rsc/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    	<link href="../rsc/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    	<link href="../rsc/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    	<link href="../rsc/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    	<link href="../rsc/img/favicon.png" rel="icon" type="image/png">
    	<link href="../rsc/img/favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="../rsc/css/lib/font-awesome/font-awesome.min.css">
        <link rel="stylesheet" href="../rsc/css/lib/font-awesome/font-awesome.min.css">
        <link rel="stylesheet" href="../rsc/css/main.css">


        <script type="text/javascript" src="../rsc/custom-js/script.js"></script>
    </head>
    <body>
        <div class="center" >
            <div class="botones">
                <button type="button" class="btn btn-rounded btn-inline btn-primary-outline" name="button">Registro</button>
                <button type="button" class="btn btn-rounded btn-inline btn-primary-outline" name="button">Lista</button>
            </div>

            <div class="views box">
                <?php include "datos.php";?>
            </div>
        </div>
    </body>
</html>
