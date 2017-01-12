<?php
/* Smarty version 3.1.30, created on 2017-01-12 15:35:34
  from "C:\AppServ\www\Eric_Test\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587731c66daff0_63537109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6462a31e3f3f3704a226c5d01616b968b6917f3e' => 
    array (
      0 => 'C:\\AppServ\\www\\Eric_Test\\templates\\index.html',
      1 => 1484206252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587731c66daff0_63537109 (Smarty_Internal_Template $_smarty_tpl) {
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
		<h3><?php echo $_smarty_tpl->tpl_vars['content']->value[1];?>
</h3>
		<p><?php echo $_smarty_tpl->tpl_vars['content']->value[2];?>
</p>
	</article>
</body>

</html>
<?php }
}
