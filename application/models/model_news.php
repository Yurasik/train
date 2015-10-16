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
        $data = $this->select('news');
        return $data;
    }

    public function getDataById($id)
    {
        $data = $this->selectById($this->table, $id);
        return $data;
    }
}