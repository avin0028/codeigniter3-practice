<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_factories_table extends CI_Migration
{

    public function up()
    {
        $fields = [
            "title" => [
                "type" => "VARCHAR",
                "constraint" => "30"
            ],
            "owner_username" => [
                "type" => "VARCHAR",
                "constraint" => "20"
            ],
            "address" => [
                "type" => "VARCHAR",
                "constraint" => "100"
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
        $this->dbforge->create_table('factories');
    }

    public function down()
    {
        $this->dbforge->drop_table('factories');
    }
}
