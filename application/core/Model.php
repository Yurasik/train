<?php

class Model
{
	public function redirect($link)
	{
		header('Location: '.$link);
	}

	public function get_data()
	{
		// todo
	}

	public function connect(){
		try{
			$connect = new Mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DATABASE);
			$connect->set_charset(CHARSET);
			return $connect;
		} catch (Exception $e){
			echo $e->getMessage();
		}
	}

	public function getAssoc($data)
	{
		$result = array();
		$num_rows = mysqli_num_rows($data);

		for($i = 0; $i < $num_rows; $i++){
			$result[] = mysqli_fetch_assoc($data);
		}
		return $result;
	}

	public function select($table, $columns)
	{
		$sql = "SELECT $columns FROM $table";
		$result = $this->connect()->query($sql);
		return $this->getAssoc($result);
	}

	public function selectById($table, $columns, $where)
	{
		$sql = "SELECT $columns FROM $table WHERE id='$where'";
		$result = $this->connect()->query($sql);
		return $this->getAssoc($result);
	}

	public function insert($table, $values, $newValues)
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
}