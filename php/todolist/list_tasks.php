<?php
include 'db.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<span>" . $row['task'] . "</span>";
        echo "<a href='mark_complete.php?id=" . $row['id'] . "'>Marcar como concluído</a>";
        echo "</div>";
    }
} else {
    echo "Nenhuma tarefa encontrada";
}
$conn->close();
