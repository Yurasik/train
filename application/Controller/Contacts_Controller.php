<?php

class Contacts_Controller extends Controller
{

	function index_action()
	{
        echo $this->view->render('contacts_view.php');
	}
}
