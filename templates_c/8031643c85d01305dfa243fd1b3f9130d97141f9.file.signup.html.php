<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 16:53:54
         compiled from "vue\signup.html" */ ?>
<?php /*%%SmartyHeaderCode:2443454ef1f48db81e1-17219247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8031643c85d01305dfa243fd1b3f9130d97141f9' => 
    array (
      0 => 'vue\\signup.html',
      1 => 1424966009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2443454ef1f48db81e1-17219247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef1f48ddf2e3_47397318',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef1f48ddf2e3_47397318')) {function content_54ef1f48ddf2e3_47397318($_smarty_tpl) {?>	
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
<?php }} ?>
