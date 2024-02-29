<?php

class profile 
{
    use Controller;
    public function index()
    {
        $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;
        $this->view('profile/profile',$data);

       
    }
}