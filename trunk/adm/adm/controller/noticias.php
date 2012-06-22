<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */

//Exporta classes banco
include '../model/noticia.php';
include_once 'funcoes.php';



class noticia {
    private $bdnoticia ='';
    private $cadastro ='';
    private $buscar ='';
    
    function __construct(){
        $this -> __bdnoticia = new bdnoticia;
        $this -> __cadastro ='
                                <script type="text/javascript">
                                
                                    	tinyMCE.init({
                                    		// General options
                                    		mode : "textareas",
                                    		theme : "advanced",
                                    		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
                                    	});
                                        
                                        

                                </script>
                                
                                <h2 class="title">Cadastrar Notícia</h2>
                                <form id="form-cadastro-noticia">
                                    <table>
                                        
                                        <tr>
                                            
                                            <td><label>Titulo:</label></td>
                                            <td><input type="text" value="" name="titulo"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Conteudo:</label></td>
                                            <td><textarea name="conteudo" rows="20" cols="95"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label>Fonte:</label></td>
                                            <td><input type="text" value="" name="fonte"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Postado por:</label></td>
                                            <td><input type="text" value="" name="postado" /></td>
                                        </tr>
                                        <tr>
                                            <td><label>Data:</label> </td>
                                            <td><input type="text" value="'.date('d').'/'.date('m').'/'.date('Y').'" id="data" name="data"/></td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="button" value="Cadastrar" id="bt-cad-not"/></td>
                                            
                                        </tr>
                                </form>
                                ';
                                
        $this -> __buscar ='
                                <h2 class="title">Buscar noticia</h2>
                                <form id="form-buscar" class="not">
                                    <label>Titulo :</label>
                                    <input type="text" value="" id="titulo" name="nome"/>
                                    <label>Data:</label>
                                    <input type="text" name="data" id="data" value="" placeholder="dd-mm-yyyy" />
                                    <input type="button" value="Buscar"/>
                                </form>
                                '.$this -> ListaNoticias().'
                                
                                
                                ';
        
        
    }
    
    public function  GetCadastroNoticia(){
        /**
         * Retorna Conteudo do cadastro noticia
         * 
         */
        return $this -> __cadastro; 
        
    }
    
    public function  GetNoticias(){
        /**
         * Retorna Conteudo do edicao noticia
         * 
         */
        return $this -> __buscar; 
        
    }
    
    public function GetEditarNoticia($id){
        
        $result = $this -> __bdnoticia-> GetNoticiaIdUnico($id);
        $titulo= $result['titulo'];
        $conteudo=$result[2];
        $fonte=$result[3];
        $postado=$result[4];
        $data=$result[5];
        $id = $result[0];
        $editar ='
                                <script type="text/javascript">
                                
                                    	tinyMCE.init({
                                    		// General options
                                    		mode : "textareas",
                                    		theme : "advanced",
                                    		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
                                    	});
                                        
                                        

                                </script>
                                
                                <h2 class="title">Cadastrar Notícia</h2>
                                <form id="form-edit" class="'.$id.'">
                                    <table>
                                        
                                        <tr>
                                            
                                            <td><label>Titulo:</label></td>
                                            <td><input type="text" value="'.stripslashes(base64_decode($titulo)).'" name="titulo"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Conteudo:</label></td>
                                            <td><textarea name="conteudo" rows="20" cols="95">'.stripslashes(base64_decode($conteudo)).'</textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label>Fonte:</label></td>
                                            <td><input type="text" value="'.$fonte.'" name="fonte"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Postado por:</label></td>
                                            <td><input type="text" value="'.$postado.'" name="postado" /></td>
                                        </tr>
                                        <tr>
                                            <td><label>Data:</label> </td>
                                            <td><input type="text" value="'.funcoes::DecorarData(funcoes::ConvertDateBD($data)).'" id="data" name="data"/></td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="button" value="Salvar" id="bt-edt-not"/></td>
                                            
                                        </tr>
                                </form>
                                ';
        return $editar;
    }
    
    private function ListaNoticias(){
        /**
         * Tabela com a lista de noticias com opcao de excluir e editar
         * 
         * */
         
         $tabela = '<table id="tabela" class="noticia">
                        <tr>
                        	<th>Data</th>
                        	<th>Titulo</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        ';
                        $a  = $this -> __bdnoticia -> GetNoticia();
                        while ($not = mysql_fetch_array($a)){ 
                            $tabela = $tabela . '
                                <tr>
                                    <td>'. funcoes::DecorarData(funcoes::ConvertDateBD(substr($not['datahora'],0,10))).'</td>
                                    <td>'.stripslashes(base64_decode($not['titulo'])).'</td>
                                    <td><center><a href="#"  class="editar" id="'.$not[0].'"><img src="images/edit.png" alt="" /></a></center></td>
                                    <td><center><a href="#" class="excluir" id="'.$not[0].'"><img src="images/excluir.png" alt="" /></a></center></td>
                                </tr>';
                            
                        }
                        
                        $tabela = $tabela .'
                    </table>';
                    
         
         
         return $tabela;
        
    }
    
  
    

    
}







?>