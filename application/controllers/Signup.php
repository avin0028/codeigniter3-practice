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
            $input_username = $this->input->post('username');
            $query = $this->db->get_where("users", ["username" => $input_username]);
            if ($query->num_rows() == 1) {
                echo "duplicate username";
                return;
            }
            $date = date('sihmY'); //second,minute,hour, month, year
            $data = [
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'nickname' => $this->input->post('nickname'),
                'date' => $date
            ];
            $result = $this->users_model->setUser($data);
            $userData = [
                "username" => $result[0]['username'],
                "nickname" => $result[0]['nickname']
            ];
            $this->session->set_userdata($userData);
            redirect('/', 'refresh');
        }
    }
}
