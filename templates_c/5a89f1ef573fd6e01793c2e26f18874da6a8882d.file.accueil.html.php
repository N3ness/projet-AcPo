<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 14:08:59
         compiled from "vue\accueil.html" */ ?>
<?php /*%%SmartyHeaderCode:1702954ef19736b9b30-06815975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a89f1ef573fd6e01793c2e26f18874da6a8882d' => 
    array (
      0 => 'vue\\accueil.html',
      1 => 1424959736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1702954ef19736b9b30-06815975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef1973803ae1_23611432',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef1973803ae1_23611432')) {function content_54ef1973803ae1_23611432($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acupuncteurs Associés Accessibles - </title>
	<link rel="stylesheet" type="text/css" href="vue/css/screen.css"  media="screen" />
	<link rel="stylesheet" type="text/css" href="vue/css/print.css" media="print" />
	<?php echo '<script'; ?>
 type="text/javascript" src="js/script.js"><?php echo '</script'; ?>
>
</head>
<body>
	<header>
		<h1>Bienvenue sur le site des Acupuncteurs Associés Accessibles</h1>
			<blockquote>"Si ca pique, c'est que ca fonctionne"</blockquote>
	</header>
	
	<nav>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="fiche.html">Fiches</a></li>
			<li><a href="signup.html">Créer un compte</a></li>
		</ul>
	</nav>
	
	<section>
		<aside>
			<div id="recherche">
				<label for="inSearch">Recherche : </label>
				<input class="inSearch" name="search" type="text" />
				<a href="fiche.html">Recherche avancée</a>
			</div>
			
			<div id="rss">
				Flux RSS:
			</div>
		</aside>
		
		<article>
			<h2>Projet TLI</h2>
			<p>Ceci est un site fictif. Il est l'objet d'un projet académique de développement d'applications WEB</p>
		</article>
		<footer>
		
		</footer>
	</section>
</body>
</html>
<?php }} ?>
