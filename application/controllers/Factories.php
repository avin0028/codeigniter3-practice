<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Factories extends CI_Controller
{
    public function index()
    {
        $data['title'] = "لیست کارخانه ها";
        $this->load->model('Factories_model');
        $data['result'] = $this->Factories_model->getFactories();
        $this->load->library('form_validation');

        $data['nav'] = $this->load->view('navbar', $data, true);
        $this->load->view('showfactories', $data);


        $this->form_validation->set_rules('deletefactory', 'deletefactory', 'required');

        if ($this->form_validation->run()) {
            $id = $this->input->post('deletefactory');
            $this->Factories_model->deleteFactory($id);
            redirect('/factories', 'refresh');
        }
    }
    public function addfactory()
    {
        $data['title'] = "افزودن کارخانه";
        $this->load->model('Factories_model');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('factorytitle', 'factorytitle', 'required');
        $this->form_validation->set_rules('factoryaddress', 'factoryaddress', 'required');

        $this->load->view('addfactory', $data);

        if ($this->form_validation->run()) {
            $res = $this->Factories_model->setFactory();
            if ($res) {
                redirect('/factories', 'refresh');
            }
        }
    }
}
