<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Carregar Páginas com PHP sem Refresh</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .menu {
            background-color: #f1f1f1;
            overflow: hidden;
        }
        .menu a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="menu">
    <a href="#" onclick="carregarPagina('pagina1.php')">Página 1</a>
    <a href="#" onclick="carregarPagina('pagina2.php')">Página 2</a>
    <a href="#" onclick="carregarPagina('pagina3.php')">Página 3</a>
</div>

<div class="content" id="conteudo">
    <!-- Aqui é onde as páginas carregadas serão exibidas -->
</div>

<script>
    function carregarPagina(pagina) {
        $.ajax({
            url: pagina,
            type: 'GET',
            success: function(data) {
                $('#conteudo').html(data);
            },
            error: function() {
                alert('Erro ao carregar a página.');
            }
        });
    }
</script>

</body>
</html>
