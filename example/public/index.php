<?php

use App\Helpers\DbConnection;

require_once __DIR__ . '/../vendor/autoload.php';

// create new instance
$router = new \Ken\Router\Router();
$container = new \Ken\Container\Container();

$dbConfig = require_once __DIR__ . '/../config/database.php';

$container->set('pdo', function() use ($dbConfig) {
	$dsn = $dbConfig['driver'] . ':host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['database'];
		
	if (isset($dbConfig['port'])) {
		$dsn .= ';port=' . $dbConfig['port'];
	}
	
	$pdo = new \PDO($dsn, $dbConfig['username'], $dbConfig['password']);
	$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

	return $pdo;
});

// define not found handler
$router->setNotFoundHandler(function($params = []) {
    echo "Route '" . $params['route'] . "' not found.";
});

include_once __DIR__ . '/../routes/api.php';

// Get route path
$routePath = $_SERVER['PATH_INFO'] ?? '/';

// Get request method
$requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

// Resolves route
$routeObject = $router->resolve($routePath, $requestMethod);

// If $routeObject is not null
if($routeObject) {
    if (isset($routeObject['before'])) {
        foreach ($routeObject['before'] as $before) {
            call_user_func($before);
        }
    }

    // You can add some custom parameters here, like HttpRequest and HttpResponse object
    call_user_func_array($routeObject['handler'], [$routeObject['params'], $container]);

    if (isset($routeObject['after'])) {
        foreach ($routeObject['after'] as $after) {
            call_user_func($after);
        }
    }
} else {
    echo "Route '" . $routePath . "' not found.";
}