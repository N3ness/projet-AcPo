function check(input) {     // fonction pour vérifier le mot de passe à l'inscription
	  if (input.value != document.getElementById('mdp').value) {
		input.setCustomValidity('Les deux mots de passe ne correspondent pas.');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}