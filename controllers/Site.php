<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 13:13
 */

class Site extends Controller{


    function action_index(){
       $this->view->render('index', ['id'=>222]);
    }
    function action_contact(){
        $model=$this->load_model('Contact');
        if(!empty($_POST)){
            $mas=$_POST;
            $model->insert($mas);
            $this->view->send_message('Ваше повідомлення успішно відправлене','alert-success');
        }else{

        }

        $this->view->render('contact');
    }

}