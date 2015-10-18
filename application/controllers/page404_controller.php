<?php

class page404_Controller extends Controller
{
	function __construct()
	{
		$this->content_view = 'page404_view.php';
		parent::__construct();
	}

	function index_action()
	{
		$this->view->sidebar = false;
		$this->view->generate($this->content_view);
	}

}
