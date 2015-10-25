<?php
// Запускаем сессию
session_start();

//подключаем конфигурационный файл
require_once 'Config.php';

// подключаем файлы ядра
require_once 'Core'.DS.'Model.php';
require_once 'Core'.DS.'Controller.php';

//подключаем Twig
require_once __DIR__.DS.'..'.DS.'vendor'.DS.'autoload.php';
Twig_Autoloader::register(true);

//__autoload
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (is_file($path)) {
        require $path;
        return;
    }
    else {
        $pathMy = __DIR__ . '/' .  substr($class, strpos($class, '_') + 1, strlen($class)) . '/' .str_replace('\\', '/', $class) . '.php';
        if (is_file($pathMy)) {
            require $pathMy;
            return;
        }
    }
    throw new \LogicException(sprintf('Class "%s" not found in "%s" and in "%s"', $class, $path, $pathMy));
});

require_once __DIR__.DS.'Routing'.DS.'func.php';
require_once __DIR__.DS.'Routing.php';
