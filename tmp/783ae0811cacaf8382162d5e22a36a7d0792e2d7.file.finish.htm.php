<?php /* Smarty version Smarty-3.0.8, created on 2014-01-13 00:54:28
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/finish.htm" */ ?>
<?php /*%%SmartyHeaderCode:708752d2c8c43885b5-22599967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '783ae0811cacaf8382162d5e22a36a7d0792e2d7' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/finish.htm',
      1 => 1389545649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '708752d2c8c43885b5-22599967',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>完成-Dyin</title>
<link href="public/css/style.css" rel="stylesheet" type="text/css" />
<script src="public/js/option.js"></script>
</head>
<body>
<div class="finish_box">
<p class="title">完成Dyin</p>
<form action="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('id')->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'dyin','a'=>'finishaction','id'=>$_tmp1),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data" name="finish">
<p class="finish_pic">验证图像<input type="file" name="pic" class="finish_load ipt"/></p>
<p class="finish_submit">
			<a href="javascript:;" onclick="gofinish()" class="btnblue">
				<span class="btnblue_span finish_btn">完成</span>
			</a>
			<a href="javascript:;" onclick="javascript:history.go(-1);" class="btnblue">
				<span class="btnblue_span finish_btn">取消</span>
			</a>
</p>
</form>
</div>
</body>
</html>