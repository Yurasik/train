<?php

class Portfolio_Controller extends Controller
{
	public function index_action()
	{
        $portfolio_model = $this->loadModel('Portfolio');
		$portfolio = $portfolio_model->getData();
        echo $this->view->render('Portfolio/portfolio_view.html.twig', array('portfolio' => $portfolio));
	}
}
