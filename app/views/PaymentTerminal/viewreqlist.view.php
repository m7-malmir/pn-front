<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;
require_once ("{$base_dir}header-up.php");
$cas_data_arr = json_decode(json_encode($data['casdata'] ?? ''), true);
$key_id=$_GET['aWRjb2Rl'] ?? '';
?>
    <title>درخواست</title>
    <script src="<?= ROOT_URL; ?>public/assets/js/jq.3.3.1.min.js"></script>
<style>
       main {
        display: block;
        margin: 0 auto;
    }
</style>
<?php
require_once ("{$base_dir}header.php");
if($_GET[''] ?? ''){   
    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
    require_once "{$base_dir}deleteviewreqlist.php";
}elseif($_GET[''] ?? ''){   
    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
    require_once "{$base_dir}editviewreqlist.php"; 
}else{ ?>

<body>
<main>
<?php include 'sidemenu2.php' ?>
        <section id='MainSection'>
            <form style='display: none;' action='../costumer/.php' id='CostumerView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' action='../document/.php' id='DocumentView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' action='../request/.php' id='RequestView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' action='../terminal/.php' id='TerminalView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' action='../terminal/new/' id='terminal_new' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' target='_blank' action='Help' id='Help' method='GET'></form>
            <form style='display: none;' id='CheckUp' action='accept/' method='POST'></form>
            <form style='display: none;' id='Remove' action='remove/single/' method='POST'>
                <input type='hidden' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' id='Attribute' action='attribution/accept.php' method='POST'>
                <input type='hidden' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' id='Replacement' action='replacement/accept.php' method='POST'>
                <input type='hidden' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' id='Reapply' action='reapply/' method='POST'></form>
            <form style='display: none;' id='Redaction' action='Redaction/' method='GET'></form>
            <form action='reject/' method='POST' style='width:100%;'>
                <input type='hidden' name='aWRjb2Rl' value='4280870160'></input>
                <article class='Cadre' style=''>
                    <div style='display:flex;'>
                        <p class='CadreTitle' id='7093' style='width: calc(100% - 180px);'>اطلاعات درخواست (7093)</p>
                        <div style='display:flex;width:160px;'>
                            <button name='c2lk' class='SendButton' form='CheckUp' value='7093' type='submit'
                                style='background-image:url("images/GreenCheck.webp");'></button>
                            <button name='c2lk' class='SendButton' value='7093' type='submit'
                                style='background-image:url("images/block.webp");'></button>
                            <button name='c2lk' class='SendButton' form='Remove' value='7093' type='submit'
                                style='background-image:url("../../../../../library/images/red_cross.webp");'></button>
                        </div>
                    </div>
                    <input type='hidden' name='c2lk' value='7093'></input>
                    <div class='TableRow4'>
                        <button type='submit' class='PagingButton' name='c2lk' value='3946' form='CostumerView'>اطلاعات
                            پذیرنده</button>
                        <button type='submit' class='PagingButton' name='c2lk' value='3946' form='TerminalView'>نمایش
                            پایانه</button>
                        <button type='submit' class='PagingButton' name='c2lk' value='3946' form='DocumentView'>نمایش
                            مدارک</button>
                        <button type='submit' class='PagingButton' form='terminal_new'>پایانه جدید</button>
                    </div>
                    <div class='TableRow4'>
                        <input value='درخواست کننده'></input>
                        <input value='غلامرضا حسنلو'></input>
                        <input value='آخرین کاربر'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='شماره قرارداد'></input>
                        <input value='3946'></input>
                        <input value='زمان درخواست'></input>
                        <input value='1402-11-02 21:51'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام پذیرنده'></input>
                        <input value='مهدی'></input>
                        <input value='نام خانوادگی پذیرنده'></input>
                        <input value='جعفری'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='کد ملی'></input>
                        <input value='4280870160'></input>
                        <input value='نوع شبکه'></input>
                        <input value='GPRS'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='وضعیت'></input>
                        <input value='بررسی'></input>
                        <input value='کاربر'></input>
                        <input value='hasanlo'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام بانک:'></input>
                        <input value='پست بانک'></input>
                        <input value='کد بانک'></input>
                        <input value='1782'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='پروژه:'></input>
                        <input value='پاسارگاد'></input>
                        <input value='کد پیگیری'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='شماره حساب:'></input>
                        <input value='2000189913435'></input>
                        <input value='مدل دستگاه:'></input>
                        <input name='' value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='سریال فعلی:'></input>
                        <input value=''></input>
                        <input value='سریال جدید:'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='پایانه:'></input>
                        <input value=''></input>
                        <input value='پذیرنده'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='imei:'></input>
                        <input value=''></input>
                        <input value='شماره سیم کارت'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow2'>
                        <input style='width:24%;' value='شماره شبا'></input>
                        <input style='width:74%;' value='IR750210000002000189913435'></input>
                    </div>
                    <div class='TableRow2'>
                        <input style='width:24%;' value='علل مردودی و توضیحات :'></input>
                        <input style='width:74%;' name='reason' value=' ' placeholder=''></input>
                    </div>
                </article>
            </form>
        </section>
<?php } ?>  
    </main>
</body>
<script>
    var HelpMenu = document.getElementById("HelpMenu");
    function OpenMenu() {
        HelpMenu.style.display = "block";
    }

    function CloseMenu() {
        HelpMenu.style.display = "none";
    }
</script>

</html>