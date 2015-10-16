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
		$data = $this->select($this->table);
		return $data;
	}

}
