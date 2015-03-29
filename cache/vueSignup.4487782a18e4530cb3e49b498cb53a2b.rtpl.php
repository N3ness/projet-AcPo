<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "nav" );?>
	<section>
		<article>
			<h2>Création d'un nouveau compte</h2>
			<form method="post" action="index.php">
				<ul>
				<!--	<li>
						<label for="full_name">Nom complet :</label>
						<input type="text" id="full_name" name="full_name" required>
					</li>
				-->
					<li>
						<label for="username">Nom d'utilisateur :</label>
						<input type="text" id="username" name="newUser" required oninput="check(this)" >
					</li>
					<li>
						<label for="mdp">Mot de passe :</label>
						<input type="password" id="mdp" name="newPass" required oninput="check(this)" />					
					</li>
				<!--	
					<li>
						<label for="mdp_repeat">Confirmez le mot de passe :</label>
						<input type="password" id="mdp_repeat" name="mdp_repeat" required oninput="check(this)">
					</li>
				-->	
					<li>
						<input type="submit" value="Valider" class="validerButton" /> 
					</li>
				</ul>
			</form>
		</article>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>