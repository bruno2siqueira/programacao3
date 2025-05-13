<!DOCTYPE html>
<html>
<body>

<?php
class Caneta{
    private $ponta;
    private $cor;
    
    public function __construct($ponta, $cor){
        $this->ponta = $ponta;
        $this->cor = $cor;
    }
    public function getPonta(){
        echo "Ponta da Caneta: " .$this->ponta. "<br>";
    }
    public function setPonta($ponta){
        $this->ponta = $ponta;
    }
    public function getCor(){
        echo "Cor da Caneta: " .$this->cor. "<br>";
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function MostraCaneta(){
    	echo "<br>########## <br>Caneta: <br> Ponta: ". $this->ponta;
    	echo "<br>Cor: ". $this->cor;
    
    }
}
$c1 = new Caneta(10.2, "branca");
$c1->getPonta();
$c1->getCor();
$c1->setCor("azul");
$c1->getCor();
$c1->MostraCaneta();

$c2 = new Caneta(0.5, "amarela");
$c2->MostraCaneta();








?>

</body>
</html>
