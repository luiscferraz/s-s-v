<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */


class funcionario {
    private $cadastro ='';
    private $editar ='';
    private $excluir ='';
    private $buscar ='';
    
    function __construct(){
        $this -> __cadastro ='<ul id="ul-menu">
                                <li><a href="#"><img src="images/administrador.png" alt="Info Funcionários" title="Funcionários" />Funcionários</a>
                                    <ul class="submenu">
                                        <li> <a href="#" id="cad-fun">Cadastrar Funcionário</a> </li>
                                        <li><a href="#" id="edt-fun"> Editar Funcionário</a> </li>
                                        <li><a href="#" id="exc-fun"> Excluir Funcionário</a></li>
                                        <li><a href="#" id="pro-fun"> Procurar Funcionário </a></li>
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