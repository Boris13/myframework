<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 11:16
 */
class Route{
    public $routes;
    public $class;
    public $method     ='index';
    public $controller ='Site';
    public $url=[];

    public function __construct($routes){
        $this->routes=$routes;
        $this->config();

        if(!empty($this->url['0'])){
            $this->controller=$this->url['0'];
        }
        if(!empty($this->url['1'])){
            $this->method=$this->url['1'];
        }


    }
    public  function config(){


        $this->url=(array_splice(explode('/',$_SERVER['REQUEST_URI']),1));

        $key=array_keys($this->routes);

        $result = array_intersect($key, $this->url);

        if(!empty($result)){
            $array_result=explode('/',$this->routes[implode($result)]);
            $array=array_merge($array_result,array_splice($this->url,2));
            $this->url=$array;
        };
    }
    public function run(){

        $file=('../Controllers/'.$this->controller.'.php');
        if(file_exists($file)){
            include($file);
            if(!class_exists($this->controllers)) {
                $this->set_controller();
                $this->class=new $this->controller;
                $this->find_method();
                $argument=$this->argument();

                call_user_func_array([$this->class, $this->method], $argument);

            }else{
                $this->error_404();
            }

        }else{
            $this->error_404();
        }

    }
    public  function argument(){
        $argument=array_splice($this->url,2);
        return $argument;
    }

    function set_controller(){
        define('CONTROLLER', $this->controller);
    }

    function error_404()
    {
        header("HTTP/1.0 404 Not Found");
        exit("<div style='width:100%; height: 100%; ' align='center' valign='center'><h1>404 Not Found</h1></div>");

    }
}