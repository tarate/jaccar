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
  <div class="bodyTitleText">index</div>
</div> 
          <table class="datalist fixwidth" > <form name="form1" method="post" action="/admin.php/Scroll/submit">
            <tr> 
              <th>Title</th>
              <th>Website</th> 
              <th>Operate</th>
            </tr> <?php if(isset($list)): ?><?php if(is_array($list)): ?><?php $i = 0;?><?php $__LIST__ = $list?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><tr>  
              <td><?php echo (is_array($vo)?$vo["subject"]:$vo->subject); ?></td>
              <td><?php echo (is_array($vo)?$vo["url"]:$vo->url); ?></td> 
              <td><a href="/admin.php/Scroll/edit/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><img src="/Admin/Tpl/default/Public/images/edit.gif" alt="update" align="absmiddle" /></a></td>
            </tr><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>  <?php else: ?>
			  <tr><td colspan="6" align="center">Nothing</td>
			  </tr><?php endif; ?>
         <?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form> </table>
         
<br>
</body>
</html>