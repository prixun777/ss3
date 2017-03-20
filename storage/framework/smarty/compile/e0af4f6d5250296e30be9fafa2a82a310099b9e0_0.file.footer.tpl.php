<?php
/* Smarty version 3.1.29, created on 2017-03-20 21:52:02
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/user/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfde8288a7f3_00808090',
  'file_dependency' => 
  array (
    'e0af4f6d5250296e30be9fafa2a82a310099b9e0' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/user/footer.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cfde8288a7f3_00808090 ($_smarty_tpl) {
?>
<footer class="main-footer">
    <div align="center">
        <?php echo $_smarty_tpl->tpl_vars['userFooter']->value;?>

    </div>
    <div class="pull-right hidden-xs">
        Made with Love
    </div>
    <strong>Copyright &copy; <?php echo date("Y");?>
 <a href="#"><?php echo $_smarty_tpl->tpl_vars['config']->value['appName'];?>
</a> </strong>
    All rights reserved. Powered by <b>ss-panel</b> <?php echo $_smarty_tpl->tpl_vars['config']->value['version'];?>
 | <a href="/tos">服务条款 </a>
</footer>
</div><!-- ./wrapper -->


<!-- Bootstrap 3.3.2 JS -->
<?php echo '<script'; ?>
 src="/assets/public/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- SlimScroll -->
<?php echo '<script'; ?>
 src="/assets/public/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src='/assets/public/plugins/fastclick/fastclick.min.js'><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="/assets/public/js/app.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<div style="display:none;">
    <?php echo $_smarty_tpl->tpl_vars['analyticsCode']->value;?>

</div>
</body>
</html>
<?php }
}
