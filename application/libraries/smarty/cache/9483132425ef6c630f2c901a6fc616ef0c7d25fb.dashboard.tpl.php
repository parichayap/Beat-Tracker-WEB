<?php
/*%%SmartyHeaderCode:10303561cd109c2c638_22740674%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9483132425ef6c630f2c901a6fc616ef0c7d25fb' => 
    array (
      0 => 'application\\views\\templates\\dashboard.tpl',
      1 => 1444729090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10303561cd109c2c638_22740674',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cd109c63137_88639858',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cd109c63137_88639858')) {
function content_561cd109c63137_88639858 ($_smarty_tpl) {
?>
	<div id="content-wrap">
		<div id="content">
			<div id="content-outer">
				<div id="content-inner">
					<aside id="sidebar">
						<nav id="navigation" class="collapse">
							<ul>
								<li class="active">
									<span title="General">
										<i class="icon-home"></i>
										<span class="nav-title">Home</span>
									</span>
								</li>
								<li>
									<span title="Table">
										<i class="icon-table"></i>
										<span class="nav-title">Beats</span>
									</span>
								</li>
								<li>
									<span title="Statistic">
										<i class="icon-bended-arrow-down"></i>
										<span class="nav-title">Import Manager</span>
									</span>
									<ul class="inner-nav">
										<li><a href="statistic.html"><i class="icol-chart-curve"></i> Import Manager Master</a></li>
										<li><a href="charts_gallery.html"><i class="icol-chart-pie"></i>  Import DSE Master</a></li>
										<li><a href="charts_gallery.html"><i class="icol-chart-pie"></i>  Import DB Master</a></li>
										<li><a href="charts_gallery.html"><i class="icol-chart-pie"></i>  Import Beats Master</a></li>
									</ul>
								</li>
								<li>
									<span title="Form">
										<i class="icon-list"></i>
										<span class="nav-title">Reports</span>
									</span>
									<ul class="inner-nav">
										<li><a href="form_layouts.html"><i class="icol-layout-select"></i> Report1</a></li>
										<li><a href="form_elements.html"><i class="icol-ui-text-field-password"></i> Report2</a></li>
										<li><a href="form_wizard.html"><i class="icol-wand"></i> Report3</a></li>
									</ul>
								</li>
								
							</li></li></ul>
						</nav>
					</aside>

					<div id="sidebar-separator"></div>
					
					<section id="main" class="clearfix">
						<div id="main-header" class="page-header">
							<ul class="breadcrumb">
								<li>
									<i class="icon-home"></i>Beat Tracker
									<span class="divider">&raquo;</span>
								</li>
								<li>
									<a href="#">Dashboard</a>
								</li>
							</ul>
						</div>
						
						<div id="main-content">

							
						</div>
					</section>
				</div>
			</div>
		</div>
	</div><?php }
}
?>