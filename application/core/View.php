<?php

class View
{
    public $header;
    public $footer;
    public $page;
    public $sidebar;
    public static $page_info;

    function __construct()
    {
        $this->header = $this->getHeader();
        $this->page = $this->getPage();
        $this->footer = $this->getFooter();
        $this->sidebar = $this->getSidebar();
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
		$page_id = $page_name.'-page';
		$content_id = $page_name.'-content';

		include 'application/views/template_view.php';
	}

	public function getHeader($view = 'header_view.php')
	{
		return $view;
	}

	public function getFooter($view = 'footer_view.php')
	{
		return $view;
	}

	public function getPage($view = 'page_view.php')
	{
		return $view;
	}

	public function getSidebar($view = 'sidebar_view.php')
	{
		return $view;
	}

    public static function setPageInfo($pageInfo)
    {
        View::$page_info = $pageInfo;
    }

    public static function getPageInfo()
    {
        return View::$page_info;
    }
}
