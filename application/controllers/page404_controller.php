<?php

class page404_Controller extends Controller
{

	function index_action()
	{
		$this->view->sidebar = false;
		$this->view->generate('page404_view.php');
	}

}
