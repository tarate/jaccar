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
  <div class="bodyTitleText">update news</div>
</div>
<br><h3 class="marginbot"></h3>
		
        
          <table width="100%" border="0" cellpadding="3" cellspacing="0"><form method="post" name="form1" action="/admin.php/Article/edits4" enctype="multipart/form-data">
            <tr>
              <td width="100px">Title 
                <select name="color" id="color" style="display:none;">
                <option value="" >默认颜色</option>
                  <option value="#87CEEB" style="background-color:#87CEEB;color:#87CEEB" <?php if(($list['color'])  ==  "#87CEEB"): ?>selected="selected"<?php endif; ?>>#87CEEB</option>
                  <option value="#4169E1" style="background-color:#4169E1;color:#4169E1" <?php if(($list['color'])  ==  "#4169E1"): ?>selected="selected"<?php endif; ?>>#4169E1</option>
                  <option value="#0000FF" style="background-color:#0000FF;color:#0000FF" <?php if(($list['color'])  ==  "#0000FF"): ?>selected="selected"<?php endif; ?>>#0000FF</option>
                  <option value="#00008B" style="background-color:#00008B;color:#00008B" <?php if(($list['color'])  ==  "#00008B"): ?>selected="selected"<?php endif; ?>>#00008B</option>
                  <option value="#FFA500" style="background-color:#FFA500;color:#FFA500" <?php if(($list['color'])  ==  "#FFA500"): ?>selected="selected"<?php endif; ?>>#FFA500</option>
                  <option value="#FF4500" style="background-color:#FF4500;color:#FF4500" <?php if(($list['color'])  ==  "#FF4500"): ?>selected="selected"<?php endif; ?>>#FF4500</option>
                  <option value="#8B0000" style="background-color:#8B0000;color:#8B0000" <?php if(($list['color'])  ==  "#8B0000"): ?>selected="selected"<?php endif; ?>>#8B0000</option>
                  <option value="#008000" style="background-color:#008000;color:#008000" <?php if(($list['color'])  ==  "#008000"): ?>selected="selected"<?php endif; ?>>#008000</option>
                  <option value="#2E8B57" style="background-color:#2E8B57;color:#2E8B57" <?php if(($list['color'])  ==  "#2E8B57"): ?>selected="selected"<?php endif; ?>>#2E8B57</option>
                  <option value="#FF1493" style="background-color:#FF1493;color:#FF1493"<?php if(($list['color'])  ==  "#FF1493"): ?>selected="selected"<?php endif; ?>>#FF1493</option>
                  <option value="#FF6347" style="background-color:#FF6347;color:#FF6347" <?php if(($list['color'])  ==  "#FF6347"): ?>selected="selected"<?php endif; ?>>#FF6347</option>
                  <option value="#4B0082" style="background-color:#4B0082;color:#4B0082" <?php if(($list['color'])  ==  "#4B0082"): ?>selected="selected"<?php endif; ?>>#4B0082</option>
                  <option value="#A0522D" style="background-color:#A0522D;color:#A0522D" <?php if(($list['color'])  ==  "#A0522D"): ?>selected="selected"<?php endif; ?>>#A0522D</option>
                  <option value="#D2691E" style="background-color:#D2691E;color:#D2691E" <?php if(($list['color'])  ==  "#D2691E"): ?>selected="selected"<?php endif; ?>>#D2691E</option>
              </select></td>
              <td><input name="subject" type="text" class="txt" id="subject" value="<?php echo (is_array($vo)?$vo["subject"]:$vo->subject); ?>" size="40" /></td>
            </tr>
            <tr style="display:none">
              <td>类别名称
               <select name="cid"  id="select" style="display:none;">
