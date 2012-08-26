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
  <div class="bodyTitleText">update index</div>
</div>
  
				<table width="100%"><form method="post" name="form1" action="/admin.php/Scroll/edits" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" />
					<tr>
					  <td>Title</td>
					  <td>  <input name="subject" type="text" class="txt" id="subject" value="<?php echo (is_array($vo)?$vo["subject"]:$vo->subject); ?>"  size="40" maxlength="50" />
&nbsp;</td>
				  </tr>
					 <tr >
              <td>Website Link</td>
              <td>
                <input name="url" type="text" class="txt" id="url"  size="40" value="<?php echo (is_array($vo)?$vo["url"]:$vo->url); ?>" /></td>
            </tr>
					<tr>
					  <td>Picture</td>
					  <td><input name="img" type="file" id="img" /> 
				        <input name="attachment" type="hidden" id="attachment" value="<?php echo (is_array($vo)?$vo["attachment"]:$vo->attachment); ?>" />size:209px*125px
					<?php echo (is_array($vo)?$vo["attachment"]:$vo->attachment); ?>					  </td>
				  </tr>
					<tr style="display:none;">
					  <td>排序</td>
				  <td><input name="orders" type="text" class="txt" id="orders"  value="<?php echo (is_array($vo)?$vo["orders"]:$vo->orders); ?>" size="8" /></td>
				  </tr>
					<tr style="display:none;">
					  <td>描述</td>
				  <td><textarea name="content" cols="60" rows="5" class="txt" id="content"><?php echo (is_array($vo)?$vo["content"]:$vo->content); ?></textarea></td>
				  </tr>
					<tr>
					  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  </tr>
					<tr>
					  <td></td>
              <td >
                <input type="submit" name="Submit2" value="Submit" class="inputButton" />&nbsp;&nbsp;
                 <input type="button" name="Reset" value="Back" onclick="javascript:history.go(-1);" class="inputButton" /></td>
				  </tr>
				<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form></table> 
        <br>
</body>
</html>