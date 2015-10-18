<?php

class News_Model extends Model
{
    protected $table;

    function __construct()
    {
        $this->table = 'news';
    }

    public function getNews()
    {
        $data = $this->select($this->table, $columns = 'id, title, description');
        return $data;
    }

    public function getNewsItem($id)
    {
        $data = $this->selectById($this->table, $columns = 'id, title, full_text', $id);
        return $data;
    }
}