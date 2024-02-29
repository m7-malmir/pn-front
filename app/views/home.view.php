<!DOCTYPE html>
<html lang='fa-IR'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' href='<?= ROOT_URL ?>public/assets/img/logo.webp' alt='نیک پی لوگو' size='16x16'>
    </link>
    <title>پنل کاربری | نیک پی</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>public/assets/css/style.css">
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

            <form id='imgup' method="post" enctype='multipart/form-data'>
                <div style='margin: 0 auto;'>
                    <img style='width:100%;' src='<?= ROOT_URL ?>public/assets/img/logo.webp'></img>
                </div>
                <input class='login_input' type='text' name='uid' id='username' placeholder=''></input>
                <div id='login_pswd'>
                    <input type='password' id='password' name='pwd' placeholder=''></input>
                    <img src='<?= ROOT_URL ?>public/assets/img/eye-icon.webp' style='' onclick='myFunction()'></img>
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