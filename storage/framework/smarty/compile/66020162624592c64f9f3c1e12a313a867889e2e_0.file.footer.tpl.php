<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:34:15
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfe86711bd05_49816033',
  'file_dependency' => 
  array (
    '66020162624592c64f9f3c1e12a313a867889e2e' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/footer.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cfe86711bd05_49816033 ($_smarty_tpl) {
?>
<footer class="main-footer">
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
