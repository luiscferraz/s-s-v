<?php

/**
 * @author erick
 * @copyright 2012
 */

session_start();
$_SESSION['area'] = 'cliente';
$_SESSION['nivel'] = '1';
$_SESSION['nome'] = 'Marcos';
header('Location:adm/view/adm.php');

?>