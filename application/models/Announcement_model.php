<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class announcement_model extends CI_Model {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
	public function get_announcements()
	{
	  return $this->db->get("announcements");
	}
	 
	 public function read_announcement_information($id) {
	
		$condition = "announcement_id =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('announcements');
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
		$this->db->insert('announcements', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	// Function to Delete selected record from table
	public function delete_record($id){
		$this->db->where('announcement_id', $id);
		$this->db->delete('announcements');
		
	}
	
	// Function to update record in table
	public function update_record($data, $id){
		$this->db->where('announcement_id', $id);
		if( $this->db->update('announcements',$data)) {
			return true;
		} else {
			return false;
		}		
	}
}
?>