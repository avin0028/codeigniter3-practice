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
        if ($this->input->post('job') == 'changename') {

            $this->load->model('users_model');
            $this->users_model->changeNickname(["username" => $_SESSION['username']], ['nickname' => $this->input->post('newname')]);
            $_SESSION['nickname'] = $this->input->post('newname');
            redirect('/', 'refresh');
        }
        if ($this->input->post('job') == "deleteaccount") {
            $this->load->model('users_model');
            $this->users_model->removeUser(['username' => $_SESSION['username']]);
            echo "حساب شما حذف شد";
            $this->session->unset_userdata(array('username', 'nickname'));
            redirect('/signin', 'refresh');
        }
    }
}
