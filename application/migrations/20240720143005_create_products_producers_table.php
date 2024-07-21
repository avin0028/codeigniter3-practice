<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_products_producers_table extends CI_Migration
{

    public function up()
    {
        $fields = [
            "product_id" => [
                "type" => "INT",
                "constraint" => 11
            ],
            "employee_id" => [
                "type" => "INT",
                "constraint" => 11
            ],
            "count" => [
                "type" => "INT",
                "constraint" => 14
            ],
            "date" => [
                "type" => "VARCHAR",
                "constraint" => "14"
            ],
        ];
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key(['product_id', 'employee_id'], TRUE);
        $this->dbforge->create_table('product_producers');
    }

    public function down()
    {
        $this->dbforge->drop_table('product_producers');
    }
}
