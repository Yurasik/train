<?php

class News_Model extends Model
{

    public function getNews()
    {
        $sql = "SELECT news.id, news.category_id, news.title, news.description, news.created_at, news.article_slug, category.category_name, category.category_slug, users.email
                FROM news
                INNER JOIN category
                ON news.category_id=category.id
                INNER JOIN users
                ON users.id=news.author_id
                AND news.status='published'
                ORDER BY news.created_at DESC";

        $data = $this->connect()->query($sql);
        if($data){
            $data = $this->getAssoc($data);
        }

        return $data;
    }

    public function getArticleById($id)
    {
        $sql = "SELECT news.id, news.category_id, news.title, news.full_text, news.created_at, category.category_name, category.category_slug, users.email
                FROM news
                INNER JOIN category
                ON news.category_id=category.id
                AND news.id=$id
                INNER JOIN users
                ON users.id=news.author_id";

        $data = $this->getAssoc($this->connect()->query($sql));
        if(count($data) < 2){
            return $data[0];
        } else {
            return $data;
        }
    }

    public function getArticleBySlug($slug)
    {
        $sql = "SELECT news.id, news.category_id, news.title, news.full_text, news.created_at, news.article_slug, category.category_name, category.category_slug, users.email
                FROM news
                INNER JOIN category
                ON news.category_id=category.id
                AND news.article_slug='$slug'
                INNER JOIN users
                ON users.id=news.author_id";

        $data = $this->getAssoc($this->connect()->query($sql));
        if(count($data) < 2){
            return $data[0];
        } else {
            return $data;
        }
    }

    public function getCategory()
    {
        $data = $this->select($table = 'category', $columns = '*');
        return $data;
    }

    public function getNewsByCategoryId($id)
    {
        $sql = "SELECT news.id, news.category_id, news.title, news.description, news.created_at, news.article_slug, category.category_name, category.category_slug, users.email
                FROM news
                INNER JOIN category
                ON news.category_id=$id
                AND news.status='published'
                AND news.category_id=category.id
                INNER JOIN users
                ON users.id=news.author_id
                ORDER BY news.created_at DESC";

        $data = $this->connect()->query($sql);
        if($data){
            $data = $this->getAssoc($data);
        }

        return $data;
    }

    public function getCategoryBySlug($slug)
    {
        $data = $this->select('category', 'category_name, id', array('category_slug' => $slug));
        return $data;
    }
}