<?php

class News_Model extends Model
{

    public function getNews()
    {
        $data = $this->select('news', $columns = 'id, title, description');
        return $data;
    }

    public function getArticleById($id)
    {
        $data = $this->selectById('news', $columns = 'id, title, full_text', $id);
        return $data;
    }
}