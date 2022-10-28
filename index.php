<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>
            Generado <?php if (isset($_POST["titulo"])) {
                    $titulo = $_POST["titulo"];
                    echo "- $titulo";
                }; ?>
        </title>
    </head>
    <body>
        <div class="header">
            <h1>Generador de paginas</h1>
            <form action="index.php" method="POST">
                <input type="text" name="titulo" placeholder="Titulo de la pagina">
                <input type="text" name="parrafo" placeholder="Contenido">
                <input type="submit" name="Boton">
            </form>


            <?php 

                if (isset($_POST["Boton"])) {
                    include('paginas/pag.php');
                };
            ?>
        </div>
    </body>
</html>