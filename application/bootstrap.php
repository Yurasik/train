<?php
// Запускаем сессию
session_start();

//function __autoload($class){
//	require_once __DIR__.'/core/'.$class.'.php';
//}

//подключаем конфигурационный файл
require_once 'Config.php';

// подключаем файлы ядра
require_once 'core/Model.php';
require_once 'core/Controller.php';
//require_once 'core/View.php';

//подключаем Twig
require_once dirname(__FILE__).'/../Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register(true);

require_once 'Route.php';
Route::start(); // запускаем маршрутизатор