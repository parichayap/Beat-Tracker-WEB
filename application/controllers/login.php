<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Start of file login.php */

class Login extends CI_Controller 
{
	
		function __construct() 
		{
			parent::__construct();
		}
 
		function index() 
		{
			$this->smarty->assign("base_url",base_url());
			
			//Loading Template
			$this->smarty->view('header');
			$this->smarty->view('login');
			$this->smarty->view('footer');
	 
		}
}

/* End of file login.php */