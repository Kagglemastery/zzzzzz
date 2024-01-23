<?php

$viewPath = __DIR__ . '/../src/View/layout/';

$request = $_SERVER['REQUEST_URI'];

echo $request;

switch ($request) {
    case '/' :
        echo file_get_contents($viewPath . 'master.html');
        break;
    case 'index.php':
        echo file_get_contents($viewPath . 'master.html');
        break;
    case '/about.php' :
        echo file_get_contents($viewPath . 'master.html');
        break;
    default:
        echo file_get_contents($viewPath . '404.html');
        break;
}


?>