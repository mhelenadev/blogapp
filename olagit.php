<?php

class calcular{

    public function soma($n1,$n2){
        return $n1 + $n2 ;

    }

    public function subtracao($n1,$n2){
        return $n1 - $n2 ;
    }    
    
    public function multiplicacao($n1,$n2){
        return $n1 * $n2 ;
    }    
}

$objCalcular = new calcular;

echo "A soma é :";
echo $objCalcular->soma(1,2);
echo "<br />A subtracao é :";
echo $objCalcular->subtracao(10,2);
