<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_edit extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'customer_edit';
		$this->load->view('template', $data);
	}

}

/* End of file Customer_edit.php */
/* Location: ./application/controllers/Customer_edit.php */