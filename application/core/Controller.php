<?php

class Controller {

    protected $view;
    protected $router;
    public $model;
	
	function __construct()
	{
        //$this->view = new View();
        global $router;
        $this->router = $router;
        $loader = new Twig_Loader_Filesystem(DIR_VIEW);
        $this->view = new Twig_Environment($loader, array(
            'cache'       => 'compilation_cache',
            'auto_reload' => true,
            'debug' => true
        ));
        $this->view->addGlobal('url', $this->router);
        $this->view->addExtension(new Twig_Extension_Debug());
	}

    public function redirect($link)
    {
        header('Location: '.$link);
    }
}
