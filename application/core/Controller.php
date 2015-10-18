<?php

class Controller {
	
	public $model;
	public $view;
	public $content_view;
	
	function __construct()
	{
		$this->view = new View();
	}
}
