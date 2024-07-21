<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_products_table extends CI_Migration
{

    public function up()
    {
        $fields = [
            "name" => [
                "type" => "VARCHAR",
                "constraint" => "20"
            ],
            "color" => [
                "type" => "VARCHAR",
                "constraint" => "20"
            ],
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "auto_increment" => true
            ],
            "factory_id" => [
                "type" => "INT",
                "constraint" => 11
            ],
            "date" => [
                "type" => "VARCHAR",
                "constraint" => "14"
            ],
        ];
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('products');
    }

    public function down()
    {
        $this->dbforge->drop_table('products');
    }
}
