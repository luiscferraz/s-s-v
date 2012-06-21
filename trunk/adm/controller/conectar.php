<?php
/**
 * @author erick
 * @copyright 2012
 */
ini_set('display_errors', true);
error_reporting(E_ALL);
include_once 'funcionario.php';
$funcionario = new funcionario;
$funcionario -> ValidarLogin($_POST['login'],$_POST['senha']);
?>