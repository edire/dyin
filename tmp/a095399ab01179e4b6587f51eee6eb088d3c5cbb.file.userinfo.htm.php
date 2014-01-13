<?php /* Smarty version Smarty-3.0.8, created on 2014-01-13 00:02:54
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/userinfo.htm" */ ?>
<?php /*%%SmartyHeaderCode:910152d2bcaea3b6e8-71950103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a095399ab01179e4b6587f51eee6eb088d3c5cbb' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/userinfo.htm',
      1 => 1389537019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910152d2bcaea3b6e8-71950103',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('username')->value;?>
的信息-Dyin</title>
<link href="public/css/style.css" rel="stylesheet" type="text/css" />
<script src="public/js/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="public/js/html5.js"></script>
<![endif]-->
<script src="public/js/blocksit.min.js"></script>
<script src="public/js/option.js"></script>
<script>
$(document).ready(function() {

	
	//blocksit define
		$('#container').BlocksIt({
			numOfCol: 2,
			offsetX: 0,
			offsetY: 2,
		});
		
	
	//window resize
	
});

</script>
</head>

<body>
<div class="head">
 <?php $_template = new Smarty_Internal_Template('Index/head.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</div>
<!-- head end -->

<div class="content">
  <div class="left">
 <?php $_template = new Smarty_Internal_Template('Index/left.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  </div>
  <div class="center">
		<div class="info">
			<p class="title">个人信息</p>
			<ul class="info_box">
			<?php  $_smarty_tpl->tpl_vars['userin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['userin']->key => $_smarty_tpl->tpl_vars['userin']->value){
?>
				<li class="info_col">
						<p class="info_p info_name">
							登录名
						</p>
						<p class="info_p info_content">
							<?php echo $_smarty_tpl->tpl_vars['userin']->value['username'];?>

						</p>
				</li>
				<li class="info_col">
						<p class="info_p info_name">
							E-mail
						</p>
						<p class="info_p info_content">
							<?php echo $_smarty_tpl->tpl_vars['userin']->value['email'];?>

						</p>
				</li>
				<li class="info_col">
						<p class="info_p info_name">
							D币
						</p>
						<p class="info_p info_content">
							<?php echo $_smarty_tpl->tpl_vars['userin']->value['db'];?>

						</p>
				</li>
				<li class="info_col">
						<p class="info_p info_name">
							财富
						</p>
						<p class="info_p info_content">
							<?php echo $_smarty_tpl->tpl_vars['userin']->value['money'];?>

						</p>
				</li>
				<li class="info_col">
						<p class="info_p info_name">
							QQ
						</p>
						<p class="info_p info_content">
							<?php echo $_smarty_tpl->tpl_vars['userin']->value['qq'];?>

						</p>
				</li>
				<li class="info_col">
						<p class="info_p info_name">
							最后登录时间
						</p>
						<p class="info_p info_content">
							<?php echo $_smarty_tpl->tpl_vars['userin']->value['logintime'];?>

						</p>
				</li>
			<?php }} ?>
			</ul>
		</div>
  </div>
  <div class="right">
		<?php $_template = new Smarty_Internal_Template('Index/right.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  </div>
</div>
<div class="footer">
		<?php $_template = new Smarty_Internal_Template('Index/foot.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</div>

		<?php $_template = new Smarty_Internal_Template('Index/quiksign.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
