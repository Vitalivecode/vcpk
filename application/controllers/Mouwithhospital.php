<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mouwithhospital extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Site');
		$this->site->maintenance();
        $this->load->model('get');
	}
	public function index()
	{
		$this->load_header();
		$this->load_body();
		$this->load_footer();
	}
	public function load_header()
	{
        $data['site'] = $this->site->settings();
		$data['title'] = "Mou-With-Hospital";
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
		$data['title'] = "Mou-With-Hospital";
		$this->load->view('mou-with-hospital',$data);
	}	
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}
