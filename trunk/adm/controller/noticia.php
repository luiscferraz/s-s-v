<?php

/**
 * @author Rafael (Faet.Erick Haendel)
 * @copyright 2012
 */

//Exporta classes banco
include '../model/noticias.php';



class cliente {
    private $bdnoticias ='';
    private $cadastro ='';
    private $buscar ='';
    
    function __construct(){
        $this -> __bdnoticias = new noticia;
        $this -> __cadastro ='
                                <h2 class="title">Cadastrar Noticia</h2>
                                <form id="form-cadastro-noticia">
                                    <label>Titulo :</label>
                                    <input type="text" value="" name="titulo"/>
                                    <label>Conteudo :</label>
                                    <input type="text" value="" name="conteudo"/>
                                    <label>Fonte :</label>
                                    <input type="text" value="" name="fonte"/>
                                    <label>Postado por :</label>
                                    <input type="text" value="" name="postado"/>
                                    <label>Data</label>
                                    <input type="text" value="" name="data"/>
                                    <input type="button" value="Cadastrar"/>
                                </form>
                                ';
                                
        $this -> __buscar ='
                                <h2 class="title">Buscar Noticia</h2>
                                <form id="form-buscar-noticia">
                                    <label>Titulo :</label>
                                    <input type="text" value="" name="titulo"/>
                                    <label>Data:</label>
                                    <input type="text" name="data" value=""/>
                                    <input type="button" value="Buscar"/>
                                </form>
                                '.$this -> ListaNoticias().'
                                
                                
                                ';
        
        
    }
    
    public function  GetCadastroNoticia(){
        /**
         * Retorna Conteudo do cadastro Noticia
         * 
         */
        return $this -> __cadastro; 
        
    }
    
    public function  GetNoticia(){
        /**
         * Retorna Conteudo do edicao noticia
         * 
         */
        return $this -> __buscar; 
        
    }
    
    private function ListaNoticias(){
        /**
         * Tabela com a lista de funcionarios com opcao de excluir e editar
         * 
         * */
         
         $tabela = '<table id="tabela-noticia">
                        <tr>
                        	<th>Titulo</th>
                        	<th>Data</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        ';
                        $a  = $this -> __bdnoticia-> GetNoticia();
                        while ($fun = mysql_fetch_array($a)){ 
                            $tabela = $tabela . '
                            <tr>
                            	<td>'.$fun['titulo'].'</td>
                            	<td>'.htmlentities($fun['data']).'</td>
                            	<td><center><a href=""><img src="images/edit.png" alt="" /></a></center></td>
                            	<td><center><a href=""><img src="images/excluir.png" alt="" /></a></center></td>
                            </tr>';
                            
                        }
                        
                        $tabela = $tabela .'
                    </table>';
                    
         
         
         return $tabela;
        
    }
    
    
        
    }