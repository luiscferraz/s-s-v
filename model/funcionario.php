<?php

/**
 * @author erick
 * @copyright 2012
 */

// Importando a classe de conexão com o banco
include_once ('conexaobanco.php');
// Classe Membros

class bdfuncionario{
	
	private $banco;
	private $conn;
	
	public function __construct(){
		
		$this -> __banco = new banco;
		$this -> __conn = $this -> __banco -> conecta();	
		mysql_select_db($this -> __banco -> _db['dbname'] ,$this -> __conn) or die(mysql_error());
		
	}
	
	public function SetFuncionario($cpf,$nome,$datanascimento,$sexo,$rg,$celular,$telefone,$nivel,$senha) {
		// Campos obrigatorios(login,nome e senha) para poder cadastrar no banco
			mysql_query('INSERT INTO  funcionario (cpf,nome,datanascimento,sexo,rg,celular,telefone,nivel,senha) VALUES ('.$senha.',"'.$login.'","'. $Nome.'",'. $DataAni.',"'. $Instrumento.'",'. $Telefone.','. $Celular.',"'. $Email.'", "'.$Foto.'","' .$Facebook.'","'. $Twitter.'","'. $Orkut.'","'. $MeusSites.'","'. $Categoria.'")', $this -> __conn) or die(mysql_error());
			return true;
	}
	
	public function GetFuncionario(){
			$result =  mysql_query('SELECT * FROM funcionario') or die(mysql_error());
			return $result;
		
		}
		
	public function GetFuncionarioCpf($id){
			$result = mysql_query('SELECT * FROM funcionario WHERE cpf='.$id.'');
			return mysql_fetch_array($result);
		}
        
  public function GetFuncionarioIdUnico($id){
			$result = mysql_query('SELECT * FROM funcionario WHERE cpf='.$id.'');
			return mysql_fetch_array($result);
		}

		
	public function UpdateFuncionario($id,$senha,$login, $Nome,$DataAni, $Instrumento, $Telefone, $Celular, $Email,$Foto,$Facebook,$Twitter, $Orkut, $MeusSites, $Categoria) {
			$result = mysql_query('UPDATE membro SET senha='.$senha.',login="'.$login.'",Nome="'.$Nome.'",DataAni='.$DataAni.',Instrumento='.$Instrumento.',Telefone='.$Telefone.',Celular='.$Celular.',Email="'.$Email.'",Foto="'.$Foto.'",Facebook="'.$Foto.'",Twitter="'.$Twitter.'",Orkut="'.$Orkut.'",MeusSites="'.$MeusSites.'",Categoria="'.$Categoria.'" WHERE id='.$id.'');
	}
    
     public function DeleteFuncionario($id){
			$result = mysql_query('Delete FROM funcionario WHERE cpf='.$id);
	}
	

	
	
	public function validacao($login='',$senha='') {

		if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
			$result =  $this  -> GetMembroPorLogin($login);
			$loginbanco =  $result['login'];
			$senhabanco = $result['senha'];
			if ($login == $loginbanco && $senha == $senhabanco){
				$_SESSION['login']= $login;
				$_SESSION['senha'] = $senha;
				$_SESSION['flag'] = true;
				$_SESSION['id_usuario'] = $result['id'];
				}
			else {header ("Location:../index.php");

			}
		
		
		
		}
	
	
	
	
	
	
	}
	
	
	
	
	}


?>