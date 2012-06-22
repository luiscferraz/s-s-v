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
                                <li><a href="#"><img src="images/cliente.png" alt="Info Cliente" title="Clientes" />Clientes</a>
                                     <ul class="submenu">
                                        <li> <a href="#" id="cad-cli">Cadastrar Cliente</a> </li>
                                        <li><a href="#" id="cli"> Clientes </a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="#" id="min-ven"><img src="images/not.png" alt="Vendas" title="Minhas Vendas" />Minhas Vendas</a>
                                </li>
                                
                                
                                <li><a href="#"><img src="images/not.png" alt="Info Notícia" title="Notícias" />Notícias</a>
                                    <ul class="submenu">
                                        <li> <a href="#" id="cad-not">Cadastrar Notícias</a> </li>
                                        <li><a href="#" id="not"> Notícias </a></li>
                                    </ul>
                                </li>
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