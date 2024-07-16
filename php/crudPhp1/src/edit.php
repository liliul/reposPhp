<?php
    $serverName = "172.17.0.2";
    $userName = "root";
    $password = "root";
    $database = "myshop";

    // criar conecxão
    $connection = new mysqli($serverName, $userName, $password, $database);

    $id = "";
    $name = "";
    $email = ""; 
    $phone = ""; 
    $address = ""; 

    $errorMessage = "";
    $successMessage = "";

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
       if (!isset($_GET["id"])) {
        header("location: ../index.php");
        exit;
       }

       $id = $_GET["id"];

       $sql = "SELECT * FROM clientsMyshop WHERE id=$id";
       $result = $connection->query($sql);
       $row = $result->fetch_assoc();

       if (!$row) {
        header("location: ../index.php");
        exit;
       }

       $name = $row["name"];
       $email = $row["email"];
       $phone = $row["phone"];
       $address = $row["address"];
    }
    else {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        do {
            if (empty($id) || empty($name) || empty($email) || empty($phone) || empty($address)) {
                $errorMessage = "All the field are required";
                break;
            }

            // adicionar novo cliente no banco de dados
            $sql = "UPDATE clientsMyshop " . 
            "SET name = '$name', email = '$email', phone = '$phone', address = '$address' " . 
            "WHERE id = $id";
            $result = $connection->query($sql);

            if(!$result) {
                die("Invalid query: " . $connection->error);
            }

            
            $successMessage = "Client added cirrectly";

            header("location: ../index.php");
            exit;

        } while (false);
    }
   
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Novo Cliente</h2>

        <?php
            if (!empty($errorMessage)) {
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button class='btn-close' type='button' data-bs-alert='alert' aria-label='close'></button>
                </div>
                ";
            }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Nome</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone;?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="">Endereço</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address;?>">
                </div>
            </div>

            <?php
                if(!empty($successMessage)) {
                    echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>$successMessage</strong>
                                <button class='btn-close' type='button' data-bs-alert='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>
            
            <div class="row mb-3">
               <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>  
               </div> 
               <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="../index.php" role="button">Cancelar</a>
               </div>
            </div>
        </form>
    </div>
                

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
