<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{
	static function start()
	{
		// контроллер и действие по умолчанию
		$controllerName = 'main';
		$actionName = 'index';

		$forExplode = explode('?', $_SERVER['REQUEST_URI']);
		$routes = explode('/', $forExplode[0]);

		// получаем имя контроллера
		if(!empty($routes[1]))
		{
			$controllerName = $routes[1];
		}
		
		// получаем имя экшена
		if(!empty($routes[2]))
		{
			$actionName = $routes[2];
		}

		// добавляем префиксы
		$modelName = $controllerName.'_Model';
		$controllerName = $controllerName.'_Controller';
		$actionName = $actionName.'_action';

		/*
		echo "Model: $modelName <br>";
		echo "Controller: $controllerName <br>";
		echo "Action: $actionName <br>";
		*/

		// подцепляем файл с классом модели (файла модели может и не быть)
		$modelFile = ucfirst($modelName).'.php';
		$modelPath = "application/Model/".$modelFile;
		if(file_exists($modelPath))
		{
			include $modelPath;
		}

		// подцепляем файл с классом контроллера
		$controllerFile = ucfirst($controllerName).'.php';
		$controllerPath = "application/Controller/".$controllerFile;
		if(file_exists($controllerPath))
		{
			include $controllerPath;
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/
			Route::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controllerName;
		$action = $actionName;
		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404();
		}
	
	}

	public function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'page404');
    }
    
}
