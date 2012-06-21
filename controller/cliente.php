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
                                <h2 class="title">Cadastrar Funcionario</h2>
                                <form id="form-cadastro-funcionario">
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
                                    <input type="button" value="Cadastrar"/>
                                </form>
                                ';
                                
        $this -> __buscar ='
                                <h2 class="title">Buscar Funcionario</h2>
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