<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:34:15
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfe8670fe809_46099232',
  'file_dependency' => 
  array (
    '9c83087ffe98d1ee4646dfa0b45681737378a3e1' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/index.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_58cfe8670fe809_46099232 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            管理中心
            <small>Admin Control</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- START PROGRESS BARS -->
        <div class="row">

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser();?>
</h3>

                        <p>总用户</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="/admin/user" class="small-box-footer"> 用户管理 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $_smarty_tpl->tpl_vars['sts']->value->getCheckinUser();?>
</h3>

                        <p>签到用户</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                    </div>
                    <a href="/admin/checkinlog" class="small-box-footer"> 签到日志 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600);?>
</h3>

                        <p>前一小时在线用户</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/admin/invite" class="small-box-footer"> 邀请管理 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalNode();?>
</h3>

                        <p>节点数</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/admin/node" class="small-box-footer"> 节点管理 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $_smarty_tpl->tpl_vars['sts']->value->getTrafficUsage();?>
</h3>

                        <p>产生流量</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-speedometer"></i>
                    </div>
                    <a href="/admin/trafficlog" class="small-box-footer"> 流量记录 <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- /.row --><!-- END PROGRESS BARS -->
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
