<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:43:09
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/user/nodeinfo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfea7d2eefa3_84903278',
  'file_dependency' => 
  array (
    '622a42ac238a3877312b6fdbac4ff0885a733dea' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/user/nodeinfo.tpl',
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
function content_58cfea7d2eefa3_84903278 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="content-wrapper">
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

                    <p>配置文件以及二维码请勿泄露！</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-code"></i>

                        <h3 class="box-title">配置Json</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <textarea class="form-control" rows="6"><?php echo $_smarty_tpl->tpl_vars['json_show']->value;?>
</textarea>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-code"></i>

                        <h3 class="box-title">配置地址</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="input-group">
                            <input type="text" id="ss-qr-text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ssqr']->value;?>
">
                            <div class="input-group-btn">
                                <a class="btn btn-primary btn-flat" href="<?php echo $_smarty_tpl->tpl_vars['ssqr']->value;?>
">></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -->

            <div class="col-md-6">
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-qrcode"></i>

                        <h3 class="box-title">配置二维码</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="text-center">
                            <div id="ss-qr"></div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-qrcode"></i>

                        <h3 class="box-title">Surge配置</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Surge使用步骤</h4>

                                <p>基础配置只需要做一次：
                                <ol>
                                    <li>打开 Surge ，点击右上角“Edit”，点击“Download Configuration from URL”</li>
                                    <li>输入基础配置的地址（或扫描二维码得到地址，复制后粘贴进来），点击“OK”</li>
                                    <li><b>注意：</b>基础配置不要改名，不可以直接启用。</li>
                                </ol>
                                </p>
                                <p>代理配置需要根据不同的节点进行添加：
                                <ol>
                                    <li>点击“New Empty Configuration”</li>
                                    <li>在“NAME”里面输入一个配置文件的名称</li>
                                    <li>点击下方“Edit in Text Mode”</li>
                                    <li>输入代理配置的全部文字（或扫描二维码得到配置，复制后粘贴进来），点击“OK”</li>
                                    <li>直接启用代理配置即可科学上网。</li>
                                </ol>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4>基础配置</h4>

                                <div class="text-center">
                                    <div id="surge-base-qr"></div>
                                </div>
                                <textarea id="surge-base-text" class="form-control" rows="6"><?php echo $_smarty_tpl->tpl_vars['surge_base']->value;?>
</textarea>
                            </div>
                            <div class="col-md-4">
                                <h4>代理配置</h4>

                                <div class="text-center">
                                    <div id="surge-proxy-qr"></div>
                                </div>
                                <textarea id="surge-proxy-text" class="form-control" rows="6"><?php echo $_smarty_tpl->tpl_vars['surge_proxy']->value;?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- END PROGRESS BARS -->
        <?php echo '<script'; ?>
 src=" /assets/public/js/jquery.qrcode.min.js "><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            var text_qrcode = jQuery('#ss-qr-text').val();
            jQuery('#ss-qr').qrcode({
                "text": text_qrcode
            });
            var text_surge_base = jQuery('#surge-base-text').val();
            jQuery('#surge-base-qr').qrcode({
                "text": text_surge_base
            });
            var text_surge_proxy = jQuery('#surge-proxy-text').text();
            jQuery('#surge-proxy-qr').qrcode({
                "text": text_surge_proxy
            });
        <?php echo '</script'; ?>
>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
