<?php

/**
 * @author erick
 * @copyright 2012
 */

include_once('../model/funcionario.php');
$fun = new bdfuncionario;

include_once('../model/depoimento.php');
$depo = new bddepoimento;
include_once('../model/noticia.php');
include_once('../controller/funcoes.php');
$not = new bdnoticia;

$opc =  $_POST['cadastro'];

if ($opc == 'cad') {
    $flag = $fun -> GetFuncionarioLoginUnico( $_POST['nome']);
    echo $flag;
    if ($flag == '') {
        $fun -> SetUser($_POST['nome'],$_POST['senha']);
        echo 'true';
    }
    else {
        echo 'false';
    }
}

if ($opc == 'depo'){
    
    $depo -> SetDepo($_POST['nome'],$_POST['cidade'],$_POST['estado'],$_POST['curso'],$_POST['mensagem']);
    echo 'true';
}

if ($opc == 'not'){
    $conteudo = base64_encode($_POST['conteudo']);
    $titulo = base64_encode($_POST['titulo']);
    
    $data =$_POST['data'];
    $not -> SetNoticia($titulo,$conteudo,$_POST['postado'],$_POST['fonte'],$data);
    echo 'true';
}

?>