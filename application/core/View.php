<?php

class View
{
    public $header;
    public $footer;
    public $page;
    public $sidebar;
    public static $message;

    function __construct()
    {
        $this->header = 'header_view.php';
        $this->footer = 'footer_view.php';
        $this->page = 'page_view.php';
        $this->sidebar = false;
    }

	public function generate($content_view, $data = null)
	{
        /* Подключаем шаблоны */
        $header_view = $this->header;
        $page_view = $this->page;
        $footer_view = $this->footer;
        $sidebar_view = $this->sidebar;

        /* Присваиваем CSS классы страничкам */
		$page_name = str_replace('_view.php', '', $content_view);
        $page_name = str_replace('_', '-', $page_name);
		$page_id = $page_name.'-page';
		$content_id = $page_name.'-content';

		include 'application/Views/template_view.php';
	}

	public function getSidebar($view = 'sidebar_view.php')
	{
		return $view;
	}

    public static function setMessage($message)
    {
        View::$message = $message;
    }

    public static function getMessage()
    {
        return View::$message;
    }
}
