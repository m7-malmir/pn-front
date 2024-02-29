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
            <img src='<?= ROOT_URL; ?>/img/paqi_logo.png'></img>
            <p>منو اعلانات</p>
        </a>
        <a style='width:90%;margin:20px auto;font-size:16px;text-decoration:none;color: white;text-align:center;border-bottom: 1px solid white;'
            href='#'></a>
        <a href='/membership/notification/' class='side_menu_topic'>
            <img src='<?= ROOT_URL; ?>img/home.png'></img>
            <p>میزکار</p>
        </a>
        <a href='../../membership/notification/Inscription/Acceptor/' class='side_menu_topic'>
            <img src='<?= ROOT_URL; ?>img/new_acceptor.png'></img>
            <p>پذیرنده جدید()</p>
        </a>
        <a href='../../membership/notification/Resume/' class='side_menu_topic'>
            <img src='<?= ROOT_URL; ?>img/pos.png'></img>
            <p>رزومه کاری()</p>
        </a>
        <a href='../../membership/notification/Activation/' class='side_menu_topic'>
            <img src='<?= ROOT_URL; ?>img/request.png'></img>
            <p>فعال سازی()</p>
        </a>
        <a href='../../membership/notification/Registry/' class='side_menu_topic'>
            <img src='<?= ROOT_URL; ?>img/document.png'></img>
            <p>طرح رجیستری()</p>
        </a>
        <a href='../../membership/notification/RepositoryEntry/' class='side_menu_topic'>
            <img src='<?= ROOT_URL; ?>img/document.png'></img>
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
                    <img src='<?= ROOT_URL; ?>/img/Excel.webp' style='width:100%;'></img>
                </button>
            </a>
            <a style='display:none;' href='/membership/accounting/invoice/Sell/import/'>
                <button id='ReturnFormButton'>
                    <img src='<?= ROOT_URL; ?>/img/import11.webp' style='width:100%;'></img>
                </button>
            </a>
            <a>
                <button id='ReturnFormButton' form="CancelForm">
                    <img src='<?= ROOT_URL; ?>/img/NoFilter.webp' style='width:100%;'></img>
                </button>
            </a>
            <a>
                <button id='ReturnFormButton' form="SearchForm">
                    <img src='<?= ROOT_URL; ?>/img/magnifier11.webp' style='width:100%;'></img>
                </button>
            </a>
            <a href='../Search/'>
                <button id='ReturnFormButton'>
                    <img src='<?= ROOT_URL; ?>/img/option11.webp' style='width:100%;'></img>
                </button>
            </a>
            <a>
                <button onclick="ToggleSideToolbar('SideToolbar');" id='ReturnFormButton' style='float: right;'>
                    <img src='<?= ROOT_URL; ?>/img/more.webp' style='width:100%;'></img>
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
                            <th class='' style='min-width: 50px;border-top-right-radius: 1rem;'>
                                <div class='search_div' id='limit' style='width:50px;'>
                                    <label>تعداد</label>
                                    <input name='bGltaXQ=' value='50' style=''></input>
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
                            <th id='functional_th_td' style='min-width:60px;border-top-right-radius: 1rem;'>
                                <a style='display:none;margin-top:8px;margin-bottom:0;' method='GET'>
                                    <button class='more_button' type='submit' style=''>
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
                        <td id='functional_th_td' style='z-index:50;height: 28px;left:0;position: sticky;'>
                            <form action='.php#617' style='margin-bottom:0;' method='GET'>
                                <button id='more_button49' onclick='toggleTheFunctionalMenu1(49);' type='button'
                                    class='more_button' name='aWRjb2Rl' value='4283479330'>
                                    بیشتر
                                </button>
                                <input type='hidden' name='c2lk' value='617' style=''></input>
                            </form>
                            <div id='TheFunctionalMenu149' value='617' class='slidemenu_table' style='width: 300px;'>
                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                    method='GET'>
                                    <button class='more_button' name='aWRjb2Rl' value='4283479330'>
                                        نمایش
                                    </button>
                                    <input type='hidden' name='c2lk' value='617' style=''></input>
                                </form>
                                <form action='accept/' method='POST'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                    <button class='more_button' name='c2lk' value='617'>
                                        تأیید
                                    </button>
                                </form>
                                <form action='delete/' method='POST'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                    <button class='more_button' name='c2lk' value='617'>
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
                        <td id='functional_th_td' style='z-index:50;height: 28px;left:0;position: sticky;'>
                            <form action='.php#581' style='margin-bottom:0;' method='GET'>
                                <button id='more_button13' onclick='toggleTheFunctionalMenu1(13);' type='button'
                                    class='more_button' name='aWRjb2Rl' value='3240256878'>
                                    بیشتر
                                </button>
                                <input type='hidden' name='c2lk' value='581' style=''></input>
                            </form>
                            <div id='TheFunctionalMenu113' value='581' class='slidemenu_table' style='width: 300px;'>
                                <form action='/membership/bank/PaymentTerminal/V1/summary/'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                    method='GET'>
                                    <button class='more_button' name='aWRjb2Rl' value='3240256878'>
                                        نمایش
                                    </button>
                                    <input type='hidden' name='c2lk' value='581' style=''></input>
                                </form>
                                <form action='accept/' method='POST'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                    <button class='more_button' name='c2lk' value='581'>
                                        تأیید
                                    </button>
                                </form>
                                <form action='delete/' method='POST'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                    <button class='more_button' name='c2lk' value='581'>
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
            <button type='submit' form='SearchForm' name='pagination' value='1'>1</button><input type='number'
                style='text-align:center;width:40px;background-color:inherit;color:white;border:1px solid white;font-weight: 900;'
                form='SearchForm' name='pagination' value='1'></input><button type='submit' form='SearchForm'
                name='pagination' value='13'>13</button><button type='submit' form='SearchForm' class='PagingButton'
                name='pagination' value='2'>»</button>
        </section>
    </section>
</main>
</body>


</html>