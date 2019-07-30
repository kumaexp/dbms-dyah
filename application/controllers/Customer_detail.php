<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_detail extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'customer_detail';
		$this->load->view('template', $data);
	}

}

/* End of file Customer_detail.php */
/* Location: ./application/controllers/Customer_detail.php */