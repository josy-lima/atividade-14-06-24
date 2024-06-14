<?php

include 'Carro.php';
include 'Moto.php';

$carro = new Carro('Toyota', 'Corolla', 2020, 4);
$moto = new Moto('Honda', 'CB500', 2019, 500);

echo "Detalhes do Carro:\n";
echo $carro->exibirDetalhes() . "\n";
echo $carro->acelerar() . "\n\n";

echo "Detalhes da Moto:\n";
echo $moto->exibirDetalhes() . "\n";
echo $moto->acelerar() . "\n";

?>
