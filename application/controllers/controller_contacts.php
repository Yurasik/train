<?php

class Controller_Contacts extends Controller
{
	function __construct()
	{
		$this->content_view = 'contacts_view.php';
		parent::__construct();
	}

	function action_index()
	{
		$this->view->sidebar = false;
		$this->view->generate($this->content_view);
	}
}
