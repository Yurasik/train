<?php

class Controller_Main extends Controller
{
	function __construct()
	{
		$this->content_view = 'main_view.php';
		parent::__construct();
	}

	function action_index()
	{
		$this->view->sidebar = false;
		$this->view->generate($this->content_view);
	}
}