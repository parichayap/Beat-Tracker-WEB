<?php
/*%%SmartyHeaderCode:25074561cd1afd2d945_30556604%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cabe6fe16db10805fb6aaa308bb3dcf6415aed88' => 
    array (
      0 => 'application\\views\\templates\\login.tpl',
      1 => 1444720389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25074561cd1afd2d945_30556604',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cd1afd64450_42195718',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cd1afd64450_42195718')) {
function content_561cd1afd64450_42195718 ($_smarty_tpl) {
?>
<div id="login-wrap">

		<div id="login-ribbon"><i class="icon-lock"></i></div>

		<div id="login-buttons">
			<div class="btn-wrap">
				<button type="button" class="btn btn-inverse" data-target="#login-form"><i class="icon-key"></i></button>
			</div>
			<div class="btn-wrap">
				<button type="button" class="btn btn-inverse" data-target="#forget-form"><i class="icon-question-sign"></i></button>
			</div>
		</div>

		<div id="login-inner">

			<div id="login-circle">
				<section id="login-form" class="login-inner-form active" data-angle="0">
					<h1>Login</h1>
					<form class="form-vertical" action="dashboard.html" />
						<div class="control-group">
							<input type="text" placeholder="Username" id="input-username" class="big" required />
							<input type="password" placeholder="Password" id="input-password" class="big"  required/>
						</div>
						<div class="control-group">
							<label class="checkbox">
								<input type="checkbox" class="uniform" /> Remember me
							</label>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-success btn-block btn-large">Login</button>
						</div>
					</form>

				</section>
				<section id="forget-form" class="login-inner-form" data-angle="180">
					<h1>Reset Password</h1>
					<form class="form-vertical" action="dashboard.html" />
						<div class="control-group">
							<div class="controls">
								<input type="text" class="big" placeholder="Enter Your Email..." />
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-danger btn-block btn-large">Reset</button>
						</div>
					</form>
				</section>
			</div>

		</div>

</div>
  
    <?php }
}
?>