<?php

class Main_Controller extends Controller
{

	function index_action()
	{
        $this->view->sidebar= false;
		$this->view->generate('main_view.php');
	}
}