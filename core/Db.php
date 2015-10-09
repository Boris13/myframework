<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 12:31
 */
class Db {

    public $connection;
    private static $_instance;

    public static function getInstance() {
        if(!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function __construct() {

          try {
        $this->connection  = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD);


          } catch (PDOException $e) {
           echo 'Подключение не удалось: ' . $e->getMessage();
         }
    }


}