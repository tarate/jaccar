<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="/Admin/Tpl/default/Public/images/main.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/Admin/Tpl/default/Public/images/common.js"></script>
</head>

<body>
<style>table tr{height:34px;}</style>
<div class="bodyTitle"  style="margin-bottom:20px;">
	<div class="bodyTitleLeft"></div>
  <div class="bodyTitleText">add points</div>
</div>
 
		
        
          <table width="100%" border="0" cellpadding="3" cellspacing="0"><form method="post" name="form1" action="/admin.php/Article/adds7" enctype="multipart/form-data">
 			<tr><td width="100px">Title</td><td ><input name="subject" type="text" class="txt" id="subject" size="40" /></td></tr>
            <input name="catename" type="hidden"  value="<?php echo $_REQUEST['catename']; ?>" />
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
            <tr  >
              <td>THUMBNAILS: 
             </td>
             <td><input name="attachment" type="file" id="attachment" /></td>
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
              <td>Author:
                
             </td>
             <td><input name="username" type="text" class="txt" id="username" value="<?php echo (is_array($vo)?$vo["username"]:$vo->username); ?>" size="15" /></td>
            </tr>
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