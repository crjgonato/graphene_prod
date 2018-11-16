<?php
 /**
 * @title Graphene - Human Resource  
 * @author  Reymart Jay Gonato 
 * @email  crjgonato@gmail.com
 * @copyright  2018 © Graphene. All Rights Reserved
 */
 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');
class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		 $this->load->model('Employees_model');
		 $this->load->model('Graphene_model');
	}
	
	public function index()
	{		
		$data['title'] = 'Sign in to Graphene - Graphene';
		$this->load->view('login', $data);
	}
}
