<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{

    public function index()
    {
        $factory_id = $this->input->get('factoryid');
        if (!$factory_id) {
            echo "factory id is not given";
            die;
        }
        $this->load->model('Employees_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('deleteemployee', 'deleteemployee', 'required');
        $data['result'] = $this->Employees_model->getEmployees($factory_id);
        $data['title'] = 'مشاهده کارمندان';
        $this->load->view('showemployees', $data);
        if ($this->form_validation->run()) {
            echo "pain";
            $id = $this->input->post('deleteemployee');
            $this->Employees_model->removeEmployee($id);
            redirect("/emplooyees", 'refresh');
        }
    }
    public function addnew()
    {
        $data['title'] = "افزودن کارمند";
        $this->load->model('Factories_model');
        $data['factories'] = $this->Factories_model->getFactories();
        $this->load->model('Employees_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('employee_name', 'employee_name', 'required');
        $this->load->view('addemplooyee', $data);
        if ($this->form_validation->run()) {
            $date = date('sihmY'); //second,minute,hour, month, year
            $data = array(
                "name" => $this->input->post('employee_name'),
                "factory_id" => $this->input->post('factoryid'),
                "date" => $date
            );
            $this->Employees_model->setEmployees($data);
        }
    }
}
