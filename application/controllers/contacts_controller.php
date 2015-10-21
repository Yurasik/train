<?php

class Contacts_Controller extends Controller
{

	function index_action()
	{
		$this->view->sidebar = false;
		$this->view->generate('contacts_view.php');
	}
}
