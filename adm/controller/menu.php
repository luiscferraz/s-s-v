<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */


class menu {
    private $menu ='';
    
    function __construct(){
       
    }
    
    public function  GetMenu($nivel,$area){
        /**
         * Retorna menu da pagina Adm
         * 
         */
         $menu = '';
         if ($area ==  'cliente'){
             $menu ='<ul id="ul-menu">
                                   
                                    <li><a href="#" id="meusdados"><img src="images/cliente.png" alt="Info Cliente"  title="Meus Dados" />Meus Dados</a>
                                    </li>
                                    
                                    <li><a href="#" id="pag"><img src="images/not.png" alt="Vendas" title="Parcela" />Pagamentos</a>
                                    </li>
                                </ul>';
            
            
            
         }
         else {
         if ($nivel ==1 ){
              $menu ='<ul id="ul-menu">
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
                                    
                                    
                                    <li><a href="#"><img src="images/not.png" alt="Info Notícia" title="Notícias" />Notícias</a>
                                        <ul class="submenu">
                                            <li> <a href="#" id="cad-not">Cadastrar Notícias</a> </li>
                                            <li><a href="#" id="not"> Notícias </a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>';}
         if ($nivel == 2) {
             $menu ='<ul id="ul-menu">
                                   
                                    <li><a href="#"><img src="images/cliente.png" alt="Info Cliente" title="Clientes" />Clientes</a>
                                         <ul class="submenu">
                                            <li> <a href="#" id="cad-cli">Cadastrar Cliente</a> </li>
                                            <li><a href="#" id="cli"> Clientes </a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#" id="min-ven"><img src="images/not.png" alt="Vendas" title="Minhas Vendas" />Minhas Vendas</a>
                                    </li>
                                </ul>';}}
         
        return $menu; 
        
    }
    
    
    
    
    
}







?>