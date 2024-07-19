<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Producers extends CI_Controller
{
    public function index()
    {
        $this->load->model('Producers_model');
        $data['title'] = 'تولیدات';
        $username = $_SESSION['username'];
        $data['result'] = $this->Producers_model->getProducers($username);
        $this->load->view('showproducers', $data);
    }
}
