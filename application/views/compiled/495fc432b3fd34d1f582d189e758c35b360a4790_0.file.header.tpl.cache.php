<?php /* Smarty version 3.1.27, created on 2015-10-13 11:41:03
         compiled from "application\views\templates\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28925561cd1afc27d57_75628017%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '495fc432b3fd34d1f582d189e758c35b360a4790' => 
    array (
      0 => 'application\\views\\templates\\header.tpl',
      1 => 1444721009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28925561cd1afc27d57_75628017',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cd1afc79df9_94441087',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cd1afc79df9_94441087')) {
function content_561cd1afc79df9_94441087 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28925561cd1afc27d57_75628017';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta name="description" content="" />
<meta name="author" content="" />

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bootstrap/css/bootstrap-login.min.css" media="screen" />

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/uniform/css/uniform.default.css" />

<!-- Plugin Stylsheets first to ease overrides -->

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/fonts/icomoon/style.css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/login.min.css" media="screen" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
<![endif]-->

<title>Beat Tracker</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body><?php }
}
?>