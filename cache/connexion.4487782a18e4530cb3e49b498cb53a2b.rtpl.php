<?php if(!class_exists('raintpl')){exit;}?><h2>Connexion</h2>
		<form method="post" action="index.php">
			<ul>
				<li>
					<label for="coUser">Login : </label>
						<input id="coUser" name="user" type="text" />
				</li>
				<li>
					<label for="coPass">Password : </label>
						<input id="coPass" name="pass" type="paswword" />
				</li>
				<li>
					<input type="submit" value="Connexion" /> 
				</li>
			</ul>
		</form>