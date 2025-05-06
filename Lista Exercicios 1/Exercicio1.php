<?php

    class Caneta{
        public $nome;
        public $preco;
        public $quantidade;

        public function exibirInformaçoes(){
            echo "Nome: $this->nome";
            echo ", Preço: $this->preco";
            echo ", Quantidade: $this->quantidade";
        }
    }

    $p1 = new Caneta();
    $p1->nome = "caneta";
    $p1->preco = 2.5;
    $p1->quantidade = 10;
    $p1->exibirInformaçoes();
    