<?php
/* Smarty version 3.1.29, created on 2018-02-06 23:34:27
  from "/var/www/html/sspanel/resources/views/default/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a79cb033b2c41_11368220',
  'file_dependency' => 
  array (
    '00c64f3386ea56be04fb4a92fd7b516bf37ed815' => 
    array (
      0 => '/var/www/html/sspanel/resources/views/default/header.tpl',
      1 => 1517909185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a79cb033b2c41_11368220 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
    <!-- CSS fonts.googleapis.com -->
    <link href="//fonts.lug.ustc.edu.cn/icon?family=Material+Icons" rel="stylesheet">
    <link href="/assets/public/css/qqcontact.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/assets/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/">首页</a></li>
            <li><a href="http://www.weikeyan.com/?p=81" target="_blank">客户端下载及使用教程</a></li>
            <li><a href="/code">邀请码</a></li>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->isLogin) {?>
                <li><a href="/user">用户中心</a></li>
                <li><a href="/user/logout">退出</a></li>
            <?php } else { ?>
                <li><a href="/auth/login">登录</a></li>
                <li><a href="/auth/register">注册</a></li>
            <?php }?>

        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="/">首页</a></li>
            <li><a href="https://shadowsocks.org/en/download/clients.html">客户端下载</a></li>
            <li><a href="/code">邀请码</a></li>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->isLogin) {?>
                <li><a href="/user">用户中心</a></li>
                <li><a href="/user/logout">退出</a></li>
            <?php } else { ?>
                <li><a href="/auth/login">登录</a></li>
                <li><a href="/auth/register">注册</a></li>
            <?php }?>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<?php }
}
