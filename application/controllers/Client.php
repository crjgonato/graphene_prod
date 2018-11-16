<?php
 /**
 * @author  Reymart Jay Gonato 
 * @email  crjgonato@gmail.com
 * @copyright  2018 © Graphene. All Rights Reserved
 */
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');
class Client extends MY_Controller {
	
	 public function __construct() {
        Parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		//load the model
		$this->load->model("Client_model");
		$this->load->model("Graphene_model");
		$this->load->database(); // load database
	}
	
	/*Function to set JSON output*/
	public function output($Return=array()){
		/*Set response header*/
		header("Access-Control-Allow-Origin: *");
		header("Content-Type: application/json; charset=UTF-8");
		/*Final JSON response*/
		exit(json_encode($Return));
	}
	
	public function index() {
		$data['title'] = $this->Graphene_model->site_title();
		$data['all_employees'] = $this->Graphene_model->all_employees();
		$data['all_companies'] = $this->Graphene_model->get_companies();
		$data['breadcrumbs'] = 'Clients';
		$data['path_url'] = 'client';
		$session = $this->session->userdata('username');
		$role_resources_ids = $this->Graphene_model->user_role_resource();
		
		$data['data']=$this->Client_model->displayrecords();
    
		if(in_array('7',$role_resources_ids)) {
			if(!empty($session)){ 
			  $data['subview'] = $this->load->view("client/client_list", $data, TRUE);
			  $this->load->view('layout_main', $data); //page load
			} else {
				redirect('');
			}
		} else {
			redirect('dashboard/');
		}		  
	}
	// Validate and add info in database
	// function add_visit() {
		
	// 	if($this->input->post('add_visit')=='client') {		
	// 	/* Define return | here result is used to return user data and error for error message */
	// 	$Return = array('result'=>'', 'error'=>'');
			
	// 	/* Server side PHP input validation */
	// 	$client_name = $this->input->post('client_name');
	// 	$client_contactperson = $this->input->post('client_contactperson');
	// 	$time = $this->input->post('time');
	// 	$date = $this->input->post('date');
	// 	$meeting_details = $this->input->post('meeting_details');
	// 	$added_by = $this->input->post('added_by');

	// 	// $qt_description = htmlspecialchars(addslashes($description), ENT_QUOTES);
		
	// 	// if($this->input->post('employee_id')==='') {
	// 	// 				$Return['error'] = "The complaint from field is required.";
	// 	// } else if($this->input->post('title')==='') {
	// 	// 	$Return['error'] = "The complaint title field is required.";
	// 	// } else if($this->input->post('complaint_date')==='') {
	// 	// 	 $Return['error'] = "The complaint date field is required.";
	// 	// } else if(empty($this->input->post('complaint_against'))) {
	// 	// 	 $Return['error'] = "The complaint against field is required.";
	// 	// }
				
	// 	if($Return['error']!=''){
	// 				$this->output($Return);
	// 	}
	// 	//$complaint_against_ids = implode(',',$this->input->post('complaint_against'));

	// 	$data = array(
	// 	'client_name' => $this->input->post('client_name'),
	// 	'client_contactperson' => $this->input->post('client_contactperson'),
	// 	'time' => $this->input->post('time'),
	// 	'date' => $this->input->post('date'),
	// 	'meeting_details' => $this->input->post('meeting_details'),
	// 	'added_by' => $this->input->post('added_by'),
	// 	'created_at' => date('d-m-Y'),
		
	// 	);

	// 	$result = $this->Client_model->add($data);
	// 	//console.log($result);
	// 	if ($result == TRUE) {
	// 		$Return['result'] = 'Visit added.';
	// 	} else {
	// 		$Return['error'] = 'opps. Something went wrong, please try again.';
	// 	}
	// //	$this->output($Return);
	// 	//exit;

	// 	redirect("user/client_list");  
	// 	}
	// }

	function client_insert(){
		//$address=$this->input->post('address');
		$client_name=$this->input->post('client_name');
		$client_contactperson=$this->input->post('client_contactperson');
		$time=$this->input->post('time');
		$date=$this->input->post('date');
		$meeting_details=$this->input->post('meeting_details');
		$added_by= $this->input->post('added_by');
		$created_at=$this->input->post('created_at');

    $data = array(
				//'address'=>$address,
				'client_name'=>$client_name,
				'client_contactperson'=>$client_contactperson,
				'time'=>$time,
				'date'=>$date,
				'meeting_details'=>$meeting_details,
				'added_by'=>$added_by,
				'created_at'=>$created_at
    );

		$this->db->insert('client',$data);
		
		redirect("employee/client/");  
}
	
		
}
