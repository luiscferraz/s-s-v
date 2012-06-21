<?php

/**
 * @author erick
 * @copyright 2012
 * Informações para serem impressar via AJAX
 */

include_once 'importacao.php';

$identificador =  $_GET['conteudo'];


if ($identificador == 'cad-fun'){
    echo $funcionario ->GetCadastroFuncionario();
}
elseif($identificador == 'fun'){
    echo $funcionario ->GetFuncionarios();
}

elseif ($identificador == 'cad-depo'){
    echo $depoimento -> GetCadastroDepoimento();
}
elseif($identificador == 'depo'){
    echo $depoimento -> GetDepoimentos();
}

elseif ($identificador == 'cad-not'){
    echo $noticia -> GetCadastroNoticia();
}
elseif($identificador == 'not'){
    echo $noticia -> GetNoticias();
}


?>