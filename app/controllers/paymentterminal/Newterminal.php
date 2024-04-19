<?php
class Newterminal 
{
    use Controller;
    public function index()
    { 
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data=$_POST;
            $user = new Customer;
            $row = $user->insert($data) ;
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

    $spro = new User();
    $selectproject = $spro->selectProject();
    $_SESSION['selectproject']= $selectproject;
    $data['selectproject']=$_SESSION['selectproject'];

    $this->view('paymentterminal/newterminal',$data);
    }
}