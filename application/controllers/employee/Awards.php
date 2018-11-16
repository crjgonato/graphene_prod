<?php
 /**
 * @author  Reymart Jay Gonato 
 * @email  crjgonato@gmail.com
 * @copyright  2018 © Graphene. All Rights Reserved
 */
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');
class Awards extends MY_Controller {
	
	 public function __construct() {
        Parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		//load the model
		$this->load->model("Awards_model");
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
		$data['all_employees'] = $this->Graphene_model->all_employees();
		$data['all_award_types'] = $this->Awards_model->all_award_types();
		$session = $this->session->userdata('username');
		$data['breadcrumbs'] = 'Awards';
		$data['path_url'] = 'user/user_awards';
		if(!empty($session)){ 
			$data['subview'] = $this->load->view("user/awards", $data, TRUE);
			$this->load->view('layout_main', $data); //page load
		} else {
			redirect('');
		}
		  
     }
 
    public function award_list()
     {

		$data['title'] = $this->Graphene_model->site_title();
		$session = $this->session->userdata('username');
		if(!empty($session)){ 
			$this->load->view("user/awards", $data);
		} else {
			redirect('');
		}
		// Datatables Variables
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		
		
		$award = $this->Awards_model->get_employee_awards($session['user_id']);
		
		$data = array();

        foreach($award->result() as $r) {
			 			  
		// get user > added by
		$user = $this->Graphene_model->read_user_info($r->employee_id);
		// user full name
		$full_name = $user[0]->first_name.' '.$user[0]->last_name;
		// get award type
		$award_type = $this->Awards_model->read_award_type_information($r->award_type_id);
		
		$d = explode('-',$r->award_month_year);
		$get_month = date('F', mktime(0, 0, 0, $d[1], 10));
		$award_date = $get_month.', '.$d[0];
		// get currency
		$currency = $this->Graphene_model->currency_sign($r->cash_price);
				
		$data[] = array('<span data-toggle="tooltip" data-placement="top" title="View"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" data-toggle="modal" data-target=".view-modal-data" data-award_id="'. $r->award_id . '"><i class="fa fa-eye"></i></button></span>',
			$user[0]->employee_id,
			$full_name,
			$award_type[0]->award_type,
			$r->gift_item,
			$currency,
			$award_date
		);
      }

	  $output = array(
		   "draw" => $draw,
			 "recordsTotal" => $award->num_rows(),
			 "recordsFiltered" => $award->num_rows(),
			 "data" => $data
		);
	  echo json_encode($output);
	  exit();
     }
}
