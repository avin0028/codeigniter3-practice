<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{
    public function migrate()
    {
        $this->load->library('migration');
        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
            echo "migrate rab";
        }
    }

    public function ttt()
    {
        $s = '{
            "status":true,
            "bads" => {},
            "data":[
                {
                    "name":"abbas",
                    "age":25,
                    "married" : null
                },
                {
                    "name":"abbas",
                    "age":25,
                    "married" : null
                },
                {
                    "name":"abbas",
                    "age":25,
                    "married" : null
                }
            ]
        }';

        $data = [
            'status' => true,
            'bads' => ['c' => 'd', 'a', 'b'],
            'data' => [
                [
                    'name' => "abbas",
                    "age" => 25,
                    'married' => null,
                ],
                [
                    'name' => "abbas",
                    "age" => 25,
                    'married' => null,
                ],
                [
                    'name' => "abbas",
                    "age" => 25,
                    'married' => null,
                ],
            ]
        ];

        echo (json_encode($data, JSON_PRETTY_PRINT));
    }
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
