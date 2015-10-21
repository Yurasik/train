<?php

class Services_Controller extends Controller
{

	function index_action()
	{
        $this->view->sidebar = false;
		$this->view->generate('services_view.php');
	}
}
