<?php

/**
 * @author erick
 * @copyright 2012
 */


include_once 'funcionario.php';
$funcionario = new funcionario;
$funcionario -> ValidarLogin($_POST['login'],$_POST['senha']);








?>