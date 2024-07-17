<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{

    public function index()
    {
        $this->load->library('form_validation');
        $data['title'] = "ورود به حساب";

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->load->view('signin');

        if ($this->form_validation->run() == false) {
            echo "form validation didn't run";
        } else {
        }
    }
}
