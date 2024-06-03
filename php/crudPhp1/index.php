<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud com PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Lista de Clientes</h2>
        <a class="btn btn-primary" href="src/create.php" role="button">Novo cliente</a>
        
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Endereço</th>
                    <th>Data</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $serverName = "localhost";
                    $userName = "root";
                    $password = "";
                    $database = "myshop";

                    // criar conecxão
                    $connection = new mysqli($serverName, $userName, $password, $database);

                    // checando conecxão
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }
                    
                    // lendo banco de dados
                    $sql = "SELECT * FROM clientsMyshop";
                    $result = $connection->query($sql);

                    if(!$result) {
                        die("Invalid query: " . $connection->error);
                    }

                    while($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[create_at]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='src/edit.php?id=$row[id]'>Editar</a>
                                <a class='btn btn-danger btn-sm' href='src/del.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>
                        ";
                    }


                ?>
                
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>