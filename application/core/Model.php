<?php

class Model
{
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/

	// метод выборки данных
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
}