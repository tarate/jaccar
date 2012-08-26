<?php 
/*
　* @$Id
　* @
　* @Ver: 1.0
　* @Create: 2008-09-01 8:10
　* @Modify: 
　* @Author: shuguang http://www.shuguang.asia(web@shuguang.asia)
　* @Copyright (C) 2008 shuguang.asia. All Rights Reserved.
　* @License SHUGUANG CMS is free software and use is subject to license terms
　*/

define('THINK_PATH', './ThinkPHP');
define('APP_NAME', 'Admin');
define('APP_PATH', './Admin');
require(THINK_PATH."/ThinkPHP.php");
$App = new App(); 
$App->run();
?>