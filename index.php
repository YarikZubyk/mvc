<?php



//1. Общие настройки (ошибки на сайте)

ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файлов систем

define('ROOT', dirname(__FILE__));
require_once (ROOT. '/components/Router.php');

//3. Connection DB


//4. Вызов Router
$router = new Router();
$router->run();
