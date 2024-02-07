<?php
//namespace controllers\includes;
if(isset($_POST['submit'])){

    //grab link to data
    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];

     //instantiate signup contr class
     include "../classes/Dbh.php";
     include "../classes/Login.php";
     include "../login-contr.php";
     $login=new LoginContr($uid,$pwd);
    
     $login->loginUser();
     //going to back to front page
     header("location: ../../view/index.php");

} 