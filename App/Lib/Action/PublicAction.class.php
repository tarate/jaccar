<?php 
class PublicAction extends Action{
	private $sid;
	private $groupid; 
	private static $htmlModel="<div class=\"story_3\" ><ul>[MODEL_3][MODEL_4]</ul></div>";
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
	
	private function _storyModel2($id,$pic,$i){
	
		return "<div class=\"story_".$i."\"><a href=\"index.php?s=/Public/storyDetail/id/".$id.".html\"><img style=\"width:95px;height:110px\" src=\"".$pic."\" /></a></div>";
	}
	private function _storyModel3($id,$pic){ 
		return "<li><a href=\"index.php?s=/Public/storyDetail/id/".$id.".html\"><img  style=\"width:95px;height:110px\" src=\"".$pic."\" /></a></li>";
	}
	private function _storyModel4($id,$pic){ 
		return "<li style=\"margin-top:10px;\"><a href=\"index.php?s=/Public/storyDetail/id/".$id.".html\"><img  style=\"width:95px;height:110px\" src=\"".$pic."\" /></a></li>";
	}
	
	public function story(){
		$Article = D ( "Article" );
		$where = array(); 
		$where['cid']=169; 
		$count=$Article->count($where);
		import("ORG.Util.Page");
		$listRows=300;
		$p=new page($count,$listRows);
		//$page=$p->show();
		//$this->assign("page",$page);
		$list=$Article->findAll($where,'*','id asc',$p->firstRow.','.$p->listRows); 
		$html="";
		$count=count($list);
		for($i=0;$i<$count;$i++){
			$vo=$list[$i];
			$pic=__ROOT__."/Attachments/article/".$vo['attachpath']."/".$vo['attachment2'];
			$tempi=$i+1;
			if($i>5){ 
				$tempi=($i+1)%6+1;
			}
			if($tempi==3||$tempi==4){
				$tem3="";
				$tem4=""; 
				if($tempi==3){ 
					$tem3=$this->_storyModel3($vo['id'],$pic);
					$tem4="";  
					$tempstr=str_replace("[MODEL_3]", $tem3, self::$htmlModel);
					if($count<4)
					$tempstr=str_replace("[MODEL_4]", $tem4, $tempstr);
					$html .=$tempstr;
				}else{
					$tem4=$this->_storyModel4($vo['id'],$pic);
					$html=str_replace("[MODEL_4]", $tem4, $html);
				}  
			}else{
				
				$html.=$this->_storyModel2($vo['id'], $pic, $tempi);
			}
			 
		}
		$this->assign("listhtml",$html);
		
		$this->display();
	}
	
	public function storyDetail(){
		$id=$_REQUEST['id'];
		$obj = D("Article")->where("id=".$id)->find();
		$this->assign("vo",$obj);
		$this->display();
	}
	 
  public function contactus() {
    $MailContent = "";
    
    if($_REQUEST['firstname']!=null) { 
      $MailContent = $MailContent . "First Name:" . $_REQUEST['firstname'] ."<br/>";        
    }
    
    if($_REQUEST['lastname']!=null) { 
      $MailContent = $MailContent . "Last Name:" . $_REQUEST['lastname'] ."<br/>";        
    }
    
    if($_REQUEST['email']!=null) { 
      $MailContent = $MailContent . "Email:" . $_REQUEST['email'] ."<br/>";        
    }
    
    if($_REQUEST['message']!=null) { 
      $MailContent = $MailContent . "Message:" . $_REQUEST['message'] ."<br/>";        
    }
    
    
    $MailRet = "";
    
    if($MailContent!="") {
      $header = "From: XChinux<www-data@web1.jaccar.typhon.net>\r\n" .
            "Reply-To: www-data@web1.jaccar.typhon.net\r\n" .
            "X-Mailer: PHP/" . phpversion() . "\r\n" .
            "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=gb2312\r\n";


      $MailRet = mail("contacts@jaccar.net","From Jaccar Web Message",$MailContent,$header);
      //$MailRet = mail("471960765@qq.com","From Jaccar Web Message",$MailContent,$header);
      
      if($MailRet=="1") { $MailRet = "Send Success!"; }
      else { $MailRet = "Send fail,Please retry!"; }
    }
    
    $this->assign("AlertMsg",$MailRet);
    $this->display();
  }
  public function checkLogin()
  {
	$Member=D('Member');
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	//$seccode=trim($_POST['seccode']);
	if($username=='')
	{
		$this->error('username is empty!!!');
	}elseif($password==''){
		$this->error('password is empty!!!');
	}
	
	$map=array();
	$map["username"]=$username;
	$user=$Member->find($map);
	if(false===$user)
	{
		$this->error('username is not exist!!!');
	}else{
		if($user['password']!=md5($password))$this->error('password incorrect!!!');
		if($user['ischecked']!=1)$this->error('用户被锁定');
		if($user['groupid']==2)$this->error('用户组被限制登录系统，请联系管理员');
			Session::set(C('USER_AUTH_KEY'),$user['id']);
			Session::set('username',$user['username']);
			Session::set('groupid',$user['groupid']);
			
			$this->redirect('presskit','Public');

	}
  }
  
