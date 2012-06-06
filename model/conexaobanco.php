<?php


class banco {
	private $db;
	
	public function __construct(){
		$this -> _db['server'] = 'localhost';
		$this -> _db['user']= 'root';
		$this -> _db['password'] = '';
		$this -> _db['dbname']= 'ssv';
		
		}
	
	public function conecta(){
		
		$conn =  mysql_connect($this -> _db['server'],$this -> _db['user'], $this -> _db['password']) or die(mysql_error());
		return $conn;
		
		
		}
	
	
	
	}

?>