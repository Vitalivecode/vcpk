<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Department extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Site');
		$this->site->maintenance();
        $this->load->model('get');
	}
	public function index()
	{
	    $title = "B.Pharmacy";
		$data['title'] = $title;
		$this->load_header($title);
		$where = array('status' => '1');
		$designation = $this->get->table('faculty_roles', $where);
		$data['designation'] = pluck($designation,'role','sno');
		$where = array('d.status' => '1', 'ds.status' => '1');
		$select = 'd.*,ds.d_name,f.name,f.designation,f.qualification,f.photo';
		$where['d_name'] = $title;
		$join = array('table' => 'departments as ds', 'condition' => 'ds.sno = d.department_name');
		$join2 = array('table' => 'faculty as f', 'condition' => 'f.sno = d.hod');
		$data['department'] = $this->get->joinTable('department as d', $select, $where, $join, $join2);
		$this->load->view('department',$data);
		$this->load_footer();
	}
	public function load_header($title = NULL)
	{
        $data['site'] = $this->site->settings();
		$data['title'] = ($title == NULL)?"B.Pharmacy":$title;
		$this->load->view('include/header',$data);
	}
	public function type()
	{
	    if($type = $this->uri->segment(2))
	    {
    	    $type = urldecode($type);
	        if($type == 'b-pharmacy')
	            $title = 'B.Pharmacy';
	        elseif($type == 'm-pharm-pharmaceutics')
	            $title = 'M.Pharm Pharmaceutics';
	        elseif($type == 'm-pharm-industrial-pharmacy')
	            $title = 'M.Pharm - Industrial Pharmacy';
	        elseif($type == 'm-pharm-pharmcology')
	            $title = 'M.Pharm - Pharmcology';
	        elseif($type == 'm-pharm-pharmceutical-analysis')
	            $title = 'M.Pharm - Pharmceutical Analysis';
	        elseif($type == 'pharm-d-&-dharm-d-pb')
	            $title = 'Pharm D & Pharm D (PB)';
	        else
    	        $title = ucwords(str_replace("-", " ", $type));
    		$data['title'] = $title;
    		$this->load_header($title);
    		$where = array('status' => '1');
    		$designation = $this->get->table('faculty_roles', $where);
    		$data['designation'] = pluck($designation,'role','sno');
    		$where = array('d.status' => '1', 'ds.status' => '1');
    		$select = 'd.*,ds.d_name,f.name,f.department,f.designation,f.qualification,f.photo';
    		$where['d_name'] = $title;
    		$join = array('table' => 'departments as ds', 'condition' => 'ds.sno = d.department_name');
    		$join2 = array('table' => 'faculty as f', 'condition' => 'f.sno = d.hod');
		    $data['department'] = $this->get->joinTable('department as d', $select, $where, $join, $join2);
    		$this->load->view('department',$data);
    		$this->load_footer();
	    }
	    else
	        redirect(base_url('department'));
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}
