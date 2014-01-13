<?php /* Smarty version Smarty-3.0.8, created on 2014-01-13 00:47:34
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/motify.htm" */ ?>
<?php /*%%SmartyHeaderCode:2984852d2c726660369-14867595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1de176efd2e1fc11ae607d33e641519f9e1b67' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/motify.htm',
      1 => 1389545246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2984852d2c726660369-14867595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改Dyin-Dyin</title>
<link href="public/css/style.css" rel="stylesheet" type="text/css" />
<script src="public/js/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="public/js/html5.js"></script>
<![endif]-->
<script src="public/js/option.js"></script>
<script>

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
			<p class="title">修改Dyin</p>
			<ul class="info_box">
			<?php  $_smarty_tpl->tpl_vars['dyin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('yin')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dyin']->key => $_smarty_tpl->tpl_vars['dyin']->value){
?>
      <div class="e_form">
	  <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'dyin','a'=>'motifyaction'),$_smarty_tpl);?>
" method="post" name="motifydyin">
        <p class="e_contect"> 联系方式
		  	<select class="e_ty ipt" name="type">
				<option value="QQ">QQ</option>
				<option value="QQ">手机</option>
				<option value="QQ">微信</option>
			</select>
          <input name="contect" class="e_con ipt" placeholder="qq号/手机号..." value="<?php echo $_smarty_tpl->tpl_vars['dyin']->value['contect'];?>
"/>
        </p>
        <p class="e_name"> 署名
          <input name="name" class="e_n ipt" placeholder="姓名/昵称..." value="<?php echo $_smarty_tpl->tpl_vars['dyin']->value['name'];?>
"/>
        </p>
        <textarea type="text" class="e_content ipt" name="content" placeholder="在这里输入内容。" style="
resize: none;" ><?php echo $_smarty_tpl->tpl_vars['dyin']->value['content'];?>
</textarea>
<div  class="e_bottom">
		<p class="e_ps">
			备注：<input class="e_p ipt" type="text" name="ps" placeholder="留给Dyiner的话（选填）" value="<?php echo $_smarty_tpl->tpl_vars['dyin']->value['ps'];?>
"></input>
		</p>
		<input value="<?php echo $_smarty_tpl->tpl_vars['dyin']->value['id'];?>
" type="hidden" name="id">
        <a href="javascript:;" onclick="motifyaction()" class="e_button"><span class="e_submit">修改Dyin</span></a>
      </div>
	  </form>
	 </div>
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
