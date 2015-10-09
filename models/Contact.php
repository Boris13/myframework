<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 13:44
 */
class Contact extends Model{
  function  __construct(){
    $this->db=Db::getInstance()->connection;
}
    public function insert($mas)
    {
        $stmt = $this->db->prepare("INSERT INTO contact (`name`, `email`, `message`) VALUES (?, ?, ?)");
        $res= $stmt->execute(array($mas['name'], $mas['email'],$mas['message']
    ));

        return $res;

    }


}