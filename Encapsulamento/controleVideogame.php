<?php

class ControleVideoGame {
    // Atributos privados
    private $estado = "desligado";
    private $energia = 100;

    // Método para ligar o controle
    public function ligar() {
        if ($this->estado == "ligado") {
            echo "O controle já está ligado.\n";
        } else {
            $this->estado = "ligado";
            echo "Controle ligado!\n";
        }
    }

    // Método para desligar o controle
    public function desligar() {
        $this->estado = "desligado";
        echo "Controle desligado.\n";
    }

    // Método para pressionar botões
    public function pressionarBotao($botao) {
        if ($this->estado == "ligado" && $this->energia > 0) {
            echo "Você apertou o botão [$botao].\n";
            $this->energia -= 10;
        } elseif ($this->estado == "desligado") {
            echo "Ligue o controle primeiro!\n";
        } else {
            echo "Bateria fraca. Recarregue o controle.\n";
        }
    }

    // Método para ver o status
    public function verStatus() {
        echo "Estado: $this->estado\n";
        echo "Energia: $this->energia%\n";
    }

    // Método para recarregar a energia
    public function recarregar() {
        $this->energia = 100;
        echo "Controle recarregado!\n";
    }
}

// Uso do objeto
$controle = new ControleVideoGame();
$controle->verStatus();
$controle->pressionarBotao("A"); // Deve mostrar que está desligado
$controle->ligar();
$controle->pressionarBotao("X"); // Deve funcionar
$controle->verStatus();
$controle->recarregar();
$controle->verStatus();

?>
