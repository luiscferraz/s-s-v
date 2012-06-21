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
                                <li><a href="#"><img src="images/cliente.png" alt="Depoimentos" title="Depoimentos" />Depoimentos</a>
                                    <ul class="submenu">
                                        <li> <a href="#" id="cad-depo">Cadastrar Depoimentos</a> </li>
                                        <li><a href="#" id="depo"> Depoimentos </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><img src="images/not.png" alt="Info Notícia" title="Notícias" />Notícias</a>
                                    <ul class="submenu">
                                        <li> <a href="#" id="cad-not">Cadastrar Notícias</a> </li>
                                        <li><a href="#" id="not"> Notícias </a></li>
                                    </ul>
                                </li>
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