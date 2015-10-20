<?php

class Portfolio_Controller extends Controller
{
	function __construct()
	{
		$this->model = new Portfolio_Model();
		$this->content_view = 'portfolio_view.php';
		parent::__construct();
	}
	
	public function index_action()
	{
        $this->view->sidebar = false;
		$data = $this->model->getData();
		$this->view->generate($this->content_view, $data);
	}
}
