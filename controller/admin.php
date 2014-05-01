<?
class admin extends spController{

	function __construct(){
		// 一些操作
		
		if(empty($_SESSION["uid"])){
			$this->error("请登录。",spUrl('main','login'));
		}

		parent::__construct();
	}

//个人中心首页
	function index(){
		$this->display('Index/index.htm');
	}

//显示我领取的任务页面
		function mytake(){
				$this->uid=$_SESSION["uid"]; 	//检测uid
				//获取信息
				$uid=$_SESSION["uid"];
				$user=spClass("user");
				$userinfo=$user->findAll(array('id'=>$uid));
				$this->userinfo=$userinfo;
				$yin=spClass("yin");
				//获取信息完毕
				
		//初始化分页
		if($this->spArgs('page'))
		{
			$page=$this->spArgs('page');
		}else{
			$page=1;
		}
				$conditions=array('rid'=>$_SESSION["uid"]);
				$dyin=$yin->findme($conditions,$this->spArgs('page', $page), 20);
				
				$i=0;
				if($dyin){
					foreach($dyin as $value){				//实例化
					$dyin[$i][updatetime]=date("Y-m-d H:i:s",$dyin[$i][updatetime]);  //格式化时间
					$dyin[$i][createtime]=date("Y-m-d H:i:s",$dyin[$i][createtime]);	//格式化时间
					$conditions=array('id'=>$dyin[$i][uid]);	//发布人id
					$duser=$user->findAll($conditions);		//取出发布人信息
					$dyin[$i][username]=$duser[0][username];	//取出发布人的名字并赋值
					$conditions=array('id'=>$dyin[$i][rid]);	//领取人的id
					$duser=$user->findAll($conditions);		//取出领取人数据
					$dyin[$i][ricname]=$duser[0][username];	//取出领取人的名字赋值
					$dyin[$i][userpic]=$duser[0][pic];	//取出领取人的名字赋值
					if($dyin[$i][rid]=="0"){					//如果领取id=0，就提示暂无
						$dyin[$i][ricname]="暂无";
					}
					if($dyin[$i][finish]=="0"){					//如果领取finish=0，就提示完成为否
						$dyin[$i][finishs]="否";
					}else if($dyin[$i][finish]=="2"){
						$dyin[$i][finishs]="等待对方确认";
					}else{
						$dyin[$i][finishs]="是";
					}
					$i++;
				}
				}
				$this->yin=$dyin;
				$this->pager = $yin->pagedata;
				$this->display("Index/mytake.htm");
		}
//显示我发布的任务页面
		function mymake(){
				$this->uid=$_SESSION["uid"]; 	//检测uid
				//获取信息
				$uid=$_SESSION["uid"];
				$user=spClass("user");
				$userinfo=$user->findAll(array('id'=>$uid));
				$this->userinfo=$userinfo;
				$yin=spClass("yin");
				//获取信息完毕
		//初始化分页
		if($this->spArgs('page'))
		{
			$page=$this->spArgs('page');
		}else{
			$page=1;
		}
				$conditions=array('uid'=>$_SESSION["uid"]);
				$dyin=$yin->findme($conditions,$this->spArgs('page', $page), 20);
				$i=0;
				if($dyin){
					foreach($dyin as $value){				//实例化
					$dyin[$i][updatetime]=date("Y-m-d H:i:s",$dyin[$i][updatetime]);  //格式化时间
					$dyin[$i][createtime]=date("Y-m-d H:i:s",$dyin[$i][createtime]);	//格式化时间
					$conditions=array('id'=>$dyin[$i][uid]);	//发布人id
					$duser=$user->findAll($conditions);		//取出发布人信息
					$dyin[$i][username]=$duser[0][username];	//取出发布人的名字并赋值
					$conditions=array('id'=>$dyin[$i][rid]);	//领取人的id
					$duser=$user->findAll($conditions);		//取出领取人数据
					$dyin[$i][ricname]=$duser[0][username];	//取出领取人的名字赋值
					$dyin[$i][userpic]=$duser[0][pic];		//给头像赋值
					if($dyin[$i][rid]=="0"){					//如果领取id=0，就提示暂无
						$dyin[$i][ricname]="暂无";
					}
					if($dyin[$i][finish]=="0"){					//如果领取finish=0，就提示完成为否
						$dyin[$i][finishs]="否";
					}else if($dyin[$i][finish]=="2"){
						$dyin[$i][finishs]="<a href=".spUrl('admin','affirm',array('id'=>$dyin[$i][id])).">等待您确认</a>";
					}else{
						$dyin[$i][finishs]="是";
					}
					$i++;
				}
				}
				$this->yin=$dyin;
				$this->pager = $yin->pagedata;
				$this->display("Index/mymake.htm");
		}
//用户信息页面
		function userinfo(){
				$this->uid=$_SESSION["uid"]; 	//检测uid
				//获取信息
				$uid=$_SESSION["uid"];
				$user=spClass("user");
				$userinfo=$user->findAll(array('id'=>$uid));
				$this->userinfo=$userinfo;
				$yin=spClass("yin");
				//获取信息完毕
				$uid=$this->spArgs('id');
				$userdb=spClass('user');
				$user=$userdb->findAll(array('id'=>$uid));
				$user[0][logintime]=date("Y-m-d H:i:s",$user[0][logintime]);
				$user[0][signtime]=date("Y-m-d H:i:s",$user[0][signtime]);
				$this->user=$user;
				$this->username=$user[0][username];
				$this->display('Index/userinfo.htm');
		}
//个人信息页面
		function myinfo(){	
				$this->uid=$_SESSION["uid"]; 	//检测uid
				//获取信息
				$uid=$_SESSION["uid"];
				$user=spClass("user");
				$userinfo=$user->findAll(array('id'=>$uid));
				$this->userinfo=$userinfo;
				//获取信息完毕
				$userdb=spClass('user');
				$user=$userdb->findAll(array('id'=>$uid));
				$user[0][logintime]=date("Y-m-d H:i:s",$user[0][logintime]);
				$user[0][signtime]=date("Y-m-d H:i:s",$user[0][signtime]);
				$this->user=$user;
				$this->display('Index/myinfo.htm');
		}
//个人信息修改页面
		function infoedit(){
				$this->uid=$_SESSION["uid"]; 	//检测uid
				//获取信息
				$uid=$_SESSION["uid"];
				$user=spClass("user");
				$userinfo=$user->findAll(array('id'=>$uid));
				$this->userinfo=$userinfo;
				//获取信息完毕
				$userdb=spClass('user');
				$user=$userdb->findAll(array('id'=>$uid));
				$this->user=$user;
				$this->display('Index/info_edit.htm');
		}
//确认页面
		function affirm(){
				$id=$this->spArgs('id');
				$this->id=$id;
				$yin=spClass('yin');
				$sql=$yin->findAll(array('id'=>$id));
				if($sql){
					$sql[0][createtime]=date("Y-m-d H:i:s",$sql[0][createtime]);	//格式化时间
					$this->yin=$sql;
				}
				$this->display('Index/affirm.htm');
		}
//修改密码页面
		function editpassword(){
		$this->uid=$_SESSION["uid"]; 	//检测uid
				//获取信息
				$uid=$_SESSION["uid"];
				$user=spClass("user");
				$userinfo=$user->findAll(array('id'=>$uid));
				$this->userinfo=$userinfo;
				//获取信息完毕
				$this->display('Index/editpassword.htm');
		}
	
//--------------------------------------------

//确认完成动作
	function affirmaction(){
		$id=$this->spArgs('id');
		$yin=spClass('yin');
		$conditions=array('id'=>$id);
		if($sql[0]['finish']==1){
			$this->error('已经确认过了！',spUrl('admin','mymake'));
		}
		$action=array('finish'=>1);
		$conditions=uhtml($conditions);
		$action=uhtml($action);
		$sql=$yin->update($conditions,$action);
		if($sql){
			$result=$yin->findAll($conditions);
			$rid=$result[0][rid];
			$user=spClass('user');
			$addcondition=array('id'=>$rid);
			$sql=$user->findadd($addcondition);
			$sql=$user->findmoneyadd($addcondition,'1');
			if($sql){
				$this->success('确认成功！',spUrl('admin','mymake'));
			}else{
			$this->error('确认失败！');
			}
		}else{
			$this->error('确认失败！');
		}
		
	}
//个人信息修改动作
	function infoeditaction(){
		$user=spClass('user');
		$conditions=array('id'=>$_SESSION["uid"]);
		$action=$this->spArgs();
		$conditions=uhtml($conditions);
		$action=uhtml($action);
		$sql=$user->update($conditions,$action);
		if($sql){
			$this->jump(spUrl('admin','myinfo'));
		}else{
			$this->error('操作失败');
		}
	}
//修改密码动作
	function editpasswordaction(){
		$pswd0=$this->spArgs('password0');
		$pswd1=$this->spArgs('password1');
		$pswd2=$this->spArgs('password2');
		$pswd0=uhtml($pswd0);
		$pswd1=uhtml($pswd1);
		$pswd2=uhtml($pswd2);
		if(empty($pswd0) || empty($pswd1) || empty($pswd2)){
			$this->error('请填写完整');
		}
		if($pswd1!=$pswd2){
			$this->error('两次输入新密码不一样');
		}
		$user=spClass('user');
		$sql=$user->findAll(array('id'=>$_SESSION['uid']));
		if(md5($pswd0)==$sql[0][password]){
			$sql=$user->update(array('id'=>$_SESSION['uid']),array('password'=>md5($pswd1)));
			if($sql){
				$this->success('修改成功',spUrl('admin','myinfo'));
			}else{
				$this->success('修改失败');
			}
		}else{
			$this->error('旧密码输入错误');
		}
		
		$conditions=array('id'=>$_SESSION["uid"]);
	
	}
//退出，清除session
	function loginoutaction(){
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />正在退出登录...";
		unset($_SESSION["uid"]);
		$this->jump(spUrl('main','index'));
	}
}
