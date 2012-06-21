<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */


class topo {
    private $topo ='';
    
    function __construct(){
        $this -> __topo ='<img src="images/tjn.png" alt="Acadetec" title="Acadetec" /> 
                            <ul id="configuracoes"><li ><img src="images/config.png" alt="" />
                                                    <ul>
                                                        
                                                        <li><a href="../controller/sair.php">Sair</a></li>
                                                    </ul>
                                </li>
                            </ul>';
    }
    
    public function  GetTopo(){
        /**
         * Retorna o topo da pagina Adm
         * 
         */
        return $this -> __topo; 
        
    }
    
    
    
    
    
}

?>