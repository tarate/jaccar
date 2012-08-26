<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="/Admin/Tpl/default/Public/images/main.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/Admin/Tpl/default/Public/images/common.js"></script>
</head>

<body>

<div class="bodyTitle">
	<div class="bodyTitleLeft"></div>
  <div class="bodyTitleText">Update</div>
</div>
<br><h3 class="marginbot"></h3>
		
       
				<table width="100%"> <form method="post" name="form1" action="/admin.php/Index/modifys">
<input type="hidden" name="id" value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" />
					<tr>
					  <td>Username:<?php echo (is_array($vo)?$vo["username"]:$vo->username); ?></td>
				  </tr>
					<tr>
					  <td>Password
    <input name="password" type="password" id="password" class="txt"/>
    <input name="opassword" type="hidden" id="opassword" value="<?php echo (is_array($vo)?$vo["password"]:$vo->password); ?>" /></td>
				  </tr>
					<tr style="display:none;">
					  <td>密保问题
    <input name="question" type="text" id="question" value="<?php echo (is_array($vo)?$vo["question"]:$vo->question); ?>" class="txt"/>  密保答案
    <input name="answer" type="text" id="answer" value="<?php echo (is_array($vo)?$vo["answer"]:$vo->answer); ?>" class="txt"  /></td>
				  </tr>
					
					<tr style="display:none;">
					  <td>真实姓名
    <input name="realname" type="text" id="realname" value="<?php echo (is_array($vo)?$vo["realname"]:$vo->realname); ?>" class="txt"/>
    性  别：
      <input name="sex" type="radio" value="1" 
      <?php if($vo['sex'] == 1 ): ?>checked="checked"<?php endif; ?> class="checkbox"/>男 <input type="radio" name="sex" value="0" <?php if($vo['sex'] == 0 ): ?>checked="checked"<?php endif; ?> class="checkbox"/> 女</td>
				  </tr>
					<tr style="display:none;">
					  <td>地　　址
                      <input name="address" type="text" id="address" value="<?php echo (is_array($vo)?$vo["address"]:$vo->address); ?>" class="txt"/> 
                      移动电话
                      <input name="fax" type="text" id="fax" value="<?php echo (is_array($vo)?$vo["fax"]:$vo->fax); ?>" class="txt"/></td>
				  </tr>
					<tr style="display:none;">
					  <td>电　　话
                      <input name="telphone" type="text" id="telphone" value="<?php echo (is_array($vo)?$vo["telphone"]:$vo->telphone); ?>" class="txt"/>
                      邮　　箱
                      <input name="email" type="text" id="email" value="<?php echo (is_array($vo)?$vo["email"]:$vo->email); ?>" class="txt"/></td>
				  </tr>
					<tr style="display:none;">
					  <td>网　　址
                        <input name="web" type="text" id="web" value="<?php echo (is_array($vo)?$vo["web"]:$vo->web); ?>" class="txt"/> 
                        QQ 　　
                        <input name="qq" type="text" id="qq" value="<?php echo (is_array($vo)?$vo["qq"]:$vo->qq); ?>" class="txt"/></td>
				  </tr>
					<tr>
					  <td>&nbsp;</td>
				  </tr>
					<tr>
					  <td><input type="submit" name="Submit2" value="Submit" class="inputButton" />
                    <input type="reset" name="Reset" value="Reset" class="inputButton" /></td>
				  </tr>
				<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form></table> 
        <br>
</body>
</html>