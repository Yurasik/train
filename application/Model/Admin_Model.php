<?php

class admin_model extends Model
{
    public function getNews()
    {
        $data = $this->select('news', 'id, title');
        return $data;
    }

    public function addArticle($values)
    {
        $data = $this->insert('news', $values);
        return $data;
    }

    public function getArticleById($id)
    {
        $data = $this->selectById('news', '*', $id);
        return $data;
    }

    public function getCategory()
    {
        $data = $this->select('category', '*');
        return $data;
    }

    public function updateArticleById($id, $newValues)
    {
        $data = $this->updateById('news', $newValues, $id);
        return $data;
    }

    public function deleteArticleById($id)
    {
        $data = $this->deleteById('news', $id);
        return $data;
    }

    public function getAuthorId($email)
    {
        $data = $this->select('users', 'id', array('email' => $email));
        return $data;
    }
}