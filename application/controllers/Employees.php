<?php
  class Employees extends CI_Controller{
    public function index(){
      $this->load->model('Employee_model');
      $data['employees'] = $this->Employee_model->get_employees();
      $this->load->view('templates/header');
      $this->load->view('employees/index', $data);
      $this->load->view('templates/footer');
    }

    public function view(){
      $id = $this->input->post('id');
      $this->load->model('Employee_model');
      $data = $this->Employee_model->get_employee($id);
      print_r(json_encode($data));
    }
  }
 ?>
