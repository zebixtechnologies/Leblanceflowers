<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 4/30/2019
 * Time: 11:10 PM
 */


//session_start();

class Database{
    private $con;

    public function connect(){

        $this->con = new PDO("mysql:host=localhost;dbname=db_florist","root","");

        if ($this->con){
            return $this->con;
        }
        else{
            return "Connection Failed";
        }
    }
}

$obj = new Database();
$obj->connect();