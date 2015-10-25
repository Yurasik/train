<?php

class Contacts_Controller extends Controller
{
	function index_action()
	{
        echo $this->view->render('Contacts/contacts_view.html.twig');
	}
}
