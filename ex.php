<?php

/**
 * @author Erick
 * @copyright 2012
 */


class ex  {
    
    var $a;
    var $b;
    
    public function __construct($c,$d){
        $this -> __a = $c;
        $this -> __b = $d;
    }    
    
    public function somar(){
        return $this -> __a + $this -> __b;
    }    
}


$clas = new ex(2,3);

$i = 1;

while ($i <= $clas -> somar()){
    print $i.'<form><input type="text" value="escreva" /></form></br>';
    $i = $i + 1;      
}




?>