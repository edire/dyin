<?php /* Smarty version Smarty-3.0.8, created on 2014-01-12 23:46:11
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/right.htm" */ ?>
<?php /*%%SmartyHeaderCode:904152d2b8c31cd9e7-98516694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84b7c3cb1631144d7ef6ce046fa9e6aef243a5b2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/right.htm',
      1 => 1389533967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '904152d2b8c31cd9e7-98516694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	  <?php if ($_smarty_tpl->getVariable('uid')->value!=''){?>
    <div class="self_info">
		<img src="public/images/touxiang.jpg" class="self_photo" />
		<div class="abc_info">
		  <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userinfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
?>
		  <p class="self_name"><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
</p>
          <p class="self_abc">D 号:<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</p>
          <p class="self_abc">D 币:<?php echo $_smarty_tpl->tpl_vars['info']->value['db'];?>
<a href="#" class="self_abc_a">详情</a></p>
          <p class="self_abc">财富:<?php echo $_smarty_tpl->tpl_vars['info']->value['money'];?>
<a href="#" class="self_abc_a">充值</a></p>
		  <?php }} ?>
		</div>
	</div>
	<div class="btn_b">
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'myinfo'),$_smarty_tpl);?>
" class="goself_btns">
		<span class="goself"><em class="goselfimg"></em>进入个人中心</span>
		</a> 
	</div>
	<?php }else{ ?>
	<div class="login">
		<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'loginjudge'),$_smarty_tpl);?>
" method="post" name="login">
		<p class="login_title">快速登录</p>
		<p class="login_user">用户名  <input class="login_username ipt" type="text" name="username"/></p>
		<p class="login_pass">密　码  <input class="login_password ipt" type="password" name="password"/></p>
		<div class="btnbox">
			<a href="javascript:;" onclick="loginin()" class="btnblue">
				<span class="login_btn btnblue_span">登录</span>
			</a>
		</div>
		<p class="sign_p">
			还没有账号？<a href="javascript:;" onclick="signin();">快速注册!</a>
		</p>
		</form>
	</div>
	
	<?php }?>