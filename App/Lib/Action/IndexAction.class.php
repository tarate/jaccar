<?php
class IndexAction extends GlobalAction 
{
	
   function Index(){    
   	    $scorll = D("Scroll")->find();
   	    $this->assign("indexObj",$scorll);
		$Article = D ( "Article" );
		$list = $Article->findAll("istop=1","*","postdate desc","0,1");
		$this->assign("list",$list);
		$this->display();
	}	
		
		
  function Search() {
    $list = $this->getListByCid(null);
		$this->assign("list",$list);
		//$this->getCompanyList();
		$this->display();
  }
  
  private function getListByCid($cid){ 
		$Article = D ( "Article" );
		$where = array();
		
    //if($cid != null)
			//$where['cid']=$cid;
		//else{  
		   // $where['cid']=array("not in",array('168','169')); 
		//}
    
    if($_REQUEST['txtSearch']!=null) {
        $where['subject']=array("like","%" . $_REQUEST['txtSearch'] . "%"); 
        $where['message']=array("like","%" . $_REQUEST['txtSearch'] . "%");         
    }
    
		$count=$Article->count($where);
		import("ORG.Util.Page");
		$listRows=3;
		$p=new page($count,$listRows);
		$page=$p->show();
		$this->assign("page",$page);
		//$list=$Article->findAll($where,'*','postdate desc',$p->firstRow.','.$p->listRows);
    
    $list=$Article->findAll("subject like '%".$_REQUEST['txtSearch']."%' or message like '%".$_REQUEST['txtSearch']."%'",'*','postdate desc',$p->firstRow.','.$p->listRows);
    
		return $list;
	}
}


?>