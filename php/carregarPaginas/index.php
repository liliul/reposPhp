<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Como carregar páginas dentro de outra utilizando o PHP</title>
    <style type="text/css"> 
        * {
            margin: 0;
            padding: 0;
        }
        .contener {
            font-family: verdana;
            font-size: 15pt;
            color: #000;
            background-color: #ddd;
            z-index: 10;
            width: 100%;
            height: 56px;
            border: 1px solid #000;
            margin-bottom: 50px;
        }
        .barra-fixa {
            top: 0;
            position: fixed;
            margin-bottom: 40px;
        }
        .barra-fixa ul {
            background-color: rgba(2, 255, 0, 0.2);
            cursor: pointer;
            transition: box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1);
            list-style-type: none; /* adicionado para corrigir a estrutura */
        }
        .barra-fixa ul li {
            display: inline-block; /* adicionado para corrigir a estrutura */
            margin: 10px; /* ajustado para espaçamento uniforme */
        }
        .barra-fixa ul li a {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="contener">
        <div class="barra-fixa">
            <ul>
                <li><a href="index.php?p=pagina1.php" title="todas as temporadas de Naruto">Temporadas</a></li>
                <li><a href="index.php?p=pagina2.php">Temas de Naruto</a></li>
            </ul>
        </div>
    </div>

    <?php
        // Verifica se o parâmetro p está definido na URL
        if (isset($_GET['p'])) {
            $valor = $_GET['p'];
            
            // Utilizando switch para melhor legibilidade e manutenção
            switch ($valor) {
                case 'pagina1.php':
                    require_once 'pagina1.php';
                    break;
                case 'pagina2.php':
                    require_once 'pagina2.php';
                    break;
                default:
                    echo "Página não encontrada!";
                    break;
            }
        } else {
            echo "Selecione uma opção no menu.";
        }
    ?>
    
</body>
</html>
