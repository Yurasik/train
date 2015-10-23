<?php

class admin_model extends Model
{
    public function getNews()
    {
        $data = $this->select('news', $columns = 'id, title');
        return $data;
    }
}