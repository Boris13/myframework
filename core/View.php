<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 12:33
 */

class View
{

    public $title; //заголовок сторінки
    public $keywords;// ключові слова
    public $description;// опис сторінки
    public $send_message='';
    public $data;


    public $path=CONTROLLER;// папка в якій зберігаються види для контролера
    public $layouts='main'; //шаблон який буде використовуватися

    // підключення виду з шаблоном /layouts/
    public function render($view, $params = [])
    {
        $this->data=$params;
        ob_start();

        include PATH_BASE.'/views/'.$this->path.'/'.$view.'.php';
        $html = ob_get_clean();
        $this-> findLayout($html);
    }
    //вид без шаблона
    public function render_view($view, $params = [])
    {
        include PATH_BASE.'/views/'.$this->path.'/'.$view.'.php';

    }
    // функція для встановлення шаблону
    public function set_layouts($layouts){
        $this->layouts=$layouts;
    }
    public function send_message($text, $class){

       $this->send_message= '<div class="alert alert-dismissible '.$class.'">
        <button type="button" class="close" data-dismiss="alert">×</button>'.$text.'</div>';
    }
    public function findLayout($html)
    {

        if (empty($this->layouts)) {
            $this->layouts='main';
        }
        $file='../views/layouts/'.$this->layouts.'.php';
       if(file_exists($file)){
        include ($file);
       }
    }


}