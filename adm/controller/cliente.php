<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */

//Exporta classes banco
//include '../model/funcionario.php';



class cliente {
    private $bdfuncionario ='';
    private $cadastro ='';
    private $buscar ='';
    
    function __construct(){
        $this -> __bdfuncionario = new bdfuncionario;
        $this -> __cadastro ='
                                <h2 class="title">Cadastrar Cliente</h2>
                                <form id="form-cadastro-funcionario">
                                    <fieldset>
                                        <legend>Dados Pessoais</legend>
                                        <label>Nome Completo :</label>
                                        <input type="text" value="" name="nome"/>
                                        <label>CPFo :</label>
                                        <input type="text" value="" name="cpf"/>
                                        <label>RG :</label>
                                        <input type="text" value="" name="rg"/>
                                        <label>Rua :</label>
                                        <input type="text" name="rua" value=""/>
                                        <label>Bairro :</label>
                                        <input type="text" name="bairro" value=""/>
                                        <label>Cidade :</label>
                                        <input type="text" value="" name="cidade"/>
                                        <label>UF:</label>
                                        <input type="text" value="" name="uf"/>
                                        <label>CEP:</label>
                                        <input type="text" value="" name="cep"/>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Dados do Veículo</legend>
                                        <label>Veiculo:</label>
                                        <input type="text" value="" name="veiculo"/>
                                        <label>Placa :</label>
                                        <input type="text" value="" name="placa"/>
                                        <label>Modelo:</label>
                                        <input type="text" value="" name="modelo"/>
                                        <label>Fabricação :</label>
                                        <input type="text" value="" name="fabricacao"/>
                                        <label>Valor do Veículo :</label>
                                        <input type="text" value="" name="valorveiculo"/>
                                        <label>Foto Veículo:</label>
                                        <input type="file" value="" name="foto"/>
                                    </fieldset>
                                        <input type="button" value="Cadastrar"/>
                                </form>
                                ';
                                
        $this -> __buscar ='
                                <h2 class="title">Buscar Cliente</h2>
                                <form id="form-buscar-funcionario">
                                    <label>Nome :</label>
                                    <input type="text" value="" name="nome"/>
                                    <label>CPF:</label>
                                    <input type="text" name="cpf" value=""/>
                                    <input type="button" value="Buscar"/>
                                </form>
                                '.$this -> ListaFuncionarios().'
                                
                                
                                ';
        
        
    }
    
    public function  GetCadastroFuncionario(){
        /**
         * Retorna Conteudo do cadastro funcionario
         * 
         */
        return $this -> __cadastro; 
        
    }
    
    public function  GetFuncionarios(){
        /**
         * Retorna Conteudo do edicao funcionario
         * 
         */
        return $this -> __buscar; 
        
    }
    
    public function MinhasVendas($id){
        /**
         * Tabela com a lista de funcionarios com opcao de excluir e editar
         * 
         * */
         
         $tabela = '<table id="tabela">
                        <tr>
                        	<th>CPF</th>
                        	<th>Nome</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        ';
                        $a  = $this -> __bdfuncionario -> GetFuncionario();
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
    
    private function ListaFuncionarios(){
        /**
         * Tabela com a lista de funcionarios com opcao de excluir e editar
         * 
         * */
         
         $tabela = '<table id="tabela">
                        <tr>
                        	<th>CPF</th>
                        	<th>Nome</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        ';
                        $a  = $this -> __bdfuncionario -> GetFuncionario();
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
    
    public function ValidarLogin($login,$senha){

        if($funcionario = $this -> __bdfuncionario -> GetFuncionarioCpf($login) ){
                    if ($funcionario['senha'] == $senha) {
                        session_start();
                        $_SESSION['login'] =  $login;
                        $_SESSION['pass'] = true;
                        header('Location: ../view/adm.php');
                    }
                    else{
                        header('Location: ../view/home.htm');
                    }            
        }
        else{
            header('Location: ../view/home.htm');
        }

        
        
    }
    
    

    
}







?>