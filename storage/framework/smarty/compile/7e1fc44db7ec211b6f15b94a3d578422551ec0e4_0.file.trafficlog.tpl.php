<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:43:39
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/user/trafficlog.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfea9b18f889_40563904',
  'file_dependency' => 
  array (
    '7e1fc44db7ec211b6f15b94a3d578422551ec0e4' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/user/trafficlog.tpl',
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
function content_58cfea9b18f889_40563904 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            流量使用记录
            <small>Traffic Log</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-warning">
                    <h4>注意!</h4>
                    <p>部分节点不支持流量记录.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <?php echo $_smarty_tpl->tpl_vars['logs']->value->render();?>

                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>使用节点</th>
                                <th>倍率</th>
                                <th>实际使用流量</th>
                                <th>结算流量</th>
                                <th>记录时间</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->tpl_vars['logs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_log_0_saved_item = isset($_smarty_tpl->tpl_vars['log']) ? $_smarty_tpl->tpl_vars['log'] : false;
$_smarty_tpl->tpl_vars['log'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['log']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
$__foreach_log_0_saved_local_item = $_smarty_tpl->tpl_vars['log'];
?>
                                <tr>
                                    <td>#<?php echo $_smarty_tpl->tpl_vars['log']->value->id;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->node()->name;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->rate;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->totalUsed();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->traffic;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->logTime();?>
</td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['log'] = $__foreach_log_0_saved_local_item;
}
if ($__foreach_log_0_saved_item) {
$_smarty_tpl->tpl_vars['log'] = $__foreach_log_0_saved_item;
}
?>
                        </table>
                        <?php echo $_smarty_tpl->tpl_vars['logs']->value->render();?>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