  public function UploadFile() {
  	$System_Path = "/home/jaccar/public_html/jaccar.net";
  	$title=trim($_POST['title']);
  	if ($title == '') {
  		$this->assign("msgTitle1", "Operation Fail!");
  		$this->error("FileName is empty!");
  		return;
  	}
  	if ((($_FILES["file"]["type"] == "application/pdf")
	  || ($_FILES["file"]["type"] == "application/octet-stream") //rar ie
	  || ($_FILES["file"]["type"] == "application/x-rar-compressed") //rar firefox
	  || ($_FILES["file"]["type"] == "image/jpeg")	// ie
	  || ($_FILES["file"]["type"] == "image/pjpeg") // firefox
	  || ($_FILES["file"]["type"] == "application/zip")  //ie 
	  || ($_FILES["file"]["type"] == "application/x-zip-compressed") // firefox
	  || ($_FILES["file"]["type"] == "application/vnd.ms-excel"))
	  && ($_FILES["file"]["size"] < 20971520)) // 20M
	{
	  if ($_FILES["file"]["error"] > 0)
	  {
	    //echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	    $this->assign("msgTitle1", "Operation Fail!");
	    $this->error($_FILES["file"]["error"]);
	  }
	  else
	  {
//	    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
//	    echo "Type: " . $_FILES["file"]["type"] . "<br />";
//	    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//	    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
	
	    //if (file_exists($System_Path . "/App/Tpl/default/Public/flash/" . $_FILES["file"]["name"]))
	    //{
	    //  $this->error($_FILES["file"]["name"] . " already exists. ");
	    //}
	    //else
	    //{
	    $extend = explode("." , $_FILES["file"]["name"]);
	    $extend = end($extend);
	    $filename = microtime(true) . "." . $extend;
	    
	      if(move_uploaded_file($_FILES["file"]["tmp_name"], $System_Path. "/App/Tpl/default/Public/flash/" . $filename))
	      {
	      	$Presskit = D ( "Presskit" );
	      	$Presskit->execute("insert into `thinkcms_presskit` ( `title`,`filename`,`orgfilename`) values ('".$title."','".$filename."','".$_FILES["file"]["name"]."')");
	      	$this->assign("msgTitle1", "Operation Success!");
	      	$this->success("Upload Success!");
	      } else {
	      	$this->assign("msgTitle1", "Operation Fail!");
	      	$this->error("Upload Error!");
	      }
	    //}
	  }
	}
	else
	{
	  $this->assign("msgTitle1", "Operation Fail!");
	  $this->error("Invalid file!");
	}  	
  }
  
  public function presskit() {
  	$username = Session::get('username');
  	$this->assign("username",$username); 
  	//echo "username" . $username;
  	$Presskit = D ( "Presskit" );
  	$count=$Presskit->count();
  	import("ORG.Util.Page");
	$listRows=8;
	$p=new page($count,$listRows);
	$page=$p->show();
	$this->assign("page",$page);  	
  	//$list=$Presskit->findAll();
  	$list=$Presskit->findAll('','*','title',$p->firstRow.','.$p->listRows);
		
  	$this->assign("list",$list);
  	$this->display();
  }
  
  public function DelPressKit() {
  	$id = $_REQUEST['id'];
  	if ($id != '') {
  		$Presskit = D ( "Presskit" );
  		$Presskit->deleteById($id);
  	}
  	$this->redirect('presskit','Public');
  }

}
?>