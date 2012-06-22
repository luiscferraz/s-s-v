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

$opc =  $_POST['edicao'];

if ($opc == 'fun') {
        $fun -> UpdateUser($_POST['nome'],$_POST['senha'],$_POST['id']);
        echo 'true';
}

if ($opc == 'depo'){
    $depo -> UpdateDepoimento($_POST['id'],$_POST['nome'],$_POST['cidade'],$_POST['estado'],$_POST['curso'],$_POST['mensagem']);
    echo 'true';
}

if ($opc == 'not'){
    $conteudo = base64_encode($_POST['conteudo']);
    $titulo = base64_encode($_POST['titulo']);
    $not -> UpdateNoticia($_POST['id'],$titulo,$conteudo,$_POST['fonte'],$_POST['postado'],$_POST['data']);
    echo 'true';
}

?>