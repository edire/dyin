<?php /* Smarty version Smarty-3.0.8, created on 2014-01-13 00:02:32
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:362152d2bc98e498b3-11815825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8180ed85ded71b220b05963bf8d8e6039964f7fb' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/login.htm',
      1 => 1389537343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '362152d2bc98e498b3-11815825',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dyin登陆</title>
<link href="public/css/style.css" rel="stylesheet" type="text/css" />
<script src="public/js/option.js"></script>
</head>
<body>
	<div class="login1_body">
<p class="login1_title title">快速登陆Dyin</p>
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'loginjudge'),$_smarty_tpl);?>
" method="post" name="login" class="login1_form">
<p class="login1_username">用户名<input type="text" name="username" class="login1_user ipt"/></p>
<p class="login1_password">密　码<input type="password" name="password" class="login1_pass ipt"/></p>
<p class="login1_btn_box">
			<a href="javascript:;" onclick="loginin()" class="btnblue">
				<span class="btnblue_span login1_btn">登陆</span>
			</a>
</p>
</form>
<div class="login1_right">
	<p class="havedyin">
		还没有Dyin账户，<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'sign'),$_smarty_tpl);?>
">点击注册</a>
	</p>
</div>
</div>
</body>
</html>