<?php if(is_array($cate)): ?><?php $i = 0;?><?php $__LIST__ = $cate?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$v): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><option value="<?php echo (is_array($v)?$v["id"]:$v->id); ?>" <?php if(($v['id'])  ==  $vo['cid']): ?>selected="selected"<?php endif; ?>><?php echo (is_array($v)?$v["title"]:$v->title); ?></option><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      </select>             
                会　　员
              <input name="username" type="text" class="txt" id="username" value="<?php echo (is_array($vo)?$vo["username"]:$vo->username); ?>" size="15" /></td>
            </tr>
            <tr style="display:none">
              <td>
               地址
                <textarea name="message" cols="60" rows="3"  id="message"><?php echo (is_array($vo)?$vo["message"]:$vo->message); ?></textarea></td>
            </tr> 
            <tr style="display:none">
              <td><strong></strong></td>
            </tr>
            <tr  style="display:none" >
              <td>电话
                <input name="comefrom" type="text" class="txt" id="comefrom" value="<?php echo (is_array($vo)?$vo["comefrom"]:$vo->comefrom); ?>" maxlength="50"  />
               <span >浏览
                <input name="link" type="text" class="txt" id="link" value="<?php echo (is_array($vo)?$vo["link"]:$vo->link); ?>" size="50" maxlength="100" /></td>
            </span>
            </tr>
            <tr style="display:none">
              <td>浏览
              <input name="hits" type="text" id="hits2" value="<?php echo (is_array($vo)?$vo["hits"]:$vo->hits); ?>" size="8" maxlength="12"  />
            <input name="ischecked" type="radio" id="radio" value="1" checked="checked" class="radio"/>
              审核
              <input type="radio" name="ischecked" id="radio2" value="0" class="radio"/>
              取消审核</td>
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
              <td><p style="font-weight:bold;">*NOTICE:font-size: 12px;font-family: Arial,Helvetica,sans-serif;Less than 120 letters</p>
               <br/>
                <textarea style="width:50%;height:200px;" name="message"><?php echo (is_array($vo)?$vo["message"]:$vo->message); ?></textarea>
            </tr>  
            <tr>
              <td>Content：</td>
              <td><!-- 编辑器调用开始 --><script type="text/javascript" src="/Public/Js/FCKeditor/fckeditor.js"></script><textarea id="editor2" name="content"><?php echo (is_array($vo)?$vo["content"]:$vo->content); ?></textarea><script type="text/javascript"> var oFCKeditor = new FCKeditor( "editor2","80%","300x" ) ; oFCKeditor.BasePath = "/Public/Js/FCKeditor/" ; oFCKeditor.ReplaceTextarea() ;function resetEditor(){setContents("editor2",document.getElementById("editor2").value)}; function saveEditor(){document.getElementById("editor2").value = getContents("editor2");} function InsertHTML(html){ var oEditor = FCKeditorAPI.GetInstance("editor2") ;if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG ){oEditor.InsertHtml(html) ;}else	alert( "FCK必须处于WYSIWYG模式!" ) ;}</script> <!-- 编辑器调用结束 --></td>
            </tr> 
           	<tr>
              <td>Date
                
             </td>
             <td><input name="postdate" type="text" id="postdate" value="<?php echo (date('Y-m-d',is_array($vo)?$vo["postdate"]:$vo->postdate)); ?>" />2012-08-09</td>
            </tr>
           <tr >
              <td>Order Number
                
             </td>
             <td><input name="ordernum" type="text" id="ordernum" value=<?php echo (is_array($vo)?$vo["ordernum"]:$vo->ordernum); ?> /></td>
            </tr>
           <tr >
              <td>Is Top
                
             </td>
             <td><input name="istop" type="text" id="istop" value=<?php echo (is_array($vo)?$vo["istop"]:$vo->istop); ?> />0:no&nbsp;1:yes</td>
            </tr>
         <?php if($parentid == 156): ?><tr>
	             <td>Website Link
	                
	             </td>
	             <td><input name="link" type="text" id="link" value="<?php echo (is_array($vo)?$vo["link"]:$vo->link); ?>" /></td>
	            </tr><?php endif; ?>
            <tr>
              <td><input type="hidden" name="id" value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" />
              <input name="parentid" type="hidden"  value="<?php echo $_REQUEST['parentid']; ?>" />
                <input name="attachment" type="hidden" id="attachment" value="<?php echo (is_array($vo)?$vo["attachment"]:$vo->attachment); ?>" />
              <input name="attachpath" type="hidden" id="attachpath" value="<?php echo (is_array($vo)?$vo["attachpath"]:$vo->attachpath); ?>" />
              <input name="cid" type="hidden" id="cid" value="<?php echo (is_array($vo)?$vo["cid"]:$vo->cid); ?>" />
              <input name="attachthumb" type="hidden" id="attachthumb" value="<?php echo (is_array($vo)?$vo["attachthumb"]:$vo->attachthumb); ?>" />              </td>
            </tr>
            <tr >
              <td colspan="2">
                <input type="submit" name="Submit2" value="Submit" class="inputButton" />
              <input type="button" name="Reset" value="Back" onclick="javascript:history.go(-1);" class="inputButton" /></td>
            </tr>
         <?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form> </table> 
        <br>
</body>
</html>