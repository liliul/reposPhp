<?php
include 'db.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $completedClass = $row['is_completed'] ? 'completed' : '';
        echo "<div class='task'>";
        echo "<span class='$completedClass'>" . htmlspecialchars($row['task']) . "</span>";

        // Link to mark task as completed
        if (!$row['is_completed']) {
            echo " <a href='mark_complete.php?id=" . $row['id'] . "'>Marcar como concluído</a>";
        }

        // Link to delete the task
        if ($row['is_completed']) {
            echo " <a href='delete_task.php?id=" . $row['id'] . "'>Excluir</a>";
        }

        echo "</div>";
    }
} else {
    echo "Nenhuma tarefa encontrada";
}
$conn->close();
