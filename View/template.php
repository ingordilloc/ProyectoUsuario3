<?php
require_once('autoload.php');

use Controller\PaginaController;

$capturaEnlace = new PaginaController();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario-Cursos</title>
    <link rel="stylesheet" href="View/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/intro.js@7.2.0/intro.min.js "></script>
<link href=" https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/introjs.min.css " rel="stylesheet">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    
</head>

<body class="">
<?php
require_once("paginas/navbar.php");
?>
    <div class="container">
        <?php
        $capturaEnlace->enlacesPagina();
        ?>
    </div>

</body>

</html>