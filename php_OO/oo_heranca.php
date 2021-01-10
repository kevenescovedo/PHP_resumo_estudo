<?php
//com herança  você classes herdam para outra classses, ou seja com extends um classe é um exentsaõ de outra é herdará seus atributos metodos
class Veiculo {
    public $placa = null;
    public $cor = null;
    function acelerar() {
        echo "acelerar";
    }
}
class Carro  extends Veiculo{
  
    public $tetosolar = true;
  
    function abrirTetoSolar() {
        echo "teto solar aberto";
    }
    function alterarPosicaoVolante() {
        echo "mudar posição volante";
    }
}
class Moto extends Veiculo {
  
    public $contraPesoguidao = true;
    
    function enpinar(){
        echo "empinar";
    }

}
$carro = new Carro();
$moto = new Moto();
echo '<pre>';
print_r($carro);
echo "<br/>";
print_r($moto);
echo "</pre>";
 ?>
