<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 14:26:24
         compiled from "vue/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:173464431155019400c884f7-22513731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fd6c7b8281814e4a97ffdd0f0ea345400b294ef' => 
    array (
      0 => 'vue/signup.html',
      1 => 1426166152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173464431155019400c884f7-22513731',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55019400cc64d9_27740657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55019400cc64d9_27740657')) {function content_55019400cc64d9_27740657($_smarty_tpl) {?>	
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
