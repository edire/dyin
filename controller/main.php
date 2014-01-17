<?php

class main extends spController
{
	function __construct(){

		parent::__construct();
	}
	function index(){
		if(!empty($_SESSION["uid"])){
			$uid=$_SESSION["uid"];
			$user=spClass("user");
			$userinfo=$user->findAll(array('id'=>$uid));
			$this->userinfo=$userinfo;
			}
			
		//初始化分页
		if($this->spArgs('page'))
		{
			$page=$this->spArgs('page');
		}else{
			$page=1;
		}
		$yin=spClass("yin");
		// $yin=$yin->findme("finish='0'",'updatetime DESC');
		$conditions=array(finish=>0);
		$dyin=$yin->findme($conditions,$this->spArgs('page', $page), 20);
		$i=0;
		if($dyin){
			foreach($dyin as $value){
			$dyin[$i][updatetime]=date("Y-m-d H:i:s",$dyin[$i][updatetime]);  //格式化时间
			$dyin[$i][createtime]=date("Y-m-d H:i:s",$dyin[$i][createtime]);	//格式化时间
			$user=spClass("user");			//class 
			$conditions=array('id'=>$dyin[$i][uid]);	//condition
			$duser=$user->findAll($conditions);		//find user
			$dyin[$i][username]=$duser[0][username];	//find yin
			$dyin[$i][userpic]=$duser[0][pic];		//给头像赋值
			$conditions=array('id'=>$dyin[$i][rid]);	//conditions 接收人
			$duser=$user->findAll($conditions);		//取出接收人信息
			$dyin[$i][ricname]=$duser[0][username];	//取出接收人名字
			if($dyin[$i][rid]=="0"){
				$dyin[$i][ricname]="暂无";
			}
			$i++;
		}
		}
		$user=spClass('user');
		$conditions=array('id'=>$_SESSION["uid"]);
		$userinfo=$user->findAll($conditions);
		$username=$userinfo[0]['username'];
		$this->yin=$dyin;
		$this->uid=$_SESSION["uid"];
		$this->pager = $yin->pagedata;
		$this->display("Index/index.htm");
	}
//搜索
function search(){
		if(!empty($_SESSION["uid"])){
			$uid=$_SESSION["uid"];
			$user=spClass("user");
			$userinfo=$user->findAll(array('id'=>$uid));
			$this->userinfo=$userinfo;
			}
			
		//初始化分页
		if($this->spArgs('page'))
		{
			$page=$this->spArgs('page');
		}else{
			$page=1;
		}
		$keyword=$this->spArgs('keyword');
		$yin=spClass("yin");
		// $yin=$yin->findme("finish='0'",'updatetime DESC');
		$conditions="content like '%$keyword%'";
		$dyin=$yin->findme($conditions,$this->spArgs('page', $page), 20);
		$i=0;
		if($dyin){
			foreach($dyin as $value){
			$dyin[$i][updatetime]=date("Y-m-d H:i:s",$dyin[$i][updatetime]);  //格式化时间
			$dyin[$i][createtime]=date("Y-m-d H:i:s",$dyin[$i][createtime]);	//格式化时间
			$user=spClass("user");			//class 
			$conditions=array('id'=>$dyin[$i][uid]);	//condition
			$duser=$user->findAll($conditions);		//find user
			$dyin[$i][username]=$duser[0][username];	//find yin
			$dyin[$i][userpic]=$duser[0][pic];		//给头像赋值
			$conditions=array('id'=>$dyin[$i][rid]);	//conditions 接收人
			$duser=$user->findAll($conditions);		//取出接收人信息
			$dyin[$i][ricname]=$duser[0][username];	//取出接收人名字
			if($dyin[$i][rid]=="0"){
				$dyin[$i][ricname]="暂无";
			}
			$i++;
		}
		}
		$user=spClass('user');
		$conditions=array('id'=>$_SESSION["uid"]);
		$userinfo=$user->findAll($conditions);
		$username=$userinfo[0]['username'];
		$this->yin=$dyin;
		$this->uid=$_SESSION["uid"];
		$this->pager = $yin->pagedata;
		$this->display("Index/search.htm");
	}
//显示所有
	function all(){
		
		$dyin=$yin->findAll('updatetime DESC',$this->spArgs('page', $page), 2);
		$i=0;
		if($dyin){
			foreach($yin as $value){
			$dyin[$i][updatetime]=date("Y-m-d H:i:s",$dyin[$i][updatetime]);  //格式化时间
			$dyin[$i][createtime]=date("Y-m-d H:i:s",$dyin[$i][createtime]);	//格式化时间
			$user=spClass("user");
			$conditions=array('id'=>$dyin[$i][uid]);
			$duser=$user->findAll($conditions);
			$dyin[$i][username]=$duser[0][username];
			$conditions=array('id'=>$dyin[$i][rid]);
			$duser=$user->findAll($conditions);
			$dyin[$i][ricname]=$duser[0][username];
			if($dyin[$i][rid]=="0"){
				$dyin[$i][ricname]="暂无";
			}
			$i++;
		}
		}
		$this->yin=$dyin;
		if(!empty($_SESSION["uid"])){
			$this->display("Index/head_login.htm");
		}else{
			$this->display("Index/head_nologin.htm");
		}
		$this->display("Index/all.htm");
	}
//登陆界面
	function login(){
		if(!empty($_SESSION["uid"])){
			$this->success("已经登陆过！");
		}
			$this->display("Index/login.htm");
	}
//注册页面
	function sign(){
		if(!empty($_SESSION["uid"])){
			$this->success("已经登陆过！");
		}
			$this->display("Index/sign.htm");
	}
	function help(){
		$this->display("Index/help.htm");
	}
//登陆跳转页面

