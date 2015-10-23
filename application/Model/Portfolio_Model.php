<?php

class Portfolio_Model extends Model
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
