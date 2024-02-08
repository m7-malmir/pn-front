<?php
require_once 'header-up.php';
?>
<title>اعلانات</title>
<?php
require_once 'header.php';
?>
<main>
        <style>
                main {
                        display: flex;
                }

                .side_menu {
                        overflow-y: auto;
                        height: calc(100vh - 60px);
                        display: flex;
                        flex-direction: column;
                        background-color: #333333;
                        color: #ffffff;
                        position: fixed;
                        font-size: 14px;
                }

                .side_menu_topic {
                        padding: 2px 0;
                        display: flex;
                        width: 90%;
                        color: white;
                        margin: 4px auto;
                        border-radius: 3px;
                        text-decoration: none;
                }

                .side_menu_topic img {
                        margin: auto 8px;
                        width: 26px;
                        height: 26px;
                }

                .side_menu_topic:hover {
                        background-color: #484848;
                }

                @media screen and (min-width:768px) {
                        #MainSection {
                                width: calc(100% - 240px);
                                margin-right: 250px;
                        }

                        .side_menu {
                                width: 240px;
                        }

                        .side_menu_topic p {
                                display: block;
                        }
                }

                @media screen and (max-width:768px) {
                        #MainSection {
                                width: calc(100% - 240px);
                                margin-right: 250px;
                        }

                        .side_menu {
                                width: 240px;
                        }

                        .side_menu_topic p {
                                display: block;
                        }
                }

                @media screen and (max-width:440px) {
                        #MainSection {
                                width: calc(100% - 50px);
                                margin-right: 50px;
                        }

                        .side_menu {
                                width: 50px;
                        }

                        .side_menu_topic p {
                                display: none;
                        }
                }
        </style>
        <section class='side_menu'>
                <div style=''></div>
                <a class='side_menu_topic' style='background-color:inherit;'>
                        <img src='/membership/bank/PaymentTerminal/V1/images/menu/paqi_logo.png'></img>
                        <p>منو اعلانات</p>
                </a>
                <a style='width:90%;margin:20px auto;font-size:16px;text-decoration:none;color: white;text-align:center;border-bottom: 1px solid white;'
                        href='#'></a>
                <a href='/membership/notification/' class='side_menu_topic'>
                        <img src='/membership/bank/PaymentTerminal/V1/images/menu/home.png'></img>
                        <p>میزکار</p>
                </a>
                <a href='../../membership/notification/Inscription/Acceptor/' class='side_menu_topic'>
                        <img src='../../membership/bank/PaymentTerminal/V1/images/menu/new_acceptor.png'></img>
                        <p>پذیرنده جدید()</p>
                </a>
                <a href='../../membership/notification/Resume/' class='side_menu_topic'>
                        <img src='../../membership/bank/PaymentTerminal/V1/images/menu/pos.png'></img>
                        <p>رزومه کاری()</p>
                </a>
                <a href='../../membership/notification/Activation/' class='side_menu_topic'>
                        <img src='../../membership/bank/PaymentTerminal/V1/images/menu/request.png'></img>
                        <p>فعال سازی()</p>
                </a>
                <a href='../../membership/notification/Registry/' class='side_menu_topic'>
                        <img src='../../membership/bank/PaymentTerminal/V1/images/menu/document.png'></img>
                        <p>طرح رجیستری()</p>
                </a>
                <a href='../../membership/notification/RepositoryEntry/' class='side_menu_topic'>
                        <img src='../../membership/bank/PaymentTerminal/V1/images/menu/document.png'></img>
                        <p>ورود به انبار ()</p>
                </a>
        </section>
        <section id='MainSection'>
                <section>
                        <a style='display:none;' href='../admin/'>
                                <button id='ReturnFormButton'>
                                        <img src='/membership/navigation/images/return.webp' style='width:100%;'></img>
                                </button>
                        </a>
                        <a style='display:none;' href='Export/'>
                                <button id='ReturnFormButton'>
                                        <img src='/library/images/Excel.webp' style='width:100%;'></img>
                                </button>
                        </a>
                        <a style='display:none;' href='/membership/accounting/invoice/Sell/import/'>
                                <button id='ReturnFormButton'>
                                        <img src='/library/images/import11.webp' style='width:100%;'></img>
                                </button>
                        </a>
                        <a>
                                <button id='ReturnFormButton' form="CancelForm">
                                        <img src='/library/images/NoFilter.webp' style='width:100%;'></img>
                                </button>
                        </a>
                        <a>
                                <button id='ReturnFormButton' form="SearchForm">
                                        <img src='/library/images/magnifier11.webp' style='width:100%;'></img>
                                </button>
                        </a>
                        <a href='../Search/'>
                                <button id='ReturnFormButton'>
                                        <img src='/library/images/option11.webp' style='width:100%;'></img>
                                </button>
                        </a>
                        <a>
                                <button onclick="ToggleSideToolbar('SideToolbar');" id='ReturnFormButton'
                                        style='float: right;'>
                                        <img src='/library/images/more.webp' style='width:100%;'></img>
                                </button>
                        </a>
                </section>
                <form id='ExpertSerachForm' action='../Search/#terminal' style='display: none;' method='GET'>
                </form>
                <form id='CancelForm' action='./.' method='GET' style='display: none;'></form>
                <div id='scounter2' style='display:none;'>
                </div>
                <section class='TableSection'>
                        <div style='overflow: auto;width: 100%;position: relative;'>
                                <table style='width: 100%;max-width: 100%;background-color: inherit;'>
                                        <form action='' method='GET' id='SearchForm'>
                                                <tr>
                                                        <th class=''
                                                                style='min-width: 50px;border-top-right-radius: 1rem;'>
                                                                <div class='search_div' id='limit' style='width:50px;'>
                                                                        <label>تعداد</label>
                                                                        <input name='bGltaXQ=' value='50'
                                                                                style=''></input>
                                                                </div>
                                                        </th>
                                                        <th class='' style=''>
                                                                <div class='search_div' id='' style=''>
                                                                        <label>کد یکتا</label>
                                                                        <input name='c2lk' value='' style=''></input>
                                                                </div>
                                                        </th>
                                                        <th class=''>
                                                                <div class='search_div' id='idcode'>
                                                                        <label>کاربر</label>
                                                                        <input name='' value=''></input>
                                                                </div>
                                                        </th>
                                                        <th class=''>
                                                                <div class='search_div' id='serial'>
                                                                        <label>کد پیگیری</label>
                                                                        <input name='' value=''></input>
                                                                </div>
                                                        </th>
                                                        <th class=''>
                                                                <div class='search_div' id='serial'>
                                                                        <label>نوع</label>
                                                                        <input name='' value=''></input>
                                                                </div>
                                                        </th>
                                                        <th id='functional_th_td'
                                                                style='min-width:60px;border-top-right-radius: 1rem;'>
                                                                <a style='display:none;margin-top:8px;margin-bottom:0;'
                                                                        method='GET'>
                                                                        <button class='more_button' type='submit'
                                                                                style=''>
                                                                                جستجو
                                                                        </button>
                                                                </a>
                                                                0
                                                        </th>
                                                </tr>
                                        </form>
                                        <tr>
                                                <td>1</td>
                                                <td>617</td>
                                                <td>hasanlo</td>
                                                <td>1707413227</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#617' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button49'
                                                                        onclick='toggleTheFunctionalMenu1(49);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4283479330'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='617'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu149' value='617'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4283479330'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='617'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='617'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='617'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>2</td>
                                                <td>616</td>
                                                <td>farzadrafati</td>
                                                <td>1707303248</td>
                                                <td></td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#616' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button48'
                                                                        onclick='toggleTheFunctionalMenu1(48);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4283479330'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='616'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu148' value='616'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4283479330'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='616'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='616'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='616'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>3</td>
                                                <td>615</td>
                                                <td>razmjo</td>
                                                <td>1707296259</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#615' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button47'
                                                                        onclick='toggleTheFunctionalMenu1(47);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='3254226437'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='615'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu147' value='615'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='3254226437'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='615'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='615'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='615'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>4</td>
                                                <td>614</td>
                                                <td>amir rashedi</td>
                                                <td>1707228857</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#614' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button46'
                                                                        onclick='toggleTheFunctionalMenu1(46);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='0926731173'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='614'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu146' value='614'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='0926731173'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='614'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='614'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='614'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>5</td>
                                                <td>613</td>
                                                <td>hasanlo</td>
                                                <td>1707221563</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#613' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button45'
                                                                        onclick='toggleTheFunctionalMenu1(45);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4270416408'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='613'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu145' value='613'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4270416408'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='613'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='613'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='613'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>6</td>
                                                <td>612</td>
                                                <td>nazifi</td>
                                                <td>1707203576</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#612' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button44'
                                                                        onclick='toggleTheFunctionalMenu1(44);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='0630438285'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='612'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu144' value='612'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='0630438285'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='612'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='612'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='612'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>7</td>
                                                <td>611</td>
                                                <td>haji hoseinlo</td>
                                                <td>1707149238</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#611' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button43'
                                                                        onclick='toggleTheFunctionalMenu1(43);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='2790924090'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='611'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu143' value='611'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='2790924090'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='611'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='611'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='611'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>8</td>
                                                <td>610</td>
                                                <td>hasanlo</td>
                                                <td>1707141767</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#610' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button42'
                                                                        onclick='toggleTheFunctionalMenu1(42);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4271787132'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='610'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu142' value='610'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4271787132'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='610'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='610'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='610'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>9</td>
                                                <td>609</td>
                                                <td>haji hoseinlo</td>
                                                <td>1707129199</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#609' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button41'
                                                                        onclick='toggleTheFunctionalMenu1(41);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='2803607611'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='609'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu141' value='609'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='2803607611'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='609'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='609'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='609'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>10</td>
                                                <td>608</td>
                                                <td>molayi</td>
                                                <td>1707123889</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#608' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button40'
                                                                        onclick='toggleTheFunctionalMenu1(40);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='2949939120'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='608'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu140' value='608'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='2949939120'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='608'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='608'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='608'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>11</td>
                                                <td>607</td>
                                                <td>razmjo</td>
                                                <td>1707120127</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#607' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button39'
                                                                        onclick='toggleTheFunctionalMenu1(39);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='5959603111'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='607'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu139' value='607'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='5959603111'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='607'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='607'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='607'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>12</td>
                                                <td>606</td>
                                                <td>farzadrafati</td>
                                                <td>1707053207</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#606' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button38'
                                                                        onclick='toggleTheFunctionalMenu1(38);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='2170126104'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='606'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu138' value='606'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='2170126104'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='606'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='606'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='606'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>13</td>
                                                <td>605</td>
                                                <td>reza bonjoyi</td>
                                                <td>1707041011</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#605' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button37'
                                                                        onclick='toggleTheFunctionalMenu1(37);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='3559866952'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='605'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu137' value='605'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='3559866952'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='605'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='605'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='605'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>14</td>
                                                <td>604</td>
                                                <td>razmjo</td>
                                                <td>1706950084</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#604' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button36'
                                                                        onclick='toggleTheFunctionalMenu1(36);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='3242807677'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='604'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu136' value='604'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='3242807677'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='604'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='604'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='604'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>15</td>
                                                <td>603</td>
                                                <td>pnp.mortezaabasi</td>
                                                <td>1706949546</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#603' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button35'
                                                                        onclick='toggleTheFunctionalMenu1(35);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='5040036183'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='603'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu135' value='603'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='5040036183'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='603'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='603'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='603'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>16</td>
                                                <td>602</td>
                                                <td>farzadrafati</td>
                                                <td>1706779941</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#602' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button34'
                                                                        onclick='toggleTheFunctionalMenu1(34);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='0011475579'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='602'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu134' value='602'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='0011475579'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='602'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='602'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='602'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>17</td>
                                                <td>601</td>
                                                <td>razmjo</td>
                                                <td>1706779619</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#601' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button33'
                                                                        onclick='toggleTheFunctionalMenu1(33);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4940102181'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='601'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu133' value='601'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4940102181'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='601'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='601'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='601'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>18</td>
                                                <td>600</td>
                                                <td>haji hoseinlo</td>
                                                <td>1706779280</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#600' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button32'
                                                                        onclick='toggleTheFunctionalMenu1(32);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='2790011044'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='600'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu132' value='600'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='2790011044'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='600'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='600'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='600'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>19</td>
                                                <td>599</td>
                                                <td>farzadrafati</td>
                                                <td>1706735606</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#599' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button31'
                                                                        onclick='toggleTheFunctionalMenu1(31);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='3979797996'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='599'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu131' value='599'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='3979797996'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='599'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='599'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='599'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>20</td>
                                                <td>598</td>
                                                <td>pnp.rasam</td>
                                                <td>1706699234</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#598' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button30'
                                                                        onclick='toggleTheFunctionalMenu1(30);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4432850930'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='598'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu130' value='598'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4432850930'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='598'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='598'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='598'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>21</td>
                                                <td>597</td>
                                                <td>haji hoseinlo</td>
                                                <td>1706698708</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#597' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button29'
                                                                        onclick='toggleTheFunctionalMenu1(29);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='2790701377'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='597'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu129' value='597'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='2790701377'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='597'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='597'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='597'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>22</td>
                                                <td>596</td>
                                                <td>farzadrafati</td>
                                                <td>1706692991</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#596' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button28'
                                                                        onclick='toggleTheFunctionalMenu1(28);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4391975701'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='596'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu128' value='596'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4391975701'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='596'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='596'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='596'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>23</td>
                                                <td>595</td>
                                                <td>ardame</td>
                                                <td>1706691570</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#595' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button27'
                                                                        onclick='toggleTheFunctionalMenu1(27);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='2061396585'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='595'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu127' value='595'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='2061396585'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='595'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='595'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='595'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>24</td>
                                                <td>594</td>
                                                <td>ghavami far</td>
                                                <td>1706691296</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#594' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button26'
                                                                        onclick='toggleTheFunctionalMenu1(26);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='6140023068'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='594'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu126' value='594'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='6140023068'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='594'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='594'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='594'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>25</td>
                                                <td>593</td>
                                                <td>farzadrafati</td>
                                                <td>1706689818</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#593' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button25'
                                                                        onclick='toggleTheFunctionalMenu1(25);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4380423311'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='593'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu125' value='593'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4380423311'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='593'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='593'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='593'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>26</td>
                                                <td>592</td>
                                                <td>NADERPOR</td>
                                                <td>1706630194</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#592' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button24'
                                                                        onclick='toggleTheFunctionalMenu1(24);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4380423311'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='592'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu124' value='592'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4380423311'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='592'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='592'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='592'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>27</td>
                                                <td>591</td>
                                                <td>pnp.mortezaabasi</td>
                                                <td>1706599765</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#591' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button23'
                                                                        onclick='toggleTheFunctionalMenu1(23);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='0077328957'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='591'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu123' value='591'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='0077328957'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='591'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='591'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='591'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>28</td>
                                                <td>590</td>
                                                <td>pnp.mortezaabasi</td>
                                                <td>1706596141</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#590' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button22'
                                                                        onclick='toggleTheFunctionalMenu1(22);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='3673569260'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='590'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu122' value='590'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='3673569260'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='590'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='590'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='590'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>29</td>
                                                <td>589</td>
                                                <td>hasanlo</td>
                                                <td>1706535279</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#589' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button21'
                                                                        onclick='toggleTheFunctionalMenu1(21);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4271216569'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='589'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu121' value='589'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4271216569'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='589'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='589'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='589'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>30</td>
                                                <td>588</td>
                                                <td>farzadrafati</td>
                                                <td>1706530058</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#588' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button20'
                                                                        onclick='toggleTheFunctionalMenu1(20);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='6660574425'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='588'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu120' value='588'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='6660574425'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='588'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='588'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='588'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>31</td>
                                                <td>587</td>
                                                <td>borhan bahrami</td>
                                                <td>1706517524</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#587' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button19'
                                                                        onclick='toggleTheFunctionalMenu1(19);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4950059009'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='587'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu119' value='587'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4950059009'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='587'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='587'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='587'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>32</td>
                                                <td>586</td>
                                                <td>ghavami far</td>
                                                <td>1706514045</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#586' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button18'
                                                                        onclick='toggleTheFunctionalMenu1(18);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4890486283'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='586'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu118' value='586'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4890486283'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='586'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='586'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='586'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>33</td>
                                                <td>585</td>
                                                <td>hasanlo</td>
                                                <td>1706466189</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#585' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button17'
                                                                        onclick='toggleTheFunctionalMenu1(17);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4285823500'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='585'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu117' value='585'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4285823500'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='585'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='585'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='585'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>34</td>
                                                <td>584</td>
                                                <td>amir rashedi</td>
                                                <td>1706457765</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#584' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button16'
                                                                        onclick='toggleTheFunctionalMenu1(16);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='0731272064'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='584'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu116' value='584'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='0731272064'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='584'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='584'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='584'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>35</td>
                                                <td>583</td>
                                                <td>razmjo</td>
                                                <td>1706338907</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#583' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button15'
                                                                        onclick='toggleTheFunctionalMenu1(15);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='3256319866'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='583'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu115' value='583'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='3256319866'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='583'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='583'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='583'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>36</td>
                                                <td>582</td>
                                                <td>razmjo</td>
                                                <td>1706101061</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#582' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button14'
                                                                        onclick='toggleTheFunctionalMenu1(14);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='3242394259'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='582'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu114' value='582'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='3242394259'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='582'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='582'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='582'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>37</td>
                                                <td>581</td>
                                                <td>razmjo</td>
                                                <td>1706003643</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#581' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button13'
                                                                        onclick='toggleTheFunctionalMenu1(13);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='3240256878'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='581'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu113' value='581'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='3240256878'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='581'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='581'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='581'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>38</td>
                                                <td>580</td>
                                                <td>hasanlo</td>
                                                <td>1705947697</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#580' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button12'
                                                                        onclick='toggleTheFunctionalMenu1(12);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4280870160'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='580'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu112' value='580'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4280870160'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='580'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='580'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='580'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>39</td>
                                                <td>579</td>
                                                <td>hasanlo</td>
                                                <td>1705847571</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#579' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button11'
                                                                        onclick='toggleTheFunctionalMenu1(11);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4270086610'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='579'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu111' value='579'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4270086610'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='579'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='579'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='579'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>40</td>
                                                <td>578</td>
                                                <td>shahriyar bahrami</td>
                                                <td>1705829822</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#578' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button10'
                                                                        onclick='toggleTheFunctionalMenu1(10);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='2980240516'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='578'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu110' value='578'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='2980240516'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='578'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='578'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='578'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>41</td>
                                                <td>577</td>
                                                <td>amir rashedi</td>
                                                <td>1705775211</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#577' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button9'
                                                                        onclick='toggleTheFunctionalMenu1(9);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='6580014903'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='577'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu19' value='577'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='6580014903'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='577'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='577'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='577'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>42</td>
                                                <td>576</td>
                                                <td>amir rashedi</td>
                                                <td>1705773070</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#576' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button8'
                                                                        onclick='toggleTheFunctionalMenu1(8);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='0926675885'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='576'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu18' value='576'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='0926675885'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='576'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='576'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='576'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>43</td>
                                                <td>575</td>
                                                <td>hasanlo</td>
                                                <td>1705752506</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#575' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button7'
                                                                        onclick='toggleTheFunctionalMenu1(7);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='6149894932'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='575'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu17' value='575'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='6149894932'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='575'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='575'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='575'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>44</td>
                                                <td>574</td>
                                                <td>abron</td>
                                                <td>1705728531</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#574' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button6'
                                                                        onclick='toggleTheFunctionalMenu1(6);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='3591529941'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='574'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu16' value='574'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='3591529941'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='574'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='574'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='574'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>45</td>
                                                <td>573</td>
                                                <td>razmjo</td>
                                                <td>1705593025</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#573' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button5'
                                                                        onclick='toggleTheFunctionalMenu1(5);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4950150413'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='573'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu15' value='573'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4950150413'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='573'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='573'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='573'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>46</td>
                                                <td>572</td>
                                                <td>hasanlo</td>
                                                <td>1705519932</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#572' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button4'
                                                                        onclick='toggleTheFunctionalMenu1(4);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4270638389'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='572'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu14' value='572'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4270638389'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='572'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='572'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='572'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>47</td>
                                                <td>571</td>
                                                <td>hasanlo</td>
                                                <td>1705487292</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#571' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button3'
                                                                        onclick='toggleTheFunctionalMenu1(3);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4283625612'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='571'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu13' value='571'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4283625612'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='571'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='571'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='571'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>48</td>
                                                <td>570</td>
                                                <td>hasanlo</td>
                                                <td>1705482183</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#570' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button2'
                                                                        onclick='toggleTheFunctionalMenu1(2);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='5899715618'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='570'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu12' value='570'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='5899715618'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='570'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='570'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='570'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>49</td>
                                                <td>569</td>
                                                <td>razmjo</td>
                                                <td>1705475884</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#569' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button1'
                                                                        onclick='toggleTheFunctionalMenu1(1);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4950131605'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='569'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu11' value='569'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4950131605'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='569'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='569'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='569'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>50</td>
                                                <td>568</td>
                                                <td>hasanlo</td>
                                                <td>1705326359</td>
                                                <td>ترمینال جدید</td>
                                                <td id='functional_th_td'
                                                        style='z-index:50;height: 28px;left:0;position: sticky;'>
                                                        <form action='view.php#568' style='margin-bottom:0;'
                                                                method='GET'>
                                                                <button id='more_button0'
                                                                        onclick='toggleTheFunctionalMenu1(0);'
                                                                        type='button' class='more_button'
                                                                        name='aWRjb2Rl' value='4270069872'>
                                                                        بیشتر
                                                                </button>
                                                                <input type='hidden' name='c2lk' value='568'
                                                                        style=''></input>
                                                        </form>
                                                        <div id='TheFunctionalMenu10' value='568'
                                                                class='slidemenu_table' style='width: 300px;'>
                                                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                                                        method='GET'>
                                                                        <button class='more_button' name='aWRjb2Rl'
                                                                                value='4270069872'>
                                                                                نمایش
                                                                        </button>
                                                                        <input type='hidden' name='c2lk' value='568'
                                                                                style=''></input>
                                                                </form>
                                                                <form action='accept/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='568'>
                                                                                تأیید
                                                                        </button>
                                                                </form>
                                                                <form action='delete/' method='POST'
                                                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                                                        <button class='more_button' name='c2lk'
                                                                                value='568'>
                                                                                حذف
                                                                        </button>
                                                                </form>
                                                        </div>
                                                </td>
                                        </tr>
                                </table>
                        </div>
                </section>
                <section id='pagination'>
                        <button type='submit' form='SearchForm' name='pagination' value='1'>1</button><input
                                type='number'
                                style='text-align:center;width:40px;background-color:inherit;color:white;border:1px solid white;font-weight: 900;'
                                form='SearchForm' name='pagination' value='1'></input><button type='submit'
                                form='SearchForm' name='pagination' value='13'>13</button><button type='submit'
                                form='SearchForm' class='PagingButton' name='pagination' value='2'>»</button>
                </section>
        </section>
</main>
</body>
<script>
        // دکمه بیشتر
        function toggleTheFunctionalMenu0(id) {
                console.log(id);
                var TheFunctionalMenu0 = document.getElementById('TheFunctionalMenu0' + id);
                if (TheFunctionalMenu0.style.display === 'none') {
                        TheFunctionalMenu0.style.display = 'flex';
                } else {
                        TheFunctionalMenu0.style.display = 'none'
                }
        }
        function toggleTheFunctionalMenu1(id) {
                console.log(id);
                var TheFunctionalMenu1 = document.getElementById('TheFunctionalMenu1' + id);
                var more_button = document.getElementById('more_button' + id);
                more_button.innerHTML = 'بیشتر';
                if (TheFunctionalMenu1.style.display === 'flex') {
                        TheFunctionalMenu1.style.display = 'none';
                        more_button.innerHTML = 'بیشتر';
                } else {
                        TheFunctionalMenu1.style.display = 'flex'
                        more_button.innerHTML = 'کمتر';
                }
        }
</script>

</html>