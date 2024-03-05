<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Teachingfaculty extends CI_Controller {
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
		$data['title'] = "Teaching-Faculty";
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
		$data['title'] = "Teaching-Faculty";
		$data['faculties'] = $this->get->joinTable('faculty as f','f.*,d.role',array('f.status' => '1', 'd.status' => '1'),array('table' => 'faculty_roles as d', 'condition' => 'f.designation = d.sno'),'','',array('f.sequence' => 'asc'));
		$this->load->view('teaching-faculty',$data);
	}	
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}
