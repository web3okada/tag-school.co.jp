<?php /* Smarty version Smarty-3.1.18, created on 2020-06-18 16:47:10
         compiled from "/home/tag-school/www//common/include/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11050513035eddd2bad45ef8-53326657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c52b8aa5a65debfa2666f962af126ee431d3bef' => 
    array (
      0 => '/home/tag-school/www//common/include/header.tpl',
      1 => 1592466416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11050513035eddd2bad45ef8-53326657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eddd2bad64f43_69488847',
  'variables' => 
  array (
    '_FRONT' => 0,
    '_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eddd2bad64f43_69488847')) {function content_5eddd2bad64f43_69488847($_smarty_tpl) {?><header>
<div id="head">
	<div class="head_wrap">
		<h1 class="site_logo"><a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/"><img src="/common/image/head/logo.png" alt="TAG school" /></a></h1>
		<div class="head_contact _head hidden-xs">
			<div class="tel_unit">
				<span class="tel sans" data-tel="<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
"><img src="/common/image/head/phone.png" class="pos_vm" alt="電話番号" /><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
</span>
				<span class="time">受付時間 <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['receipt_time'];?>
（<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['rec_holiday'];?>
休校）</span>
			</div>
			<div class="mail_unit"><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/contact/" class="button _circle"><img src="/common/image/head/mail.png" class="pos_vm" alt="お問い合わせ">お問い合わせ</a></div>
		</div>
		<div id="btn_open"><a href="javascript:void(0);"><i class="fa fa-bars"></i></a></div>
	</div>
	<div id="head_navi">
		<div class="center">
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/about/">TAGについて</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/strength/">TAGの強み</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/#course">コース紹介</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/#space">TAGの空間</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/#teachers">講師紹介</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/information/">お知らせ</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/contact/">お問い合わせ</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/28/">Mypage</a></li>
				<li class="head_contact visible-xs">
					<div class="tel_unit">
						<span class="tel sans" data-tel="<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
"><img src="/common/image/head/phone.png" class="pos_vm" alt="電話番号" /><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
</span>
						<span class="time">受付時間 <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['receipt_time'];?>
（<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['rec_holiday'];?>
定休）</span>
					</div>
					<div class="mail_unit"><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/contact/" class="button _circle"><img src="/common/image/head/mail.png" class="pos_vm" alt="お問い合わせ" />お問い合わせ</a></div>
				</li>
				<li class="sns">
					<a href="https://www.facebook.com/tagschool0902" target="_blank" class="fa"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/tagschool28" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/tagschool_28/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
				</li>
			</ul>
		</div>
	</div>
</div>
</header>
<?php }} ?>