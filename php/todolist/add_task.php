<?php
include 'db.php';

if (isset($_POST['task'])) {
    $task = $conn->real_escape_string($_POST['task']);
    $sql = "INSERT INTO tasks (task) VALUES ('$task')";

    if ($conn->query($sql) === TRUE) {
        // echo "Nova tarefa adicionada com sucesso";
        header('Location: index.php');
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
