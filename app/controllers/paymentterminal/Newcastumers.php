<?php
class Newcastumers 
{
    use Controller;
    public function index()
    { 
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data=$_POST;
            $user = new Customer;
            $row = $user->insert($data) ;
            // echo '<pre>';
            // var_dump($user);
            // echo '</pre>';
           if($row==false){
             redirect('paymentterminal/Upload');
           }
        }
        
    $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;
    $data['admin']=empty($_SESSION['admin']) ? '':  $_SESSION['admin'];
    $nuser = new User();
    $usersdata = $nuser->selectUsers();
    $_SESSION['usersdata']= $usersdata;
    $data['usersdata']=$_SESSION['usersdata'];
    $this->view('paymentterminal/newcastumers',$data);
    }
}