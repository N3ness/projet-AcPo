<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-09 12:37:05
         compiled from "vue\recherche.html" */ ?>
<?php /*%%SmartyHeaderCode:2746154ef36f930bc25-09995045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66759fe4a68661107409512da72410b0670be1ce' => 
    array (
      0 => 'vue\\recherche.html',
      1 => 1424965991,
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
