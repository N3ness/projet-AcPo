<?php
	
	 public function sign_up($login,$mdp){
			try {
				$requete = $this->bdd
				->query('SELECT Login FROM users WHERE Login = $login AND Password = $mdp;');

			} 
			catch(PDOException $ex) {
				echo "Il y a une erreur"; 
				echo $ex;
			}
			if (isset($requete))
			{
				echo "Vous êtes connecté ";
				return $login;
			}
			return 0;
	    }
	}	


?>

