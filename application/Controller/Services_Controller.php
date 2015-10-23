<?php

class Services_Controller extends Controller
{

	function index_action()
	{
		echo $this->view->render('services_view.php');
	}
}
