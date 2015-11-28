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

    public function updateArticle($slug, $newValues)
    {
        $data = $this->updateArticleBySlug('news', $newValues, $slug);
        return $data;
    }

    public function deleteArticle($slug)
    {
        $data = $this->deleteArticleBySlug('news', $slug);
        return $data;
    }

    public function getArticleById($id)
    {
        $data = $this->selectById('news', '*', $id);
        return $data;
    }

    public function getArticleBySlug($slug)
    {
        $data = $this->selectArticleBySlug('news', '*', $slug);
        return $data;
    }


    public function getNews()
    {
        $data = $this->select('news', 'id, title, status, article_slug', '', 'created_at', 'DESC');
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

    public function deleteCategory($slug)
    {
        $data = $this->deleteCategoryBySlug('category', $slug);
        return $data;
    }

    public function getCategory()
    {
        $data = $this->select('category', '*');
        return $data;
    }

    public function getCategoryExceptSlug($slug)
    {
        $data = $this->selectExceptSlug('category', '*', $slug);
        return $data;
    }

    public function getCategoryBySlug($slug)
    {
        $data = $this->select('category', '*', array('category_slug' => $slug));
        return $data;
    }
}