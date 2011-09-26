<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Alice {
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->load->view('home/index', $this->data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */