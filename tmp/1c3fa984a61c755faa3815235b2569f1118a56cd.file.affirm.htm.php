<?php /* Smarty version Smarty-3.0.8, created on 2014-01-13 00:55:52
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/affirm.htm" */ ?>
<?php /*%%SmartyHeaderCode:1938852d2c9181ddca6-01688051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c3fa984a61c755faa3815235b2569f1118a56cd' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/affirm.htm',
      1 => 1389545750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1938852d2c9181ddca6-01688051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>确认完成-Dyin</title>
<link href="public/css/style.css" rel="stylesheet" type="text/css" />
<script src="public/js/option.js"></script>
</head>
<body>
<div class="affirm_box">
<p class="title">确认完成</p>
<?php  $_smarty_tpl->tpl_vars['dyin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('yin')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dyin']->key => $_smarty_tpl->tpl_vars['dyin']->value){
?>
<div class="dyin affirm_dyin">

			<p class="dyin_content">
			<?php echo $_smarty_tpl->tpl_vars['dyin']->value['content'];?>

			</p>
			<p class="dyin_name"><?php echo $_smarty_tpl->tpl_vars['dyin']->value['name'];?>
</p>
			<p class="dyin_type">需要通过<?php echo $_smarty_tpl->tpl_vars['dyin']->value['type'];?>
Dyin</p>
			<p class="dyin_time"><?php echo $_smarty_tpl->tpl_vars['dyin']->value['createtime'];?>
</p>
			<p class="dyin_ps"><?php echo $_smarty_tpl->tpl_vars['dyin']->value['ps'];?>
</p>
		</div>
		
			<img src="<?php echo $_smarty_tpl->tpl_vars['dyin']->value['pic'];?>
" class="affirm_pic">
<?php }} ?>
<p class="affirm_submit">
			<a href="javascript:;" onclick="affirm(<?php echo $_smarty_tpl->getVariable('dyin')->value['id'];?>
)" class="btnblue">
				<span class="btnblue_span affirm_btn">确认</span>
			</a>
			<a href="javascript:;" onclick="javascript:history.go(-1);" class="btnblue">
				<span class="btnblue_span affirm_btn">取消</span>
			</a>
</p>
</form>
</div>
</body>
</html>