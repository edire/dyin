<?php /* Smarty version Smarty-3.0.8, created on 2014-01-12 23:51:55
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/head.htm" */ ?>
<?php /*%%SmartyHeaderCode:1702252d2ba1b05d242-09824163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '545ef48538365cadd60f7baf1495c58de3bcd639' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/head.htm',
      1 => 1389541901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1702252d2ba1b05d242-09824163',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 <div class="head_content"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main'),$_smarty_tpl);?>
" class="logo_a"><img src="public/images/Dyin.png" class="logo"/></a>
    <ul class="nav">
      <li> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main'),$_smarty_tpl);?>
"><em class="home bs"></em>首页</a> </li>
      <li> <a href="#"><em class="dxing bs"></em>D星</a> </li>
    </ul>
    <div class="head_right">
      <div class="searchbox">
        <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'search'),$_smarty_tpl);?>
" method="get" name="searchform">
			<input type="hidden" name="c" value="main">
			<input type="hidden" name="a" value="search">
          <input type="text" class="search" placeholder="搜索Dyin" name="keyword"/>
         <a href="javascript:;" onclick="sch()" class="search_submit"></a>
        </form>
      </div>
	  <?php if ($_smarty_tpl->getVariable('uid')->value!=''){?>
      <ul class="self">
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userinfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
?>
        <li class="self_li"><a href="#"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></li>
		<?php }} ?>
        <li class="self_li"><a href="#"><!--<em class="news"></em>-->消息</a></li>
        <li class="self_li"><a href="#">充值</a></li>
        <li class="self_li"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'myinfo'),$_smarty_tpl);?>
">个人中心</a></li>
        <li class="self_li"><a href="javascript:;" onclick="loginout()">退出</a></li>
      </ul><?php }else{ ?>
		<p class="no_login">
			您还不是Dyin用户？ <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'sign'),$_smarty_tpl);?>
" onclick="">注册</a><span class="span_line">|</span><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
">登陆</a> 
		<p>
	  <?php }?>
    </div>
  </div>