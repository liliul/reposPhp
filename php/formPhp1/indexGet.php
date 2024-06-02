<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexPhp</title>
</head>
<body>
    <h1>PHP dados do formulario.</h1>

    <section>
        <?php 
            // var_dump($_GET);

            $name  = $_GET["name"] ?? "Sem Nome";
            $sobre = $_GET["sobre"] ?? "Sem Sobre";

            echo "<p>Dados do index hmtl: nome> $name sobre: $sobre</p>";
        ?>

        <a href="javascript:history.go(-1)">voltar</a>
    </section>
</body>
</html>