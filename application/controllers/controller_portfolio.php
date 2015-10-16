<?php

class Controller_Portfolio extends Controller
{
	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->content_view = 'portfolio_view.php';
		parent::__construct();
	}
	
	public function action_index()
	{
		$data = $this->model->getData();
		$this->view->generate($this->content_view, $data);
	}
}
