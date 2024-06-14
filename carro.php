<?php

include 'Veiculo.php';

class Carro extends Veiculo {
    private $portas;

    public function __construct($marca, $modelo, $ano, $portas) {
        parent::__construct($marca, $modelo, $ano);
        $this->portas = $portas;
    }

    public function exibirDetalhes() {
        $detalhesBasicos = parent::exibirDetalhes();
        return "$detalhesBasicos, Portas: $this->portas";
    }

    public function acelerar() {
        return "O carro está acelerando.";
    }
}

?>
