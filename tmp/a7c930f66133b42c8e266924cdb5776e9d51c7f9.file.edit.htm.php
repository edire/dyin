<?php /* Smarty version Smarty-3.0.8, created on 2014-01-13 00:39:25
         compiled from "D:\phpStudy\WWW\dyin/tpl\Index/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2503552d2c53d8dd179-79062929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c930f66133b42c8e266924cdb5776e9d51c7f9' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dyin/tpl\\Index/edit.htm',
      1 => 1389544455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2503552d2c53d8dd179-79062929',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
    <div class="edit">
      <div class="e_title">
        <p class="e_dyin">发布Dyin</p>
      </div>
	  <form name="creatdyin" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'dyin','a'=>'create'),$_smarty_tpl);?>
" method="post">
      <div class="e_form">
        <p class="e_contect"> 联系方式
		  	<select class="e_ty ipt" name="type">
				<option value="QQ">QQ</option>
				<option value="QQ">手机</option>
				<option value="QQ">微信</option>
			</select>
          <input name="contect" class="e_con ipt" placeholder="qq号/手机号..."/>
        </p>
        <p class="e_name"> 署名
          <input name="name" class="e_n ipt" placeholder="姓名/昵称..."/>
        </p>
        <textarea type="text" class="e_content ipt" name="content" placeholder="在这里输入内容。" style="
resize: none;"></textarea>
<div  class="e_bottom">
		<p class="e_ps">
			备注：<input class="e_p ipt" type="text" name="ps" placeholder="留给Dyiner的话（选填）"></input>
		</p>
        <a href="javascript:;" onclick="create()" class="e_button"><span class="e_submit">发布Dyin</span></a>
      </div>
	 </div>
	  </form>
    </div>