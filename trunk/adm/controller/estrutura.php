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
                        <li><a href=""><img src="images/administrador.png" alt="Info Funcionarios" title="Funcionários" />Funcionários</a></li>
                        <li><a href=""><img src="images/cliente.png" alt="Info Cliente" title="Clientes" />Clientes</a></li>
                        <li><a href=""><img src="images/not.png" alt="Info Notícia" title="Notícias" />Notícias</a></li>
                    </ul>';
         return $menu;
    }
    
    
    
    
    
}







?>