<!DOCTYPE HTML PUBLIC "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>jaccar</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="keywords" content="">
<meta name="description" content=""> 
<link type="text/css" rel="stylesheet" href="/App/Tpl/default/Public/styles/base.css" />
<link type="text/css" rel="stylesheet" href="/App/Tpl/default/Public/styles/layout.css" /> 
<link type="text/css" rel="stylesheet" href="/App/Tpl/default/Public/styles/themes.css" /> 
<link type="text/css" rel="stylesheet" href="/App/Tpl/default/Public/styles/hScrollPane.css" /> 
<script src="/App/Tpl/default/Public/scripts/jquery.js"></script>
<script src="/App/Tpl/default/Public/scripts/swfobject.js"></script>
<script src="/App/Tpl/default/Public/scripts/select_box.js"></script>
<script type="text/javascript" src="/App/Tpl/default/Public/scripts/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/App/Tpl/default/Public/scripts/hScrollPane.js"></script>
<script src="/App/Tpl/default/Public/scripts/jquery.linscroll2.js"></script> 
<script src="/App/Tpl/default/Public/scripts/utils.js"></script> 
</head>
<body> 
  <!-- containter s-->
  	<div class="container">  
				<!--main s-->
					<div class="main"> 
					<!--second menu s-->
					 	<div class="secondmenu">
						  <ul id="company" >
							<li ><a href="/index.php?s=/Public/overview.html">Overview</a></li>
							<li ><a href="/index.php?s=/Public/version.html">Vision</a></li>
							<li style="height:30px;padding-top:8px;" ><a href="/index.php?s=/Public/director.html" ><p style="line-height:12px;">Board of </p><p style="line-height:12px;">Directors</p></a></li> 
						 </ul>
						 <ul id="investment">
							<li ><a href="/index.php?s=/Public/strategy.html">Strategy</a></li>
							<li ><a href="/index.php?s=/Public/key.html">Key Figures</a></li>
							<li ><a href="/index.php?s=/Public/affiliates.html">Affiliates</a></li> 
						 </ul>
						  <ul id="news">
							<li ><a href="/index.php?s=/Article/jaccar_news.html">Jaccar News</a></li>
							<li ><a href="/index.php?s=/Article/press_release.html">Press Release</a></li>
							<li ><a href="/index.php?s=/Article/affiliates_news.html">Affiliates News</a></li> 
						 </ul>
						  <ul id="people">
							<li ><a href="/index.php?s=/Public/story.html">Stories </a></li>
							<li ><a href="/index.php?s=/Public/points_view.html">Points of View</a></li> 
						 </ul>
						</div>
					 <!--second menu e-->
						 <!--left s-->
						 	<div class="left">
								<!--logo s-->
									<div class="logo"><a href="index.html"><a href="/index.php?s=/Index/index.html"><img src="/App/Tpl/default/Public/images/logo.jpg"/></a></a></div>
								<!--logo e-->
								<!-- menu s-->
									<div class="firstmenu">
									  <ul id="ul_firstmenu">
										<li class="selected" id="main_company">COMPANY</li>
										<li class="selected" id="main_investment">INVESTMENT</li>
										<li class="selected" id="main_news"><a href="/index.php?s=/Article/lastest_news.html">NEWS</a></li> 
										<li class="selected" id="main_people">JACCAR<br/>FORUM</li>
									 </ul> 
									</div>
								<!-- menu e-->
							</div>
						 <!--left e-->
