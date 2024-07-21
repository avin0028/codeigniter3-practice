<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Producers_model extends My_Model
{
    protected $table_name = "product_producers";
    public function getProducers($username)
    {
        $res = $this->query("select producers.date, producers.count as produced ,employees.name as employee_name ,products.name as product_name ,factories.title as factories_name from (select employee_id,count,product_id,date from product_producers where employee_id in (select id from employees where factory_id in(SELECT id FROM factories where owner_username = '{$username}'))) as producers inner join employees on employees.id = producers.employee_id inner join products on products.id = producers.product_id inner join factories on factories.id = products.factory_id");
        return $res;
    }
    public function getProductiondetails($username)
    {
        $employees = $this->query("select name,id from employees where factory_id in (SELECT id FROM factories where owner_username = '{$username}')");
        $products = $this->query("select name,id from products where factory_id in (SELECT id FROM factories where owner_username = '{$username}')");
        return [
            "emps" => $employees,
            "prods" => $products
        ];
    }
    public function addProducer($data)
    {
        $this->insert($data);
    }
}
