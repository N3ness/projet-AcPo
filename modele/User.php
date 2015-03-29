<?php
require_once 'Model.php';
require_once 'lib/PDO1.php';
class User extends Model
{
	private $login;
	private $mdp;
	
	public function __construct()
	{
		parent::__construct('Users');
		$this->login = "";
		$this->mdp = "";
	}

	public function deconnexion(){
		$_SESSION['authenticated'] = 'false';
		return 'Vous avez été déconnecté';
	}
	
	public function connexion($login,$mdp){
		$ret = '';
		try {
			//Recuperation de l'instance PDO
			$bdd = PDO1::getInstance();
			//Preparation de la requete
			$query = 'SELECT idUser, Login FROM users WHERE Login=? AND Password=?;';
			$prep = $bdd->prepare($query);
			//Associer des valeurs aux place holders
			$prep->bindValue(1, $login, PDO::PARAM_STR);
			$prep->bindValue(2, $mdp, PDO::PARAM_STR);
			//Compiler et exécuter la requête
			$prep->execute();
			//Récupérer toutes les données retournées
			$arrAll = $prep->fetchAll();
			//Clore la requête préparée
			$prep->closeCursor();
			$prep = NULL;
		} 
		catch(PDOException $ex) {
			$ret = 'Erreur : '.$ex->getMessage().' N° : '.$ex->getCode();
		}
		if (isset($arrAll[0]['idUser'])){
			$_SESSION['authenticated'] = 'true';
			$ret = 'Bonjour '.$arrAll[0]['Login'];
		}
		return $ret;
	}
	
	function creation($login, $mdp) {
		$ret = '';
		try{
			//Recuperation de l'instance PDO
			$bdd = PDO1::getInstance();
			//Preparation de la requete
			$query =  'SELECT idUser, Login FROM users WHERE Login=?;';
			$prep = $bdd->prepare($query);	
			//Associer des valeurs aux place holders
			$prep->bindValue(1, $login, PDO::PARAM_STR);
			//Compiler et exécuter la requête
			$prep->execute();
			//Récupérer toutes les données retournées
			$arrAll = $prep->fetchAll();
			//Clore la requête préparée
			$prep->closeCursor();
			$prep = NULL;
		}
		catch(PDOException $ex) {
			$ret = 'Erreur : '.$ex->getMessage().' N° : '.$ex->getCode();
		}
		if (isset($arrAll[0]['idUser'])){
			$ret = " Ce nom d'utilisateur est déja pris ";
		}
		else
		{
			try{
				//Recuperation de l'instance PDO
				$bdd = PDO1::getInstance();
				//Preparation de la requete
				$query = 'INSERT INTO users (Login,Password) VALUES (?,?);';
				$prep = $bdd->prepare($query);	
				//Associer des valeurs aux place holders
				$prep->bindValue(1, $login, PDO::PARAM_STR);
				$prep->bindValue(2, $mdp, PDO::PARAM_STR);
				//Compiler et exécuter la requête
				$prep->execute();
				//Clore la requête préparée
				$prep->closeCursor();
				$prep = NULL;
				$ret = " Votre compte à été créé ";
			}
			catch(PDOException $ex) {
			$ret = 'Erreur : '.$ex->getMessage().' N° : '.$ex->getCode();
			}
		}
		return $ret;
	}
}