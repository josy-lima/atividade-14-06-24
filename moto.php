<?php

include 'Veiculo.php';

class Moto extends Veiculo {
    private $cilindradas;

    public function __construct($marca, $modelo, $ano, $cilindradas) {
        parent::__construct($marca, $modelo, $ano);
        $this->cilindradas = $cilindradas;
    }

    public function exibirDetalhes() {
        $detalhesBasicos = parent::exibirDetalhes();
        return "$detalhesBasicos, Cilindradas: $this->cilindradas";
    }

    public function acelerar() {
        return "A moto está acelerando.";
    }
}

?>
