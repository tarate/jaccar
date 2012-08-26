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
						 <!--right s-->
						 	<div class="right">
							<!--content s-->
							    <div class="strategy_title"><img src="/App/Tpl/default/Public/images/affiliates_news_title.jpg" /></div>
								<!-- search year s-->
									<div id="search_year_control3">
										<div id="search_year_select3">
											<ul> 
											    <li>Search by Company</li>
												<?php if(is_array($companylist)): ?><?php $i = 0;?><?php $__LIST__ = $companylist?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><li id="company_<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" lang="/index.php?s=/Article/affiliates_news2/cid/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>.html"><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
											</ul> 
										</div> 
									</div>
								<!-- search year e-->  
								<div class="clearboth"></div>
								<div class="datelist">
									<ul>
									 	<li class="selectdateli" onclick="SelectBox.changeSelectBox('search_year_select3');" style="width:164px;"> 
											<p id="search_year_select3_label" style="float:left; width:150px;padding-top:1px;">BOURBON</p><p style="float:left; line-height:12px; padding-top:5px;margin:0px;  line-height:0px; font-size:0px;"><img src="/App/Tpl/default/Public/images/date_drop.jpg" /> </p>
										</li> 
									</ul>
								</div>
								<div class="lastest_news_content"  style="margin-top:0px;">  
								  <?php if(is_array($list)): ?><?php $i = 0;?><?php $__LIST__ = $list?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><!--onecase s-->
									<div class="newslist">
											<div class="newsleftpic"><img src="/Attachments/article/<?php echo (is_array($vo)?$vo["attachpath"]:$vo->attachpath); ?>/<?php echo (is_array($vo)?$vo["attachment2"]:$vo->attachment2); ?>" /></div>
											<div class="newsrightcontent">
												<div class="datetime"><?php echo (date("d/m/Y",is_array($vo)?$vo["postdate"]:$vo->postdate)); ?></div>
												<div class="title" title="<?php echo (is_array($vo)?$vo["subject"]:$vo->subject); ?>"><?php echo (msubstr(is_array($vo)?$vo["subject"]:$vo->subject,0,80)); ?></div>
												<div class="descript"><?php echo (is_array($vo)?$vo["message"]:$vo->message); ?></div>
											</div>
											<div class="detailbtn"><a href="/index.php?s=/Article/affiliates_news_detail/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>.html"><img src="/App/Tpl/default/Public/images/news_detail_btn.png" /></a></div>
										</div>
									<!--onecase e-->
									<div class="clearboth"></div><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
								</div>
							<!--content e-->
							<!--pager s-->
							    <div class="clearboth"></div>
								<div id="pager">
									<ul>
										<?php echo ($page); ?>
									</ul>
								</div>
							<!--pager e-->
							 
							<!-- search year s-->
								<div id="search_year_control" style="bottom:42px;">
									<div id="search_year_select">
										<ul>
											<li>Search by Year</li>
											<li lang="/index.php?s=/Article/lastest_news2/year/2012.html">2012</li> 
<li lang="/index.php?s=/Article/lastest_news2/year/2011.html">2011</li>
<li lang="/index.php?s=/Article/lastest_news2/year/2010.html">2010</li>
<li lang="/index.php?s=/Article/lastest_news2/year/2009.html">2009</li>
<li lang="/index.php?s=/Article/lastest_news2/year/2008.html">2008</li>
<li lang="/index.php?s=/Article/lastest_news2/year/2007.html">2007</li>
										</ul> 
									</div>
									<div id="search_year_select_label" onclick="SelectBox.changeSelectBox('search_year_select');" >Search by Year</div>
								</div>
							<!-- search year e-->  
							</div>
							<div class="right_bottom"><img src="/App/Tpl/default/Public/images/right_bottom.jpg" /></div>	
						 <!--right e--> 
  <script> 
    SelectBox.autoSelect(document,"search_year_select","selectoption"); 
	SelectBox.autoSelect(document,"search_year_select3","selectoption"); 
		//$("#datecontrol").datepicker(); 
	//jQuery("#search_date_select_label").datepicker(); 
	$("#search_year_select3_label").html($("#company_<?php echo (is_array($_REQUEST)?$_REQUEST["cid"]:$_REQUEST->cid); ?>").text())
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