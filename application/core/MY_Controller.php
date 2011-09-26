<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alice extends CI_Controller {
	
	protected $data;

	function __construct() {
		parent::__construct();
		$this->bootstrap();
	}
	
	private function bootstrap() {
		$this->data = array();
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */