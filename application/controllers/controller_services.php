<?php

class Controller_Services extends Controller
{
	function __construct()
	{
		$this->content_view = 'services_view.php';
		parent::__construct();
	}

	function action_index()
	{
		$this->view->generate($this->content_view);
	}
}
