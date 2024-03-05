<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Committee extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Site');
		$this->site->maintenance();
        $this->load->model('get');
	}
	public function index()
	{
	    $title = "Academic Committee";
		$data['title'] = $title;
		$this->load_header($title);
		$where = array('status' => '1');
		$roles = $this->get->table('committee_roles', $where);
		$designation = $this->get->table('faculty_roles', $where);
		$data['committee_titles'] = $this->get->table('committees', $where, '', '', '', '', 'committee');
		$where['committee'] = $title;
		$data['committee'] = $this->get->table('committees', $where);
		$data['role'] = pluck($roles,'role','sno');
		$data['designation'] = pluck($designation,'role','sno');
		$this->load->view('committee',$data);
		$this->load_footer();
	}
	public function load_header($title = NULL)
	{
        $data['site'] = $this->site->settings();
		$data['title'] = ($title == NULL)?"Academic Committee":$title;
		$this->load->view('include/header',$data);
	}
	public function type()
	{
	    if($type = $this->uri->segment(2))
	    {
    	    $type = urldecode($type);
	        if($type == 'sc–st-committee')
	            $title = 'SC/ST Committee';
	        elseif($type == 'internal-complaint-committee')
	            $title = 'Internal Committee for the students with disabilities';
	        elseif($type == 'anti-ragging-committee')
	            $title = 'Anti-Ragging Committee';
	        elseif($type == 'discipline-committee')
	            $title = 'Disciplinary Committee';
	        else
    	        $title = ucwords(strtolower(str_replace("-", " ", $type)));
    		$data['title'] = $title;
    		$this->load_header($title);
    		$where = array('status' => '1');
    		$roles = $this->get->table('committee_roles', $where);
    		$designation = $this->get->table('faculty_roles', $where);
		    $data['committee_titles'] = $this->get->table('committees', $where, '', '', '', '', 'committee');
    		$where['committee'] = $title;
    		$data['committee'] = $this->get->table('committees', $where);
    		$data['role'] = pluck($roles,'role','sno');
    		$data['designation'] = pluck($designation,'role','sno');
    		$this->load->view('committee',$data);
    		$this->load_footer();
	    }
	    else
	        redirect(base_url('committee'));
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}
