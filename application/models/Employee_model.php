<?php
  class Employee_model extends CI_Model{
    public function __construct(){
      // Connect to the database in this class.
      $this->load->database();
    }

    public function get_employee(){
      $query = $this->db->get('EMPLOYEES');
      return $query->result_array();
    }
  }
 ?>
