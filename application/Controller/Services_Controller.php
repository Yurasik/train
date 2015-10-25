<?php

class Services_Controller extends Controller
{

	function index_action()
	{
		echo $this->view->render('Services/services_view.html.twig');
	}
}
