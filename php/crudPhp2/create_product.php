<?php

require 'db_connect.php';

$name = $price = $description = ''; // Initialize variables

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Basic validation
    if (empty($name) || empty($description) || $price < 0) {
        echo "Please fill in all fields correctly.";
    } else {
        $sql = "INSERT INTO products (name, price, description) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssd", $name, $price, $description);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit(); // Ensure no further code is executed after redirection
        } else {
            // Log the error instead of displaying it directly
            error_log("Database error: " . $stmt->error);
            echo "An error occurred while adding the product. Please try again.";
        }

        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Novo Produto</h2>

        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required value="<?php echo htmlspecialchars($name); ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Preço</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required value="<?php echo htmlspecialchars($price); ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="5" required><?php echo htmlspecialchars($description); ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Adicionar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

