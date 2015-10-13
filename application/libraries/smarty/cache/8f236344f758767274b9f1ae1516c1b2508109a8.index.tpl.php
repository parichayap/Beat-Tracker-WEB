<?php
/*%%SmartyHeaderCode:904056175f4c17fd62_06220569%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f236344f758767274b9f1ae1516c1b2508109a8' => 
    array (
      0 => 'application\\views\\templates\\index.tpl',
      1 => 1444370776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '904056175f4c17fd62_06220569',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56175f4c1b29f2_92055794',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56175f4c1b29f2_92055794')) {
function content_56175f4c1b29f2_92055794 ($_smarty_tpl) {
?>
<!--container-->   
   <div class="container login">
		<form class="form-signin">
			<input name="user_name" required placeholder="Username">
			<input name="password" required placeholder="Password">
			<br><br>
			<input type="button" name="btn_login" value="Login" class="btn btn-large btn-primary">
		</form>
    </div>
<!--container-->
  
    <?php }
}
?>