<?php

	function add_membre($login, $mdp) {

		$pdo = PDO1::getInstance();
		
		try{
		
			$requete= $pdo->prepare("SELECT Login From users WHERE Login = :nom");
			$requete->bindValue(':nom', $login);
			$requete->execute();
		}
		catch(PDOException $ex) {
			echo "Il y a une erreur"; 
			echo $ex;
		}
		if (isset($requete))
		{
			echo " Ce nom d'utilisateur est déja pris ";
		}
		else
		{
			try{
				$requete= $pdo->prepare("INSERT INTO users SET	Login = :login,	Password = :password");
				$requete->bindValue(':login', $login);
				$requete->bindValue(':password', $mdp);
				$requete->execute();
			}
			catch(PDOException $ex) {
				echo "Il y a une erreur"; 
				echo $ex;
			}
		}
		return $requete->errorInfo();
	}

?>