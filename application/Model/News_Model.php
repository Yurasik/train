<?php

class News_Model extends Model
{

    public function getNews()
    {
        $sql = "SELECT news.id, news.title, news.description, news.date, category.category_name, users.email
                FROM news
                INNER JOIN category
                ON news.category_id=category.id
                INNER JOIN users
                ON users.id=news.author_id";

        $data = $this->connect()->query($sql);
        if($data){
            $data = $this->getAssoc($data);
        }

        return $data;
    }

    public function getArticleById($id)
    {
        $data = $this->selectById($table = 'news', $columns = 'id, category_id, title, full_text, date', $id);
        return $data;
    }

    public function getCategory()
    {
        $data = $this->select($table = 'category', $columns = '*');
        return $data;
    }

    public function getNewsByCategoryId($id)
    {
        $sql = "SELECT news.id, news.title, news.description, news.date, category.category_name, users.email
                FROM news
                INNER JOIN category
                ON news.category_id=$id
                AND news.category_id=category.id
                INNER JOIN users
                ON users.id=news.author_id";

        $data = $this->connect()->query($sql);
        if($data){
            $data = $this->getAssoc($data);
        }

        return $data;
    }
}