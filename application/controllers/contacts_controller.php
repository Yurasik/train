<?php

class Contacts_Controller extends Controller
{
	function __construct()
	{
		$this->content_view = 'contacts_view.php';
		parent::__construct();
	}

	function index_action()
	{
		$this->view->sidebar = false;
		$this->view->generate($this->content_view);
	}
}
