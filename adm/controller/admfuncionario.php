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
                                <li><a href="#"><img src="images/administrador.png" alt="Info Funcion�rios" title="Funcion�rios" />Funcion�rios</a>
                                    <ul class="submenu">
                                        <li> <a href="#" id="cad-fun">Cadastrar Funcion�rio</a> </li>
                                        <li><a href="#" id="edt-fun"> Editar Funcion�rio</a> </li>
                                        <li><a href="#" id="exc-fun"> Excluir Funcion�rio</a></li>
                                        <li><a href="#" id="pro-fun"> Procurar Funcion�rio </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><img src="images/cliente.png" alt="Info Cliente" title="Clientes" />Clientes</a></li>
                                <li><a href="#"><img src="images/not.png" alt="Info Not�cia" title="Not�cias" />Not�cias</a></li>
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