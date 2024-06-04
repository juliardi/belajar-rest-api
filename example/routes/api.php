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

    header('Content-Type: application/json');

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

$router->post('/students', function($params, $container) {
    $data = $_POST['mahasiswa'];
    $pdo = $container->get('pdo');

    $statement = $pdo->prepare("INSERT INTO students (nim, name, address, birthdate, faculty_id, created_at) VALUES (:nim, :name, :address, :birthdate, :faculty_id, :created_at)");

    $statement->bindParam(':nim', $data['nim']);
    $statement->bindParam(':name', $data['name']);
    $statement->bindParam(':address', $data['address']);
    $statement->bindParam(':birthdate', $data['birthdate']);
    $statement->bindParam(':faculty_id', $data['faculty_id']);
    $statement->bindParam(':created_at', date('Y-m-d H:i:s'));

    $statement->execute();

    header('Content-Type: application/json');

    http_response_code(201);

    echo json_encode([
        'id' => $pdo->lastInsertId(),
    ]);
});
