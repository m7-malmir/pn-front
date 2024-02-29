<?php

class Main
{
    use Controller;
    public function index()
    {

     $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;

     $this->view('main',$data);

    }
    // public function edit($a = '', $b = '', $c = '')
    // {
    //     show('from the edit function');
    //     $this->view('home');
    // }
}