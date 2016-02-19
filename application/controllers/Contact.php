<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data = null;
		$this->load->view('header');
		$this->load->view('contact', $data);
		$this->load->view('footer');
	}
}