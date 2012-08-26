<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN</title>
<link href="/Admin/Tpl/default/Public/images/top.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="topnav">
	<div class="sitenav">
		<div class="welcome">HELLO，<span class="username"><?php echo ($username); ?></span><a href="http://www.007wang.com" target="_blank" style="display:none">THINKCMS</a> </div>
		<div class="sitelink"> 
			<a href="<?php echo ($http); ?>" target="_blank">MainPage</a> | 
			<a href="/admin.php/Index/modify/id/<?php echo ($uid); ?>" target="mcMainFrame">MY ACCOUNT</a> | 
			<a href="/admin.php/Public/logout" target="_top">EXIT</a>
            <a target="mcMainFrame" title="点击刷新右侧窗口" href="javascript:location.reload()" class="reload">REFLASH</a>
		</div>
	</div>
	<div class="leftnav" style="float:left;">
		<ul>
			<li class="navleft"></li>
			<li id='d1' style="margin-left:-1px" class="thisclass" onclick="changeColor(this,'Main Page');"><A href="/admin.php/Menu/menu" target="mcMenuFrame" class="tabon">Main</A></li>
				<?php if(($security['allowsystem'])  ==  "1"): ?><li id='d2'  onclick="changeColor(this,'System Config');"><A href="/admin.php/Menu/menu/action/Systemconfig" target="mcMenuFrame" style="display:none;">System</A></li><?php endif; ?> 
				<?php if(($security['allowarticle'])  ==  "1"): ?><li   id='d2'  onclick="changeColor(this,'News List Manage');"><a href="/admin.php/Menu/menu/action/shop8" target="mcMenuFrame">News</a></li><?php endif; ?> 
				<?php if(($security['allowjob'])  ==  "1"): ?><li id='d2'  onclick="changeColor(this,'Category Manage');"><A href="/admin.php/Menu/menu/action/category" target="mcMenuFrame" style="">Category</A></li><?php endif; ?> 
				<?php if(($security['allowjob'])  ==  "1"): ?><li id='d2'  onclick="changeColor(this,'Points Of View');"><A href="/admin.php/Menu/menu/action/points" target="mcMenuFrame" style="">Points</A></li><?php endif; ?>
				<?php if(($security['allowjob'])  ==  "1"): ?><li id='d2'  onclick="changeColor(this,'Stories');"><A href="/admin.php/Menu/menu/action/stories" target="mcMenuFrame" style="">Stories</A></li><?php endif; ?>
			<li class="navright"></li>
		</ul>
	</div>
</div>
<div class="" style="display:none;height:64px;clear:both;line-height:64px;text-indent:18px; border-bottom: 1px solid #DFDFDF;font-size:28px;color:#555555"><span id="big_title">Main Page</span></div>
<script>
var initobj=document.getElementById("d1");
var changeColor =function(obj,val){
	obj.className="thisclass";
	initobj.className="";
	initobj=obj;
	document.getElementById("big_title").innerHTML=val;
}
</script>
</body>
</html>