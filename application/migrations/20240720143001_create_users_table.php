<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_users_table extends CI_Migration
{

    public function up()
    {
        $fields = [
            "name" => [
                "type" => "VARCHAR",
                "constraint" => "20"
            ],
            "username" => [
                "type" => "VARCHAR",
                "constraint" => "20"
            ],
            "password" => [
                "type" => "VARCHAR",
                "constraint" => "20"
            ],
            "date" => [
                "type" => "VARCHAR",
                "constraint" => "14"
            ]
        ];
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('username', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
