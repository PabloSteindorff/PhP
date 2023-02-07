<?php 

class carro{

   private $cor = "vermelho";
   private $velmax = 200;
   private $marca = "Fiat";
   private $modelo = "Uno";
   private $ano = 1994;

   public function info(){
       echo "Carro modelo ". $this-> modelo. " marca ".$this-> marca. " ano ".$this-> ano. " cor ". $this->cor. " velocidade maxima ".$this-> velmax;
   } 

   public function setano($ano){
       if($ano >= 1885 and $ano <= date("Y") + 1){

        $this->ano = $ano;
   }else{
       die();
   }
}
}
$carro1 = new carro();
$carro1 ->info();

$carro2 = new carro();
$carro2->setano(2011);

$carro2->info();

$carro3 = new carro();
$carro3->setano(1000);

$carro3->info();

?>