<?php /* Smarty version 3.1.27, created on 2015-10-13 11:38:17
         compiled from "application\views\templates\footer_dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1292561cd109ce3fb7_63774969%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdc95a8daaaf24dbc59b609b6927a69a72c7e250' => 
    array (
      0 => 'application\\views\\templates\\footer_dashboard.tpl',
      1 => 1444723581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1292561cd109ce3fb7_63774969',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cd109d033b3_92064517',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cd109d033b3_92064517')) {
function content_561cd109d033b3_92064517 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1292561cd109ce3fb7_63774969';
?>
<!-- Start Footer UI of the template -->
	<footer id="footer">
		<div class="footer-left">Beat Tracker - Admin Panel</div>
		<div class="footer-right"><p>Copyright 2015. All Rights Reserved.</p></div>
	</footer>
	
</div>
<!-- End Footer UI of the template -->

    <!-- Core Scripts -->
    <?php echo '<script'; ?>
 src="assets/js/libs/jquery-1.8.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/libs/jquery.placeholder.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/libs/jquery.mousewheel.min.js"><?php echo '</script'; ?>
>
    
    <!-- Template Script -->
    <?php echo '<script'; ?>
 src="assets/js/template.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/setup.js"><?php echo '</script'; ?>
>

    <!-- Customizer, remove if not needed -->
    <?php echo '<script'; ?>
 src="assets/js/customizer.js"><?php echo '</script'; ?>
>

    <!-- Uniform Script -->
    <?php echo '<script'; ?>
 src="plugins/uniform/jquery.uniform.min.js"><?php echo '</script'; ?>
>
    
    <!-- jquery-ui Scripts -->
    <?php echo '<script'; ?>
 src="assets/jui/js/jquery-ui-1.8.24.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/jui/jquery-ui.custom.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/jui/timepicker/jquery-ui-timepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/jui/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
>
    
    <!-- Plugin Scripts -->
    
    <!-- Flot -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/libs/excanvas.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/flot/jquery.flot.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/flot/plugins/jquery.flot.tooltip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/flot/plugins/jquery.flot.pie.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/flot/plugins/jquery.flot.resize.min.js"><?php echo '</script'; ?>
>

    <!-- Circular Stat -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
custom-plugins/circular-stat/circular-stat.min.js"><?php echo '</script'; ?>
>

    <!-- SparkLine -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    
    <!-- iButton -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/ibutton/jquery.ibutton.js"><?php echo '</script'; ?>
>

    <!-- Full Calendar -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/fullcalendar/fullcalendar.min.js"><?php echo '</script'; ?>
>
    
    <!-- DataTables -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/datatables/TableTools/js/TableTools.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/datatables/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
    
    <!-- Demo Scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/demo/dashboard.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
?>