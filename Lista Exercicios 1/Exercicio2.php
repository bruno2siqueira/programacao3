<?php

    class Caneta{
        public $nome;
        public $preco;
        public $quantidade;

        public function exibirInformaçoes(){
            echo "Nome: $this->nome <br>";
            echo "Preço: $this->preco <br>";
            echo "Quantidade: $this->quantidade <br>";
        }
    }

    $p1 = new Caneta();
    $p1->nome = "caneta";
    $p1->preco = 3.5;
    $p1->quantidade = 20;
    $p1->exibirInformaçoes();

    $p2 = new Caneta();
    $p2->nome = "caneta azul";
    $p2->preco = 4.5;
    $p2->quantidade = 10;
    $p2->exibirInformaçoes();

    