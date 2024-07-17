<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function sayHello($name = "world", $name2 = "")
    {
        $this->load->helper("number_helper");

        //var_dump($this->input->get("a"));
        //echo " hello {$name}";
        //if ($name != "")
        //    echo " i am {$name2}";

        echo normalize_number("1234");
        echo normalize_number("۱۲۳۴");

        $this->load->model("users_model");
        // echo $this->users_model->normalize_name($name);

        $c = $this->load->view("avin", [
            'esm' => $name,
            'from' => $name2
        ], true);

        $this->load->view('master', [
            'content' => $c,
        ]);
    }
}
