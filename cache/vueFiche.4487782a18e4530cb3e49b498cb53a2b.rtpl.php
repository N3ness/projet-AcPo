<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "nav" );?>
	<section>
		<article>
			<h2>Fiches de pathologies</h2>
			<ul>
				<?php $counter1=-1; if( isset($pathos) && is_array($pathos) && sizeof($pathos) ) foreach( $pathos as $key1 => $value1 ){ $counter1++; ?>
					<li><?php echo $value1["Symptome"];?> - <?php echo $value1["Meridien"];?></li>
				<?php } ?>
			</ul>
		</article>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>