<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{

    public function index()
    {
        $factory_id = $this->input->get('factoryid');
        if (!$factory_id) {
            echo "factory id is not given";
            die;
        }
    }
}
