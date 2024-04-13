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

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $data=$_POST;
            $id= $_SESSION['id'] ?? '';
            $user = new Customer;
            $row = $user->update($id,$data);
            if($row==false){
                redirect('paymentterminal/pazilist?aWRjb2Rl= '.$id.' ');
               unset($_SESSION['id']);
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == "GET"){
           if(isset($_GET['sid'])){
            echo 'get ok';
           }
        }

        $this->view('paymentterminal/pazilist',$data);
    }
}