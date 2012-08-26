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

class MenuAction extends GlobalAction{
	function _initialize()
	{
		parent::_initialize();
		$VERSION=C(SYSVERSION);
		$uid=$this->getUid();
		$username=$this->getName();
		$groupId=$this->getGid();
		if (!$groupId||!$uid) $this->redirect('login','Public');
		//获取用户组ID权限
		$security=D('Usergroup')->where('id='.$groupId)->find();
		if (!$security) $this->error(L('_shuguang_appNotGroupSecurity'));//未获取用户组ID权限，请联系系统管理员
		//dump($security);
		$this->assign('charset',C(TEMPLATE_CHARSET));
		$this->assign('version',$VERSION);
		$this->assign('uid',$uid);
		$this->assign('username',$username);
		$this->assign('security',$security);
		
	}
	public function menu(){
		$action=$_REQUEST['action'];
		$allowaction=array('systemconfig','category','article','product','job','feedback','announce','member');
		//if (!in_array($action,$allowaction,true)) $this->error('未知操作');
		switch ($action){
			case 'Systemconfig':$url=__APP__.'/Settings';break;
			case 'Article':$url=__APP__.'/Article';break;
			case 'sp':$url=__APP__.'/Article/index2/cid/1';break;
			case 'yangfa':$url=__APP__.'/Article/index2/cid/13';break;
			case 'Feedback':$url=__APP__.'/Feedback';break;
			case 'Announce':$url=__APP__.'/Announce';break;
			case 'daren':$url=__APP__.'/Article/index3/cid/14';break;
			case 'category':$url=__APP__.'/Article/category';break;
			case 'shop':$url=__APP__.'/Article/index4/cid/18';break;
			case 'shop2':$url=__APP__.'/Article/index4/cid/18';break;
			case 'shop3':$url=__APP__.'/Article/index4/cid/18';break;
			case 'points':$url=__APP__.'/Article/index7/cid/168';break;
			case 'stories':$url=__APP__.'/Article/index8/cid/169';break;
			case 'Other':$url=__APP__.'/Pages';break;
			case 'Scroll':$url=__APP__.'/Scroll';break;
			default:$url=__APP__.'/Index/main';				
		}
		$this->assign('url',$url);
		if($action=="shop"){
			$this->assign("catename","movie");
			$this->parseHtml(132,"movie");
		}else if($action=="shop2"){
			$this->assign("catename","design");
			$this->parseHtml(131,"design");
		}else if($action=="shop3"){
			$this->assign("catename","work");
			$this->parseHtml(130,"work");
		}else if($action=="shop4"){
			$this->assign("catename","prize");
			$this->parseHtml(142,"prize");
		}else if($action=="shop5"){
			$this->assign("catename","sales");
			$this->parseHtml(145,"sales");
		}else if($action=="shop6"){
			$this->assign("catename","think");
			$this->parseHtml(147,"think");
		}else if($action=="shop7"){
			$this->assign("catename","active");
			$this->parseHtml(146,"active");
		}else if($action=="shop8"){
			$this->assign("catename","news");
			$this->parseHtml(153,"news");
		} 
		$this->assign('action',$action);
		$this->display("Public:menu");
	}
	
	private function parseHtml($parentid,$catename){
		
		$map['parentid']=$parentid;
		$map['module']=3;
		$headhtml="<dl><dt><a href=\"\" onclick=\"return showHide('items0');\" target=\"_self\">";
		$headmiddle="</a></dt>
		<dd id=\"items0\" style=\"display:block;\">
		<ul>";
		$bottomhtml=" </ul></dd></dl>";
		$category = D("Category");
		$list4 = $category->where($map)->findAll();
		foreach($list4 as $vo){
			$html .=$headhtml.$vo['title'].$headmiddle;
			$where['parentid']=$vo['id'];
			$list5=$category->where($where)->findAll();
			if($list5){
				foreach ( $list5 as $vo2){
					$title = $vo2['title'];
					if(strlen($title)>9)
						$title = substr($title, 0,20);
					$html .="<li><a href='".__APP__."/Article/index4/cid/".$vo2['id']."/parentid/".$vo['id']."'>".$title."</a></li>";
				}
			}
		
		}
		$html .=$bottomhtml;
		$this->assign("html",$html);
		
	}
	
	private function parseHtml2($parentid,$catename){
	
		$map['parentid']=$parentid;
		$map['module']=3;
		$headhtml="<dl><dt><a href=\"\" onclick=\"return showHide('items0');\" target=\"_self\">";
		$headmiddle="</a></dt>
		<dd id=\"items0\" style=\"display:block;\">
		<ul>";
		$bottomhtml=" </ul></dd></dl>";
		$category = D("Category"); 
			$html .=$headhtml."新闻".$headmiddle;
			$where['parentid']=$parentid;
			$list5=$category->where($where)->findAll();
			if($list5){
				foreach ( $list5 as $vo2){
					$title = $vo2['title'];
					if(strlen($title)>9)
						$title = substr($title, 0,20);
					$html .="<li><a href='".__APP__."/Article/index4/cid/".$vo2['id']."/catename/".$catename."'>".$title."</a></li>";
				}
			}
	 
		$html .=$bottomhtml;
		$this->assign("html",$html);
	
	}
	public function topmenu(){
		$this->assign('http',C('SITEURL'));
		$this->display("Public:topmenu");
	}		
} 
?>