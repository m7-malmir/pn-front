<?php

class Pazilist 
{
    use Controller;
    public function index()
    {
    $data = [];
    $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;
    $data['admin']=empty($_SESSION['admin']) ? '':  $_SESSION['admin'];
    $ncas = new Customer();
    $casdata = $ncas->select();
    $_SESSION['casdata']= $casdata;
    $data['casdata']=$_SESSION['casdata'];
    $this->view('paymentterminal/pazilist',$data);  
    }
}