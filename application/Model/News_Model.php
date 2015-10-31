<?php

class News_Model extends Model
{

    public function getNews()
    {
        $sql = "SELECT news.id, news.category_id, news.title, news.description, news.date, category.category_name, users.email
                FROM news
                INNER JOIN category
                ON news.category_id=category.id
                INNER JOIN users
                ON users.id=news.author_id
                AND news.status='published'
                ORDER BY news.date DESC";

        $data = $this->connect()->query($sql);
        if($data){
            $data = $this->getAssoc($data);
        }

        return $data;
    }

    public function getArticleById($id)
    {
        $sql = "SELECT news.id, news.category_id, news.title, news.full_text, news.date, category.category_name, users.email
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

    public function getCategory()
    {
        $data = $this->select($table = 'category', $columns = '*');
        return $data;
    }

    public function getNewsByCategoryId($id)
    {
        $sql = "SELECT news.id, news.category_id, news.title, news.description, news.date, category.category_name, users.email
                FROM news
                INNER JOIN category
                ON news.category_id=$id
                AND news.status='published'
                AND news.category_id=category.id
                INNER JOIN users
                ON users.id=news.author_id
                ORDER BY news.date DESC";

        $data = $this->connect()->query($sql);
        if($data){
            $data = $this->getAssoc($data);
        }

        return $data;
    }

    public function getCategoryNameByCategoryId($id)
    {
        $data = $this->selectById('category', 'category_name', $id);
        return $data;
    }
}