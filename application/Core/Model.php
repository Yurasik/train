<?php

class Model
{
    public static $message;

    public function redirect($link)
    {
        header('Location: '.$link);
    }

    protected function connect(){
		try{
			$connect = new Mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			$connect->set_charset(DB_CHARSET);
			return $connect;
		} catch (Exception $e){
			echo $e->getMessage();
		}
	}

    protected function insert($table, $values)
    {
        $sql = "INSERT INTO $table (";
        foreach($values as $key => $value){
            $sql .= $key.",";
        }
        $sql = substr($sql, 0, -1);
        $sql .= ") VALUES (";
        foreach($values as $key => $value){
            $sql .= "'$value'".",";
        }
        $sql = substr($sql, 0, -1);
        $sql .= ");";
        $result = $this->connect()->query($sql);
        return $result;
    }

    protected function select($table, $columns, $where = array(), $order = '', $desc = '')
	{
		$sql = "SELECT $columns FROM $table";
        if($where != ''){
            foreach($where as $k => $v){
                $sql .= " WHERE ".$k."='".$v."'";
            }
        }
        if($order != ''){
            $sql .= " ORDER BY ".$order;
            if($desc != ''){
                $sql .= " ".$desc.";";
            } else {
                $sql .= ";";
            }
        }
		$result = $this->getAssoc($this->connect()->query($sql));
        if($result && count($result) < 2){
            return $result[0];
        } elseif($result && count($result) >= 2){
            return $result;
        } else {
            return false;
        }
	}

    protected function selectExceptId($table, $columns, $id)
    {
        $sql = "SELECT $columns FROM $table WHERE id !='".$id."'";
        $result = $this->getAssoc($this->connect()->query($sql));
        if($result && count($result) < 2){
            return $result[0];
        } elseif($result && count($result) >= 2){
            return $result;
        } else {
            return false;
        }
    }

    protected function selectExceptSlug($table, $columns, $slug)
    {
        $sql = "SELECT $columns FROM $table WHERE category_slug !='".$slug."'";
        $result = $this->getAssoc($this->connect()->query($sql));
        if($result && count($result) < 2){
            return $result[0];
        } elseif($result && count($result) >= 2){
            return $result;
        } else {
            return false;
        }
    }

    protected function selectByJoin($table1, $column = array(), $table2)
    {
        $sql = "SELECT ";
        foreach($column as $value){
            $sql .= $table1.".".$value.",";
        }
        $sql = substr($sql, 0, -1);
        $sql .= " FROM $table1 INNER JOIN $table2 ON ";
    }

    protected function selectById($table, $columns, $where)
	{
		$sql = "SELECT $columns FROM $table WHERE id='$where'";
        $result = $this->getAssoc($this->connect()->query($sql));
        return (!$result)? false : $result[0];
	}

    protected function selectArticleBySlug($table, $columns, $slug)
    {
        $sql = "SELECT $columns FROM $table WHERE article_slug='$slug'";
        $result = $this->getAssoc($this->connect()->query($sql));
        return (!$result)? false : $result[0];
    }

    protected function updateById($table_name, $newValues, $id)
    {
        $sql = "UPDATE $table_name SET ";
        foreach($newValues as $key => $value){
            $sql .= "$key='$value',";
        }
        $sql = substr($sql, 0, -1);
        $sql .= "WHERE id='$id'";
        $result = $this->connect()->query($sql);
        return ($result)? true : false;
    }

    protected function updateArticleBySlug($table_name, $newValues, $slug)
    {
        $sql = "UPDATE $table_name SET ";
        foreach($newValues as $key => $value){
            $sql .= "$key='$value',";
        }
        $sql = substr($sql, 0, -1);
        $sql .= "WHERE article_slug='$slug'";
        $result = $this->connect()->query($sql);
        return ($result)? true : false;
    }

    protected function deleteById($table_name, $id)
    {
        $sql = "DELETE FROM $table_name WHERE id='$id'";
        $result = $this->connect()->query($sql);
        return ($result)? true : false;
    }

    protected function deleteArticleBySlug($table_name, $slug)
    {
        $sql = "DELETE FROM $table_name WHERE article_slug='$slug'";
        $result = $this->connect()->query($sql);
        return ($result)? true : false;
    }

    protected function deleteCategoryBySlug($table_name, $slug)
    {
        $sql = "DELETE FROM $table_name WHERE category_slug='$slug'";
        $result = $this->connect()->query($sql);
        return ($result)? true : false;
    }

    public function request($name)
    {
        if(isset($_REQUEST[$name])){
            return $_REQUEST[$name];
        }
    }

    protected function getAssoc($data)
    {
        $result = array();
        $num_rows = mysqli_num_rows($data);

        for($i = 0; $i < $num_rows; $i++){
            $result[] = mysqli_fetch_assoc($data);
        }
        return $result;
    }

    protected function existEmail($email)
    {
        $result = $this->select('users', 'email', array('email' => $email));
        return ($result['email'] == $email)? true : false;
    }

    protected function checkPassword($email, $password)
    {
        $result = $this->select('users', 'password', array('email' => $email));
        return ($result['password'] != $password)? false : true;
    }

    protected function validEmail($email){
        return (!preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i", $email) || $email = '')? false : true;
    }

    private function isContainQuotes($string){
        $array = array("\"", "'", "`", "&quot;", "&apos;");
        foreach ($array as $key => $value) {
            if(strpos($string, $value) !== false) return true;
        }
        return false;
    }

    static public function isStaff($email)
    {
        try{
            $connect = new Mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
            $connect->set_charset(DB_CHARSET);
        } catch (Exception $e){
            echo $e->getMessage();
        }

        $sql = "SELECT status FROM users WHERE email='$email'";
        $data = $connect->query($sql);
        $result = array();
        $num_rows = mysqli_num_rows($data);

        for($i = 0; $i < $num_rows; $i++){
            $result[] = mysqli_fetch_assoc($data);
        }

        return $result[0]['status'];
    }

    public function getDescription($full_text)
    {
        return substr($full_text, 0, 250);
    }

    public static function setMessage($message)
    {
        Model::$message = $message;
    }

    public static function getMessage()
    {
        return Model::$message;
    }

    public function getAuthorId($email)
    {
        $data = $this->select('users', 'id', array('email' => $email));
        return $data;
    }

    public function getDate($format, $uTime)
    {
        $date = date($format, $uTime);
        return $date;
    }

    public function makeTranslite($string)
    {
        $string = trim($string);

        $translite = array(' ' => '-', '%' => '', 'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'j',
            'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'i', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
            'A' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'J',
            'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
            'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'I', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',);

        $data = strtr($string, $translite);

        return strtolower($data);
    }
}