<?
class dyin extends spController{
	function __construct(){
		// 一些操作
		
		if(empty($_SESSION["uid"])){
			$this->error("请登录。",spUrl('main','login'));
		}

		parent::__construct();
	}

//新建任务动作
		function create(){
			$yin=spClass("yin");
			$user=spClass('user');
			$uid=$_SESSION["uid"];
			$result=$user->findAll(array('id'=>$uid));
			$db=$result[0][db];
			if($db<=0){
			$this->error('请确认你的D币数！');
			}
			$addcontent=array (
				'uid'=>$_SESSION["uid"],
				'type'=>$this->spArgs('type'),
				'contect'=>$this->spArgs('contect'),
				'content'=>$this->spArgs('content'),
				'name'=>$this->spArgs('name'),
				'ps'=>$this->spArgs('ps'),
				'createtime'=>time(),
				'updatetime'=>time(),
				'rid'=>0,
				'pic'=>"/public/images/noimg.jpg"
			);
			$action=$yin->create($addcontent);
			if($action){
			$addcondition=array('id'=>$uid);
			$sql=$user->findminus($addcondition);
			if($sql){
				$this->success('添加成功！');
			}else{
			$this->error('添加失败！');
			}
			}else{
				$this->error('添加失败');
			}
		}
//修改任务动作
		function motifyaction(){
			$yin=spClass("yin");
			$conditions=array("id"=>$this->spArgs("id"));
			$newyin=$this->spArgs();
			$action=$yin->update($conditions,$newyin);
			if($action){
				$this->success('修改成功！',spUrl('admin','mymake'));
			}else{
				$this->error('修改失败！');
			}
		}
//删除任务动作
		function delete(){
			$yin=spClass("yin");
			$conditions=array("id"=>$this->spArgs("id"));
			$action=$yin->delete($conditions);
			if($action){
				$this->success('删除成功！');
			}else{
				$this->error('删除失败！');
			}
		}
		
		
//-----------------------------------------------------
//显示我发布的任务
		function index(){
				$yin=spClass("yin");
				$user=spClass("user");	
				$yin=$yin->findAll(array('uid'=>1),'updatetime DESC');
				$i=0;
				if($yin){
					foreach($yin as $value){				//实例化
					$yin[$i][updatetime]=date("Y-m-d H:i:s",$yin[$i][updatetime]);	//格式化时间
					$yin[$i][createtime]=date("Y-m-d H:i:s",$yin[$i][createtime]);	//格式化时间
					$conditions=array('id'=>$yin[$i][uid]);	//发布人id
					$duser=$user->findAll($conditions);		//取出发布人信息
					$yin[$i][username]=$duser[0][username];	//取出发布人的名字并赋值
					$conditions=array('id'=>$yin[$i][rid]);	//领取人的id
					$duser=$user->findAll($conditions);		//取出领取人数据
					$yin[$i][ricname]=$duser[0][username];	//取出领取人的名字赋值
					if($yin[$i][rid]=="0"){					//如果领取id=0，就提示暂无
						$yin[$i][ricname]="暂无";
					}
					if($yin[$i][finish]=="0"){					//如果领取finish=0，就提示完成为否
						$yin[$i][finish]="否";
					}else if($yin[$i][finish]=="2"){
						$yin[$i][finish]="<a href=".spUrl('admin','affirm').">等待您确认</a>";
					}else{
						$yin[$i][finish]=="是";
					}
					$i++;
				}
				}
				$this->yin=$yin;
				$this->display("Index/index.htm");
		}
		

		
//添加任务页面
		function add(){
			$this->uid=$_SESSION["uid"];			//session 
			$this->display("Index/add.htm");
		}
//修改任务页面
		function motify(){
		
		if(!empty($_SESSION["uid"])){
			$uid=$_SESSION["uid"];
			$user=spClass("user");
			$userinfo=$user->findAll(array('id'=>$uid));
			$this->userinfo=$userinfo;
			}
			
			$id=$this->spArgs('id');
			$this->id=$id;
			$this->uid=$_session['uid'];			//session
			$yin=spClass('yin');
			$sql=$yin->findAll(array('id'=>$id));
			$this->yin=$sql;
			$this->uid=$_SESSION['uid'];
			$this->display("Index/motify.htm");
		}
//完成任务页面
		function finish(){
			$this->id=$this->spArgs('id');
			$this->display('Index/finish.htm');
		}
		
		
//--------------------------------------------------------------------
//领取任务动作
		function take(){
			$yin=spClass('yin');
			$sql=$yin->findAll(array('id'=>$this->spArgs('id')));
			if($sql[0][uid]==$_SESSION['uid']){
			$this->error('不可领取自己发布的Dyin');
			}
			if($sql[0][rid]==0){
					$conditions=array(
					'id'=>$this->spArgs('id')
					);
					$action=array(
					'rid'=>$_SESSION['uid'],
					'finish'=>3
					);
					$take=$yin->update($conditions,$action);
					if($take){
						$this->success('领取成功',spUrl('admin','mytake'));
						}	
				}else{
					$this->error('已经被别人领走了哦');
		}

		}
//点到最前面
	function top(){
		$id=$this->spArgs('id');
		$yin=spClass('yin');
		$conditions=array('id'=>$id);
		$action=array('updatetime'=>time());
		$sql=$yin->update($conditions,$action);
		if($sql){
			$this->success("操作成功");
		}else{
			$this->error("操作失败");
		}
	}
//退回任务
	function turn(){
		$id=$this->spArgs('id');
		$yin=spClass('yin');
		$conditions=array('id'=>$id);
		$action=array('rid'=>'0','finish'=>'0');
		$sql=$yin->update($conditions,$action);
		if($sql){
			$this->success("操作成功");
		}else{
			$this->error("操作失败");
		}
	}
//删除领取
	function deletetake(){
		$id=$this->spArgs('id');
		$yin=spClass('yin');
		$result=$yin->findAll(array('id'=>$id));
		if($result[0][rid]!=$_SESSION["uid"]){
		$this->error('操作错误');
		}
		$conditions=array('id'=>$id);
		$action=array('rid'=>0,'updatetime'=>time());
		$sql=$yin->update($conditions,$action);
		if($sql){
			$rid=$result[0][rid];
			$user=spClass('user');
			$addcondition=array('id'=>$rid);
			$sql=$user->findminus($addcondition,$rid);
			if($sql){
				$this->success('操作成功！');
			}else{
			$this->error('操作失败！');
			}
		}else{
			$this->error("操作失败");
		}
	}
//完成任务
	function finishaction(){
if ((($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/pjpeg")
|| ($_FILES["pic"]["type"] == "image/png"))
&& ($_FILES["pic"]["size"] < 1024000)){
  if ($_FILES["pic"]["error"] > 0)
    {
$this->error("上传错误请重试，可与管理员联系！");
    }
  else
    {
	if (file_exists("upload/" . $_FILES["pic"]["name"]))
      {
$this->error("上传错误请重新上传！");
      }
    else
      {
	  $filename_name = $_SESSION["uid"].'-'.Date("ymdHis", time()).mt_rand(100,999);//set filename
      move_uploaded_file($_FILES["pic"]["tmp_name"],
      "upload/" . $filename_name.".jpg");
	  $yin=spClass('yin');
	  $conditions=array('id'=>$this->spArgs('id'));
	  $action=array('finish'=>2,'pic'=>"upload/" . $filename_name.".jpg");
	  $sql=$yin->update($conditions,$action);
	  if($sql){
		$this->success("完成任务",spUrl('admin','mytake'));
	  }else{
		$this->error("操作失败！");
	  }
      }
    }
}else{
$this->error("文件格式不对，或文件过大。");
}


}
}

?>