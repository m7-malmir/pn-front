<?php

class Caslist 
{
    use Controller;
    public function index()
    {
    global $necas;
    $necas = [];
    // $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;
    // $data['admin']=empty($_SESSION['admin']) ? '':  $_SESSION['admin'];
    $ncas=new Customer();
    $necas=$ncas->select();
    $necas['necas']=empty($_SESSION['necas']) ? '':  $_SESSION['necas'];

    //print_r($ncas);
   // $this->view('paymentterminal/caslist',$data);
    $this->view('paymentterminal/caslist',$necas);    
}
}