<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 12:30
 */
class Controller{


    function __construct(){
        //створення обєкта виду
        $this->view=new View();
    }
    //перенаправлення
    function redirect($url)
    {

        header('Location: '.URL.$url);
        exit();
    }
    //завантаження потрібної моделі
    function load_model($name){
        $path=PATH_BASE.'/models/'.$name.'.php';
        if(file_exists($path)){
            include_once($path);
            return new $name;
        }


    }

}