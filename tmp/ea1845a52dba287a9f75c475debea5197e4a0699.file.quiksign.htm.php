<?php /* Smarty version Smarty-3.0.8, created on 2014-01-12 23:46:11
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/quiksign.htm" */ ?>
<?php /*%%SmartyHeaderCode:1963952d2b8c32a4792-18666493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea1845a52dba287a9f75c475debea5197e4a0699' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/quiksign.htm',
      1 => 1389528693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1963952d2b8c32a4792-18666493',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="sign_box" id="sign_box">
	<div class="sign_body">
<p class="sign_title title">快速注册Dyin<span onclick="closesign()">X</span></p>
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'signjudge'),$_smarty_tpl);?>
" method="post" name="signform">
<p class="sign_username">用户名<input type="text" name="username" class="sign_user ipt"/></p>
<p class="sign_password">密　码<input type="password" name="password" class="sign_pass ipt"/></p>
<p class="sign_email">邮　箱<input type="text" name="email" class="sign_em ipt"/></p>
<p class="sign_qq">Ｑ　Ｑ<input type="text" name="qq" class="sign_q ipt"/></p>
<p class="sign_btn_box"><a href="javascript:;" onclick="sign()" class="btnblue">
				<span class="btnblue_span sign_btn">立即注册</span>
			</a>
</p>
</form>
	</div>
</div>