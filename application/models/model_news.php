<?php

class Model_News extends Model
{
    protected $table;

    function __construct()
    {
        $this->table = 'news';
    }

    public function getData()
    {
        $columns = 'id, title, description';
        $data = $this->select($this->table, $columns);
        return $data;
    }

    public function getDataById($id)
    {
        $columns = 'id, title, full_text';
        $where = $id;
        $data = $this->selectById($this->table, $columns, $where);
        return $data;
    }
}