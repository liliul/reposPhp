<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php com Javascript</title>
    <style>
        *{margin:0;padding:0;}
        body{background-color: #212121;}
    </style>
</head>
<body>
    
    <?php
        echo '<button id="myButton">Clique em mim</button>';
    ?>
    <script>
        document.getElementById('myButton').addEventListener('click', () => {
            alert('Botão clicado!');
        });
    </script>

    <!-- PHP pode gerar dados para JavaScript -->
    <?php
        $data = array("name" => "John", "age" => 30);
    ?>
    <script>
        const userData = <?php echo json_encode($data); ?>;
        console.log(userData);
    </script>

</body>
</html>