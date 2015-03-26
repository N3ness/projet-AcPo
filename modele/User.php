<?php
	include_once('modele/User_fonctions.php');
	class User extends Model{
	
		private $login ="";
		private $password ="";
		
		public function _construct($password,$login,){
			parent::__construct('Users');
			$this->login = $login;
			$this->password = $password;	
			
		}
		
		public function Inscripton(){
			
		}
		
		public function Connexion(){
			return $login;
		}
		
			
	}
?>