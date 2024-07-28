<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .task {
            margin: 10px 0;
        }

        .completed {
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <h1>Minha To-Do List</h1>

    <form action="add_task.php" method="POST">
        <input type="text" name="task" placeholder="Nova tarefa" required>
        <button type="submit">Adicionar</button>
    </form>

    <h2>Tarefas:</h2>
    <?php include 'list_tasks.php'; ?>
</body>

</html>