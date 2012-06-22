<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */

//Exporta classes banco
include '../model/depoimento.php';



class depoimento {
    private $bddepoimento ='';
    private $cadastro ='';
    private $buscar ='';
    
    function __construct(){
        $this -> __bddepoimento = new bddepoimento;
        $this -> __cadastro ='
                                <script type="text/javascript">
                                
                                    	tinyMCE.init({
                                    		// General options
                                    		mode : "textareas",
                                    		theme : "advanced",
                                    		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
                                    
                                    		
                                    	});
                                        alert($("#caixa-depo").val(tinyMCE.get("#caixa-depo").getContent()));
                                </script>
                                
                                <h2 class="title">Cadastrar depoimento</h2>
                                <form id="form-cadastro-depoimento">
                                    <table>
                                        
                                        <tr>
                                            
                                            <td><label>Nome:</label></td>
                                            <td><input type="text" value="" name="nome"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Cidade:</label></td>
                                            <td><input type="text" value="" name="cidade"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Estado:</label></td>
                                            <td><select id="estado">
                                                    <option value>Estados</option>
                                                    <option value="ac">Acre</option>
                                                    <option value="al">Alagoas</option>
                                                    <option value="am">Amazonas</option>
                                                    <option value="ap">Amapá</option>
                                                    <option value="ba">Bahia</option>
                                                    <option value="ce">Ceará</option>
                                                    <option value="df">Distrito Federal</option>
                                                    <option value="es">Espírito Santo</option>
                                                    <option value="go">Goiás</option>
                                                    <option value="ma">Maranhão</option>
                                                    <option value="mt">Mato Grosso</option>
                                                    <option value="ms">Mato Grosso do Sul</option>
                                                    <option value="mg">Minas Gerais</option>
                                                    <option value="pa">Pará</option>
                                                    <option value="pb">Paraíba</option>
                                                    <option value="pr">Paraná</option>
                                                    <option value="pe">Pernambuco</option>
                                                    <option value="pi">Piauí</option>
                                                    <option value="rj">Rio de Janeiro</option>
                                                    <option value="rn">Rio Grande do Norte</option>
                                                    <option value="ro">Rondônia</option>
                                                    <option value="rs">Rio Grande do Sul</option>
                                                    <option value="rr">Roraima</option>
                                                    <option value="sc">Santa Catarina</option>
                                                    <option value="se">Sergipe</option>
                                                    <option value="sp">São Paulo</option>
                                                    <option value="to">Tocantins</option>
                                                    </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Curso:</label></td>
                                            <td><input type="text" value="" name="curso"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Depoimento:</label></td>
                                            <td><textarea name="depo" cols="60" rows="10" id="caixa-depo"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="button" value="Cadastrar" id="bt-cad-depo"/></td>
                                            
                                        </tr>
                                </form>
                                ';
                                
        $this -> __buscar ='
                                <h2 class="title">Buscar depoimento</h2>
                                <form id="form-buscar" class="depo">
                                    <label>Nome :</label>
                                    <input type="text" value="" id="nome" name="nome"/>
                                    <label>Id:</label>
                                    <input type="text" name="id" id="id" value=""/>
                                    <input type="button" value="Buscar"/>
                                </form>
                                '.$this -> ListaDepoimentos().'
                                
                                
                                ';
        
        
    }
    
    public function  GetCadastroDepoimento(){
        /**
         * Retorna Conteudo do cadastro depoimento
         * 
         */
        return $this -> __cadastro; 
        
    }
    
    public function  GetDepoimentos(){
        /**
         * Retorna Conteudo do edicao depoimento
         * 
         */
        return $this -> __buscar; 
        
    }
    
    public function GetEditarDepoimento($id){
        $result = $this -> __bddepoimento -> GetDepoimentoIdUnico($id);
        $nome= $result[1];
        $cidade=$result[2];
        $estado=$result[3];
        $curso=$result[4];
        $depoimento=$result[5];
        $editar = '<script type="text/javascript">
                                
                                    	tinyMCE.init({
                                    		// General options
                                    		mode : "textareas",
                                    		theme : "advanced",
                                    		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
                                    
                                    		
                                    	});
                                        alert($("#caixa-depo").val(tinyMCE.get("#caixa-depo").getContent()));
                                </script>
                                
                                <h2 class="title">Cadastrar depoimento</h2>
                                <form id="form-edit" class="'.$id.'">
                                    <table>
                                        
                                        <tr>
                                            
                                            <td><label>Nome:</label></td>
                                            <td><input type="text" value="'.$nome.'" name="nome"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Cidade:</label></td>
                                            <td><input type="text" value="'.$cidade.'" name="cidade"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Estado:</label></td>
                                            <td><select id="estado">
                                                    <option value="'.$estado.'"></option>
                                                    <option value>Estados</option>
                                                    <option value="ac">Acre</option>
                                                    <option value="al">Alagoas</option>
                                                    <option value="am">Amazonas</option>
                                                    <option value="ap">Amapá</option>
                                                    <option value="ba">Bahia</option>
                                                    <option value="ce">Ceará</option>
                                                    <option value="df">Distrito Federal</option>
                                                    <option value="es">Espírito Santo</option>
                                                    <option value="go">Goiás</option>
                                                    <option value="ma">Maranhão</option>
                                                    <option value="mt">Mato Grosso</option>
                                                    <option value="ms">Mato Grosso do Sul</option>
                                                    <option value="mg">Minas Gerais</option>
                                                    <option value="pa">Pará</option>
                                                    <option value="pb">Paraíba</option>
                                                    <option value="pr">Paraná</option>
                                                    <option value="pe">Pernambuco</option>
                                                    <option value="pi">Piauí</option>
                                                    <option value="rj">Rio de Janeiro</option>
                                                    <option value="rn">Rio Grande do Norte</option>
                                                    <option value="ro">Rondônia</option>
                                                    <option value="rs">Rio Grande do Sul</option>
                                                    <option value="rr">Roraima</option>
                                                    <option value="sc">Santa Catarina</option>
                                                    <option value="se">Sergipe</option>
                                                    <option value="sp">São Paulo</option>
                                                    <option value="to">Tocantins</option>
                                                    </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Curso:</label></td>
                                            <td><input type="text" value="'.$curso.'" name="curso"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Depoimento:</label></td>
                                            <td><textarea name="depo" cols="60" rows="10" id="caixa-depo">'.$depoimento.'</textarea></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="button" value="Salvar" id="bt-edt-depo"/></td>
                                            
                                        </tr>
                                </form>
                                ';
        return $editar;
    }
    
    private function ListaDepoimentos(){
        /**
         * Tabela com a lista de depoimentos com opcao de excluir e editar
         * 
         * */
         
         $tabela = '<table id="tabela" class="depoimento">
                        <tr>
                        	<th>Id</th>
                        	<th>Nome</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        ';
                        $a  = $this -> __bddepoimento -> GetDepoimento();
                        while ($dep = mysql_fetch_array($a)){ 
                            $tabela = $tabela . '
                            <tr>
                            	<td>'.$dep['id'].'</td>
                            	<td>'.$dep['nome'].'</td>
                            	<td><center><a href="#"  class="editar" id="'.$dep[0].'"><img src="images/edit.png" alt="" /></a></center></td>
                        	<td><center><a href="#" class="excluir" id="'.$dep[0].'"><img src="images/excluir.png" alt="" /></a></center></td>
                            </tr>';
                            
                        }
                        
                        $tabela = $tabela .'
                    </table>';
                    
         
         
         return $tabela;
        
    }
    


    
}







?>

