<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */


class estrutura {
    
    function __construct(){
        echo 'l';
    }
    
    public function  menu(){
         $menu = '     <ul>
                        <li><a href=""><img src="images/administrador.png" alt="Info Funcionarios" title="Funcion�rios" />Funcion�rios</a></li>
                        <li><a href=""><img src="images/cliente.png" alt="Info Cliente" title="Clientes" />Clientes</a></li>
                        <li><a href=""><img src="images/not.png" alt="Info Not�cia" title="Not�cias" />Not�cias</a></li>
                    </ul>';
         return $menu;
    }
    
    
    
    
    
}







?>