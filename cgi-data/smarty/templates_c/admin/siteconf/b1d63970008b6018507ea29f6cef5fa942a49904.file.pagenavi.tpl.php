<?php /* Smarty version Smarty-3.1.18, created on 2019-12-19 11:26:00
         compiled from "/home/tag-school/www//admin/common/inc/pagenavi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15608036185dfadfb8c93b39-85001194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1d63970008b6018507ea29f6cef5fa942a49904' => 
    array (
      0 => '/home/tag-school/www//admin/common/inc/pagenavi.tpl',
      1 => 1576722163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15608036185dfadfb8c93b39-85001194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dfadfb8cada45_46601044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dfadfb8cada45_46601044')) {function content_5dfadfb8cada45_46601044($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['PageTotal'])===null||$tmp==='' ? 0 : $tmp)>1) {?>
<div class="page_navi mb20">
	<?php echo number_format($_smarty_tpl->tpl_vars['page_navi']->value['PageItemTotal']);?>
件中<?php echo number_format($_smarty_tpl->tpl_vars['page_navi']->value['PageShowStart']);?>
_<?php echo number_format($_smarty_tpl->tpl_vars['page_navi']->value['PageShowEnd']);?>
件目 ：
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['LinkBack'])===null||$tmp==='' ? '' : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['LinkPage'])===null||$tmp==='' ? '' : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['LinkNext'])===null||$tmp==='' ? '' : $tmp);?>

</div>
<?php }?><?php }} ?>
