<?php
class Newcastumers 
{
    use Controller;
    public function index()
    { 
      
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data=$_POST;
            $user = new Customer;
            $row = $user->insert($data) ;
            var_dump($row);
            if($row==false){
                redirect('paymentterminal/Upload');
            }
        }
        
    $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;
    $data['admin']=empty($_SESSION['admin']) ? '':  $_SESSION['admin'];
    $this->view('paymentterminal/newcastumers',$data);
    }
}