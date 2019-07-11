<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case '/':
        require './views/home.php';
        break;
    case '/lamaipu':
        require './views/lamaipu.php';
        break;
    case '/lasofia':
        require './views/lasofia.php';
        break;  
    case '/refugiocagliero':
        require './views/refugiocagliero.php';
        break;  
    case '/glaciarsur':
        require './views/glaciarsur.php';
        break;  
    case '/patagoniacampera':
        require './views/patagoniacampera.php';
        break;  
    case '/motogonia':
        require './views/motogonia.php';
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        require './views/404.php';
        break;
}