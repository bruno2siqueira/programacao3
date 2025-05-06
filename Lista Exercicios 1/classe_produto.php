<?php

    class Caneta{
        public $nome;
        public $preco;
        public $quantidade;

        public function exibirInformaçoes(){
            echo "Nome: $nome = 'caneta' <br>";
            echo "Preço: $preco = 2.5 <br>";
            echo "Quantidade: $quantidade = 10 <br>";
        }
    }

    $p1 = new Caneta();
    $p1->nome = "caneta";
    $p1->preco = 3.5;
    $p1->quantidade = 10;
    $p1->exibirInformaçoes();