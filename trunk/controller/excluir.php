<?php
/**
 * @author erick
 * @copyright 2012
 */

include_once('../model/funcionario.php');
include_once('../model/depoimento.php');
include_once('../model/noticia.php');
$depo = new bddepoimento;
$fun = new bdfuncionario;
$not = new bdnoticia;

$area  = $_GET['area'];
$id = $_GET['campo'];
if ( $area ==  'funcionario'){
        $fun -> DeleteFuncionario($id);
        $resultado = $fun -> GetFuncionario();
        funcoes::tabela($resultado,0,1,'CPF');
}

if ( $area ==  'depoimento'){
        $depo -> DeleteDepoimento($id);
        $resultado = $depo ->GetDepoimento();
        funcoes::tabela($resultado);
}

if ( $area ==  'noticia'){
        $not -> DeleteNoticia($id);
        $resultado = $not -> GetNoticia();
        funcoes::tabela64($resultado,5,1,'Data','Titulo');               
}

?>