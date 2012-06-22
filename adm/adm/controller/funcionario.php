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
    
    /**
     * funcionario::__construct()
     * 
     * @return
     */
    function __construct(){
        $this -> __bdfuncionario = new bdfuncionario;
        $this -> __cadastro ='
                                <h2 class="title">Cadastrar Funcionario</h2>
                                <form id="form-cadastro-funcionario">
                                    <label>Login:</label>
                                    <input type="text" value="" name="nome"/>
                                    <label>Senha</label>
                                    <input type="text" value="" name="senha"/>
                                    <input type="button" value="Cadastrar" id="bt-cad-fun" />
                                </form>
                                ';
        
                                
        $this -> __buscar ='
                            
                                <h2 class="title">Buscar Funcionario</h2>
                                <form id="form-buscar" class="fun">
                                    <label>Nome :</label>
                                    <input type="text" value="" name="nome-pesq" id="nome"/> ou
                                    <label>Id:</label>
                                    <input type="text" name="id" id="id" value=""/>
                                    <input type="button" value="Buscar"/>
                                </form>
                                '.$this -> ListaFuncionarios().'
                                
                                
                                ';
        
        
    }
    
    /**
     * funcionario::GetCadastroFuncionario()
     * 
     * @return formulario de cadastro
     */
    public function  GetCadastroFuncionario(){

        return $this -> __cadastro; 
        
    }
    
    /**
     * funcionario::GetFuncionarios()
     * 
     * @return formulario de busca com lista de funcionarios
     */
    public function  GetFuncionarios(){

        return $this -> __buscar; 
        
    }
    
    /**
     * funcionario::GetEditarFuncionario()
     * 
     * @return formulario de edicao
     */
    public function GetEditarFuncionario($id){
        $result = $this -> __bdfuncionario -> GetFuncionarioIdUnico($id);
        $login = $result[1];
        $senha = $result[2];
        $editar ='
                                <h2 class="title">Editar Funcionario</h2>
                                <form id="form-edit" class="'.$id.'">
                                    <label>Login:</label>
                                    <input type="text" value="'.$login.'" name="nome"/>
                                    <label>Senha</label>
                                    <input type="text" value="'.$senha.'" name="senha"/>
                                    <input type="button" value="Salvar" id="bt-edt-fun" />
                                </form>
                                ';
        return $editar;
    }
    
    /**
     * funcionario::ListaFuncionarios()
     * 
     * @return
     */
    private function ListaFuncionarios(){
         
         $tabela = '<table id="tabela" class="funcionario">
                        <tr>
                        	<th>ID</th>
                        	<th>Nome</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        ';
                        $a  = $this -> __bdfuncionario -> GetFuncionario();
                        while ($fun = mysql_fetch_array($a)){ 
                            $tabela = $tabela . '
                            <tr>
                            	<td>'.$fun['id'].'</td>
                            	<td>'.$fun['login'].'</td>
                            	<td><center><a href="#"  class="editar" id="'.$fun[0].'"><img src="images/edit.png" alt="" /></a></center></td>
                        	   <td><center><a href="#" class="excluir" id="'.$fun[0].'"><img src="images/excluir.png" alt="" /></a></center></td>
                            </tr>';
                            
                        }
                        
                        $tabela = $tabela .'
                    </table>';
                    
         
         
         return $tabela;
        
    }
    
    /**
     * funcionario::ValidarLogin()
     * 
     * @param mixed $login
     * @param mixed $senha
     * @return
     */
    public function ValidarLogin($login,$senha){
        $local = $_SERVER['HTTP_HOST'];
            
            if ($local == 'localhost'){
                $local = 'http://'.$local.'/acadetecinst/adm';
                }
            else {
                $local = 'http://'.$local.'/teste/adm';
            }

        
        if($funcionario = $this -> __bdfuncionario -> GetFuncionarioLoginUnico($login) ){
                    if ($funcionario['senha'] == $senha) {
                        session_start();
                        $_SESSION['login'] =  $login;
                        $_SESSION['flag'] = true;
                        header('Location:   '.$local.'/view/adm.php');
                    }
                    else{
                        header('Location: '.$local.'/view/home.php');
                        
                    }            
        }
        else{
            header('Location: '.$local.'/view/home.php');
        }

        
        
    }
    
    

    
}







?>