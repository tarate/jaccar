<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="/Admin/Tpl/default/Public/images/main.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/Admin/Tpl/default/Public/images/common.js"></script>
</head>

<body>
<style>table tr{height:34px;}</style>
<div class="bodyTitle" style="margin-bottom:20px;">
	<div class="bodyTitleLeft"></div>
  <div class="bodyTitleText">add news</div>
</div>
<br> 
		
        
          <table width="100%" border="0" cellpadding="3" cellspacing="0"><form method="post" name="form1" action="/admin.php/Article/adds4" enctype="multipart/form-data">
 			
            <input name="parentid" type="hidden"  value="<?php echo $_REQUEST['parentid']; ?>" />
            <Tr>
            	<td width="100px">Title</td>
            	<td><input name="subject" type="text" class="txt" id="subject" size="40" /></td>
            </Tr>
            <tr style="display:none" >
              <td>CategoryName
                   <input name="cid" type="hidden"  value="<?php echo ($cid); ?>" />
              <input name="username" type="text" class="txt" id="username" value="<?php echo (is_array($user)?$user["username"]:$user->username); ?>" size="15" /></td>
            </tr>
 
          
            <tr style="display:none;">
              <td>Scan
              <input name="hits" type="text" id="hits2" value="0" size="8" maxlength="12"  />
              <!--input name="istop" type="radio" id="istop" value="1" class="checkbox"/>
              推荐新闻
              <input name="isgood" type="radio" id="isgood" value="1" class="checkbox"/>置顶新闻 -->
             
                <input name="ischecked" type="radio" id="radio" value="1" checked="checked" class="radio"/>
审核
<input type="radio" name="ischecked" id="radio2" value="0" class="radio"/>
未审核</td>
            </tr>
            <tr>
              <td>Small Picture
                
             </td>
             <td><input name="attachment2" type="file" id="attachment2" />size：120px*90px</td>
            </tr> 
            <tr  >
              <td>Big Picture
                
             </td>
             <td><input name="attachment" type="file" id="attachment" />size：166px*166px</td>
            </tr>
             <tr>
              <td>Description：</td>
              <td>
              <p style="font-weight:bold;">*NOTICE:font-size: 12px;font-family: Arial,Helvetica,sans-serif;Less than 120 letters</p> 
                <br/>
                <textarea style="width:50%;height:200px;" name="message"></textarea>
              </td>
            </tr>  
            <tr>
              <td>Content：</td>
              <td><!-- 编辑器调用开始 --><script type="text/javascript" src="/Public/Js/FCKeditor/fckeditor.js"></script><textarea id="editor2" name="content"></textarea><script type="text/javascript"> var oFCKeditor = new FCKeditor( "editor2","80%","300x" ) ; oFCKeditor.BasePath = "/Public/Js/FCKeditor/" ; oFCKeditor.ReplaceTextarea() ;function resetEditor(){setContents("editor2",document.getElementById("editor2").value)}; function saveEditor(){document.getElementById("editor2").value = getContents("editor2");} function InsertHTML(html){ var oEditor = FCKeditorAPI.GetInstance("editor2") ;if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG ){oEditor.InsertHtml(html) ;}else	alert( "FCK必须处于WYSIWYG模式!" ) ;}</script> <!-- 编辑器调用结束 --></td>
            </tr> 
           	<tr>
              <td>Date
                
             </td>
             <td><input name="postdate" type="text" id="postdate" value="<?php echo $showtime=date("Y-m-d");?>" /> date format 2012-08-09</td>
            </tr>
             <tr >
              <td>Order Number
                
             </td>
             <td><input name="ordernum" type="text" id="ordernum" value="" /></td>
            </tr>
             <tr >
              <td>Is Top
                
             </td>
             <td><input name="istop" type="text" id="istop" value="" /></td>
            </tr>
            <?php if($parentid == 156): ?><tr>
	             <td>Website Link
	                
	             </td>
	             <td><input name="link" type="text" id="link" value="" /></td>
	            </tr><?php endif; ?>
            <tr>
              <td></td>
              <td >
                <input type="submit" name="Submit2" value="Submit" class="inputButton" />&nbsp;&nbsp;
                 <input type="button" name="Reset" value="Back" onclick="javascript:history.go(-1);" class="inputButton" /></td>
            </tr>
         <?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form> </table> 
        <br>
</body>
</html>