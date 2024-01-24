<?php
namespace controllers;
session_start();
define("ROOT_URL",'http://localhost/pnikpay/');
class Dbh{
  public function connect(){
        try {
            $username="root";
            $password="";
            $dbh=new PDO("mysql:host=localhost;dbname=codexworld",$username,$password);
            return $dbh;
        } catch (\Throwable $th) {
            print 'Error!: '. $th->getMessage() ."<br/>";
            die();
        }
  }
}

