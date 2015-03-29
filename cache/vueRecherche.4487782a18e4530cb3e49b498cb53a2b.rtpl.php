<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "nav" );?>
	<section>
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
						<ul>
							<?php $counter1=-1; if( isset($listPathos) && is_array($listPathos) && sizeof($listPathos) ) foreach( $listPathos as $key1 => $value1 ){ $counter1++; ?>
							<li><input type="checkbox" name="pathologie" value="<?php echo $value1["type"];?>" /><?php echo $value1["desc"];?></li>
							<?php } ?>
						</ul>
					</li>
					<li>
						<label for="caracteristique">Caractéristique </label><br />
						<input class="inputleft" type="checkbox" name="caracteristique" value="plein" />Plein
						<input class="inputleft" type="checkbox" name="caracteristique" value="chaud" />Chaud 
						<input class="inputleft" type="checkbox" name="caracteristique" value="vide" />Vide
						<input class="inputleft" type="checkbox" name="caracteristique" value="froid" />Froid
						<input class="inputleft" type="checkbox" name="caracteristique" value="interne" />Interne
						<input class="inputleft" type="checkbox" name="caracteristique" value="externe" />Externe
					</li>
					<li>
						<input type="submit" value="Effectuer la recherche" /> 
					</li>
				</ul>
			</form>
		</article>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>