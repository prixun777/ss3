<?php
/* Smarty version 3.1.29, created on 2017-03-20 21:52:02
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/user/main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfde82881557_10773433',
  'file_dependency' => 
  array (
    'afa337392b06fe0049ab705b8c556420e2e50ea5' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/user/main.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cfde82881557_10773433 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/assets/public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="//cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="//cdn.bootcss.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="/assets/public/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="/assets/public/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"/>

    <!-- jQuery 2.1.3 -->
    <?php echo '<script'; ?>
 src="/assets/public/js/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body class="skin-blue">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <a href="/user" class="logo"><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->gravatar;?>
" class="user-image" alt="User Image"/>
                            <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->gravatar;?>
" class="img-circle" alt="User Image"/>

                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>

                                    <small>加入时间：<?php echo $_smarty_tpl->tpl_vars['user']->value->regDate();?>
</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/user/profile" class="btn btn-default btn-flat">个人信息</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/user/logout" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->gravatar;?>
" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li>
                    <a href="/user">
                        <i class="fa fa-dashboard"></i> <span>用户中心</span>
                    </a>
                </li>

                <li>
                    <a href="/user/node">
                        <i class="fa fa-sitemap"></i> <span>节点列表</span>
                    </a>
                </li>

                <li>
                    <a href="/user/profile">
                        <i class="fa fa-user"></i> <span>我的信息</span>
                    </a>
                </li>

                <li>
                    <a href="/user/trafficlog">
                        <i class="fa fa-history"></i> <span>流量记录</span>
                    </a>
                </li>


                <li>
                    <a href="/user/edit">
                        <i class="fa  fa-pencil"></i> <span>修改资料</span>
                    </a>
                </li>

                <li>
                    <a href="/user/invite">
                        <i class="fa fa-users"></i> <span>邀请好友</span>
                    </a>
                </li>

                <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
                    <li>
                        <a href="/admin">
                            <i class="fa fa-cog"></i> <span>管理面板</span>
                        </a>
                    </li>
                <?php }?>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
<?php }
}
