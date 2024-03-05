<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Placements extends CI_Controller {
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
		$data['title'] = "Placements";
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
		$data['title'] = "Placements";
		$where = array('status' => 1);
	    $data['placements'] = $this->get->table('placements_yearwise',$where,'','year_of_pass','','','year_of_pass');
	    $placements = $this->get->table('placements_yearwise',$where);
	    $companies = $this->get->table('companies',$where);
	    $data['companies'] = $companies;
	    $data['hallticket'] = pluck_multi_array($placements,'hallticket','year_of_pass');
	    $data['name'] = pluck($placements,'student_name','hallticket');
	    $data['company'] = pluck($placements,'company','hallticket');
	    $data['companyname'] = pluck($companies,'company_name','sno');
		$this->load->view('placements',$data);
	}	
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}
