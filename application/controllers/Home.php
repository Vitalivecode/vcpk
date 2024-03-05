<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
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
		$data['title'] = "Home";
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
		$data['title'] = "Home";
		$data['testimonials'] = $this->get->table('testimonials',array('status' => '1'),'','sno');
		$data['events'] = $this->get->table('events_articles',array('status' => '1'),'','date','5');
		$data['notifications'] = $this->get->table('notifications',array('status' => '1'),'','sno');
		$this->load->view('home',$data);
	}	
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}
