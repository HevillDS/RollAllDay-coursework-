<?php 
class DbConnection {
	protected &conn;
	protected &defaults = [
		"host" => "localhost",
		"user" => "root",
		"pass" => "",
		"charset" => "utg8"
	];
	const $FETCH_MODE = MySQL_ASSOC;
	public function_construct() {
		$opt = array_merge($this->defaults, $opt);
		$this->conn = new mysql{($opt["host"],$opt["user"],$opt["pass"])} 
	}
} ?>