	function loginjudge(){
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />登录中...";
		function getip(){ //获取用户ip
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
		$ip = getenv("HTTP_CLIENT_IP"); 
		else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
		else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
		$ip = getenv("REMOTE_ADDR"); 
		else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
		$ip = $_SERVER['REMOTE_ADDR']; 
		else 
		$ip = "unknown"; 
		return($ip); 
		} 
	$user=spClass('user');
	$username=$this->spArgs('username');
	$password=$this->spArgs('password');
			if(empty($username)){			//检测用户名
				$this->error("请填写用户名！");
			}
			if(empty($password)){			//检测密码
				$this->error("请填写密码!");
			}

	$sql=$user->findAll(array('username'=>$username));
	if($sql){
		if($sql[0][password]==md5($password)){
			$_SESSION['uid']=$sql[0][id];
			$user->update(array('username'=>$username),array('logintime'=>time()));
			$this->jump(spUrl('main','index'));
		}else{
				$this->error("密码错误。",spUrl('admin','login'));
		};
	}else{	
				$this->error("用户名错误。",spUrl('admin','login'));
	}
		}
//注册跳转页面
	function signjudge(){
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />注册中...";
		$user=spClass('user');
		function getip(){ 
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
		$ip = getenv("HTTP_CLIENT_IP"); 
		else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
		else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
		$ip = getenv("REMOTE_ADDR"); 
		else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
		$ip = $_SERVER['REMOTE_ADDR']; 
		else 
		$ip = "unknown"; 
		return($ip); 
		} 
	$username=$this->spArgs('username');
	$password=$this->spArgs('password');
			if(empty($username)){			//检测用户名
				$this->error("请填写用户名！",spUrl('main','sign'));
			}
			if(empty($password)){			//检测密码
				$this->error("请填写密码",spUrl('main','sign'));
			}
	$sql=$user->findAll(array('username'=>$username));
	if($sql){
				$this->error("用户名已经被占用。",spUrl('main','sign'));
	}
	
	$passwordmd5=md5($password);			//md5加密
	$action=array(							//数据整理
	'username'=>$username,
	'password'=>$passwordmd5,
	'email'=>$this->spArgs('email'),
	'db'=>3,
	'qq'=>$this->spArgs('qq'),
	'pic'=>'public/images/touxiang.jpg',
	'signtime'=>time(),
	'ip'=>getip()
	);
		$mysql=$user->create($action);			//插入数据库
	
	if($mysql){								//判断
		$this->success('注册成功！',spUrl('main','index'));
	}else{
		$this->error('注册失败！请重试！');
	}
	}
}
