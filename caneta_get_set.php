<!DOCTYPE html>
<html>
<body>

<?php
class Caneta{
    public $marca;
    private $cor;
    private $ponta;
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getPonta(){
        return $this->cor;
    }
    public function setPonta($ponta){
        $this->cor = $ponta;
    }

}
$c1 = new Caneta();
$c2 = new Caneta();

$c1->marca = "BIC";
$c1->setCor("Azul");
echo "A cor da caneta é: ". $c1->getCor() ."<br>";
print_r($c1);
echo "<br>";
print_r($c2);




?>

</body>
</html>
