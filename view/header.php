
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
                <div style='margin: auto;'>admin admin</div>
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
                        <a href='index.html'>خانه</a>
                        <a href='profile.html'>پروفایل</a>
                        <a href='#'>خروج</a>
                        <a href='paymentterminal.html'>کارتخوان</a>
                        <a href='sidebyside.html'>چسباندن عکس کنار هم</a>
                        <a href='webpasargad.html'>استعلام سریال </a>
                        <a href='AutomaticTellerMachine.html'>خودپرداز</a>
                        <a href='#'>رجیستر پذیرنده</a>
                        <a href='#'>خروجی
                            ترمینال</a>
                        <a href='fixpos.html'>تعمیرات کارتخوان</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id='navbar2' style=''>
        <div id='navbar2_content' style=''>
            <div>
                <a href='/membership/'>داشبورد</a>
            </div>
            <div>
                <a href='/membership/profile/'>پروفایل</a>
            </div>
            <div>
                <a style='' href='/membership/message/messenger/'>
                    پیام ها
                    (
                    0 )
                </a>
            </div>
            <div>
                <a style='' href='/membership/notification/'>
                    اعلانات
                    (
                    100+ )
                </a>
            </div>
            <div><a href='/membership/admin/'>ادمین</a></div>
            <div><a href='./?logout=on'>خروج</a></div>
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
            <a href='index.html'>خانه</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='profile.html'>پروفایل</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='#'>خروج</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='paymentterminal.html'>کارتخوان</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='sidebyside.html'>چسباندن عکس کنار هم</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='webpasargad.html'>استعلام سریال </a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='AutomaticTellerMachine.html'>خودپرداز</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='#'>رجیستر پذیرنده</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='#'>خروجی ترمینال</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='fixpos.html'>تعمیرات کارتخوان</a>
        </div>
    </section>