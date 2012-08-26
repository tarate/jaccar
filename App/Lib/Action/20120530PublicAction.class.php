<?php 
class PublicAction extends Action{
	private $sid;
	private $groupid;
	function _initialize()
	{
		$this->sid=Session::get(C('USER_AUTH_KEY'));
		$this->groupid=Session::get('groupid');
	}

	public function login()
	{
		//if(!isset($this->sid) || $groupid!=1 || $groupid!=2)
		if(!isset($this->sid) || $this->groupid=='')
		{
			$this->display();
		}else{
			$this->redirect('index','Index');
		}
	}

	public function points_view(){
		$Article = D ( "Article" );
		$where = array(); 
		$where['cid']=168;
		$count=$Article->count($where);
		import("ORG.Util.Page");
		$listRows=2;
		$p=new page($count,$listRows);
		$page=$p->show();
		$this->assign("page",$page);
		$list=$Article->findAll($where,'*','postdate desc',$p->firstRow.','.$p->listRows);
		$page=$p->show();
		$this->assign("list",$list);
		$this->display();
		 
	}
	 
}
?>