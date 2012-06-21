<?php

class banco {
	private $db;
	
	public function __construct(){
		$this -> _db['server'] = 'localhost';
		$this -> _db['user']= 'acadetec_site';
		$this -> _db['password'] = '@site@';
		$this -> _db['dbname']= 'acadetec_site';
		
		}
	
	public function conecta(){
		
		$conn =  mysql_connect($this -> _db['server'],$this -> _db['user'], $this -> _db['password']) or die(mysql_error());
        ini_set('default_charset','UTF-8'); // Para o charset das páginas e
        mysql_set_charset('utf8'); // para a conexão com o MySQL
		return $conn;
		
		
		}
	
	
	
	}

?>