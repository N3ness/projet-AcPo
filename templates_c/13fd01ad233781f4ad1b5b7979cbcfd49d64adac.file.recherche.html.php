<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 16:08:45
         compiled from "vue/recherche.html" */ ?>
<?php /*%%SmartyHeaderCode:12723170315501abfd09b551-94541600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13fd01ad233781f4ad1b5b7979cbcfd49d64adac' => 
    array (
      0 => 'vue/recherche.html',
      1 => 1426166152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12723170315501abfd09b551-94541600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501abfd1ddb62_43622116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501abfd1ddb62_43622116')) {function content_5501abfd1ddb62_43622116($_smarty_tpl) {?>		<article>
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
<?php }} ?>
