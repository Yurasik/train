<?php

class Model
{
    public function redirect($link)
	{
		header('Location: '.$link);
	}

    protected function connect(){
		try{
			$connect = new Mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DATABASE);
			$connect->set_charset(CHARSET);
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
		$result = $this->connect()->query($sql);
		return $this->getAssoc($result);
	}

    protected function selectById($table, $columns, $where)
	{
		$sql = "SELECT $columns FROM $table WHERE id='$where'";
		$result = $this->connect()->query($sql);
		return $this->getAssoc($result);
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

    protected function existUser($name)
    {
        $result = $this->select('users', 'login', array('login' => $name));
        return (null == $result)? false : true;
    }

    protected function checkPassword($login, $password)
    {
        $result = $this->select('users', 'password', array('login' => $login));
        return ($result[0]['password'] != $password)? false : true;
    }
}