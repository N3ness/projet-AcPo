<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acupuncteurs Associés Accessibles - </title>
	<link href="vue/css/screen.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="vue/css/print.css" rel="stylesheet" type="text/css" media="print" />
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<header>
	<h1>Bienvenue sur le site des Acupuncteurs Associés Accessibles</h1>
		<blockquote>"Si ca pique, c'est que ca fonctionne"</blockquote>
</header>
<nav>
	<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="index.php?section=fiche">Fiches</a></li>
		<li><a href="index.php?section=signup">Créer un compte</a></li>
	</ul>
</nav>
	<section>
		<aside>
			<div id="recherche">
				<label for="inSearch">Recherche : </label>
				<input id="inSearch" name="search" type="text" />
				<a href="index.php?section=recherche">Recherche avancée</a>
			</div>
			
			<div id="rss">
				Flux RSS:
			</div>
		</aside>
		<article>
			<h2>Création d'un nouveau compte</h2>
			<form method="post" action="recherche.php">
				<ul>
					<li>
						<label for="full_name">Nom complet :</label>
						<input type="text" id="full_name" name="full_name" required>
					</li>
					<li>
						<label for="username">Nom d'utilisateur :</label>
						<input type="text" id="username" name="username" >
					</li>
					<li>
						<label for="mdp">Mot de passe :</label><br />
						<input type="password" id="mdp" name="mdp"  />					
					</li>
					<li>
						<label for="mdp_repeat">Confirmez le mot de passe :</label>
						<input type="password" id="mdp_repeat" name="mdp_repeat" required oninput="check(this)">
					</li>
					<li>
						<input type="submit" value="Effectuer la recherche" /> 
					</li>
				</ul>
			</form>
		</article>
		<footer>
		</footer>
	</section>
	</body>
</html>