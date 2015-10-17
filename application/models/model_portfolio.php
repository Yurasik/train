<?php

class Model_Portfolio extends Model
{
	protected $table;

	function __construct()
	{
		$this->table = 'portfolio';
	}

	public function getData()
	{
		$columns = 'year, url, description';
		$data = $this->select($this->table, $columns);
		return $data;
	}

}
