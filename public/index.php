<?php
session_start();
spl_autoload_register('autoload');
function autoload($classname)
{
    include dirname(__FILE__) . '/' . str_replace('\\', '/', $classname) . '.php';
}
?>
<!DOCTYPE html>
<html lang='fa-IR'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' href='https://www.pnikpay.com/files/logo.webp' alt='نیک پی لوگو' size='16x16'>
    </link>
    <title>پنل کاربری | نیک پی</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src='/library/jquery/3.4.1.min.js'></script>
</head>
<style>
    form {
        display: flex;
        flex-direction: column;
        width: 260px;
        margin: 0 auto;
    }
</style>

<body>
    <div class='navbar'>
        <div id='header_bigsize'>
            <div class='dropdown'>
                <button class='dropbtn'>
                    <a>منو عمومی</a>
                    <i class='fa fa-caret-down'></i>
                </button>
                <div class='dropdown-content'>
                    <div class='' id=''>
                        <a href='/maintenance/external/paymentservice/'>تعمیرگاه سانیار سرویس</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id='header_smallsize'>
    </section>
    <?php
            $ok=$_POST['PHPSelectedLanguage'] ?? '';
            if(isset($_POST['PHPSelectedLanguage'])){
           
                if($ok=='english'){
                    $_SESSION['eng']='main';
                 }elseif ($ok=='persian') {
                    $_SESSION['farsi']='farsi';
                 }
            }
                
                ?>
    <main style='display:flex;max-width:1024px;margin: 0 auto;flex-direction:column;'>
        <div style='width:300px;margin:100px auto;background-color:white;border-radius:6px;padding:20px 0;'>
            <form id='imgup' method="post" action="controllers/includes/login.inc.php" enctype='multipart/form-data'>
                <div style='margin: 0 auto;'>
                    <img style='width:100%;' src='./img/logo.webp'></img>
                </div>
                <input class='login_input' type='text' name='uid' id='username' placeholder='username'></input>
                <div id='login_pswd'>
                    <input type='password' id='password' name='pwd' placeholder='password'></input>
                    <img src='./img/eye-icon.webp' style='' onclick='myFunction()'></img>
                </div>
                <section id='result'></section>
                <?php if(isset($_SESSION['eng'])){?>
                    <input class='login_input' style='' name='submit' id='submit' type='submit' value='enter'></input>
                   
              <?php  }else{
                ?>
  <input class='login_input' style='' name='submit' id='submit' type='submit' value='ورود'></input>
               <?php } ?>
              
              
            </form>
    
            <form action='' method='POST'>
                <select id='LanguageSelector' name='PHPSelectedLanguage' onchange="this.form.submit();">
                    <option value='persian' <?php if(isset($_SESSION['farsi'])){
                    echo 'selected';
                    } ?>>فارسی</option>
                    <option value='english'  <?php if(isset($_SESSION['eng'])){
                    echo 'selected';
                    } ?>>english</option>
                </select>
            </form>
            <a href='../' style='display:flex;width:260px;margin: 5px auto;'>
                <button id='login_button' style=''>
                <?php if(isset($_SESSION['eng'])){
                    echo 'main page';
                    session_destroy();
                }else{
                    echo 'صفحه اصلی';
                } 
            ?>
                </button>
            </a>
        </div>
    </main>
    <script src="./js/main.js"></script>