<?php

class Services_Controller extends Controller
{
	function __construct()
	{
		$this->content_view = 'services_view.php';
		parent::__construct();
	}

	function index_action()
	{
		$this->view->generate($this->content_view);
	}
}
