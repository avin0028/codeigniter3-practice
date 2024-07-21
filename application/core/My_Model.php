<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_Model extends CI_Model
{

    protected $table_name;


    protected function get_where($condition)
    {
        $query = $this->db->get_where($this->table_name, $condition);
        return $query->result_array();
    }
    protected function insert($data)
    {
        return $this->db->insert($this->table_name, $data);
    }
    protected function update($condition, $data)
    {
        $this->db->where($condition);
        return $this->db->update($this->table_name, $data);
    }
    protected function delete($condition)
    {
        return $this->db->delete($this->table_name, $condition);
    }

    protected function query($q)
    {
        $res =  $this->db->query($q);
        return $res->result_array();;
    }
}

class pain
{
    protected $table_name;
    protected $type;

    protected function get($where)
    {
        global $dbConnection;
        $_where = "";
        foreach ($where as $k => $v) {
            if (!empty($_where)) {
                $_where .= " and ";
            }
            $_where .= "$k = '$v' ";
        }
        $res =  mysqli_query($dbConnection, "SELECT * FROM {$this->table_name} WHERE {$_where}");
        $res = mysqli_fetch_assoc($res);
        $obj = new $this->type($res);
        return $obj;
    }

    protected function query($q)
    {
        global $dbConnection;
        $res =  mysqli_query($dbConnection, $q);
        $res = mysqli_fetch_assoc($res);
        $obj = new $this->type($res);
        return $obj;
    }
}
