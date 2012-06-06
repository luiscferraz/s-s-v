<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */


class topo {
    private $topo ='';
    
    function __construct(){
        $this -> __topo ='<img src="images/tjn.jpg" alt="TJN" title="TJN" /> 
                            <a href="" id="configuracoes"><img src="images/config.png" alt="" /></a>';
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