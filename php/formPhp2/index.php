<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com php</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #212121;
        }

        .container {
            width: 100%;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container form {
            width: 360px;
            height: auto;
            background-color: #242421;
            padding: 15px;
        }

        .container form h2 {
            /* border-left: 2px solid purple; */
            margin-left: 10px;
            color: #DDD;
        }

        .container form article {
            display: flex;
            flex-direction: column;
            padding: 8px;
        }

        .container form .inputs label {
            color: #DDD;
        }

        .container form .inputs input {
            width: 100%;
            height: 35px;
            margin-bottom: 10px;
            background-color: black;
            color: #DDD;
        }

        .container form .inputs button {
            background-color: aquamarine;
            font-weight: bold;
            height: 40px;
        }
        .container .res {
            background-color: #212121;
            padding: 10px;
        }
        .container .res p {
            margin: 10px 0px 10px 15px;
            font-size: 1.5rem;
            color: aquamarine;
        }
    </style>
</head>

<body>

    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>

    <div class="container">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <h2>Formulaio PHP</h2>
            <article class="inputs">
                <label for="v1">Nome:</label>
                <input type="number" value="<?=$valor1?>" id="v1" name="v1">

                <label for="v2">Sobrenome:</label>
                <input type="number" value="<?=$valor2?>" id="v2" name="v2">

                <button type="submit">Enviar</button>
            </article>

            <section class="res">
                <h2>Resultado</h2>

                <?php 
                    $soma = $valor1 + $valor2;
                    print "<p>$valor1 + $valor2 = $soma</p>";
                ?>
                
            </section>
        </form>
    </div>
</body>

</html>