<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function index()
	{
		$data = null;
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/partials/footer');
	}
}
?>