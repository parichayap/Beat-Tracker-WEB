<?php /* Smarty version 3.1.27, created on 2015-10-13 11:41:03
         compiled from "application\views\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8259561cd1afd8b569_44646274%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b533d1edca42649560846b9ebc978c0398de6ee9' => 
    array (
      0 => 'application\\views\\templates\\footer.tpl',
      1 => 1444723564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8259561cd1afd8b569_44646274',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cd1afd93277_25191050',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cd1afd93277_25191050')) {
function content_561cd1afd93277_25191050 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8259561cd1afd8b569_44646274';
?>
	<!-- Core Scripts -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/libs/jquery-1.8.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/libs/jquery.placeholder.min.js"><?php echo '</script'; ?>
>
    
    <!-- Login Script -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/login.js"><?php echo '</script'; ?>
>

    <!-- Uniform Script -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/uniform/jquery.uniform.min.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
?>