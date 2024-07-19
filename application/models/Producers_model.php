<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Producers_model extends CI_Model
{
    public function getProducers($username)
    {
        //Note: Get all cols from product_producers with 
        // factory id and product id and give it to another
        // query for getting the factory name and product id
        $master_query = $this->db->query("select producers.count as produced ,employees.name as employee_name ,products.name as product_name ,factories.title as factories_name from (select employee_id,count,product_id from product_producers where employee_id in (select id from employees where factory_id in(SELECT id FROM factories where owner_username = '{$username}'))) as producers inner join employees on employees.id = producers.employee_id inner join products on products.id = producers.product_id inner join factories on factories.id = products.factory_id");
        $res = $master_query->result_array();
        return $res;
    }
    public function setProducers()
    {
    }
}
