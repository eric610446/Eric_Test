<?php
/* Smarty version 3.1.30, created on 2017-01-12 17:09:45
  from "C:\AppServ\www\Eric_Test\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587747d9e28456_20498635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6462a31e3f3f3704a226c5d01616b968b6917f3e' => 
    array (
      0 => 'C:\\AppServ\\www\\Eric_Test\\templates\\index.html',
      1 => 1484212182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587747d9e28456_20498635 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
	<link href='<?php echo $_smarty_tpl->tpl_vars['style_dir']->value;?>
' rel='stylesheet' type='text/css'>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>	
</head>

<body>
	<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['content']->value[0];?>
</h1>
		<p><?php echo $_smarty_tpl->tpl_vars['content']->value[1];?>
</p>
		<table>
			<tr id='section'>
				<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['color_block']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<tr>
						<td bgcolor="<?php echo $_smarty_tpl->tpl_vars['color_block']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][0];?>
"></td>
						<td bgcolor="<?php echo $_smarty_tpl->tpl_vars['color_block']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][1];?>
"></td>
						<td bgcolor="<?php echo $_smarty_tpl->tpl_vars['color_block']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][2];?>
"></td>
						<td bgcolor="<?php echo $_smarty_tpl->tpl_vars['color_block']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][3];?>
"></td>
						<td bgcolor="<?php echo $_smarty_tpl->tpl_vars['color_block']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][4];?>
"></td>
						<td bgcolor="<?php echo $_smarty_tpl->tpl_vars['color_block']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][5];?>
"></td>
						<td bgcolor="<?php echo $_smarty_tpl->tpl_vars['color_block']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][6];?>
"></td>
						<td bgcolor="<?php echo $_smarty_tpl->tpl_vars['color_block']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][7];?>
"></td>
					</tr>
				<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
			</tr>
			<tr id='foreach'>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['color_block']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
					<tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['i']->value, 'j');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['j']->value) {
?>
						<td bgcolor="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"></td>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tr>
		</table>
	</article>
</body>

</html>
<?php }
}
