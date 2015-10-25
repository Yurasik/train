<?php
use Routing\Router;
use Routing\MatchedRoute;

try {
    $router = new Router(GET_HTTP_HOST());

    //Main
    $router->add('homepage', '/', 'Main_Controller:index_action');
    $router->add('error404', '/404', 'Main_Controller:error404_action');
//    $router->add('staticPage', '/(slug:str).html', 'Controller_Main:action_staticPage');

    //News
    $router->add('news', '/news', 'News_Controller:index_action');
    $router->add('article', '/article/(slug:str)', 'News_Controller:article_action');

    //About
    $router->add('services', '/services', 'Services_Controller:index_action');
    $router->add('contacts', '/contacts', 'Contacts_Controller:index_action');

    //Portfolio
    $router->add('portfolio', '/portfolio', 'Portfolio_Controller:index_action');

    //Users
    $router->add('login', '/users/login', 'Users_Controller:login_action', 'GET|POST');
    $router->add('authorization', '/users/authorization', 'Users_Controller:authorization_action', 'GET|POST');
    $router->add('register', '/users/register', 'Users_Controller:register_action');
    $router->add('logout', '/users/logout', 'Users_Controller:logout_action');
    $router->add('profile', 'users/profile', 'Users_Controller:profile_action');

    //Admin
    $router->add('adminMain', '/admin', 'Admin_Controller:index_action' , 'GET|POST');
    $router->add('adminLogin', '/admin/login', 'Admin_Controller:login_action');
    $router->add('adminLogout', '/admin/logout', 'Admin_Controller:logout_action');
    $router->add('adminNews', '/admin/news', 'Admin_Controller:news_action' , 'GET|POST_action');
    $router->add('adminArticle', '/admin/article/id(id:num)', 'Admin_Controller:article_action' , 'GET|POST');
    $router->add('adminPages', '/admin/pages', 'Admin_Controller:pages_action' , 'GET|POST');
    $router->add('adminOnePage', '/admin/page/id(id:num)', 'Admin_Controller:onepage_action' , 'GET|POST');
    
    $route = $router->match(GET_METHOD(), GET_PATH_INFO());

    if (null == $route) {
        $route = new MatchedRoute('Main_Controller:error404_action');
    }

    list($class, $action) = explode(':', $route->getController(), 2);

    call_user_func_array(array(new $class($router), $action), $route->getParameters());

} catch (Exception $e) {

    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    echo $e->getMessage();
    echo $e->getTraceAsString();
    exit;
}
