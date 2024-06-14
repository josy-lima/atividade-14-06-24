<?php

class Veiculo {
    protected $marca;
    protected $modelo;
    protected $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirDetalhes() {
        return "Marca: $this->marca, Modelo: $this->modelo, Ano: $this->ano";
    }

    public function acelerar() {
        return "O veículo está acelerando.";
    }
}

?>
