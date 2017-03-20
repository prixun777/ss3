<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:42:50
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/user/node.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfea6ab6fd03_87733638',
  'file_dependency' => 
  array (
    '911a24d3aff54a3ef3c3b3a6a715c510412cf432' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/user/node.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_58cfea6ab6fd03_87733638 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            节点列表
            <small>Node List</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- START PROGRESS BARS -->
        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-warning">
                    <h4>注意!</h4>
                    <p>请勿在任何地方公开节点地址！</p>
                    <p>流量比例为0.5即使用1000MB按照500MB流量记录记录结算.</p>
                    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

                </div>
            </div>
        </div>

        <?php
$_from = $_smarty_tpl->tpl_vars['nodes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_node_0_saved_item = isset($_smarty_tpl->tpl_vars['node']) ? $_smarty_tpl->tpl_vars['node'] : false;
$_smarty_tpl->tpl_vars['node'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['node']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
$__foreach_node_0_saved_local_item = $_smarty_tpl->tpl_vars['node'];
?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-widget">
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="../assets/public/img/iconfont-server.png" alt="Server Node">
                                    </div>
                                    <div class="product-info">
                                        <a href="./node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
" class="product-title"><?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
 <span
                                                    class="label label-info pull-right"><?php echo $_smarty_tpl->tpl_vars['node']->value->status;?>
</span></a>
                                        <p>
                                            <?php echo $_smarty_tpl->tpl_vars['node']->value->info;?>

                                        </p>
                                    </div>
                                </li><!-- /.item -->
                            </ul>
                        </div>
                        <div class="box-footer no-padding">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="nav nav-stacked">
                                        <li><a href="./node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
">节点地址 <span
                                                        class="pull-right badge bg-blue"><?php echo $_smarty_tpl->tpl_vars['node']->value->server;?>
</span></a></li>
                                        <li><a href="./node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
">连接端口 <span
                                                        class="pull-right badge bg-aqua"><?php echo $_smarty_tpl->tpl_vars['user']->value->port;?>
</span></a></li>
                                        <li><a href="./node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
">加密方式 <span
                                                        class="pull-right badge bg-green"><?php if ($_smarty_tpl->tpl_vars['node']->value->custom_method == 1) {?> <?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['node']->value->method;?>
 <?php }?></span></a>
                                        </li>
                                        <li><a href="./node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
">负载: <span
                                                        class="pull-right badge bg-green"><?php echo $_smarty_tpl->tpl_vars['node']->value->getNodeLoad();?>
</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="nav nav-stacked">
                                        <li><a href="./node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
">流量比例 <span
                                                        class="pull-right badge bg-blue"><?php echo $_smarty_tpl->tpl_vars['node']->value->traffic_rate;?>
</span></a>
                                        </li>
                                        <li><a href="./node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
">在线人数 <span
                                                        class="pull-right badge bg-aqua"><?php echo $_smarty_tpl->tpl_vars['node']->value->getOnlineUserCount();?>
</span></a>
                                        </li>
                                        <li><a href="./node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
">产生流量 <span
                                                        class="pull-right badge bg-green"><?php echo $_smarty_tpl->tpl_vars['node']->value->getTrafficFromLogs();?>
</span></a>
                                        </li>
                                        <li><a href="./node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
">Uptime: <span
                                                        class="pull-right badge bg-green"><?php echo $_smarty_tpl->tpl_vars['node']->value->getNodeUptime();?>
</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div><!-- /.widget-user -->
                </div><!-- /.col -->
            </div>
            <!-- /.row -->


        <?php
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_0_saved_local_item;
}
if ($__foreach_node_0_saved_item) {
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_0_saved_item;
}
?>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
