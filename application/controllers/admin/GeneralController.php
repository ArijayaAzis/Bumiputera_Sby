<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GeneralController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('General');
	}

	public function index(){
		$data = null;
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/general/index', $data);
		$this->load->view('admin/partials/footer');
	}

	// public function create(){

	// 	$this->form_validation->set_rules('nama','Nama Perusahaan','required');

	// 	$data = null;
	// 	$this->load->view('admin/partials/header');
	// 	$this->load->view('admin/partials/sidebar');
	// 	$this->load->view('admin/general/create', $data);
	// 	$this->load->view('admin/partials/footer');
	// }

	// public function edit(){
	// 	$data = null;
	// 	$this->load->view('admin/partials/header');
	// 	$this->load->view('admin/partials/sidebar');
	// 	$this->load->view('admin/general/edit', $data);
	// 	$this->load->view('admin/partials/footer');
	// }

	public function update(){		
		$this->form_validation->set_rules('nama','Nama Perusahaan','required');
		
		$data = null;
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/general/index', $data);
		$this->load->view('admin/partials/footer');
	}
}
?>