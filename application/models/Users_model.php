<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends MY_Model
{
    public function normalize_name($name)
    {
        // $res = $this->db->query("SELECT * FROM employees WHERE factory_id = ? and name = ? ", ["tst2", "emp1"])->result_array();
        // foreach ($res as $r) {
        //     //    echo $r['name'] . "</br>";
        // }
        return "hello {$name}" . $this->getsmt();
    }
}
