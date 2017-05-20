<?php

require '/../BDAccess/dataBase.php';

class Users{
    private $id;
    private $name;
    private $email;
    private $pass;

    public function __construct(){
            // $this->id = $id;
            // $this->name = $name;
            // $this->email = $email;
            // $this->pass = $pass;

            $dbUsers = new DataBase();

            $user1 = $dbUsers->getUsers();
    }

    public function findUser($name){
       $dbUsers = new DataBase();
       $user = $dbUsers->getUser($name);
       return $user;
    }
    
    
}

?>