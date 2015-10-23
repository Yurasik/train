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
		$data['portfolio'] = $this->model->getData();
        echo $this->view->render('portfolio_view.php', $data);
	}
}
