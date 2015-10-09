<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 11:13
 */
header("Content-Type: text/html; charset=utf-8");
require_once('../config.php');
require_once(PATH_BASE.'/core/Route.php');
$start=new Route($route);
$start->run();
