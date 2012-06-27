<?php

/**
 * @author erick
 * @copyright 2012
 * Informações para serem impressar via AJAX
 */
session_start();
include_once 'importacao.php';

$identificador =  $_GET['conteudo'];


if ($identificador == 'cad-fun'){
    echo $funcionario ->GetCadastroFuncionario();
}
elseif($identificador == 'fun'){
    echo $funcionario ->GetFuncionarios();
}
elseif ($identificador == 'cad-cli'){
    echo $cliente -> GetCadastroFuncionario();
}
elseif($identificador == 'cli'){
    echo $cliente -> GetFuncionarios();
}

elseif ($identificador == 'cad-not'){
    echo $noticia -> GetCadastroNoticia();
}
elseif($identificador == 'not'){
    echo $noticia -> GetNoticias();
}
elseif ($identificador == 'min-ven'){
    echo $cliente -> MinhasVendas($_SESSION['cpf']);
}
elseif ($identificador == 'pag'){
    echo $cliente -> Pagamentos(123);
}

elseif ($identificador == 'meusdados'){
    echo $cliente -> Meusdados(123);
}

?>