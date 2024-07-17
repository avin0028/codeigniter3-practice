<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {

        if (!isset($this->session->nickname)) {
            redirect('/signin', 'refresh');
        }


        $data['title'] = "داشبورد";
        $data['name'] = $this->session->nickname;


        $this->load->library('form_validation');
        $this->load->view('dashboard', $data);
        if ($this->input->post('job') == 'logout') {
            $this->session->unset_userdata(array('username', 'nickname'));
        }
    }
}
