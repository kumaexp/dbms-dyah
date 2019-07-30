<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'customer';
		$this->load->view('template', $data);
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */