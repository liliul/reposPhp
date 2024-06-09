<?php
    $jsonString = '{ "nome": "João Silva", "idade": 30, "cidade": "São Paulo" }';

    $data = json_decode($jsonString);

    echo "ler json: nome: $data->nome, idade: $data->idade e cidade: $data->cidade\n";

?>
