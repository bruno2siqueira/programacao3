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

?>
