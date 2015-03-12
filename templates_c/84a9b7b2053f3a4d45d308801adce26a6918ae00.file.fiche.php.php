<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 17:33:51
         compiled from "vue/fiche.php" */ ?>
<?php /*%%SmartyHeaderCode:286736705501bd323ac107-34608554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84a9b7b2053f3a4d45d308801adce26a6918ae00' => 
    array (
      0 => 'vue/fiche.php',
      1 => 1426178028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286736705501bd323ac107-34608554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501bd325d87b8_04301205',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501bd325d87b8_04301205')) {function content_5501bd325d87b8_04301205($_smarty_tpl) {?>
<article>
	<h2>Fiches de pathologies</h2>
	L'accessibilité Web dépend de plusieurs composantes interdépendantesW3C 7 :
	<ul>
		<?php echo '<?php'; ?>

		echo "tot";
		var_dump($pathos);
		foreach($pathos as $patho){
			echo "<li>";
			print_r($patho);
			echo "</li>";
		}
		<?php echo '?>'; ?>

	</ul>
</article>
<footer>

</footer>
</section>
</body>
</html>
<?php }} ?>
