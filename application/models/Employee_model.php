<?php
  class Employee_model extends CI_Model{
    public function __construct(){
      // Connect to the database in this class.
      $this->load->database();
    }

    public function get_employees(){
      $query = $this->db->query('select employee_id, first_name, last_name, email from employees');
      return $query->result_array();
    }

    public function get_employee($id){
      $sql = 'select employee_id, first_name, last_name, email from employees where employee_id = ?';
      $query = $this->db->query($sql, array($id));
      return $query->result_array();
    }
  }
 ?>
