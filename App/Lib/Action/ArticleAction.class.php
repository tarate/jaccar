<?php
class ArticleAction extends GlobalAction {
	
	private static $AFF_NEWS_CID=165;
	private static $JACCAR_NEWS_CID=167;
	private static $PRESS_NEWS_CID=166;
	private static $PARENT_COMPANY_ID=156;
	 
	
	public function index() { 
		 
		$this->display ();
	}
	
	private function getCompanyList(){
		$Category = D("Category");
		$where = array();
		$where['parentid']=self::$PARENT_COMPANY_ID;
		$list = $Category->where($where)->order("id asc")->findAll();
		$this->assign("companylist",$list);
	}
	
	private function getCompanyIdList(){
		$Category = D("Category");
		$where = array();
		$where['parentid']=self::$PARENT_COMPANY_ID;
		$list = $Category->order("id asc")->findAll($where,"id");
		$rst = array();
		foreach($list as $vo)
			$rst[]=$vo['id']; 
		return $rst;
	}
	
	private function getListByCid($cid){ 
		$Article = D ( "Article" );
		$where = array();
		if($cid != null)
			$where['cid']=$cid;
		else{  
		    $where['cid']=array("not in",array('168','169')); 
		}
		$count=$Article->count($where);
		import("ORG.Util.Page");
		$listRows=3;
		$p=new page($count,$listRows);
		$page=$p->show();
		$this->assign("page",$page);
		$list=$Article->findAll($where,'*','postdate desc',$p->firstRow.','.$p->listRows);
		return $list;
	} 
	private function getListByCidAndDate($cid,$year,$month){
		$where = array();
		if($cid!=null)
			$where['cid']=$cid; 
		else{
			$where['cid']=array("not in",array('168','169'));
		}
		if($month != null)
		$where['monthd']=$month;
		$where['yeard']=$year;
		$Article = D ( "Article" ); 
		$count=$Article->count($where);
		import("ORG.Util.Page");
		$listRows=3;
		$p=new page($count,$listRows);
		$list=$Article->findAll($where,'*','postdate desc',$p->firstRow.','.$p->listRows);
		$page=$p->show();
		$this->assign("page",$page);
		return $list;
	}
	
	public function affiliates_news(){
		$rst = array(); 
		$cateidlist = $this->getCompanyIdList();
		$cateids=implode(",", $cateidlist);  
		$where = array();  
		$where['cid']=array("in", $cateids);
		$Article = D ( "Article" );
		$count=$Article->count($where);
		import("ORG.Util.Page");
		$listRows=3;
		$p=new page($count,$listRows);
		$list=$Article->findAll($where,'*','postdate desc',$p->firstRow.','.$p->listRows);
		$page=$p->show();
		$this->assign("page",$page);
		$this->assign("list",$list);
		$this->getCompanyList();
		$this->display();
	}
	
	public function affiliates_news2(){
		$cid = $_REQUEST['cid'];
		$list = $this->getListByCid($cid);
		$this->assign("list",$list);
		$this->getCompanyList();
		$this->display();
	}
	
	public function press_release(){ 
		$list = $this->getListByCid(self::$PRESS_NEWS_CID);
		$this->assign("list",$list);
		$this->getCompanyList();
		$this->display();
	}
	
	public function jaccar_news(){
		$list = $this->getListByCid(self::$JACCAR_NEWS_CID);
		$this->assign("list",$list);
		$this->getCompanyList();
		$this->display();
	}
	
	public function lastest_news(){
		$list = $this->getListByCid(null);
		$this->assign("list",$list);
		$this->getCompanyList();
		$this->display();
	}
	
	public function lastest_news2(){
		$month = $_REQUEST['month'];
		if(!isset($month))
			$month = null;
		$cid = $_REQUEST['cid'];
		if(!isset($cid))
			$cid = null;
		$year =$_REQUEST['year']; 
		$list = $this->getListByCidAndDate($cid, $year, $month);
		$this->assign("list",$list);
		$this->getCompanyList();
		$this->display();
	}
	
	public function jaccar_news2(){
		$month = $_REQUEST['month'];
		if(!isset($month))
			$month = null; 
		$year =$_REQUEST['year'];
		$list = $this->getListByCidAndDate(self::$JACCAR_NEWS_CID, $year, $month);
		$this->assign("list",$list);
		$this->getCompanyList();
		$this->display();
	}
	
	public function affiliates_news_detail(){
		$id=$_REQUEST['id'];
		$Article = D("Article");
		$articleobj = $Article->where("id=".$id)->find();
		$cid = $articleobj['cid'];
		$categoryObj=D("Category")->where("id=".$cid)->find();
		$this->assign("vo",$articleobj);
		$this->assign("category",$categoryObj);
		$this->display();
	}
	
	public function news_detail(){
		$cid = $_REQUEST['cid'];
		$param = array();
		$param['id']=$_REQUEST['id'];
		if($cid==self::$JACCAR_NEWS_CID){ 
			$this->redirect("jaccar_news_detail",null,null,null,$param);
		}else if($cid==self::$PRESS_NEWS_CID){
			$this->redirect("press_release_detail",null,null,null,$param);
		}else{ 
			$this->redirect("affiliates_news_detail",null,null,null,$param);
		}
	}
	public function press_release_detail(){
		$id=$_REQUEST['id'];
		$Article = D("Article");
		$articleobj = $Article->where("id=".$id)->find();
		$this->assign("vo",$articleobj);
		$this->display();
	}
	
	public function jaccar_news_detail(){
		$id=$_REQUEST['id'];
		$Article = D("Article");
		$articleobj = $Article->where("id=".$id)->find();
		$this->assign("vo",$articleobj);
		$this->display();
	}
	
	public function rss() {
		$Article = D ( "Article" );
		$list=$Article->findAll('','*','postdate desc');
		$this->assign("list",$list);
		$this->display();
	}	 
}
?>