<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */


class menu {
    private $menu ='';
    
    function __construct(){
        $this -> __menu ='<ul id="ul-menu">
                                <li><a href="#"><img src="images/administrador.png" alt="Info Funcionarios" title="Funcionários" />Funcionários</a>
                                    <ul class="submenu">
                                        <li> <a href="#" id="cad-fun">Cadastrar Funcionário</a> </li>
                                        <li><a href="#" id="fun"> Funcionários </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><img src="images/cliente.png" alt="Info Cliente" title="Clientes" />Clientes</a></li>
                                <li><a href="#"><img src="images/not.png" alt="Info Notícia" title="Notícias" />Notícias</a></li>
                            </ul>';
    }
    
    public function  GetMenu(){
        /**
         * Retorna menu da pagina Adm
         * 
         */
        return $this -> __menu; 
        
    }
    
    
    
    
    
}







?>