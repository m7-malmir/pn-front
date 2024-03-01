<?php 
require_once("header-up.view.php");
?>
    <title>پروفایل | نیک پی</title>
    <meta name='description' content='پروفایل'>
    </meta>
    <meta name='robots' content='noindex, nofollow'>
<?php 
require_once("header.view.php");
?>
<style>
    main {
        display: block;
        margin: 0 auto;
    }
</style>
    <main>
        <div id='PasswordMenu'>
            <form action='changepassword.php' method='POST'>
                <h4 style='font-size: 20px;text-shadow: 1px 1px gray;'>تغییر رمز</h4>
                <input name='oldpassword' placeholder='رمز قدیمی' required></input>
                <input name='newpassword' placeholder='رمز جدید' required></input>
                <div style='display:flex;'>
                    <button type='submit'>
                        ذخیره </button>
                    <button type='button' onclick='ClosePasswordMenu();'>
                        لغو </button>
                </div>
            </form>
        </div>
        <div id='ReferralMenu'>
            <form action='referring.php' method='POST'>
                <h4 style='font-size: 20px;text-shadow: 1px 1px gray;'>بازاریابی و معرفی</h4>
                <p style='font-size: 12px;text-shadow: 1px 1px gray;'>توجه: در صورت معرفی بازاریاب تمامی مسئولیت های
                    قانونی وی به عهده شما خواهد بود</p>
                <input name='name' placeholder='نام' required></input>
                <input name='familyname' placeholder='نام خانوادگی' required></input>
                <input name='username' placeholder='نام کاربری' required></input>
                <input name='password' placeholder='رمز عبور' required></input>
                <select name='permission' required>
                    <option value=''>انتخاب سطح دسترسی</option>
                </select>
                <div style='display:flex;'>
                    <button type='submit'>
                        ذخیره </button>
                    <button type='button' onclick='CloseReferralMenu();'>
                        لغو </button>
                </div>
            </form>
        </div>
        <div style='width:100%;height:250px;background-image:url("<?= ROOT_URL; ?>public/assets/img/header.webp");background-size:cover;'></div>
        <section id='view'>
            <article id='primary'>
                <div id='PhotoProfile'>
                    <img src='<?= ROOT_URL; ?>public/assets/img/contact.webp'></img>
                </div>
                <a id='AddPhotoProfile' href='photo/change/'>
                    <img style='width:100%;' src='<?= ROOT_URL; ?>public/assets/img/camera.webp'></img>
                </a>
                <table style='position:relative;top:-50px;'>
                    <tr>
                        <td style='width:24px;'>
                            <img style='width:18px;margin:0 auto;' src='<?= ROOT_URL; ?>public/assets/img/contact.webp'></img>
                        </td>
                        <th>
                            مشخصات فردی <br>
                            <input style='background-color:transparent;border:none;' value='admin'></input>
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <td style='width:24px;'>
                            <img style='width:18px;margin:0 auto;' src='<?= ROOT_URL; ?>public/assets/img/info.webp'></img>
                        </td>
                        <th>
                            درباره <br>
                            <input style='background-color:transparent;border:none;' value='مدیریت'></input>
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <img style='width:18px;margin:0 auto;' src='<?= ROOT_URL; ?>public/assets/img/lock.webp'></img>
                        </td>
                        <th>
                            <input style='background-color:transparent;border:none;' type='password' name='password'
                                value='TTI2MDAwMjFt'></input>
                        </th>
                        <td>
                            <button onclick='OpenPasswordMenu();' class='FormButton'>
                                <img style='width:18px;margin:0 auto;' src='<?= ROOT_URL; ?>public/assets/img/edit.webp'></img>
                            </button>
                        </td>
                    </tr>
                </table>
            </article>
            <article id='secondary'>
                <ul style=''>
                    <li style='border-bottom:2px solid gray;'><a style='color:inherit;text-decoration:none;'
                            href='./?page=Marketers'>زیر مجموعه</a></li>
                    <li><a style='color:inherit;text-decoration:none;' href='./?page=Financial'>مالی</a></li>
                    <li>درباره</li>
                    <li>تماس</li>
                </ul>
                <table id='Marketers'>
                    <tr>
                        <td></td>
                        <td>نام</td>
                        <td>نام کاربری</td>
                        <td>رمز عبور</td>
                        <td>محدودیت</td>
                        <td></td>
                    </tr>
                </table>
            </article>
        </section>
    </main>
</body>
</html>
<script>
    /*
        function ToggleShowProfileMenu(ElementId){
            document.getElementById('Marketers').style.display = 'none';
            document.getElementById('Financial').style.display = 'none';
            document.getElementById(ElementId).style.display = 'table';
            //document.getElementById(ElementId).style.borderBottom = '2px solid gray';
        }
    */
        function OpenPasswordMenu(){
            var PasswordMenu = document.getElementById('PasswordMenu');
            PasswordMenu.style.display = 'block';
        }
        function ClosePasswordMenu(){
            var PasswordMenu = document.getElementById('PasswordMenu');
            PasswordMenu.style.display = 'none';
        }
        function OpenReferralMenu(){
            var PasswordMenu = document.getElementById('ReferralMenu');
            PasswordMenu.style.display = 'block';
        }
        function CloseReferralMenu(){
            var PasswordMenu = document.getElementById('ReferralMenu');
            PasswordMenu.style.display = 'none';
        }
    </script>