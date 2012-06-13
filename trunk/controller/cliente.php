<?php

/**
 * @author Rafael (Faet.Erick Haendel)
 * @copyright 2012
 */

//Exporta classes banco
include '../model/cliente.php';



class cliente {
    private $bdcliente ='';
    private $cadastro ='';
    private $buscar ='';
    
    function __construct(){
        $this -> __bdcliente = new cliente;
        $this -> __cadastro ='
                                <h2 class="title">Cadastrar Cliente</h2>
                                <form id="form-cadastro-cliente">
                                    <label>Nome Completo :</label>
                                    <input type="text" value="" name="nome"/>
                                    <label>Data de Nascimento</label>
                                    <input type="text" value="" name="data"/>
                                    <label>Sexo</label>
                                    <select name="sexo">
                                        <option value="masculino">M</option>
                                        <option value="feminino">F</option>
                                    </select>
                                    <label>CPF:</label>
                                    <input type="text" name="cpf" value=""/>
                                    <label>RG:</label>
                                    <input type="text" name="rg" value=""/>
                                    <label>Telefone:</label>
                                    <input type="text" value="" name="telefone"/>
                                    <label>Celular:</label>
                                    <input type="text" value="" name="celular"/>
                                    <label>Modelo do Carro :</label>
                                    <input type="text" value="" name="nome"/>
                                    <label>Ano do Carro :</label>
                                    <input type="text" name="ano" value=""/>
                                    <input type="button" value="Cadastrar"/>
                                </form>
                                ';
                                
        $this -> __buscar ='
                                <h2 class="title">Buscar Cliente</h2>
                                <form id="form-buscar-cliente">
                                    <label>Nome :</label>
                                    <input type="text" value="" name="nome"/>
                                    <label>CPF:</label>
                                    <input type="text" name="cpf" value=""/>
                                    <input type="button" value="Buscar"/>
                                </form>
                                '.$this -> ListaClientes().'
                                
                                
                                ';
        
        
    }
    
    public function  GetCadastroCliente(){
        /**
         * Retorna Conteudo do cadastro cliente
         * 
         */
        return $this -> __cadastro; 
        
    }
    
    public function  GetCliente(){
        /**
         * Retorna Conteudo do edicao cliente
         * 
         */
        return $this -> __buscar; 
        
    }
    
    private function ListaClientes(){
        /**
         * Tabela com a lista de funcionarios com opcao de excluir e editar
         * 
         * */
         
         $tabela = '<table id="tabela-cliente">
                        <tr>
                        	<th>CPF</th>
                        	<th>Nome</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        ';
                        $a  = $this -> __bdcliente-> GetCliente();
                        while ($fun = mysql_fetch_array($a)){ 
                            $tabela = $tabela . '
                            <tr>
                            	<td>'.$fun['cpf'].'</td>
                            	<td>'.htmlentities($fun['nome']).'</td>
                            	<td><center><a href=""><img src="images/edit.png" alt="" /></a></center></td>
                            	<td><center><a href=""><img src="images/excluir.png" alt="" /></a></center></td>
                            </tr>';
                            
                        }
                        
                        $tabela = $tabela .'
                    </table>';
                    
         
         
         return $tabela;
        
    }
    
    
        
    }
    
    

    







?>