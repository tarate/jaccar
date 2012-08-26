<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="/Admin/Tpl/default/Public/images/main.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/Admin/Tpl/default/Public/images/common.js"></script>
</head>

<body>
<style>table tr{height:34px;}</style>
<div class="bodyTitle">
	<div class="bodyTitleLeft"></div>
  <div class="bodyTitleText">Update</div>
</div>
<br><h3 class="marginbot" style="display:none;"><a href="/admin.php/Article/categoryadd" class="sgbtn">＋区域分类</a><a href="/admin.php/Article/" class="sgbtn">＋新闻管理</a></h3>
		
       
				
				<table width="100%"> <form method="post" name="form1" action="/admin.php/Article/categoryedits">
<input name="id" type="hidden" id="id" value="<?php echo (is_array($list)?$list["id"]:$list->id); ?>" />
<input name="parentid" type="hidden" id="parentid" value="<?php echo (is_array($list)?$list["parentid"]:$list->parentid); ?>" />
					<tr>
					  <td width="11%">Name</td>
					  <td width="89%">  <input name="title" type="text" class="txt" id="title" value="<?php echo (is_array($list)?$list["title"]:$list->title); ?>" size="40"  /></td>
				  </tr>
					
					<tr style="display:none;">
					  <td>描述</td>
					  <td> <textarea name="description" cols="48" rows="5"  id="description"><?php echo (is_array($list)?$list["description"]:$list->description); ?></textarea></td>
				  </tr>
					<tr style="display:none;">
					  <td>状　　态</td>
					  <td><input name="status" type="radio" value="1" checked="checked" class="checkbox"/>
				      开启
				        <input type="radio" name="status" value="0" class="checkbox"/>
			          关闭</td>
				  </tr><tr style="display:none;">
                      <td>关键字</td>
                  <td>
                        <input name="keywords" type="text" class="txt" id="keywords" value="<?php echo (is_array($list)?$list["keywords"]:$list->keywords); ?>" />
&nbsp;</td>
				  </tr>
					<tr >
					  <td>Order Number</td>
					  <td><input name="displayorder" type="text" class="txt" id="displayorder" value="<?php echo (is_array($list)?$list["displayorder"]:$list->displayorder); ?>"  /></td>
				  </tr>
					<tr style="display:none;">
              <td>添加内容</td>
     <td>
                   <?php if(is_array($group)): ?><?php $i = 0;?><?php $__LIST__ = $group?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><input name="allowadd[]" type="checkbox" value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" id="allowadd[]"  class="checkbox" <?php if (in_array($vo['id'],explode(",",$list['allowadd']))) { ?> checked="checked" <?php } ?>/> 
                  <?php echo (is_array($vo)?$vo["grouptitle"]:$vo->grouptitle); ?><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?></td>
            </tr>
                  <tr style="display:none;">
              <td>编辑内容</td>
           <td>
                   <?php if(is_array($group)): ?><?php $i = 0;?><?php $__LIST__ = $group?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><input name="allowedit[]" type="checkbox" value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" id="allowedit[]"  class="checkbox" <?php if (in_array($vo['id'],explode(",",$list['allowedit']))) { ?> checked="checked" <?php } ?>/> 
                  <?php echo (is_array($vo)?$vo["grouptitle"]:$vo->grouptitle); ?><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?></td>
            </tr><tr style="display:none;">
              <td>删除内容</td>
           <td>
                   <?php if(is_array($group)): ?><?php $i = 0;?><?php $__LIST__ = $group?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><input name="allowdel[]" type="checkbox" value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" id="allowdel[]"  class="checkbox" <?php if (in_array($vo['id'],explode(",",$list['allowdel']))) { ?> checked="checked" <?php } ?>/> 
              <?php echo (is_array($vo)?$vo["grouptitle"]:$vo->grouptitle); ?><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?></td>
            </tr>
					<tr>
					  <td>&nbsp;</td>
					  <td> <input type="submit" name="Submit2" value="Submit" class="inputButton" />
      <input type="reset" name="Reset" value="Reset" class="inputButton" /></td>
					</tr>
				<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form></table> 
        <br>
</body>
</html>