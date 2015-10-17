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
		session_start();
		// контроллер и действие по умолчанию
		$controllerName = 'Main';
		$actionName = 'index';

		if(strpos($_SERVER['REQUEST_URI'], '?') === false){
			$routes = explode('/', $_SERVER['REQUEST_URI']);
		} else {
			$explodeForTrimId = explode('?', $_SERVER['REQUEST_URI']);
			$removeId = explode('=', $explodeForTrimId[1]);
			$id = $removeId[1];
			$routes = explode('/', $explodeForTrimId[0]);
		}

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
		$modelName = 'Model_'.$controllerName;
		$controllerName = 'Controller_'.$controllerName;
		$actionName = 'action_'.$actionName;

		/*
		echo "Model: $modelName <br>";
		echo "Controller: $controllerName <br>";
		echo "Action: $actionName <br>";
		*/

		// подцепляем файл с классом модели (файла модели может и не быть)
		$modelFile = strtolower($modelName).'.php';
		$modelPath = "application/models/".$modelFile;
		if(file_exists($modelPath))
		{
			include $modelPath;
		}

		// подцепляем файл с классом контроллера
		$controllerFile = strtolower($controllerName).'.php';
		$controllerPath = "application/controllers/".$controllerFile;
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
			if(isset($id) && $id != ''){
				$controller->$action($id);
			} else {
				$controller->$action();
			}
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
		header('Location:'.$host.'404');
    }
    
}
