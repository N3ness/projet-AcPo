<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-09 12:36:29
         compiled from "vue\signup.html" */ ?>
<?php /*%%SmartyHeaderCode:967254ef364b99da60-41221015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0444be96ba694b99c74883ba8f587d2f28d50d0e' => 
    array (
      0 => 'vue\\signup.html',
      1 => 1424965992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '967254ef364b99da60-41221015',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef364b9c87e8_65289202',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef364b9c87e8_65289202')) {function content_54ef364b9c87e8_65289202($_smarty_tpl) {?>	
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
