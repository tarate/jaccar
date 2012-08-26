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
							    <div class="strategy_title"><img src="/App/Tpl/default/Public/images/contactus_logo.jpg" /></div>
							    <form action="" method="post" style=" margin:0; padding:0; border:0;">
								<div class="contactus_content"> 
								  <div class="onetips">
								  	<div class="lefttext">Your First Name</div>
									<div class="rightinfo"><input type="text" class="firstname" id="firstname" name="firstname" /></div>
									<div class="clearboth"></div>
								  </div>
								  <div class="onetips">
								  	<div class="lefttext">Your Last Name</div>
									<div class="rightinfo"><input type="text" class="lastname" id="lastname" name="lastname" /></div>
									<div class="clearboth"></div>
								  </div>
								  <div class="onetips">
								  	<div class="lefttext">Your E-mail Address</div>
									<div class="rightinfo"><input type="text" class="email" id="email" name="email" /></div>
									<div class="clearboth"></div>
								  </div>
								   <div class="onetips">
								  	<div class="lefttext">Subject</div>
									<div class="rightinfo">
										<ul class="btnlist">
											<li><a href="#"><img src="/App/Tpl/default/Public/images/finance_btn.jpg" alt="" /></a></li>
											<li><a href="#"><img src="/App/Tpl/default/Public/images/press_btn.jpg" alt="" /></a></li>
											<li><a href="#"><img src="/App/Tpl/default/Public/images/com_btn.jpg" alt="" /></a></li>
											<li><a href="#"><img src="/App/Tpl/default/Public/images/other_btn.jpg" alt="" /></a></li>
											<li class="clearboth"></li>
										</ul>
									</div>
									<div class="clearboth"></div>
								  </div>
								  <div class="onetips">
								  	<div class="lefttext">Message</div>
									<div class="rightinfo"><textarea id="message" class="message" name="message" ></textarea></div>
									<div class="sendbtn">
									    <!--<a href="#" onclick="alert('ok');"><img src="/App/Tpl/default/Public/images/send.jpg" alt="" /></a>-->
									    <?php echo ($AlertMsg); ?>
									    <input type="image" src="/App/Tpl/default/Public/images/send.jpg" />
									</div>
									<div class="clearboth"></div>
								  </div>
								</div>
								<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>
							<!--content e-->
								<div class="clearboth"></div>
							<!--contact content s-->
								<div class="contactdetail">
									<div class="onetigs">
										<ul class="left_title">
											<li class="title">JACCAR HOLDINGS</li>
										</ul>
										<ul class="right_detail"> 
											<li class="contact1">30, boulevard Grande-Duchesse Charlotte, L-1330 Luxembourg</li>
											<li class="tel">Tel.: +352 24 69 90 48&nbsp;&nbsp;&nbsp;&nbsp;Fax: +352 24 69 90 60</li>  
										</ul> 
										<div class="clearboth"></div>
									</div> 
									<div class="onetigs">
										<ul class="left_title">
											<li class="title">PARIS OFFICE</li>
										</ul>
										<ul class="right_detail"> 
											<li class="contact1">33, rue du Louvre 75002 Paris, France</li>
											<li class="tel">Tel.: +33 (0)1 40 13 73 90&nbsp;&nbsp;&nbsp;&nbsp;Fax: +33 (0)1 40 13 73 91</li>  
										</ul>
										<div class="clearboth"></div>
									</div> 
									<div class="onetigs">
										<ul class="left_title">
											<li class="title">SHANGHAI OFFICE</li>
										</ul>
										<ul class="right_detail"> 
											<li class="contact1">Rm 1003 Urban Development International Tower,  355 Hongqiao Road, Shanghai 200030, P.R. China</li>
											<li class="tel">Tel.: +86 21 64 07 33 99&nbsp;&nbsp;&nbsp;&nbsp;Fax: +86 21 34 60 61 31</li>  
										</ul> 
										<div class="clearboth"></div>
									</div> 
									<div class="onetigs">
										<ul class="left_title">
											<li class="title">VIETNAM OFFICE</li>
										</ul>
										<ul class="right_detail"> 
											<li class="contact1">16th Floor, FIDECO Tower, 81-85 Ham Nghi, District 1, Ho Chi Minh City, Vietnam</li>
											<li class="tel">Tel.: +84 8 39 14 9060&nbsp;&nbsp;&nbsp;&nbsp;Fax: +84 8 39 14 90 59</li>  
										</ul> 
										<div class="clearboth"></div>
									</div> 
								</div>
							<!--contact contnet e-->
							</div>
							<div class="right_bottom"><img src="/App/Tpl/default/Public/images/right_bottom.jpg" /></div>	
						 <!--right e-->
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