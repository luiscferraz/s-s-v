<?php

/**
 * @author Erick Haendel
 * @copyright 2012
 */

//Exporta classes banco
include '../model/funcionario.php';



class funcionario {
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
    
    public function GetEditarFuncionario($id){
        $result = $this -> __bdfuncionario -> GetFuncionarioIdUnico($id);
        $cpf = $result[1];
        $nome = $result[2];
        $data = $result[3];
        $sexo = $result[4];
        $rg = $result[5];
        $celular = $result[6];
        $telefone = $result[7];
        $senha = $result[9];
        $editar ='
                                <h2 class="title">Editar Funcionario</h2>
                                <form id="form-edit" class="'.$id.'">                                    
                                    <form id="form-cadastro-funcionario">
                                    <label>Nome Completo :</label>
                                    <input type="text" value="'.$nome.'" name="nome"/>
                                    <label>Data de Nascimento</label>
                                    <input type="text" value="'.$data.'" name="data"/>
                                    <label>Sexo</label>
                                    <select name="sexo">
                                        <option value="masculino">M</option>
                                        <option value="feminino">F</option>
                                    </select>
                                    <label>CPF:</label>
                                    <input type="text" name="cpf" value="'.$cpf.'"/>
                                    <label>RG:</label>
                                    <input type="text" name="rg" value="'.$rg.'"/>
                                    <label>Telefone:</label>
                                    <input type="text" value="'.$telefone.'" name="telefone"/>
                                    <label>Celular:</label>
                                    <input type="text" value="'.$celular.'" name="celular"/>
                                    <input type="button" value="Salvar"/>
                                </form>
                                
                                ';
        return $editar;
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
         
         $tabela = '<table id="tabela" class="funcionario">
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
                            	<td><center><a href="#"  class="editar" id="'.$fun[0].'"><img src="images/edit.png" alt="" /></a></center></td>
                                    <td><center><a href="#" class="excluir" id="'.$fun[0].'"><img src="images/excluir.png" alt="" /></a></center></td>
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