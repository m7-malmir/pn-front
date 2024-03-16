<?php

class Newcastumers 
{
    use Controller;
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo '<pre>';
           var_export($_POST);
            echo '</pre>';
        }
    $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;
    $data['admin']=empty($_SESSION['admin']) ? '':  $_SESSION['admin'];
    // if(isset($_GET)){
    //     echo 'ok';
    // }
    $this->view('paymentterminal/newcastumers',$data);
    }
}