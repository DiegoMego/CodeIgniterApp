<?php
  class Employees extends CI_Controller{
    public function index(){
      $data['title'] = 'Latest Post';
      $this->load->model('Employee_model');
      $data['employees'] = $this->Employee_model->get_employee();
      $this->load->view('templates/header');
      $this->load->view('employees/index', $data);
      $this->load->view('templates/footer');
    }
  }
 ?>
