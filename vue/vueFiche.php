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
			<h2>Fiches de pathologies</h2>
			<ul>
				<?php
				//var_dump($pathos);
				foreach($pathos as $patho):
					echo "<li>".$patho['Symptome']." - ".$patho['Meridien']."</li>";
				endforeach;
				?>
			</ul>
		</article>
		<footer>

		</footer>
	</section>
	</body>
</html>