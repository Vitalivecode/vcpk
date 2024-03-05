<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Governingbody extends CI_Controller {
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
		$data['title'] = "Governing-Body";
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
		$data['title'] = "Governing-Body";
		$where = array('status' => '1');
		$roles = $this->get->table('committee_roles', $where);
		$data['governings'] = $this->get->table('governing_body',$where);
		$data['role'] = pluck($roles,'role','sno');
		$this->load->view('governing-body',$data);
	}	
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}
