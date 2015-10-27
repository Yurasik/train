<?php
use Routing\UrlGenerator;

class Controller {

    protected $view;
    protected $router;

	function __construct()
	{
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
        if(isset($_SESSION['email'])){
            $this->view->addGlobal('user_login', true);
            $this->view->addGlobal('user_email', $_SESSION['email']);
            $this->view->addGlobal('user_role', Model::isStaff($_SESSION['email']));
        }
//        $getHeader = new Twig_SimpleFunction('get_header', function(){
//
//        });
//        $this->view->addFunction($getHeader);
	}

    public function redirect($link)
    {
        header('Location: '.$link);
    }

    public function loadModel($model)
    {
        $file  = 'application/Model/' . $model . '_Model.php';
        $class = ucfirst(preg_replace('/[^a-zA-Z0-9]/', '', $model)) . '_Model';

        if (file_exists($file)) {
            include_once($file);
        }
        else{
            var_dump($file);
            echo '<br>';
            var_dump($class);
            die('Не удалось подключить модель');
        }
        return new $class;
    }

    protected function stopAndRedirect($url)
    {
        header('Location: ' . $url);

        $content = sprintf(
            '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="refresh" content="1;url=%1$s" /><title>Redirecting to %1$s</title></head><body>Redirecting to <a href="%1$s">%1$s</a>.</body></html>',
            htmlspecialchars($url, ENT_QUOTES, 'UTF-8')
        );

        echo $content;

        exit;
    }
    // public function checkUserData($data) {
    // $input_text = strip_tags($data);
    // $input_text = htmlspecialchars($input_text);
    // $input_text = mysql_escape_string($input_text);
    // $input_text = addslashes($input_text);
    // return $input_text;
    // }
}
