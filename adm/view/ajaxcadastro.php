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
    $flag = $fun -> GetFuncionarioIdUnico( $_POST['cpf']);
    if ($flag == '') {
        $fun -> SetFuncionario($_POST['cpf'],$_POST['nome'],$_POST['data'],$_POST['sexo'],$_POST['rg'],$_POST['celular'],$_POST['telefone'],2,$_POST['senha']);
        echo 'true';
    }
    else {
        echo 'false';
    }
}

if ($opc == 'cli'){
    
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