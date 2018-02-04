<?php
require_once '../Config/init.php';
class Connection{

    public $connect;

    public function __construct()
    {
            $this->open_connection();
    }

    public function open_connection(){
            $this->connect = mysqli_connect("SERVER","USER","PASSWORD","NAME");
            if(!$this->connect){
                return die("sorry could not connect with database");
            }
    }
}


$database = new Connection();