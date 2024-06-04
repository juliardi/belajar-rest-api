<?php

/**
 * @var \Ken\Router\Router $router
 */

$router->get('/', function($params, $container) {
    echo 'Index page';
    echo "halo dunia";
});

$router->get('/students', function($params, $container) {
    $pdo = $container->get('pdo');

    $statement = $pdo->prepare("SELECT * FROM students");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
});

$router->get('/students/{nim}', function($params, $container) {
	$nim = $params['nim'];
    $pdo = $container->get('pdo');
    // $pdo = new PDO('mysql:host=localhost;dbname=belajar', 'root', '');

    $statement = $pdo->prepare("SELECT * FROM students WHERE nim=:nim");
    $statement->bindParam(':nim', $nim);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');

    if (count($result) > 0) {
		http_response_code(200);
		echo json_encode($result);
		exit;
	}

    http_response_code(404);
    echo json_encode($result);
});