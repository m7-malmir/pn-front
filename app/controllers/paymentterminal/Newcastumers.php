<?php
class Newcastumers 
{
    use Controller;
    public function index()
    {
        $data=[];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data=$_POST;
            echo '<pre>';
           var_export($_POST);
            echo '</pre>';
            $user = new Customer;
            //$row = $user->insert($data) ;
            // if($row){
            //     echo 'ok';
            // }
        }
        
    $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->users_uid;
    $data['admin']=empty($_SESSION['admin']) ? '':  $_SESSION['admin'];
    $this->view('paymentterminal/newcastumers',$data);
    }
}