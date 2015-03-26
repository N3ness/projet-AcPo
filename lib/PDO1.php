<?php

/**
 * Classe pour le singleton PDO

 */

class PDO1 extends PDO {

	private static $_instance;

	public function __construct( ) {
	
	}
	
	public static function getInstance() {
	
		if (!isset(self::$_instance)) {
			
			try {
			
				self::$_instance = new PDO('mysql:host=localhost;dbname=acubd;charset=utf8', 'root', '');
			
			} catch (PDOException $e) {
			
				die('Erreur : ' . $e->getMessage());
			}
		} 
		return self::$_instance; 
	}

}
