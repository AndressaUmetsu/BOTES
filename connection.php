<?php
require_once('connection.php');

class Database {
	private static $instance = NULL;

    private function __construct() {} //Prevenir um Database:new()
	private function __clone() {} //Prevenir um Database:new()

	public static function getInstance() {
	  	if (!isset(self::$instance)) {
	   		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	   		self::$instance = new PDO('mysql:host=localhost;dbname=botes', 'root', '', $pdo_options);
	   	}
	   	return self::$instance;
	}
}
?>