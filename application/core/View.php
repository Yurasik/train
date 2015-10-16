<?php

class View
{
	public $header;
	public $footer;
	public $page;
	public $sidebar;
	public $template;

	function __construct()
	{
		$this->header = $this->getHeader();
		$this->footer = $this->getFooter();
		$this->page = $this->getPage();
		$this->sidebar = $this->getSidebar();
		$this->template = $this->getPageTemplate();
	}

	public function generate($content_view, $data = null)
	{
		/*
		if(is_array($data)) {
			
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
		$header_view = $this->header;
		$footer_view = $this->footer;
		$page_view = $this->page;
		$sidebar_view = $this->sidebar;
		$template_view = $this->template;
		$page_name = str_replace('_view.php', '', $content_view);
		$page_id = $page_name.'-page';
		$content_id = $page_name.'-content';
		include 'application/views/'.$template_view;
	}

	public function getHeader()
	{
		$default_header = 'header_view.php';
		$header_view = $default_header;
		return $header_view;
	}

	public function getFooter()
	{
		$default_footer = 'footer_view.php';
		$footer_view = $default_footer;
		return $footer_view;
	}

	public function getPage()
	{
		$default_page = 'page_view.php';
		$page_view = $default_page;
		return $page_view;
	}

	public function getPageTemplate()
	{
		$default_template_view = 'template_view.php';
		$template_view = $default_template_view;
		return $template_view;
	}

	public function getSidebar()
	{
		$default_sidebar_view = 'sidebar_view.php';
		$sidebar_view = $default_sidebar_view;
		return $sidebar_view;
	}
}
