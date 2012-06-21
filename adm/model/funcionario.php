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
	
	public function SetUser($login,$senha) {
		// Campos obrigatorios(login,nome e senha) para poder cadastrar no banco
			mysql_query('INSERT INTO  user (login,senha) VALUES ("'.$login.'","'.$senha.'")', $this -> __conn) or die(mysql_error());
			return true;
	}
	
	public function GetFuncionario(){
			$result =  mysql_query('SELECT * FROM user') or die(mysql_error());
			return $result;
		
		}
	
    public function GetFuncionarioLoginUnico($id){
			$result = mysql_query('SELECT * FROM user WHERE login= "'.$id.'"');
			return mysql_fetch_array($result);
		}	
        
	public function GetFuncionarioLogin($id){
			$result = mysql_query('SELECT * FROM user WHERE login LIKE "%'.$id.'%"');
			return $result;
		}
        
  
    public function GetFuncionarioId($id){
			$result = mysql_query('SELECT * FROM user WHERE id LIKE "%'.$id.'%"');
			return $result;
		}
        
   public function GetFuncionarioIdUnico($id){
			$result = mysql_query('SELECT * FROM user WHERE id = '.$id.'');
			return mysql_fetch_array($result);
		}

		
	public function UpdateUser($user,$senha,$id){
			$result = mysql_query('UPDATE user SET login="'.$user.'",senha='.$senha.' WHERE id='.$id);
	}
	

	public function DeleteFuncionario($id){
			$result = mysql_query('Delete FROM user WHERE id='.$id);
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