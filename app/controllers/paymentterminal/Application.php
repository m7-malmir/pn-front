<?php

class Application 
{
    use Controller;
    public function index()
    {
    global $data;
    $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;
    $data['admin']=empty($_SESSION['admin']) ? '':  $_SESSION['admin'];
    $this->view('paymentterminal/application',$data);
    
    }
} 