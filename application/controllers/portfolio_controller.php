<?php

class Portfolio_Controller extends Controller
{
	function __construct()
	{
		$this->model = new Portfolio_Model();
		parent::__construct();
	}
	
	public function index_action()
	{
		$data = $this->model->getData();
		$this->view->generate('portfolio_view.php', $data);
	}
}
