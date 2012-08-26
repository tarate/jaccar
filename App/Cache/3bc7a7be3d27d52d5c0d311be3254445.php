<?php echo '<?'; ?>
xml version="1.0" encoding="utf-8" ?>
<rss version="2.0">
<channel>
<title><![CDATA[JACCAR]]></title>
<image>
	<title>JACCAR NEWS</title>
	<link>http://web1.jaccar.typhon.net/index.php</link>
	<url>http://web1.jaccar.typhon.net/App/Tpl/default/Public/images/logo2.jpg</url>
</image>
<description><![CDATA[JACCAR NEWS]]></description>
<link>http://web1.jaccar.typhon.net/</link>
<language>en</language>
<generator>http://web1.jaccar.typhon.net/</generator>
<?php if(is_array($list)): ?><?php $i = 0;?><?php $__LIST__ = $list?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><item>
        <title><![CDATA[<?php echo (is_array($vo)?$vo["subject"]:$vo->subject); ?>]]></title>
        <?php if((is_array($vo)?$vo["cid"]:$vo->cid) == 167 ): ?><link><![CDATA[http://web1.jaccar.typhon.net/index.php?s=/Article/jaccar_news_detail/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>.html]]></link>
        <?php elseif((is_array($vo)?$vo["cid"]:$vo->cid) == 166): ?>
        	<link><![CDATA[http://web1.jaccar.typhon.net/index.php?s=/Article/press_release_detail/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>.html]]></link>
        <?php else: ?>
        	<link><![CDATA[http://web1.jaccar.typhon.net/index.php?s=/Article/affiliates_news_detail/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>.html]]></link><?php endif; ?>
        <description><![CDATA[<?php echo (is_array($vo)?$vo["message"]:$vo->message); ?>]]></description>
        <pubDate><?php echo (date("D, d M Y H:i:s O",is_array($vo)?$vo["postdate"]:$vo->postdate)); ?></pubDate>
        <author><![CDATA[jaccar]]></author>
        <?php if((is_array($vo)?$vo["cid"]:$vo->cid)  == 167 ): ?><guid><![CDATA[http://web1.jaccar.typhon.net/index.php?s=/Article/jaccar_news_detail/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>.html]]></guid>
        <?php elseif((is_array($vo)?$vo["cid"]:$vo->cid) == 166): ?>
       		<guid><![CDATA[http://web1.jaccar.typhon.net/index.php?s=/Article/press_release_detail/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>.html]]></guid>
        <?php else: ?>
       		<guid><![CDATA[http://web1.jaccar.typhon.net/index.php?s=/Article/affiliates_news_detail/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>.html]]></guid><?php endif; ?>
</item><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
</channel>
</rss>