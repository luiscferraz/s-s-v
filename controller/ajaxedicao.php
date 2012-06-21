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

$opc =  $_GET['edicao'];
if ($opc == 'fun') {
        echo $_GET['id'];
        $fun -> UpdateUser($_GET['nome'],$_GET['senha'],$_GET['id']);
}

if ($opc == 'depo'){
    $depo -> UpdateDepoimento($_GET['nome'],$_GET['cidade'],$_GET['estado'],$_GET['curso'],$_GET['mensagem'],$_GET['id']);
    echo 'true';
}

if ($opc == 'not'){
    $not -> SetNoticia($_GET['titulo'],$_GET['conteudo'],$_GET['postado'],$_GET['fonte'],$_GET['data']);
    echo 'true';
}

?>