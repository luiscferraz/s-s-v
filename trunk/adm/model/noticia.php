<?php

/**
 * @author erick
 * @copyright 2012
 */
date_default_timezone_set('America/Sao_Paulo');
// Importando a classe de conexão com o banco
include_once ('conexaobanco.php');
include_once('../controller/funcoes.php');
// Classe Membros

class bdnoticia{
	
	private $banco;
	private $conn;
	
	public function __construct(){
		
		$this -> __banco = new banco;
		$this -> __conn = $this -> __banco -> conecta();	
		mysql_select_db($this -> __banco -> _db['dbname'] ,$this -> __conn) or die(mysql_error());
		
	}
	
	public function SetNoticia($titulo,$noticia, $postadopor,$fonte,$data) {
		// Campos obrigatorios(login,nome e senha) para poder cadastrar no banco
            $data =  funcoes::ConvertDateForBD($data).date('His');
            
			mysql_query('INSERT INTO  noticias (titulo,conteudo,fonte,postadopor,datahora) VALUES ("'.$titulo.'","'.$noticia.'","'.$fonte.'","'.$postadopor.'","'.$data.'")', $this -> __conn) or die(mysql_error());
			return true;
	}
	
	public function GetNoticia(){
			$result =  mysql_query('SELECT * FROM noticias ORDER BY datahora DESC') or die(mysql_error());
			return $result;
		
		}
        
        
    public function GetNoticiaData($data){
			$result =  mysql_query('SELECT * FROM noticias WHERE datahora LIKE "%'.$data.'%"') or die(mysql_error());
			return $result;
		
		}
        
    public function GetNoticiaTitulo($titulo){
			$result =  mysql_query('SELECT * FROM noticias WHERE titulo LIKE "%'.$titulo.'%"') or die(mysql_error());
			return $result;
		
		}
		
	public function GetNoticiaIdUnico($id){
			$result = mysql_query('SELECT * FROM noticias WHERE id="'.$id.'"');
			return mysql_fetch_array($result);
		}

		
	public function UpdateNoticia($id,$titulo,$noticia,$fonte, $postadopor,$data){
	           $data =  funcoes::ConvertDateForBD($data).date('His');
			$result = mysql_query('UPDATE noticias SET titulo="'.$titulo.'", conteudo="'.$noticia.'",fonte="'.$fonte.'",postadopor="'.$postadopor.'",datahora='.$data.' WHERE id='.$id);
	}
	
    public function DeleteNoticia($id){
			$result = mysql_query('Delete FROM noticias WHERE id='.$id);
	}
	

	
	
	
	
	
	
	
	
	
	}


?>