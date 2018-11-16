<?php
 /**
 * @author  Reymart Jay Gonato 
 * @email  crjgonato@gmail.com
 * @copyright  2018 © Graphene. All Rights Reserved
 */
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');
class Designation extends MY_Controller {
	
	 public function __construct() {
        Parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		//load the model
		$this->load->model("Designation_model");
		$this->load->model("Graphene_model");
		$this->load->model("Department_model");
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
		$data['all_departments'] = $this->Department_model->all_departments();
		$session = $this->session->userdata('username');
		$data['breadcrumbs'] = $this->lang->line('designations');
		$data['path_url'] = 'designation';
		$role_resources_ids = $this->Graphene_model->user_role_resource();
		if(in_array('6',$role_resources_ids)) {
			if(!empty($session)){ 
			$data['subview'] = $this->load->view("designation/designation_list", $data, TRUE);
			$this->load->view('layout_main', $data); //page load
			} else {
				redirect('');
			}
		} else {
			redirect('dashboard/');
		}		  
     }
 
    public function designation_list()
     {

		$data['title'] = $this->Graphene_model->site_title();
		$session = $this->session->userdata('username');
		if(!empty($session)){ 
			$this->load->view("designation/designation_list", $data);
		} else {
			redirect('');
		}
		// Datatables Variables
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		
		
		$designation = $this->Designation_model->get_designations();
		
		$data = array();

          foreach($designation->result() as $r) {
			  
			  // get department
			  $department = $this->Department_model->read_department_information($r->department_id);
			  
			  // get user > added by
			  $user = $this->Graphene_model->read_user_info($r->added_by);
			  // user full name
			  $full_name = $user[0]->first_name.' '.$user[0]->last_name;

               $data[] = array(
			   		'<span data-toggle="tooltip" data-placement="top" title="Edit"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light"  data-toggle="modal" data-target="#edit-modal-data"  data-designation_id="'. $r->designation_id . '"><i class="fa fa-pencil-square-o"></i></button></span><span data-toggle="tooltip" data-placement="top" title="Delete"><button type="button" class="btn btn-danger btn-sm m-b-0-0 waves-effect waves-light delete" data-toggle="modal" data-target=".delete-modal" data-record-id="'. $r->designation_id . '"><i class="fa fa-trash-o"></i></button></span>',
                    $r->designation_name,
                    $department[0]->department_name,
					$full_name
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $designation->num_rows(),
                 "recordsFiltered" => $designation->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
	 
	 public function read()
	{
		$data['title'] = $this->Graphene_model->site_title();
		$id = $this->input->get('designation_id');
		$result = $this->Designation_model->read_designation_information($id);
		$data = array(
				'designation_id' => $result[0]->designation_id,
				'department_id' => $result[0]->department_id,
				'designation_name' => $result[0]->designation_name,
				'all_departments' => $this->Department_model->all_departments()
				);
		$session = $this->session->userdata('username');
		if(!empty($session)){ 
			$this->load->view('designation/dialog_designation', $data);
		} else {
			redirect('');
		}
	}
	
	// Validate and add info in database
	public function add_designation() {
	
		if($this->input->post('add_type')=='designation') {
		// Check validation for user input
		$this->form_validation->set_rules('department_id', 'Department', 'trim|required|xss_clean');
		$this->form_validation->set_rules('designation_name', 'Designation', 'trim|required|xss_clean');
		
		/* Define return | here result is used to return user data and error for error message */
		$Return = array('result'=>'', 'error'=>'');
			
		/* Server side PHP input validation */
		if($this->input->post('department_id')==='') {
        	$Return['error'] = $this->lang->line('error_department_field');
		} else if($this->input->post('designation_name')==='') {
			$Return['error'] = $this->lang->line('error_designation_field');
		} 
				
		if($Return['error']!=''){
       		$this->output($Return);
    	}
	
		$data = array(
		'department_id' => $this->input->post('department_id'),
		'designation_name' => $this->input->post('designation_name'),
		'added_by' => $this->input->post('user_id'),
		'created_at' => date('d-m-Y'),
		
		);
		$result = $this->Designation_model->add($data);
		if ($result == TRUE) {
			$Return['result'] = $this->lang->line('graphene_success_add_designation');
		} else {
			$Return['error'] = $this->lang->line('graphene_error_msg');
		}
		$this->output($Return);
		exit;
		}
	}
	
	// Validate and update info in database
	public function update() {
	
		if($this->input->post('edit_type')=='designation') {
			
		$id = $this->uri->segment(3);
		
		// Check validation for user input
		$this->form_validation->set_rules('department_id', 'Department', 'trim|required|xss_clean');
		$this->form_validation->set_rules('designation_name', 'Designation', 'trim|required|xss_clean');
		
		/* Define return | here result is used to return user data and error for error message */
		$Return = array('result'=>'', 'error'=>'');
			
		/* Server side PHP input validation */
		if($this->input->post('department_id')==='') {
        	$Return['error'] = $this->lang->line('error_department_field');
		} else if($this->input->post('designation_name')==='') {
			$Return['error'] = $this->lang->line('error_designation_field');
		} 
				
		if($Return['error']!=''){
       		$this->output($Return);
    	}
	
		$data = array(
		'department_id' => $this->input->post('department_id'),
		'designation_name' => $this->input->post('designation_name'),		
		);
		
		$result = $this->Designation_model->update_record($data,$id);		
		
		if ($result == TRUE) {
			$Return['result'] = $this->lang->line('graphene_success_update_designation');
		} else {
			$Return['error'] = $this->lang->line('graphene_error_msg');
		}
		$this->output($Return);
		exit;
		}
	}
	
	public function delete() {
		/* Define return | here result is used to return user data and error for error message */
		$Return = array('result'=>'', 'error'=>'');
		$id = $this->uri->segment(3);
		$result = $this->Designation_model->delete_record($id);
		if(isset($id)) {
			$Return['result'] = $this->lang->line('graphene_success_delete_designation');
		} else {
			$Return['error'] = $this->lang->line('graphene_error_msg');
		}
		$this->output($Return);
	}
}
