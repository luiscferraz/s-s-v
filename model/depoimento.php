<?php

/**
 * @author erick
 * @copyright 2012
 */

// Importando a classe de conexão com o banco
include_once ('conexaobanco.php');
// Classe Membros

class bddepoimento{
	
	private $banco;
	private $conn;
	
	public function __construct(){
		
		$this -> __banco = new banco;
		$this -> __conn = $this -> __banco -> conecta();	
		mysql_select_db($this -> __banco -> _db['dbname'] ,$this -> __conn) or die(mysql_error());
		
	}
	
	public function SetDepo($nome,$cidade,$estado,$curso,$mensagem) {
			mysql_query('INSERT INTO depoimento (nome,cidade,estado,curso,mensagem) VALUES ("'.$nome.'","'.$cidade.'","'.$estado.'","'.$curso.'","'.$mensagem.'")', $this -> __conn) or die(mysql_error());
			return true;
	}
	
	public function GetDepoimento(){
			$result =  mysql_query('SELECT * FROM depoimento') or die(mysql_error());
			return $result;
		
		}
        
    public function GetDepoimentoId($id){
			$result =  mysql_query('SELECT * FROM depoimento WHERE id LIKE "%'.$id.'%"') or die(mysql_error());
			return $result;
		
		}
        
    public function GetDepoimentoNome($nome){
			$result =  mysql_query('SELECT * FROM depoimento WHERE nome LIKE "%'.$nome.'%"') or die(mysql_error());
			return $result;
		
		}
		
	public function GetDepoimentoIdUnico($id){
			$result = mysql_query('SELECT * FROM depoimento WHERE id='.$id);
			return mysql_fetch_array($result);
		}

		
	public function UpdateDepoimento($id,$nome,$cidade,$estado,$curso,$mensagem){
			$result = mysql_query('UPDATE depoimento SET nome="'.$nome.'",cidade="'.$cidade.'",estado="'.$estado.'",curso="'.$curso.'",mensagem="'.$mensagem.'" WHERE id='.$id);
	}
	
    public function DeleteDepoimento($id){
			$result = mysql_query('Delete FROM depoimento WHERE id='.$id);
	}
	
	
	
		
		
}


?>