<?php

class Model_News extends Model
{
    public function getData()
    {
        $data = $this->select('news');
        return $data;
    }

    public function getDataById($id)
    {
        $data = $this->selectById('news', $id);
        return $data;
    }
}