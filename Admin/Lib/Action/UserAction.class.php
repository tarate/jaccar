<?php 
/*
　* @$Id
　* @
　* @Ver: 1.0
　* @Create: 2008-09-01 8:10
　* @Modify: 
　* @Author: shuguang http://www.shuguang.asia(web@shuguang.asia)
　* @Copyright (C) 2008 shuguang.asia. All Rights Reserved.
　* @License SHUGUANG CMS is free software and use is subject to license terms
　*/
class UserAction extends GlobalAction 
{
	function _initialize()
	{
		parent::_initialize();
		$this->_checkSecurity('member');
	}
	public function index()
	{
		//$Member=D("Member");
		$User=D("User");
		$keyword=$_POST['keyword'];
		$keywords=$_REQUEST['keywords'];
		if($keyword){
			$data['name']=array('like','%'.$keyword.'%');
		}elseif ($keywords) {
			$data['name']=array('like','%'.safe_b64decode($keywords).'%');	
		}
		$count=$User->count($data);
		import("ORG.Util.Page");
		$listRows=15;
		$p=new page($count,$listRows);
		$list=$User->findAll($data,'*','id desc',$p->firstRow.','.$p->listRows);
		if ($keyword) $p->parameter='keywords='.safe_b64encode($keyword);
		$page= $p->show();
		if($list!==false){
			$this->assign('page',$page);
			$this->assign('list',$list);
		}
		$this->display();
	}
	
/**
	 * 删除积分 
	 * 
	 * @param unknown_type $type
	 */
	public function deletemark($type){
		if(isset($_SESSION['user'])){ 
			$obj = $_SESSION['user']; 
			$User = D("User");
			if($type==1){
				$User->execute ( "update green_user set log=log-2 where id=".$obj['id'] );
				$obj['user']['log'] -= 2;
			}else {
			   $User->execute ( "update green_user set photo=photo-2 where id=".$obj['id']);
			   $obj['user']['photo'] -= 2;
			}
		} 
	}
	 
}
?>