<script src='<?= ROOT_URL; ?>/library/jquery/3.4.1.min.js'></script>
<script src="<?= ROOT_URL; ?>/js/main.js"></script>
<link rel="stylesheet" href="<?= ROOT_URL; ?>/css/style.css">
</head>

<body>
    <div class='navbar'>
        <div style='width:160px;display:flex;float:left;color: white;position:relative;height:55px;'
            onclick='ToggleNavBarMenu();'>
            <a style='display:none;width:32px;height:32px;margin:auto;' href='/membership/notification/'>
                <img style='width: 100%;margin-top: 5px;' src="<?= ROOT_URL; ?>/img/notification.webp">
                <div id='NotificationCounter'>
                </div>
                </img>
            </a>
            <div
                style='width:calc(100% - 32px);height:32px;display:flex;margin:auto;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;'>
                <div style='margin: auto;'>
                    <?php if (isset($_SESSION["userid"])) {
                        print_r($_SESSION["useruid"]);
                    }
                    ?>
                </div>
            </div>
            <div style='width:32px;height:32px;margin:auto 5px;'>
                <img src="<?= ROOT_URL; ?>/img/user_logo_white.webp" style='width:30px;height:30px;'></img>
            </div>
        </div>
        <div id='HeaderImage' style='display:none;'>
            <a href='./?logout=on'>
                <img src='<?= ROOT_URL; ?>/img/logout_white.webp'></img>
            </a>
            <a href='/membership/notification/'>
                <img src='<?= ROOT_URL; ?>/img/notification.webp'>
                <div id='NotificationCounter'>
                    اعلانات
                    (
                    100+ )
                </div>
                </img>
            </a>
        </div>
        <div id='header_hamburger_button' style='' onclick='ToggleHeaderSideMenu();'>
            <div style=''></div>
            <div style=''></div>
            <div style=''></div>
        </div>
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
            <div class='dropdown'>
                <button class='dropbtn'>
                    <a>منو</a>
                    <i class='fa fa-caret-down'></i>
                </button>
                <div class='dropdown-content'>
                    <div class='' id=''><a href=''>منو</a></div>
                </div>
                <div class='dropdown-content'>
                    <div class='' id=''>
                        <a href='<?= ROOT_URL; ?>\view\index.php'>خانه</a>
                        <a href='<?= ROOT_URL; ?>\view\profile\profile.php'>پروفایل</a>
                        <a href="<?= ROOT_URL; ?>\controllers\includes\logout.inc.php">خروج</a>
                        <a href='<?= ROOT_URL; ?>\view\PaymentTerminal\paymentterminal.php'>کارتخوان</a>
                        <a href='<?= ROOT_URL; ?>\view\sidebyside.php'>چسباندن عکس کنار هم</a>
                        <a href='<?= ROOT_URL; ?>\view\webpasargad.php'>استعلام سریال </a>
                        <a href='<?= ROOT_URL; ?>\view\AutomaticTellerMachine.php'>خودپرداز</a>
                        <a href='#'>رجیستر پذیرنده</a>
                        <a href='#'>خروجی
                            ترمینال</a>
                        <a href='<?= ROOT_URL; ?>view\fixpos\fixpos.php'>تعمیرات کارتخوان</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id='navbar2' style=''>
        <div id='navbar2_content' style=''>
            <div>
                <a href='<?= ROOT_URL; ?>\view\index.php'>داشبورد</a>
            </div>
            <div>
                <a href='<?= ROOT_URL; ?>view\profile\profile.php'>پروفایل</a>
            </div>
            <div>
                <a style='' href='<?= ROOT_URL; ?>\view\message.php'>
                    پیام ها
                    (
                    0 )
                </a>
            </div>
            <div>
                <a style='' href='<?= ROOT_URL; ?>\view\notification.php'>
                    اعلانات
                    (
                    100+ )
                </a>
            </div>
            <?php
            if (isset($_SESSION["userid"]) && $_SESSION["userid"] == 'admin admin') { ?>

                <div><a href='/membership/admin/'>ادمین</a></div>
            <?php } ?>

            <div><a href="<?= ROOT_URL; ?>controllers\includes\logout.inc.php">خروج</a></div>
        </div>
    </section>

    <section id='header_smallsize'>

        <div class='header_smallsize_topic'>
            <a>منو</a>
        </div>

        <div style='width:80%;height:1px;margin: 3px auto;background-color:#333333;'></div>

        <div class='header_smallsize_menu'>
            <a href='../'>منو</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='<?= ROOT_URL; ?>\view\'>خانه</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='<?= ROOT_URL; ?>\view\profile\profile.php'>پروفایل</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='<?= ROOT_URL; ?>controllers\includes\logout.inc.php'>خروج</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='<?= ROOT_URL; ?>view\paymentTerminal\paymentterminal.php'>کارتخوان</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='<?= ROOT_URL; ?>view\sidebyside.php'>چسباندن عکس کنار هم</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='<?= ROOT_URL; ?>view\webpasargad.php'>استعلام سریال </a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='<?= ROOT_URL; ?>view\AutomaticTellerMachine.php'>خودپرداز</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='#'>رجیستر پذیرنده</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='#'>خروجی ترمینال</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='<?= ROOT_URL; ?>view\fixpos\fixpos.php'>تعمیرات کارتخوان</a>
        </div>
    </section>