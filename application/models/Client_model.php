<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client_model extends CI_Model {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function displayrecords() {
        $query=$this->db->query("SELECT * from client order by client_id desc");
        //console.log($query);
        return $query->result();
    }
     
    // function new_blank_order_summary() {
    //     $this->Client_model->client_insert($data);
    //     $this->load->view('user/client_list');
    // }

}


?>
