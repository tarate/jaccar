<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Menu</title>
<link href="/Admin/Tpl/default/Public/images/menu.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base target="mcMainFrame" />
</head>
<script language="javascript">
<!--
function $(objectId) 
{
	 return document.getElementById(objectId);
}

function showHide(objname)
{
    var obj = $(objname);
    if(obj.style.display == "none")
    {
        obj.style.display = "block";
    }
    else
    {
        obj.style.display = "none";
    }
    
    return false;
}

function refreshMainFrame(url)
{
    parent.mcMainFrame.document.location = url;
}
-->
</script>
<base target="mcMainFrame">
<body>
<div class="menu">

<?php switch($action): ?><?php case "Systemconfig":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">系统配置</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Settings'>基本设置</a></li>
                <li><a href='/admin.php/Settings/index#attachments'>附件设置</a></li>

                <li><a href='/admin.php/Settings/index#seo'>SEO设置</a></li>
				 <li><a href='/admin.php/Settings/index#kernel'>内核设置</a></li>
                
            </ul>
        </dd>
    </dl>
   <?php if(($security['allowdatabase'])  ==  "1"): ?><dl>
        <dt><a href="" onclick="return showHide('items1');" target="_self">数据库管理</a></dt>
        <dd id="items1" style="display:block;">
            <ul>
				<li><a href='/admin.php/Database'>数据表优化</a></li>
				<!--li><a href='/admin.php/Database'>执行SQL</a></li-->
            </ul>
        </dd>
    </dl><?php endif; ?>
     </dl>
  <dl>
        <dt><a href="" onclick="return showHide('items2');" target="_self">缓存管理</a></dt>
        <dd id="items2" style="display:block;">
            <ul>
				<li><a href='/admin.php/Cache'>缓存管理</a></li>
				
            </ul>
        </dd>
    </dl>
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "Article":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">品牌动态</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Article/index/cid/2'>精彩动态</a></li> 
            </ul>
        </dd>
    </dl>
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "Blogx":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">相册管理</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Scroll/index/cate/cloth'>公主衣橱</a></li>
				<li><a href='/admin.php/Scroll/index/cate/life'>公主生活照</a></li>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">好友管理</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/User'>好友列表</a></li> 
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">日记管理</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Article/indexlog'>日记列表</a></li> 
            </ul>
        </dd>
    </dl>
 
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>

<?php case "sp":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">养发知识</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Article/index2/cid/1'>头发基本知识</a></li>
				<li><a href='/admin.php/Article/index2/cid/8'>斑秃,全秃,普秃</a></li>
				<li><a href='/admin.php/Article/index2/cid/9'>雄激素性脱发</a></li>
				<li><a href='/admin.php/Article/index2/cid/10'>其他异常脱发</a></li>
				<li><a href='/admin.php/Article/index2/cid/11'>脱发解决方案</a></li>
				<li><a href='/admin.php/Article/index2/cid/12'>科学养发知识</a></li> 
				<li><a href='/admin.php/Article/index2/cid/126'>头发养护误区</a></li> 
				<li><a href='/admin.php/Article/index2/cid/127'>101产品养护知识</a></li> 
            </ul>
        </dd>
    </dl>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>

<?php case "category":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">Category</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Article/category'>Category Manage</a></li>
				 
            </ul>
        </dd>
    </dl>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>

<?php case "yangfa":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">养生与养发</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Article/index2/cid/13'>养心与养发</a></li> 
				<li><a href='/admin.php/Article/index2/cid/129'>食疗与养发</a></li> 
				<li><a href='/admin.php/Article/index2/cid/128'>养身与养发</a></li> 
            </ul>
        </dd>
    </dl>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>

<?php case "shop":  ?><?php echo ($html); ?>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "shop2":  ?><?php echo ($html); ?>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "shop3":  ?><?php echo ($html); ?>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "shop4":  ?><?php echo ($html); ?>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>

<?php case "shop5":  ?><?php echo ($html); ?>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "shop6":  ?><?php echo ($html); ?>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "shop7":  ?><?php echo ($html); ?>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "shop8":  ?><?php echo ($html); ?>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "daren":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">养发达人</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Article/index3/cid/14'>养发达人分享</a></li>
				<li style="display:none;"><a href='/admin.php/Article/index3/cid/15'>女士故事</a></li> 
            </ul>
        </dd>
    </dl>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>

<?php case "Feedback":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">信息管理</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Feedback/'>预订信息</a></li>
				<li><a href='/admin.php/Feedback/index2'>订单信息</a></li> 
            </ul>
        </dd>
    </dl>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "points":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">Points</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Article/index7/cid/168'>Points</a></li>
				 
            </ul>
        </dd>
    </dl>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "stories":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">Stories</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Article/index8/cid/169'>Stories</a></li>
				 
            </ul>
        </dd>
    </dl>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>
<?php case "Scroll":  ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">首页管理</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Scroll/index'>图片</a></li>
				 
            </ul>
        </dd>
    </dl>
     
    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?>

<?php case "Member":  ?><dl style="display:none;">
        <dt><a href="" onclick="return showHide('items0');" target="_self">用户模块</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='/admin.php/Member'>用户管理</a></li>
				<li style="display:none;"><a href='/admin.php/Member/add'>添加用户</a></li>
            </ul>
        </dd>
    </dl>
<dl style="display:none;">
        <dt><a href="" onclick="return showHide('items1');" target="_self">权限模块</a></dt>
        <dd id="items1" style="display:block;">
            <ul>
				<li><a href='/admin.php/Usergroup'>用户组管理</a></li>
				<li><a href='/admin.php/Usergroup/add'>添加用户组</a></li>
            </ul>
        </dd>
    </dl>	

    <script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php break;?> 
<?php default: ?>

    <dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">Shortcuts</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<?php if(($security['allowsystem'])  ==  "1"): ?><li><a href='/admin.php/Settings'>System</a></li><?php endif; ?> 
				<?php if(($security['allowsystem'])  ==  "1"): ?><li><a href='/admin.php/Scroll'>Index</a></li><?php endif; ?> 
				<?php if(($security['allowmember'])  ==  "1"): ?><li  style="display:none;"><a href='/admin.php/Member' >User Manage</a></li><?php endif; ?>
                <?php if(($security['allowgroup'])  ==  "1"): ?><li style="display:none;"><a href='/admin.php/Usergroup'>用户组管理</a></li><?php endif; ?>
            </ul>
        </dd>
    </dl>
<script type="text/javascript">refreshMainFrame('<?php echo ($url); ?>');</script><?php endswitch;?>



</div>
</body>
</html>