<script type="text/javascript" src="/App/Tpl/default/Public/scripts/ScrollPic.js"></script>
  						 <!--right s-->
						 	<div class="right">
							<!--content s--> 
								<div class="index_content"> 
								    <div class="flash_div"><div id="flash_div"><img src="/App/Tpl/default/Public/images/index_flash.jpg" /></div></div>
									<div class="tipslist" id="tipslist">
										<div class="tips">
											<div class="subtitle">Strategy</div>
											<div class="subcontent">Looking into the future, we recognized the need for new frontiers in growth and business development. We enable our partners to find profitable revenue streams, optimize their operating models and to first, create value...</div>
											<div class="detailbtn"><a href="/index.php?s=/Public/strategy.html"><img src="/App/Tpl/default/Public/images/index_strategy_btn.jpg" /></a></div>
										</div>
										<div class="tips">
											<div class="subtitle">Key Figures</div>
											<div class="subcontent"><a href="/index.php?s=/Public/key.html"><img src="/App/Tpl/default/Public/images/index_figures_img.jpg" /></a></div>
											<div class="detailbtn"><a href="/index.php?s=/Public/key.html"><img src="/App/Tpl/default/Public/images/index_figures_btn.jpg" /></a></div>
										</div>
										<div class="tips">
											<div class="subtitle"><?php echo (is_array($indexObj)?$indexObj["subject"]:$indexObj->subject); ?></div>
											<div class="subcontent"><a href="<?php echo (is_array($indexObj)?$indexObj["url"]:$indexObj->url); ?>"><img src="/Attachments/logo/<?php echo (is_array($indexObj)?$indexObj["attachment"]:$indexObj->attachment); ?>" /></a></div>
											<div class="detailbtn"><a href="<?php echo (is_array($indexObj)?$indexObj["url"]:$indexObj->url); ?>"><img src="/App/Tpl/default/Public/images/index_director_btn.jpg" /></a></div>
										</div>
										<?php if(is_array($list)): ?><?php $i = 0;?><?php $__LIST__ = $list?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><div class="tips"  id="other_tips" style="display:none">
											<div class="subtitle">
												<span>NEWS</span><span style="margin-left:150px;"><a href="/index.php?s=/Article/rss.html" target="_blank"><img src="/App/Tpl/default/Public/images/rss.gif" style="text-align:center;" align="absmiddle" /></a></span>
											</div>
											<div class="subcontent_2_1"><?php echo (msubstr(is_array($vo)?$vo["subject"]:$vo->subject,0,40)); ?></div>
											<div class="subcontent_2_2"><?php echo (is_array($vo)?$vo["message"]:$vo->message); ?></div>
											<div class="detailbtn"><a href="/index.php?s=/Article/press_release_detail/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>.html"><img src="/App/Tpl/default/Public/images/index_strategy_btn.jpg" /></a></div>
										</div><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
									</div>
								</div>
							<!--content e-->
								<div class="clearboth"></div>
							</div>
							<div class="right_bottom"><img src="/App/Tpl/default/Public/images/right_bottom.jpg" /></div>	
						 <!--right e-->
 	<script>
		var flashvars = {};
		var params = {};
		params.wmode = "transparent";
		var attributes = {};
		swfobject.embedSWF("/App/Tpl/default/Public/flash/jaccar_landing_20120409.swf", "flash_div", "860", "580", "9.0.0", false, flashvars, params, attributes);
	</script> 
	<script>
	   	var initlegals="nav_01";
		jQuery(".subnav li").click(function(){
			 var obj = jQuery(this);
			 var id = obj.attr("id");
			 jQuery("#"+initlegals).hide();
		     jQuery("#nav"+id).slideDown(100);
			 jQuery(obj).addClass("selectsubnav");
			 initlegals=initlegals.replace("nav","");
			 jQuery("#"+initlegals).removeClass("selectsubnav");
			 initlegals="nav"+id;});
		jQuery("#"+initlegals).slideDown(100);
		 jQuery(".bottom_nav img").mouseover(function(){
			 jQuery(this).animate({opacity:"0.5"});
		 });
		 jQuery(".bottom_nav img").mouseout(function(){
		 	jQuery(this).animate({opacity:"1"});
		});
   </script>
   
   <script type="text/javascript">
   		window.onload=function() {
   			jQuery("#other_tips").show();
			var scrollPic1 = new ScrollPic();
			scrollPic1.scrollContId   = "tipslist"; //内容容器ID		
			scrollPic1.frameWidth     = 816;//显示框宽度
			scrollPic1.pageWidth      = 272; //翻页宽度
			
			scrollPic1.speed          = 100; //移动速度(单位毫秒，越小越快)
			scrollPic1.space          = 272; //每次移动像素(单位px，越大越快)
			scrollPic1.autoPlay       = true; //自动播放
			scrollPic1.autoPlayTime   = 10; //自动播放间隔时间(秒)
			
			scrollPic1.initialize(); //初始化
   		}
</script>
</div>
					<div class="clearboth"></div>
				<!--main e-->
				<!--bottom nav s--><form action="/index.php?s=/Index/Search.html" method="post" style=" margin:0; padding:0; border:0;">
					<div class="bottom_nav">					    
						<input id="txtSearch" name="txtSearch" class="search_input"></input>
						<!--<a href="/index.php?s=/Index/Search.html" class="search_btn"><img  src="/App/Tpl/default/Public/images/search_btn.jpg" /></a>-->
						<input type="image" src="/App/Tpl/default/Public/images/search_btn.jpg" class="search_btn" />							
						<a href="/index.php?s=/Index/index.html" class="home_btn"><img src="/App/Tpl/default/Public/images/home_btn.jpg" /></a>
						<a href="/index.php?s=/Public/ftp.html" class="ftp_btn"><img src="/App/Tpl/default/Public/images/ftp_btn.jpg" /></a>
						<a href="/index.php?s=/Public/strategy.html" class="strategy"><img src="/App/Tpl/default/Public/images/strategy.jpg" /></a>
						<a href="/index.php?s=/Article/press_release.html" class="press"><img src="/App/Tpl/default/Public/images/press.jpg" /></a>
						<a href="/index.php?s=/Public/map.html" class="map"><img src="/App/Tpl/default/Public/images/map.jpg" /></a>
						<a href="/index.php?s=/Public/contactus.html" class="contact"><img src="/App/Tpl/default/Public/images/contact.jpg" /></a>
						<a href="/index.php?s=/Public/presskit.html" class="kit_btn"><img src="/App/Tpl/default/Public/images/kit_btn.jpg" /></a>					</div>
						<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>
				<!--bottom nav e-->
				<!--copyright-->
					<div class="copyright"><a href="/index.php?s=/Public/legals.html">Legal</a>&nbsp;|&nbsp;Copyright @ 2012 Jaccar</div>
				<!--copyright--> 
	</div>
	<div style="z-index:2001;position:absolute;" id="put_img_div">
		<div style="display: block;position:absolute;right:0px;top:0px;cursor:pointer;z-index:2001;" id="img_close_btn">
			<img onclick="closeimg();" src="/App/Tpl/default/Public/images/close_btn.png">
		</div>
		<div style="" id="load_img"></div>
	</div>
	<div style="position:absolute;left:0;top:0;z-index:2000;display:none;filter:Alpha(Opacity=30);-moz-opacity:0.3;opacity: 0.8; background:#000;" id="maskDiv"></div>
  <!-- containter e--> 
   <script src="/App/Tpl/default/Public/scripts/menu.js"></script>
    <!--[if IE 6]>  
		 <script type="text/javascript" src="scripts/png.js"></script> 
		 <script> 
		  DD_belatedPNG.fix('.secondmenu'); 
		</script>
		<![endif]--> 

</body>
</html>