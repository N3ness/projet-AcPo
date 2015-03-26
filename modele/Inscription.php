<?php

	function add_membre($login, $mdp) {

		$pdo = PDO1::getInstance();
		
		$requete= $pdo->prepare("SELECT Login From users WHERE Login = :nom");
		$requete->bindValue(':nom', $login);
		$requete->execute();
		
		if (isset($requete))
		{
			echo " Ce nom d'utilisateur est déja pris ";
		}
		else
		{
			$requete= $pdo->prepare("INSERT INTO users SET	Login = :login,	Password = :password");
			$requete->bindValue(':login', $login);
			$requete->bindValue(':password', $mdp);
			$requete->execute();
		}
		return $requete->errorInfo();
	}

?>