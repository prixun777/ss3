<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:43:42
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/user/invite.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfea9ec5f1b3_35917046',
  'file_dependency' => 
  array (
    '4d2b8594483da409295569fdb1a01bd05b7edbcf' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/user/invite.tpl',
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
function content_58cfea9ec5f1b3_35917046 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            邀请
            <small>Invite</small>
        </h1>
    </section>

    <!-- Main content --><!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div id="msg-error" class="alert alert-warning alert-dismissable" style="display:none">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> 出错了!</h4>

                    <p id="msg-error-p"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-rocket"></i>

                        <h3 class="box-title">邀请</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <p>当前您可以生成<code><?php echo $_smarty_tpl->tpl_vars['user']->value->invite_num;?>
</code>个邀请码。 </p>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->invite_num) {?>
                        <div class="input-group">
                            <input class="form-control" id="num" type="number" placeholder="要生成的邀请码数量">
                            <div class="input-group-btn">
                                <button id="invite" class="btn btn-info">生成我的邀请码</button>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <!-- /.box -->
                    <div class="box-header">
                        <h3 class="box-title">我的邀请码</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>###</th>
                                <th>邀请码(点右键复制链接)</th>
                                <th>状态</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->tpl_vars['codes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_code_0_saved_item = isset($_smarty_tpl->tpl_vars['code']) ? $_smarty_tpl->tpl_vars['code'] : false;
$_smarty_tpl->tpl_vars['code'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['code']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->tpl_vars['code']->_loop = true;
$__foreach_code_0_saved_local_item = $_smarty_tpl->tpl_vars['code'];
?>
                                <tr>
                                    <td><b><?php echo $_smarty_tpl->tpl_vars['code']->value->id;?>
</b></td>
                                    <td><a href="/auth/register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
</a>
                                    </td>
                                    <td>可用</td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['code'] = $__foreach_code_0_saved_local_item;
}
if ($__foreach_code_0_saved_item) {
$_smarty_tpl->tpl_vars['code'] = $__foreach_code_0_saved_item;
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="callout callout-warning">
                    <h4>注意！</h4>

                    <p>邀请码请给认识的需要的人。</p>

                    <p>邀请有记录，若被邀请的人违反用户协议，您将会有连带责任。</p>
                </div>

                <div class="callout callout-info">
                    <h4>说明</h4>

                    <p>用户注册48小时后，才可以生成邀请码。</p>

                    <p>邀请码暂时无法购买，请珍惜。</p>

                    <p>公共页面不定期发放邀请码，如果用完邀请码可以关注公共邀请。</p>
                </div>
            </div>
            <!-- /.col (right) -->
        </div>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#invite").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/invite",
                dataType: "json",
                data: {
                    num: $("#num").val()
                },
                success: function (data) {
                    window.location.reload();
                },
                error: function (jqXHR) {
                    alert("发生错误：" + jqXHR.status);
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
