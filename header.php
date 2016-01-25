<?php
/*
Template Name:极简·透致
Description:极度简化，全新UI设计
Version:0.32[公测第一版] - For EMLog 6
Author:MyJoy
Author Url:[QQ 1036414850]
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="iPC" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo TEMPLATE_URL; ?>css/main.css" rel="stylesheet" type="text/css" />
<script src="<?php echo TEMPLATE_URL; ?>js/alert_windows.js" type="text/javascript"></script>
<!--<script src="<?php echo TEMPLATE_URL; ?>js/jquery-1.11.1.js" type="text/javascript"></script>
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>-->
<!--[if IE 6]>NO<![endif]-->
<!--<script src="<?php echo TEMPLATE_URL; ?>iefix.js" type="text/javascript"></script>-->
<!--[if lt IE 8]> 
<script src="<?php echo TEMPLATE_URL; ?>js/html5shiv.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/html5shiv-printshiv.js"></script>
/*html5*/
article,aside,dialog,footer,header,section,footer,nav,figure,menu{display:block;}
<![endif]-->
<?php doAction('index_head'); ?>
</head>
<body contextmenu="menu">
<div class="alert_windows">
    <span><font size="5">X</font></span>
    <font color="white" size="6">信息</font>
    <p class="ptxt">抱歉，我们不得不用强制弹窗的方式向您发送信息<br />
     您点击关闭按钮后在1天内不再弹出（特殊情况除外）<br />
     1.由于服务器自身问题导致的网页无法访问，在此，向所有用户致歉<br />
     2.为提升用户体验，请务必安装微软雅黑Light字体。<a href="http://www.so.com/s?q=微软雅黑Light字体下载" target="_blank">传送门</a><br />
     3.导航君正在测试，即将完工<br />
     看我们不爽？想吐槽？咳咳，⊙﹏⊙b汗，平台还未建好嘞，很快就可以吐槽~\(≧▽≦)/~啦啦啦，亲</p>
</div>

<!--<menu id="menu" type="context">
<menuitem label="111" icon="图标" onclick="事件"></menuitem>
</menu>-->
  <div id="bar" class="docked active" style="display: block;">
 <!-- <div id="header">-->
  <!--<div class="logowz"><a href="<?php echo BLOG_URL; ?>"></a></div>-->
  <div id="notify"><?php blog_navi();?></div>
  </div>
  <br />
  <br />
<div id="wrap">
  <?php if(Option::get('topimg')): ?>
  <?php endif;?>
