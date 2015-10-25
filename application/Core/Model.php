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

    public function request($name)
    {
        if(isset($_REQUEST[$name])){
            return $_REQUEST[$name];
        }
    }

	private function getAssoc($data)
	{
		$result = array();
		$num_rows = mysqli_num_rows($data);

		for($i = 0; $i < $num_rows; $i++){
			$result[] = mysqli_fetch_assoc($data);
		}
		return $result;
	}

    protected function select($table, $columns, $where = array())
	{
		$sql = "SELECT $columns FROM $table";
        if($where != ''){
            foreach($where as $k => $v){
                $sql .= " WHERE ".$k."='".$v."'";
            }
        }
		$result = $this->getAssoc($this->connect()->query($sql));
        return (!$result)? false : $result;
	}

    protected function selectById($table, $columns, $where)
	{
		$sql = "SELECT $columns FROM $table WHERE id='$where'";
        $result = $this->getAssoc($this->connect()->query($sql));
        return (!$result)? false : $result;
	}

	protected function insert($table, $values, $newValues)
	{
		$sql = "INSERT INTO $table (";
		$countValues = count($values);
		for($i = 0; $i < $countValues; $i++){
			if(isset($values[$i+1])){
				$sql .= $values[$i].',';
			} else {
				$sql .= $values[$i];
			}
		}
		$sql .= ") VALUES (";
		$countNewValues = count($newValues);
		for($i = 0; $i < $countNewValues;$i++){
			if(isset($newValues[$i+1])){
				$sql .= "'$newValues[$i]'".',';
			} else {
				$sql .= "'$newValues[$i]'";
			}
		}
		$sql .= ");";
		$result = $this->connect()->query($sql);
		return $result;
	}

    protected function existEmail($email)
    {
        $result = $this->select('users', 'email', array('email' => $email));
        return ($result[0]['email'] == $email)? true : false;
    }

    protected function checkPassword($email, $password)
    {
        $result = $this->select('users', 'password', array('email' => $email));
        return ($result[0]['password'] != $password)? false : true;
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

    public function isStaff($email)
    {
        $sql = "SELECT status FROM users WHERE email='$email'";
        $result = $this->getAssoc($this->connect()->query($sql));
        return (!$result)? false : $result[0];
    }

    public static function setMessage($message)
    {
        Model::$message = $message;
    }

    public static function getMessage()
    {
        return Model::$message;
    }
}