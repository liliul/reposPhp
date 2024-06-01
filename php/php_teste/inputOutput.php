<?php
$preco = 123.45;
echo "O preço formatado é: R$ " . number_format($preco, 2, ',', '.') . "\n";

//while (($letra = fgetc(STDIN)) !== false) {
//    echo $letra;
//}
echo "--------------------------------\n";

echo "Digite um número inteiro: ";
$numero = intval(fgets(STDIN));
echo "Você digitou: $numero\n";

echo "--------------------------------\n";

echo "Numero ou String: ";
$inOut = trim(fgets(STDIN));
echo "> $inOut\n";

echo "--------------------------------\n";

echo "php fgets entrada de dados: ";
$entrada = fgets(STDIN);
echo "> $entrada\n";

//system('clear');
