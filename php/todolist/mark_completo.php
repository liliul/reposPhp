<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "UPDATE tasks SET is_completed = TRUE WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa marcada como concluída";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
