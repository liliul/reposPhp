<?php
    // $jsonString = '{ "nome": "João Silva", "idade": 30, "cidade": "São Paulo" }';
    //
    // $data = json_decode($jsonString);
    //
    // echo "ler json: nome: $data->nome, idade: $data->idade e cidade: $data->cidade\n";

    // ler arquivo json externo
    // $response = file_get_contents('dados.json');
    //
    // $lerJson = json_decode($response);
    //
    // echo "R> $lerJson->nome\n";


// lendo arquivo json com php
    $jsonString = file_get_contents('dados.json');

    if (file_exists('dados.json') && $jsonString !== false) {
    $data = json_decode($jsonString);

    if ($data !== null) {
        echo "User Name: " . $data->name . "\n";
        echo "Age: " . $data->age . "\n";
        echo "Occupation: " . $data->occupation . "\n";

        echo "Skills:\n";
        foreach ($data->skills as $skill) {
        echo " - " . $skill . "\n";
        }

        echo "City: " . $data->address->city . "\n";
        echo "Active: " . ($data->isActive ? 'Yes' : 'No') . "\n";
    } else {
        echo "Error: JSON decoding failed.\n";
    }
    } else {
    echo "Error: Unable to read JSON file.\n";
    }

?>
