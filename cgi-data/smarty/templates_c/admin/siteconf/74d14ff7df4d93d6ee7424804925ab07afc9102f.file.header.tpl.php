<?php /* Smarty version Smarty-3.1.18, created on 2020-06-20 18:13:23
         compiled from "/home/tag-school/www//admin/common/inc/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11641127675dfadfb8c3e428-30870329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74d14ff7df4d93d6ee7424804925ab07afc9102f' => 
    array (
      0 => '/home/tag-school/www//admin/common/inc/header.tpl',
      1 => 1592561907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11641127675dfadfb8c3e428-30870329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dfadfb8c42662_54570625',
  'variables' => 
  array (
    '_ADMIN' => 0,
    '_FRONT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dfadfb8c42662_54570625')) {function content_5dfadfb8c42662_54570625($_smarty_tpl) {?><div class="row border-bottom">
	<nav class="navbar navbar-left navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-th-list"></i> </a>
		</div>
	</nav>
	<ul class="nav navbar-top-links navbar-right">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/logout.php"><i class="fa fa-desktop"></i>ログアウト</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/" target="_blank"><i class="fa fa-desktop"></i>Webサイトを表示</a></li>
	</ul>
</div><?php }} ?>
