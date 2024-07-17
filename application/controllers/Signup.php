<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

    public function index()
    {

        if (isset($this->session->nickname)) {
            redirect('/', 'refresh');
        }

        $this->load->library('form_validation');
        $data['title'] = "ایجاد حساب کاربری";

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nickname', 'nickname', 'required');

        $this->load->view('signup', $data);

        if ($this->form_validation->run()) {

            $this->load->model('users_model');
            $result = $this->users_model->setUser();
            // $userData = array(
                "username" => $result['username'],
                "nickname" => $result['nickname'],
            );
            $this->session->set_userdata($userData);
            // redirect('/', 'refresh');
        }
    }
}
