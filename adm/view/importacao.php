<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */

// Pagina de importação das Classes
include_once '../controller/menu.php';
include_once '../controller/topo.php';
include_once '../controller/funcionario.php';
include_once '../controller/noticias.php';
include_once '../controller/cliente.php';

//Declaração das classes
$menu = new menu;
$topo = new topo;
$funcionario = new funcionario;
$noticia = new noticia;
$cliente =  new cliente;

?>