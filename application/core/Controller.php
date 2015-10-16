<?php

class Controller {
	
	public $model;
	public $view;
	public $content_view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
	// действие (action), вызываемое по умолчанию
	public function action_index()
	{
		// todo
	}
}
