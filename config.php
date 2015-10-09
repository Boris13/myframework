<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 11:56
 */
/*Налаштування маршрутизації*/
$route=[];
$route['contact']='site/contact';
$modules=[];
/* файли для автозавантаження */
$loades=[];
//встановка константи URL
define('URL', 'http://'.$_SERVER['HTTP_HOST'].'/');
//встановлення базової папки
define('PATH_BASE', implode('/',array_splice(explode('/',$_SERVER['DOCUMENT_ROOT']),0,-1)));
//дані для підключення до БД
define('DB_HOST', 'localhost');
define('DB_USER', 'mysql');
define('DB_PASSWORD', 'mysql');
define('DB_DATABASE', 'beejee');

//файли для автозавантаженн ядра сайту
include_once(PATH_BASE.'/core/Route.php');
include_once(PATH_BASE.'/core/Controller.php');
include_once(PATH_BASE.'/core/Model.php');
include_once(PATH_BASE.'/core/View.php');
include_once(PATH_BASE.'/core/Db.php');