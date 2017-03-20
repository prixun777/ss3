<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:43:37
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/user/profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfea99296058_51634081',
  'file_dependency' => 
  array (
    '308bade3a70f9ed2f81ef6bee787ff9feb80807e' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/user/profile.tpl',
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
function content_58cfea99296058_51634081 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            我的信息
            <small>User Profile</small>
        </h1>
    </section>
    <!-- Main content --><!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-user"></i>

                        <h3 class="box-title">我的帐号</h3>
                    </div>
                    <div class="box-body">
                        <dl class="dl-horizontal">
                            <dt>用户名</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</dd>
                            <dt>邮箱</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</dd>
                        </dl>

                    </div>
                    <div class="box-footer">
                        <a class="btn btn-danger btn-sm" href="kill">删除我的账户</a>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
