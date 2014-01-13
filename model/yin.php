<?php
class yin extends spModel
{
  var $pk = "id"; // 每个留言唯一的标志，可以称为主键
  var $table = "yin"; // 数据表的名称
  public $pagedata = null; // 定义成员变量来获取分页数据
	public function findme($conditions, $page = 1, $pageSize = 10)
	{
		$result = $this->spPager($page, $pageSize)->findAll($conditions,'updatetime desc'); // 使用spPager
		$this->pagedata = $this->spPager()->getPager(); // 对成员变量赋值
		return $result;
	}
}