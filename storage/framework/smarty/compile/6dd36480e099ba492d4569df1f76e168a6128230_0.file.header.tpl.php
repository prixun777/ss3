<?php
/* Smarty version 3.1.29, created on 2017-03-20 17:13:05
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cf9d21420267_48371754',
  'file_dependency' => 
  array (
    '6dd36480e099ba492d4569df1f76e168a6128230' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/header.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cf9d21420267_48371754 ($_smarty_tpl) {
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
    <link href="/assets/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/assets/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</a>
        <ul class="right hide-on-med-and-down">
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
        <!-- To be compatible with some old browsers(especially mobile browsers), use &#xE5D2 instead of menu. For more information visit the link below.
         http://google.github.io/material-design-icons/#using-the-icons-in-html
         -->
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">&#xE5D2</i></a>
    </div>
</nav>
<?php }
}
