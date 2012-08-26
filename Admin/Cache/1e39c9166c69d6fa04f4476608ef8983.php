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
  <div class="bodyTitleText">stories list</div>
</div>
<br><h3 class="marginbot"><form method="GET" name="form1" action="/admin.php/Article/add8/parentid/<?php echo $_REQUEST['parentid']; ?>">
  <input type="hidden" name="catelist" id="catelist" value="<?php echo ($cid); ?>" />
  <input name="submit" type="submit" class="inputButton"  value="Add Stories"/><?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form></h3>
	
			
				<table class="fixwidth" style="display:none;">	<form method="POST" name="form1" action="/admin.php/Article">
					<tr>
						<td>新闻标题:
						  <input name="keyword" type="text" class="txt" id="keyword" />
						或用户ID
					    <input name="uid" type="text" class="txt" id="uid" size="5" />
					    <input type="submit" value="搜索" class="inputButton" /></td>
				  </tr>
				<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form></table>

       
          <table class="datalist fixwidth" > <form name="form1" method="post" action="/admin.php/Article/submit">
            <tr>
              <th><input name="checkbox" type="checkbox" class="checkbox"  onClick="selAll(this)" value="Select all">
                  Select</th>
              <th width="500px">Name</th>
              <th style="display:none;">Scan</th>
              <th style="display:none;">CategoryName</th> 
              <th style="display:none;">User</th>
              <th>OrderNum</th> 
              <th>Operation</th>
            </tr><?php if(isset($list)): ?><?php if(is_array($list)): ?><?php $i = 0;?><?php $__LIST__ = $list?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><tr><!-- -->
              <td class="option" ><input name="id[]" type="checkbox" id="id[]" value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" class="checkbox">
                <?php echo (is_array($vo)?$vo["id"]:$vo->id); ?></td>
              <td ><strong><?php if($vo['color'] != ''): ?><font color="<?php echo (is_array($vo)?$vo["color"]:$vo->color); ?>"><?php echo (is_array($vo)?$vo["subject"]:$vo->subject); ?></font><?php else: ?> <?php echo (is_array($vo)?$vo["subject"]:$vo->subject); ?><?php endif; ?></strong> <?php if(($vo['attachthumb'])  !=  ""): ?><img src="/Admin/Tpl/default/Public/images/img.gif" alt="图片" align="absmiddle" /><?php endif; ?> 
              <span style="display:none;"></span><?php if(($vo['istop'])  ==  "1"): ?><img src="/Admin/Tpl/default/Public/images/d.gif" alt="置顶" align="absmiddle" /><?php endif; ?>  <?php if(($vo['isgood'])  ==  "1"): ?><img src="/Admin/Tpl/default/Public/images/j.gif" alt="推荐" align="absmiddle" /><?php endif; ?> <?php if(($vo['ischecked'])  ==  "0"): ?><font color="#cccccc">未审核</font><?php endif; ?></td>
               <td style="display:none;"><?php echo (is_array($vo)?$vo["hits"]:$vo->hits); ?></td><td style="display:none;"><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></td></span>
              
              <td style="display:none;"><a href="/admin.php/Article/index/uid/<?php echo (is_array($vo)?$vo["uid"]:$vo->uid); ?>"><?php echo (is_array($vo)?$vo["username"]:$vo->username); ?></a></td>
              <td><?php echo (is_array($vo)?$vo["ordernum"]:$vo->ordernum); ?></td> 
              <td> 
              <a href="/admin.php/Article/edit8/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>/parentid/<?php echo $_REQUEST['parentid']; ?>" ><img src="/Admin/Tpl/default/Public/images/edit.gif" alt="Update" align="absmiddle" /></a>　
              　<a href="/admin.php/Article/submit/act/delete/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" onclick="return confirm('Confirm Submit?');"><img src="/Admin/Tpl/default/Public/images/del.gif" alt="Delete" align="absmiddle" /></a></td>
            </tr><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
           <?php if(($allowbat)  ==  "1"): ?><tr  class="nobg">
             <td colspan="7" ><font color="#7f7f7f">Operation Type：</font>
             <div style="display:none;">
                <input name="act" type="radio"  class="checkbox" value="uischecked"/>
审核
<input name="act" type="radio" value="ischecked"  class="checkbox"/>
取消审核
<!--input name="act" type="radio" value="top"  class="checkbox"/>
                置顶
                 <input name="act" type="radio" value="utop"  class="checkbox"/>
                取消置顶
                <input name="act" type="radio" value="good"  class="checkbox"/>
                推荐
                <input name="act" type="radio" value="ugood"  class="checkbox"/>
                取消推荐--></div>
                <input name="act" type="radio" value="delete" class="checkbox"  checked="checked"/>
Delete
              
<select name="category" id="category" style="display:none">
 <?php if(is_array($cate)): ?><?php $i = 0;?><?php $__LIST__ = $cate?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><option value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></option><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
</select>

              <input name="submit" type="submit" class="inputButton" onclick="return confirm('Confirm Submit?');" value="Submit"/></td>
            </tr><?php endif; ?>
            <tr class="nobg">
              <td colspan="7" class="tdpage"><?php echo ($page); ?></td><!-- -->
            </tr><?php else: ?>
			  <tr><td colspan="7" align="center">Nothing</td>
			  </tr><?php endif; ?>
         <?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form> </table> 

</body>
</html>