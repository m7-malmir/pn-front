<?php

class Maintenance
{
    use Controller;
    public function index()
    {
    $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;
    $data['admin']=empty($_SESSION['admin']) ? '':  $_SESSION['admin'];
     $this->view('maintenance',$data);

    }

}