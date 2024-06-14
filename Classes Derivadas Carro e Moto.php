<?php

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
