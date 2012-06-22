<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */


class topo {
    private $topo ='';
    
    function __construct(){
        
    }
    
    public function  GetTopo($nome){
        /**
         * Retorna o topo da pagina Adm
         * 
         */
     $this -> __topo ='<img src="images/tjn.jpg" alt="TJN" title="TJN" /> 
                        <ul id="configuracoes">
                            <li style="font-size:9px"> Bem Vindo : '.$nome.' </li>
                            <li ><img src="images/config.png" alt="" />
                                                <ul>
                                                    
                                                    <li><a href="../controller/sair.php">Sair</a></li>
                                                </ul>
                            </li>
                            
                        </ul>';
        return $this -> __topo; 
        
    }
    
    
    
    
    
}

?>