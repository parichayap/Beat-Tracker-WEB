<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Start of file dashboard.php */

class Dashboard extends CI_Controller 
{
	
		function __construct() 
		{
			parent::__construct();
		}
 
		function index() 
		{
			$this->smarty->assign("base_url",base_url());
			
			//Loading Template
			$this->smarty->view('header_dashboard');
			$this->smarty->view('dashboard');
			$this->smarty->view('footer_dashboard');
	 
		}
}

/* End of file dashboard.php */