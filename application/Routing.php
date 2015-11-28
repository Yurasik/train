<?php
use Routing\Router;
use Routing\MatchedRoute;

try {
    $router = new Router(GET_HTTP_HOST());

    // Main
    $router->add('homepage', '/', 'Main_Controller:index_action');
    $router->add('error404', '/404', 'Main_Controller:error404_action');
//    $router->add('staticPage', '/(slug:str).html', 'Controller_Main:action_staticPage');

    // News
    $router->add('news', '/news', 'News_Controller:index_action');
    $router->add('article', '/news/(slug:str)', 'News_Controller:article_action');
    $router->add('newsCategory', '/news/category/(slug:str)', 'News_Controller:category_action');

    // About
    $router->add('services', '/services', 'Services_Controller:index_action');
    $router->add('contacts', '/contacts', 'Contacts_Controller:index_action');

    // Portfolio
    $router->add('portfolio', '/portfolio', 'Portfolio_Controller:index_action');


    // Users - Register and Authorization
    $router->add('register', '/register', 'Users_Controller:register_action', 'GET|POST');
    $router->add('login', '/login', 'Users_Controller:login_action', 'GET|POST');
    $router->add('logout', '/logout', 'Users_Controller:logout_action');
    // Users - Profile
    $router->add('profile', '/profile', 'Users_Controller:profile_action', 'GET|POST');
    $router->add('submitArticle', '/submit/article', 'Users_Controller:submit_article_action', 'GET|POST');

    // Admin
    $router->add('adminMain', '/admin', 'Admin_Controller:index_action', 'GET|POST');
    // Admin - News
    $router->add('adminNews', '/admin/news', 'Admin_Controller:news_action', 'GET|POST');
    // Admin - Article
    $router->add('articleAdd', '/admin/article/add', 'Admin_Controller:article_add_action', 'GET|POST');
    $router->add('articleEdit', '/admin/article/edit/(slug:str)', 'Admin_Controller:article_edit_action', 'GET|POST');
    $router->add('articleDelete', '/admin/article/delete/(slug:str)', 'Admin_Controller:article_delete_action', 'GET|POST');
    // Admin - Category
    $router->add('category', '/admin/category', 'Admin_Controller:category_action');
    $router->add('categoryAdd', '/admin/category/add', 'Admin_Controller:category_add_action', 'GET|POST');
    $router->add('categoryEdit', '/admin/category/edit/(slug:str)', 'Admin_Controller:category_edit_action', 'GET|POST');
    $router->add('categoryDelete', '/admin/category/delete/(slug:str)', 'Admin_Controller:category_delete_action', 'GET|POST');

//    $router->add('adminPages', '/admin/pages', 'Admin_Controller:pages_action' , 'GET|POST');
//    $router->add('adminOnePage', '/admin/page/id(id:num)', 'Admin_Controller:onepage_action' , 'GET|POST');
    
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
