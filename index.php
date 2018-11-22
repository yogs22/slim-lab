<?php

require __DIR__ . '/vendor/autoload.php';
$app = new Slim\App;

$app->get('/', function($request, $response){
    return 'Hallo semuanya';
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
