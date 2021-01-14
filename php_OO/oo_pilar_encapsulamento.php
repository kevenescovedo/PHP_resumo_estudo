<?php 

class Pai {
 //um atributo private não pode ser acessado pela aplicação e nem herdeiros
    private $nome = "Keven";
    //um atributo protected não pode ser acessado pela aplicação porém pode ser acessado pelos herdeiros;
    protected $sobrenome = "Escovedo";
    //um atributo publico pode ser acessado pela aplicação e por herdeiros
    public $humor = "Feliz";
    //mas vc pode pegar um atributo private ou proted utilizando de interfaces, ou seja através
    //de metodos
    public function getNome() {
    return $this->nome;
    }
}
$pai = new Pai();
$pai->humor = "Muito Feliz";
echo $pai->getNome();
echo "</br>";
echo $pai->humor;

?>