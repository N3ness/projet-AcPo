<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "nav" );?>
	<section>
		<article>
			<p><?php if( ($authenticated=='false') ){ ?>
				<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "rechercheImpossible" );?>
			<?php }else{ ?>
				<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "recherche" );?>
			<?php } ?>
			</p>
			<h2>Fiches de pathologies</h2>
			<table>
				<tr>
					<th>Symptome</th>
					<th>Meridien</th>
					<th>Description</th>
					<th>Element</th>
					<th>tags</th>
				</tr>
				<?php $counter1=-1; if( isset($pathos) && is_array($pathos) && sizeof($pathos) ) foreach( $pathos as $key1 => $value1 ){ $counter1++; ?>
					<tr>
					<td><?php echo $value1["Symptome"];?></td>
					<td><?php echo $value1["Meridien"];?></td>
					<td><?php echo $value1["Description"];?></td>
					<td><?php echo $value1["Element"];?></td>
					<td><?php echo $value1["tags"];?></td>
					</tr>
				<?php } ?>
			</ul>
		</article>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>