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
        $this->load->model('Products_model');
        $this->load->library('form_validation');
        $data['factoryid'] = $factory_id;
        $data['title'] = 'مشاهده کارمندان';
        $data['result'] = $this->Products_model->getproducts($factory_id);
        $this->form_validation->set_rules('deleteproduct', 'deleteproduct', 'required');
        if ($this->form_validation->run()) {
            $id = $this->input->post('deleteproduct');
            $this->Products_model->removeProduct($id);
            redirect(current_url() . "?factoryid={$factory_id}", 'refresh');
        }
        $data['nav'] = $this->load->view('navbar', $data, true);


        $this->load->view('showproducts', $data);
    }
    public function addNew()
    {
        $factory_id = $this->input->get('factoryid');
        if (!$factory_id) {
            echo "factory id is not given";
            die;
        }
        $data['title'] = "افزودن محصول";
        $this->load->model('Products_model');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'inputname', 'required');
        $this->form_validation->set_rules('color', 'inputcolor', 'required');

        $this->load->view('addproduct', $data);

        if ($this->form_validation->run()) {
            $date = date('sihmY'); //second,minute,hour, month, year
            $data = [
                'name' => $this->input->post('name'),
                'color' => $this->input->post('color'),
                'factory_id' => $this->input->get('factoryid'),
                "date" => $date
            ];
            $this->Products_model->addproduct($data);
            redirect("/products?factoryid={$factory_id}", 'refresh');
        }
    }
}
