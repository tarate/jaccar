<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="/Admin/Tpl/default/Public/images/main.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/Admin/Tpl/default/Public/images/common.js"></script>
</head>

<body>
	<div id="append"></div><div class="container">
	<h3>Statistics</h3>
	<ul class="memlist fixwidth">
		<li><em>User Total:</em><?php echo ($MemberC); ?></li>
		<li><em>News Total:</em><?php echo ($ArticleC); ?></li>
	</ul>
	<h3>System Infomation</h3>
	<ul class="memlist fixwidth">
		<li><em>Operation:</em><?php echo ($serverinfo); ?></li>
		<li><em>Php:</em><?php echo ($dbversion); ?></li>
		<li><em>Unload Size:</em><?php echo ($fileupload); ?></li>
		<li><em>Database:</em><?php echo ($dbsize); ?></li> 
	</ul>
	
</div>

</body>
</html>