<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resignation_model extends CI_Model {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
	public function get_resignations()
	{
	  return $this->db->get("employee_resignations");
	}
	 
	 public function read_resignation_information($id) {
	
		$condition = "resignation_id =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('employee_resignations');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	
	// Function to add record in table
	public function add($data){
		$this->db->insert('employee_resignations', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	// Function to Delete selected record from table
	public function delete_record($id){
		$this->db->where('resignation_id', $id);
		$this->db->delete('employee_resignations');
		
	}
	
	// Function to update record in table
	public function update_record($data, $id){
		$this->db->where('resignation_id', $id);
		if( $this->db->update('employee_resignations',$data)) {
			return true;
		} else {
			return false;
		}		
	}
}
?>