<?php
 /**
 * @author  Reymart Jay Gonato 
 * @email  crjgonato@gmail.com
 * @copyright  2018 © Graphene. All Rights Reserved
 */
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');
class Job_candidates extends MY_Controller {
	
	 public function __construct() {
        Parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		//load the model
		$this->load->model("Job_post_model");
		$this->load->model("Graphene_model");
		$this->load->model("Designation_model");
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
		$data['breadcrumbs'] = 'Job Candidates';
		$data['path_url'] = 'job_candidates';
		$role_resources_ids = $this->Graphene_model->user_role_resource();
		if(in_array('46',$role_resources_ids)) {
			if(!empty($session)){ 
			$data['subview'] = $this->load->view("job_post/job_candidates", $data, TRUE);
			$this->load->view('layout_main', $data); //page load
			} else {
				redirect('');
			}
		} else {
			redirect('dashboard/');
		}		  
     }
 
    public function candidate_list()
     {

		$data['title'] = $this->Graphene_model->site_title();
		$session = $this->session->userdata('username');
		if(!empty($session)){ 
			$this->load->view("job_post/job_candidates", $data);
		} else {
			redirect('');
		}
		// Datatables Variables
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		
		
		$candidates = $this->Job_post_model->get_jobs_candidates();
		
		$data = array();

        foreach($candidates->result() as $r) {
			 			  
		// get user
		$user = $this->Graphene_model->read_user_info($r->user_id);
		// get full name
		$full_name = $user[0]->first_name. ' ' .$user[0]->last_name;
		// get job title
		$job = $this->Job_post_model->read_job_information($r->job_id);
		// get date
		$created_at = $this->Graphene_model->set_date_format($r->created_at);
		
		$data[] = array(
			'<span data-toggle="tooltip" data-placement="top" title="Download">
			<a href="'.site_url().'download?type=resume&filename='.$r->job_resume.'"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span><span data-toggle="tooltip" data-placement="top" title="Delete"><button type="button" class="btn btn-danger btn-sm m-b-0-0 waves-effect waves-light delete" data-toggle="modal" data-target=".delete-modal" data-record-id="'. $r->application_id . '"><i class="fa fa-trash-o"></i></button></span>',
			$job[0]->job_title,
			$full_name,
			$user[0]->email,
			$r->application_status,
			$created_at
		);
      }

	  $output = array(
		   "draw" => $draw,
			 "recordsTotal" => $candidates->num_rows(),
			 "recordsFiltered" => $candidates->num_rows(),
			 "data" => $data
		);
	  echo json_encode($output);
	  exit();
     }
	 	
	// delete job candidate / job application	
	public function delete() {
		/* Define return | here result is used to return user data and error for error message */
		$Return = array('result'=>'', 'error'=>'');
		$id = $this->uri->segment(3);
		$result = $this->Job_post_model->delete_application_record($id);
		if(isset($id)) {
			$Return['result'] = 'Job application deleted.';
		} else {
			$Return['error'] = 'Bug. Something went wrong, please try again.';
		}
		$this->output($Return);
	}
}
