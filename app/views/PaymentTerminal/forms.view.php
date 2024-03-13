<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
     <title>اپلیکیشن کارتخوان | نیک پی</title>
    <meta name='robots' content='noindex, nofollow'>
    </meta>
<?php 
 require_once("{$base_dir}header.php");
?>
<style>
    main{
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        background-color: inherit;
        width: 100%;
        height: calc(100vh - 64px);
        overflow-y: scroll;
    }
    #MainSection{
		margin:0 auto;
		display: flex;
		flex-direction:column;
		background-color:inherit;
		width: 100%;
		height: calc(100vh - 64px);
		overflow-y: scroll;
	}
    @media screen and (min-width:768px) {
        #MainSection {
            width:100%0!important;
            margin-right:0!important;
        }
    }
</style>
<body>

    <div class='navbar'>
        <div style='width:160px;display:flex;float:left;color: white;position:relative;height:55px;'
            onclick='ToggleNavBarMenu();'>
            <a style='display:none;width:32px;height:32px;margin:auto;' href='/membership/notification/'>
                <img style='width: 100%;margin-top: 5px;' src='/library/images/notification.webp'>
                <div id='NotificationCounter'>
                </div>
                </img>
            </a>
            <div
                style='width:calc(100% - 32px);height:32px;display:flex;margin:auto;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;'>
                <div style='margin: auto;'>admin admin</div>
            </div>
            <div style='width:32px;height:32px;margin:auto 5px;'>
                <img src='/library/images/user_logo_white.webp' style='width:30px;height:30px;'></img>
            </div>
        </div>
        <div id='HeaderImage' style='display:none;'>
            <a href='./?logout=on'>
                <img src='/library/images/logout_white.webp'></img>
            </a>
            <a href='/membership/notification/'>
                <img src='/library/images/notification.webp'>
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
                    <div class='' id=''><a href='../../../../'>منو</a></div>
                </div>
                <div class='dropdown-content'>
                    <div class='' id=''><a href='../../../../membership/'>خانه</a><a
                            href='../../../../membership/profile/'>پروفایل</a><a
                            href='../../../../library/logout.php'>خروج</a><a
                            href='../../../../membership/bank/PaymentTerminal/V1/'>کارتخوان</a><a
                            href='../../../../membership/tool/sidebyside/'>چسباندن عکس کنار هم</a><a
                            href='../../../../membership/bank/PaymentTerminal/WebServices/Passargad/Query/'>استعلام
                            سریال </a><a href='../../../../membership/bank/AutomaticTellerMachine/V1/'>خودپرداز</a><a
                            href='../../../../Bank/Registry/'>رجیستر پذیرنده</a><a
                            href='../../../../membership/bank/PaymentTerminal/Export/Terminal/Export/index.php?Acceptor=off'>خروجی
                            ترمینال</a><a href='../../../../membership/maintenance/'>تعمیرات کارتخوان</a></div>
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
            <a href='../../../../'>منو</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../membership/'>خانه</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../membership/profile/'>پروفایل</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../library/logout.php'>خروج</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../membership/bank/PaymentTerminal/V1/'>کارتخوان</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../membership/tool/sidebyside/'>چسباندن عکس کنار هم</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../membership/bank/PaymentTerminal/WebServices/Passargad/Query/'>استعلام سریال </a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../membership/bank/AutomaticTellerMachine/V1/'>خودپرداز</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../Bank/Registry/'>رجیستر پذیرنده</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../membership/bank/PaymentTerminal/Export/Terminal/Export/index.php?Acceptor=off'>خروجی
                ترمینال</a>
        </div>

        <div class='header_smallsize_menu'>
            <a href='../../../../membership/maintenance/'>تعمیرات کارتخوان</a>
        </div>
    </section>
    <main>
        <section id='MainSection'>
            <section
                style='width:280px;margin:20px auto;border:none;box-shadow: 0px 0px 5px 1px gray; padding: 1px 10px;text-align:center;border-radius:6px;background-color: white;'>
                <ul>
                    <li>رمز عبور فایل 1234 می باشد</li>
                    <li>تمامی فایل ها پسوند RAR دارند</li>
                    <ul>
            </section>
            <section
                style='width:280px;margin:20px auto;border:none;box-shadow: 0px 0px 5px 1px gray; padding: 1px 10px;text-align:center;border-radius:6px;background-color: white;'>
                <ul>
                    <li>پاسارگاد</li>
                    <ul>
            </section>
            <section class='TableSection'>
                <table>
                    <tr>
                        <th>نام</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='قرارداد'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/passargad/index.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='نصب'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/passargad/installation.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='استشهاد'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/passargad/affidavit.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='تفویض اختیار'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/passargad/delegation.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>
            </section>
            <section
                style='width:280px;margin:20px auto;border:none;box-shadow: 0px 0px 5px 1px gray; padding: 1px 10px;text-align:center;border-radius:6px;background-color: white;'>
                <ul>
                    <li>پرداخت نوین</li>
                    <ul>
            </section>
            <section class='TableSection'>
                <table>
                    <tr>
                        <th>نام</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='قرارداد'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/pardakhtnovin/index.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='نصب'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/pardakhtnovin/installation.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='استشهاد'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/pardakhtnovin/affidavit.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='تفویض اختیار'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/pardakhtnovin/delegation.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>
            </section>
            <section
                style='width:280px;margin:20px auto;border:none;box-shadow: 0px 0px 5px 1px gray; padding: 1px 10px;text-align:center;border-radius:6px;background-color: white;'>
                <ul>
                    <li>سپهر</li>
                    <ul>
            </section>
            <section class='TableSection'>
                <table>
                    <tr>
                        <th>نام</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='قرارداد'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/Sepehr/index.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='نصب'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/Sepehr/installation.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='استشهاد'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/Sepehr/affidavit.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='تفویض اختیار'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/Sepehr/delegation.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>
            </section>
            <section
                style='width:280px;margin:20px auto;border:none;box-shadow: 0px 0px 5px 1px gray; padding: 1px 10px;text-align:center;border-radius:6px;background-color: white;'>
                <ul>
                    <li>ایران کیش</li>
                    <ul>
            </section>
            <section class='TableSection'>
                <table>
                    <tr>
                        <th>نام</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='قرارداد'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/irankish/index.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='نصب'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/irankish/installation.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='استشهاد'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/irankish/affidavit.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class='tb_inpt' value='تفویض اختیار'></input></td>
                        <td style=''>
                            <div style='display:flex;flex-direction:row;'>
                                <form action='../Forms/irankish/delegation.php' method='POST'
                                    style='display:flex;margin:0 auto;'>
                                    <button class='AcceptButton'>مشاهده</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>
            </section>
        </section>
    </main>
</body>
<script>

</script>

</html>