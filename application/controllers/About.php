<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = null;
		$this->load->view('header');
		$this->load->view('about', $data);
		$this->load->view('footer');
	}
}