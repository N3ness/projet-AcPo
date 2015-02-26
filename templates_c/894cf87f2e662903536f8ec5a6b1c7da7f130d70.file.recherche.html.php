<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 16:26:32
         compiled from "vue\recherche.html" */ ?>
<?php /*%%SmartyHeaderCode:2780454ef39d3e689a2-46677355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '894cf87f2e662903536f8ec5a6b1c7da7f130d70' => 
    array (
      0 => 'vue\\recherche.html',
      1 => 1424964389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2780454ef39d3e689a2-46677355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef39d3ea3336_93299702',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef39d3ea3336_93299702')) {function content_54ef39d3ea3336_93299702($_smarty_tpl) {?>		<article>
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
						<input type="checkbox" name="pathologie" value="meridien" />Pathologies de méridien <br />
						<input type="checkbox" name="pathologie" value="tsang-fu" />Pathologies d’organe/viscère (tsang/fu) <br />
						<input type="checkbox" name="pathologie" value="jing-jin" />Pathologies des tendino-musculaires (jing jin) <br />
						
					</li>
					<li>
						<label for="meridien">Méridien:</label>
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
