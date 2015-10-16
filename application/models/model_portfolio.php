<?php

class Model_Portfolio extends Model
{
	
	public function getData()
	{
		$data = $this->select('portfolio');
		return $data;
	}

}
