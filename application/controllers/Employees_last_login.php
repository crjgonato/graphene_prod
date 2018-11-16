<?php
 /**
 * @author  Reymart Jay Gonato 
 * @email  crjgonato@gmail.com
 * @copyright  2018 © Graphene. All Rights Reserved
 */
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');
class Employees_last_login extends MY_Controller {
	
	 public function __construct() {
        Parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		//load the model
		$this->load->model("Employees_model");
		$this->load->model("Graphene_model");
	}
	
	/*Function to set JSON output*/
	public function output($Return=array()){
		/*Set response header*/
		header("Access-Control-Allow-Origin: *");
		header("Content-Type: application/json; charset=UTF-8");
		/*Final JSON response*/
		exit(json_encode($Return));
	}
	
	 public function index()
     {
		$data['title'] = $this->Graphene_model->site_title();
		$session = $this->session->userdata('username');
		$data['breadcrumbs'] = 'Employees Last Login';
		$data['path_url'] = 'employees_last_login';
		$role_resources_ids = $this->Graphene_model->user_role_resource();
		if(in_array('26',$role_resources_ids)) {
			if(!empty($session)){ 
			$data['subview'] = $this->load->view("last_login/last_login_list", $data, TRUE);
			$this->load->view('layout_main', $data); //page load
			} else {
				redirect('');
			}
		} else {
			redirect('dashboard/');
		}		  
     }
 
    public function last_login_list()
     {

		$data['title'] = $this->Graphene_model->site_title();
		$session = $this->session->userdata('username');
		if(!empty($session)){ 
			$this->load->view("last_login/last_login_list", $data);
		} else {
			redirect('');
		}
		// Datatables Variables
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		
		
		$employee = $this->Employees_model->get_employees();
		
		$data = array();
		
		  foreach($employee->result() as $r) {
						  
		// login date and time
		if($r->last_login_date==''){
			$edate = '-';
			$etime = '-';
		} else {
			$edate = $this->Graphene_model->set_date_format($r->last_login_date);
			$last_login =  new DateTime($r->last_login_date);
			$etime = $last_login->format('h:i a');
		}
		// employee link
		$role_resources_ids = $this->Graphene_model->user_role_resource();
		if(in_array('13',$role_resources_ids)) {
			$emp_link = '<a href="employees/detail/'.$r->user_id.'/">'.$r->employee_id.'</a>';
		} else {
			$emp_link = $r->employee_id;
		}
		// user full name
		$full_name = $r->first_name.' '.$r->last_name;
		// user role
		$role = $this->Graphene_model->read_user_role_info($r->user_role_id);
		/* get status*/
		if($r->is_active==1): $status = 'Active'; elseif($r->is_active==0): $status = 'In Active'; endif;
		
		$data[] = array(
			$emp_link,
			$full_name,
			$r->username,
			$edate,
			$etime,
			$role[0]->role_name,
			$status
		);
		}
		
		$output = array(
		   "draw" => $draw,
			 "recordsTotal" => $employee->num_rows(),
			 "recordsFiltered" => $employee->num_rows(),
			 "data" => $data
		);
		echo json_encode($output);
		exit();
		}
}
