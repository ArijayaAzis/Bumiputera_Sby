<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	public function index()
	{
		$data = null;
		$this->load->view('header');
		$this->load->view('visi_misi', $data);
		$this->load->view('footer');
	}
}