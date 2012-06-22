<?php
/**
 * @author erick
 * @copyright 2012
 */


include_once('../controller/funcionario.php');
include_once('../controller/depoimentos.php');
include_once('../controller/noticias.php');
$depo = new depoimento;
$fun = new funcionario;
$not = new noticia;

$area  = $_GET['area'];
$id = $_GET['campo'];

if ( $area ==  'funcionario'){
        echo $fun -> GetEditarFuncionario($id);
}

if ( $area ==  'depoimento'){
         echo $depo -> GetEditarDepoimento($id);
}

if ( $area ==  'noticia'){
        echo $not -> GetEditarNoticia($id);        
}

?>