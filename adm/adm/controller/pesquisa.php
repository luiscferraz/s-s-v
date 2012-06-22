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
if ( $area ==  'fun'){
    if ($_GET['campo'] =='nome'){
        $resultado = $fun -> GetFuncionarioLogin($_GET['cont']);
        funcoes::tabela($resultado);
                    
    }
    if ($_GET['campo'] == 'id'){
        $resultado = $fun -> GetFuncionarioId($_GET['cont']);
        funcoes::tabela($resultado);
    }  
}

if ( $area ==  'depo'){
    if ($_GET['campo'] =='nome'){
        $resultado = $depo ->GetDepoimentoNome($_GET['cont']);
        funcoes::tabela($resultado);
                    
    }
    if ($_GET['campo'] == 'id'){
        $resultado = $depo ->GetDepoimentoId($_GET['cont']);
        funcoes::tabela($resultado);
    }  
}

if ( $area ==  'not'){
    if ($_GET['campo'] =='titulo'){
        $resultado = $not -> GetNoticia();
        funcoes::tabela64Titulo($resultado,5,1,'Data','Titulo',$_GET['cont']);
                    
    }
    if ($_GET['campo'] == 'data'){
        $data = $_GET['cont'];
        $data = str_replace("-","",$data);
        $data = str_replace("/","",$data);
        if (strlen($data) == 8){
         $data = funcoes::ConvertDateForBD($data);   
        }
        $resultado = $not -> GetNoticiaData($data);
        funcoes::tabela64($resultado,5,1,'Data','Titulo');
    }  
}




?>