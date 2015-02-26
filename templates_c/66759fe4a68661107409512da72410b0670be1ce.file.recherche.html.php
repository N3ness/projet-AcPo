<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 15:10:23
         compiled from "vue\recherche.html" */ ?>
<?php /*%%SmartyHeaderCode:2746154ef36f930bc25-09995045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66759fe4a68661107409512da72410b0670be1ce' => 
    array (
      0 => 'vue\\recherche.html',
      1 => 1424963419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2746154ef36f930bc25-09995045',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef36f9334d29_06222108',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef36f9334d29_06222108')) {function content_54ef36f9334d29_06222108($_smarty_tpl) {?>		<article>
			<h2>Recherche avancée</h2>
			<p>Veuillez préciser les termes de votre recherche</p>
			
			<form method="post" action="recherche.php">
				<ul>
					<li>
						<label for="keyword">Mot-clé&nbsp;:</label>
						<input type="text" id="keyword" name="keyword" required>
					</li>
					<li>
						<label for="symptome">Symptôme&nbsp;:</label>
						<input type="text" id="symptome" name="symptome" >
					</li>
					<li>
						<label for="pathologie">Pathologie&nbsp;:</label>
						<input type="text" id="pathologie" name="pathologie">
					</li>
					<li>
						<label for="meridien">Méridien&nbsp;:</label>
						<input type="text" id="meridien" name="meridien">
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
