<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admissions extends CI_Controller {
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
		$this->load->view('include/header',$data);
	}
	
	public function coursesoffered()
	{
		$data['title'] = "Courses Offered";
		$this->load_header();
		$this->load->view('courses-offered',$data);
		$this->load_footer();
	}
	public function feestructure()
	{
		$data['title'] = "Fee Structure";
		$this->load_header();
		$this->load->view('fee-structure',$data);
		$this->load_footer();
	}
	public function bpharm()
	{
		$data['title'] = "B.Pharm";
		$this->load_header();
		$this->load->view('adm-bpharm',$data);
		$this->load_footer();
	}
	public function mpharm()
	{
		$data['title'] = "M.Pharm";
		$this->load_header();
		$this->load->view('adm-mpharm',$data);
		$this->load_footer();
	}
	public function pharmd()
	{
		$data['title'] = "Pharm D";
		$this->load_header();
		$this->load->view('adm-pharmd',$data);
		$this->load_footer();
	}
	public function pharmdpb()
	{
		$data['title'] = "Pharm D (PB)";
		$this->load_header();
		$this->load->view('adm-pharmdpb',$data);
		$this->load_footer();
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}
