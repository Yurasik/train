<?php

class Controller_404 extends Controller
{
	function __construct()
	{
		$this->content_view = '404_view.php';
		parent::__construct();
	}

	function action_index()
	{
		$this->view->generate($this->content_view);
	}

}
