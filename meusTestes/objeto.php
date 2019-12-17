<div><h1>Objeto</h1></div>

<?php 
 define("CONSTANTE", "Alô Mundo.");
//  const VELOCIDADEFINAL=300;
 define(VELOCIDADEFINAL,300);

class Carro{

 private $marca="nenhum";
 public $modelo="teste";

  public function get_marca(){
     return $this->marca;

  }

 public function acelerar(){
   
    for($velocidade=0;$velocidade<=VELOCIDADEFINAL;$velocidade+=20){
          echo " $velocidade /"; 

    }


 }




}

$ferrari=new Carro();

echo "$ferrari->modelo";
echo"<br>";
// $ferrari->marca="testess esportivos";
echo $ferrari->get_marca();

echo"<br>";
$ferrari->acelerar();
echo $ferrari->get_marca();



class Data {

public $dia=01;
public $mes=01;
public $ano=1970;



public function apresentar(){
 return $this->dia ."/".$this->mes; 

}


}


$MinhaData=new Data();

echo "data<br>";

echo $MinhaData->apresentar();



?>