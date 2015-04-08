<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "nav" );?>
<section> <!-- Balise fermée dans le footer -->
	<article>
		<p><?php echo $message;?></p>
		<p><?php if( ($authenticated=='false') ){ ?>
			<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "connexion" );?>
		<?php }else{ ?>
			<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "connected" );?>
		<?php } ?>
		</p>
		<h2>Flux RSS</h2>
		<p>Ceci est un site fictif. Il est l'objet d'un projet académique de développement d'applications WEB</p>
	</article>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>