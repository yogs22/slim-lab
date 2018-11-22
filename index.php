<?php

require __DIR__ . '/vendor/autoload.php';
$app = new Slim\App;

$app->get('/', function($request, $response){
    $data = array(
        'name' => 'Yogs',
        'age' => 40
    );

    return $response->withJson($data, 200);
});

$app->get('/forum[/{title}]', function($request, $response, $args){
    if (empty($args)) {
        echo "Ini halaman forum";
    } else {
        return "Ini forum " . $args['title'];
    }
});

$app->run();

?>
