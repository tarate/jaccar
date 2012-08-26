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
  <div class="bodyTitleText">Category</div>
</div>
<br><div  style="height:30px;width:125px;background:#cf500b;margin-bottom:20px;border-radius:3px; "><a   href="/admin.php/Article/categoryadd/parentid/<?php echo ($parentid); ?>" style="color:#fff;font-weight:bold;line-height:30px;padding-left:10px;">&nbsp;&nbsp;&nbsp;&nbsp;Add Category</a></div>
		<table class="datalist fixwidth" ><form name="form1" method="post" action="/admin.php/Article/categorysubmit"> 
            <tr>
              <th><input name="checkbox" type="checkbox" class="checkbox" onClick="selAll(this)" value="Select all">
                  Select</th>
              <th>Name</th>
              <th>OrderNum</th>
              <th style="display:none;">状态</th>
              <th>Operation</th>
            </tr><?php if(isset($list)): ?><?php if(is_array($list)): ?><?php $i = 0;?><?php $__LIST__ = $list?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><tr class="option">
              <td><input name="id[]" type="checkbox" id="id[]" value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" class="checkbox">
                <?php echo (is_array($vo)?$vo["id"]:$vo->id); ?></td>
              <td><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></td>
              <td><?php echo (is_array($vo)?$vo["displayorder"]:$vo->displayorder); ?></td>
              <td style="display:none;"><?php if($vo['status'] == 1): ?>正常<?php else: ?>锁定<?php endif; ?></td>
              <td><a href="/admin.php/Article/category/parentid/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>">&nbsp;&nbsp;Subdirectory List&nbsp;&nbsp;</a><a href="/admin.php/Article/categoryedit/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><img src="/Admin/Tpl/default/Public/images/edit.gif" alt="编辑" align="absmiddle" /></a>　　<a href="/admin.php/Article/categorysubmit/act/delete/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" onclick="return confirm('Confirm Submit? ');"><img src="/Admin/Tpl/default/Public/images/del.gif" alt="Delete" align="absmiddle" /></a></td>
              </tr><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
            <?php if(($allowbat)  ==  "1"): ?><tr class="nobg">
              <td colspan="4"><font color="#7f7f7f">Operation Type：</font><input name="act" type="radio" class="checkbox" value="delete" checked >
										    Delete
									          <input type="submit" value="Submit " class="inputButton" onClick="return confirm('Confirm Submit? ');" /></td>
            </tr><?php endif; ?> <?php else: ?>
			  <tr><td colspan="4" align="center">Nothing</td>
			  </tr><?php endif; ?>
         <?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form> </table> 
        
        <br>
</body>
</html>