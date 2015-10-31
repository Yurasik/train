<?php

class admin_model extends Model
{
    public function addArticle($values)
    {
        $data = $this->insert('news', $values);
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

    public function getArticleById($id)
    {
        $data = $this->selectById('news', '*', $id);
        return $data;
    }

    public function getNews()
    {
        $data = $this->select('news', 'id, title, status', '', 'date', 'DESC');
        return $data;
    }

    public function addCategory($values)
    {
        $data = $this->insert('category', $values);
        return $data;
    }

    public function editCategoryById($id, $newValues)
    {
        $data = $this->updateById('category', $newValues, $id);
        return $data;
    }

    public function deleteCategoryById($id)
    {
        $data = $this->deleteById('category', $id);
        return $data;
    }

    public function getCategory()
    {
        $data = $this->select('category', '*');
        return $data;
    }

    public function getCategoryExceptId($id)
    {
        $data = $this->selectExceptId('category', '*', $id);
        return $data;
    }

    public function getCategoryById($id)
    {
        $data = $this->selectById('category', '*', $id);
        return $data;
    }
}