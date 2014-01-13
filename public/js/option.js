function take(id){//领取dyin
	document.location.href="?c=dyin&a=take&id="+id;
}
function create(){//提交创建dyin表单
	document.creatdyin.submit();
}
function loginin(){//提交登陆表单
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
	document.passwordform.submit();
}
function sch(){//搜索内容提交
	document.searchform.submit();
}