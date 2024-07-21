<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends My_Model
{
    protected $table_name = "users";
    public function getUser($condition)
    {

        return $this->get_where($condition);
    }

    public function changeNickname($name, $newName)
    {
        return $this->update($name, $newName);
    }
    public function removeUser($condition)
    {
        $this->delete($condition);
    }
    public function setUser($data)
    {
        return $this->insert($data);
    }
}
