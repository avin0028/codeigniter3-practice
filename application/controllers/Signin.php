<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{

    public function index()
    {
        if (isset($this->session->nickname)) {
            redirect('/', 'refresh');
        }
        $this->load->library('form_validation');
        $data['title'] = "ورود به حساب";

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $this->load->view('signin', $data);

        if ($this->form_validation->run()) {

            $this->load->model('users_model');
            $result = $this->users_model->getUser();
            $userData = array(
                "username" => $result['username'],
                "nickname" => $result['nickname']
            );
            $this->session->set_userdata($userData);
            redirect('/', 'refresh');
        }
    }
}
