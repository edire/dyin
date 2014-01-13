<?php
class user extends spModel
{
  var $pk = "id"; // 每个留言唯一的标志，可以称为主键
  var $table = "user"; // 数据表的名称
  
  
  
	public function findadd($condition){
		$result=$this->findAll($condition);
		$newdb=$result[0][db]+1;
		$newaction=array('db'=>$newdb);
		$this->update($condition,$newaction);
		return 1;
	}
	public function findminus($condition,$uid){
		$result=$this->findAll($condition);
		$newdb=$result[0][db]-1;
		$newaction=array('db'=>$newdb);
		$this->update($condition,$newaction);
		return 1;
	}
	public function findmoneyadd($condition,$num){
		$result=$this->findAll($condition);
		$newdb=$result[0]['money']+$num;
		$newaction=array('money'=>$newdb);
		$this->update($condition,$newaction);
		return 1;
	}
}