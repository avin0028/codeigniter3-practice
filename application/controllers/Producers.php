<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Producers extends CI_Controller
{
    public function index()
    {
        $this->load->model('Producers_model');
        $data['title'] = 'لیست تولیدات';
        $username = $_SESSION['username'];
        $data['result'] = $this->Producers_model->getProducers($username);
        $data['nav'] = $this->load->view('navbar', $data, true);
        $this->load->view('showproducers', $data);
    }
    public function produce()
    {
        $username = $_SESSION['username'];
        $this->load->model('Producers_model');
        $details = $this->Producers_model->getProductiondetails($username);
        $data['employees'] = $details['emps'];
        $data['products'] = $details['prods'];
        $data['title'] = 'تولید جدید';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('employee', 'employeeinput', 'required');
        $this->form_validation->set_rules('product', 'productinput', 'required');
        $this->form_validation->set_rules('quantity', 'quantityinput', 'required');

        if ($this->form_validation->run()) {
            $date = date('sihmY'); //second,minute,hour, month, year
            $data = [
                "employee_id" => $this->input->post('employee'),
                "product_id" => $this->input->post('product'),
                "count" => $this->input->post('quantity'),
                "date" => $date
            ];
            $this->Producers_model->addProducer($data);
            redirect('/producers', 'refresh');
        }



        $this->load->view('addproducer', $data);
    }
}
