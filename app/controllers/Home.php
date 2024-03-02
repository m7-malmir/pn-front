<?php

class Home 
{
    use Controller;
    public function index()
    {
       // $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->email;
        $data=[];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            $arr['users_uid']=$_POST['uid'];
            $row=$user->first($arr);
            $row2=$user->checkAdmin();
            $array = json_decode(json_encode( $row2), true);
            if($row2){
                if ($array[0]['users_uid']==$_POST['uid']) {
                  $_SESSION['admin']= $array;
                  //var_dump($array);
                  }
            }
          
                //redirect('signup');
            if($row){
                if($row->users_pwd === $_POST['pwd']) {
                    $_SESSION['USER'] = $row;
                redirect('main');
                }
            }
            $user->errors='wrong email or pass';
            $data['errors'] = $user->errors;
        }
        $this->view('home',$data);
     //   $this->view('home',$data);

    }
    // public function edit($a = '', $b = '', $c = '')
    // {
    //     show('from the edit function');
    //     $this->view('home');
    // }
}