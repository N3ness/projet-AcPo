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
				<input class="inSearch" name="search" type="text" />
				<a href="index.php?section=recherche">Recherche avancée</a>
			</div>
			
			<div id="rss">
				Flux RSS:
			</div>
		</aside>
		<article>
			<h2>Recherche avancée</h2>
			<p>Veuillez préciser les termes de votre recherche</p>
			
			<form method="post" action="recherche.php">
				<ul>
					<li>
						<label for="keyword">Mot-clé:</label>
						<input type="text" id="keyword" name="keyword" required>
					</li>
					<li>
						<label for="symptome">Symptôme:</label>
						<input type="text" id="symptome" name="symptome" >
					</li>
					<li>
						<label for="pathologie">Pathologie:</label><br />
						<input class="inputleft" type="checkbox" name="pathologie" value="meridien" />Pathologies de méridien <br />
						<input class="inputleft" type="checkbox" name="pathologie" value="tsang-fu" />Pathologies d’organe/viscère (tsang/fu) <br />
						<input class="inputleft" type="checkbox" name="pathologie" value="jing-jin" />Pathologies des tendino-musculaires (jing jin) <br />
						<input class="inputleft" type="checkbox" name="pathologie" value="voies-luo" />Pathologie des branches (voies luo) <br />
						<input class="inputleft" type="checkbox" name="pathologie" value="merv-vaiss" />Pathologies des merveilleux vaisseaux <br />
						
					</li>
					<li>
						<label for="caracteristique">Caractéristique </label><br />
						<input class="inputleft" type="checkbox" name="caracteristique" value="plein" />Plein <br />
						<input class="inputleft" type="checkbox" name="caracteristique" value="chaud" />Chaud <br />
						<input class="inputleft" type="checkbox" name="caracteristique" value="vide" />Vide <br />
						<input class="inputleft" type="checkbox" name="caracteristique" value="froid" />Froid <br />
						<input class="inputleft" type="checkbox" name="caracteristique" value="interne" />Interne<br />
						<input class="inputleft" type="checkbox" name="caracteristique" value="externe" />Externe<br />
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