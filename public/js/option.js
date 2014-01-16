function take(id){//领取dyin
	document.location.href="?c=dyin&a=take&id="+id;
}
function create(){//提交创建dyin表单
	var contect=creatdyin.contect;
	var name=creatdyin.name;
	var content=creatdyin.content;
	if(contect.value==""){
		contect.focus();
		return 0;
	}
	if(name.value==""){
		name.focus();
		return 0;
	}
	if(content.innerHTML==""){
		content.focus();
		return 0;
	}
	document.creatdyin.submit();
}
function loginin(){//提交登陆表单
	var user=document.login.username;
	var pass=document.login.password;
	if (user.value==""){
		user.focus();
		return 0;
	}
	if(pass.value==""){
		pass.focus();
		return 0;
	}
	document.login.submit();
}
function loginout(){//登出
	document.location.href="?c=admin&a=loginoutaction";
}
function signin(){//快速注册
	document.getElementById('sign_box').style.display='block';
}
function closesign(){//关闭快速注册
	document.getElementById('sign_box').style.display='none';
}
function sign(){//提交注册
	var user=document.signform.username;
	var pass=document.signform.password;
	var email=document.signform.email;
	var qq=document.signform.qq;
	if (user.value==""){
		user.focus();
		return 0;
	}
	if(pass.value==""){
		pass.focus();
		return 0;
	}
	if (email.value==""){
		email.focus();
		return 0;
	}
	if(qq.value==""){
		qq.focus();
		return 0;
	}
	document.signform.submit();
}
function goinfo(id){//进入用户页面
	document.location.href="?c=admin&a=userinfo&id="+id;
}
function maketop(id){//置顶dyin
	document.location.href="?c=dyin&a=top&id="+id;
}
function motify(id){//修改dyin
	document.location.href="?c=dyin&a=motify&id="+id;
}
function motifyaction(){//修改dyin动作
	document.motifydyin.submit();
}
function deletedyin(id){//删除dyin
	document.location.href="?c=dyin&a=delete&id="+id;
}
function turn(id){//退回任务
	document.location.href="?c=dyin&a=turn&id="+id;
}
function finish(id){//完成任务页面
	document.location.href="?c=dyin&a=finish&id="+id;
}
function edit(){//进入修改页面
	document.location.href="?c=admin&a=infoedit";
}
function editok(){//提交修改表单
	var email=document.infoedit.email;
	var qq=document.infoedit.qq;
	if (email.value==""){
		email.focus();
		return 0;
	}
	if (qq.value==""){
		qq.focus();
		return 0;
	}

	document.infoedit.submit();
}
function goaffirm(id){//进入确认完成页面
	document.location.href="?c=admin&a=affirm&id="+id;
}
function affirm(id){//进入确认完成动作
	document.location.href="?c=admin&a=affirmaction&id="+id;
}
function gofinish(){//完成任务动作
	document.finish.submit();
}
function editpassword(){//修改密码
	document.location.href="?c=admin&a=editpassword";
}
function editpasswordaction(){	//修改密码动作
	var pass0=document.passwordform.password0;
	var pass1=document.passwordform.password1;
	var pass2=document.passwordform.password2;
	if (pass0.value==""){
		pass0.focus();
		return 0;
	}
	if (pass1.value==""){
		pass1.focus();
		return 0;
	}
	if (pass2.value==""){
		pass2.focus();
		return 0;
	}
	document.passwordform.submit();
}
function sch(){//搜索内容提交
	document.searchform.submit();
}
function help(){//帮助
	var help_box=document.getElementById('help_box');
	if (help_box.style.display=="none"){
		help_box.style.display="block";
	}else{
		help_box.style.display="none";
	}
}