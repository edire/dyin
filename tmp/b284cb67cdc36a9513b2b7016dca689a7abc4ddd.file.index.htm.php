<?php /* Smarty version Smarty-3.0.8, created on 2014-01-12 23:46:10
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2837352d2b8c2cd5c65-83122179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b284cb67cdc36a9513b2b7016dca689a7abc4ddd' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/index.htm',
      1 => 1389527479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2837352d2b8c2cd5c65-83122179',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dyin</title>
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
 <?php $_template = new Smarty_Internal_Template('Index/edit.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div class="d_list" id="container">
	<?php  $_smarty_tpl->tpl_vars['dyin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('yin')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dyin']->key => $_smarty_tpl->tpl_vars['dyin']->value){
?>
		<div class="grid">
		<div class="dyin">
			<div class="dyin_info">
				<a href="javascript:;" onclick="goinfo('<?php echo $_smarty_tpl->tpl_vars['dyin']->value['uid'];?>
')" class="dyin_pic_a"><img src="<?php echo $_smarty_tpl->tpl_vars['dyin']->value['userpic'];?>
" class="dyin_pic"></a>
				<div class="dyin_user_info">
					<p class="dyin_username"><a href="javascript:;" onclick="goinfo('<?php echo $_smarty_tpl->tpl_vars['dyin']->value['uid'];?>
')"><?php echo $_smarty_tpl->tpl_vars['dyin']->value['username'];?>
</a></p>
					<p class="dyin_fans"><!-- <a href="#">关注</a>221 <a href="#">粉丝</a>1111 --></p>

				</div>
									<p class="ling">
						<a href="javascript:;" onclick="take('<?php echo $_smarty_tpl->tpl_vars['dyin']->value['id'];?>
')" class="btns">
							<span class="btns_a">领取</span>
						</a>
					</p>
			</div>
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
		</div>
<?php }} ?>
	</div>		
<?php if ($_smarty_tpl->getVariable('pager')->value){?>
	<div class="page">

<!--在当前页不是第一页的时候，显示前页和上一页-->
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['first_page']){?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index','page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
" class="page_a">首页</a>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index','page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
" class="page_a">上一页</a> 
<?php }?>
<!--开始循环页码，同时如果循环到当前页则不显示链接-->
<?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>
	<?php if ($_smarty_tpl->tpl_vars['thepage']->value!=$_smarty_tpl->getVariable('pager')->value['current_page']){?>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index','page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
" class="page_a"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a>
	<?php }else{ ?>
		<a class="thepage"><span><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</span></a>
	<?php }?>
<?php }} ?>
<!--在当前页不是最后一页的时候，显示下一页和后页-->
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['last_page']){?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index','page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
" class="page_a">下一页</a>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index','page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
" class="page_a">末页</a>
<?php }?>
	</div>
<?php }?>
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
