<?php
    require_once '../header-up.php';
?>
    <title>منو کارتخوان | نیک پی</title>
    <meta name='robots' content='noindex, nofollow'>
    </meta>
<?php 
    require_once '../header.php';
?>
    <main>
        <section class='side_menu'>
            <div style=''></div>
            <a class='side_menu_topic' style='background-color:inherit;'>
                <img src='<?= ROOT_URL; ?>img/paqi_logo.png'></img>
                <p>منو کارتخوان</p>
            </a>
            <a style='width:90%;margin:10px auto;font-size:16px;text-decoration:none;color: white;text-align:center;border-bottom: 1px solid white;'
                href='#'></a>
            <a href='paymentterminal.html' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>img/home.png'></img>
                <p>میزکار</p>
            </a>
            <a href='newcastumers.html' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>img/new_acceptor.png'></img>
                <p>ثبت پذیرنده</p>
            </a>
            <a href='caslist.html' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>img/acceptor.png'></img>
                <p>لیست پذیرنده ها</p>
            </a>
            <a href='terminallist.html' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>img/pos.png'></img>
                <p>لیست پایانه ها</p>
            </a>
            <a href='requestlist.html' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>img/request.png'></img>
                <p>لیست درخواست ها</p>
            </a>
            <a href='document.html' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>img/document.png'></img>
                <p>لیست بایگانی</p>
            </a>
        </section><!--side_menu_paymentterminal-->
        <section id="MainSection">
            <section id='FunctionalMenu'>
                <div>
                    <a href='/membership/tool/PostalCode/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>تأییدیه پستی</p>
                    </a>
                    <a href='/membership/tool/IbanVerificator/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>تأییدیه شبا</p>
                    </a>
                </div>
                <div>
                    <a href='../Export/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>خروجی</p>
                    </a>
                    <a href='../Import/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>ورودی</p>
                    </a>
                </div>
                <div>
                    <a href='../api/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>وب سرویس</p>
                    </a>
                    <a href='../Activation/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>فعال سازی</p>
                    </a>
                </div>
                <div>
                    <a href='../Application/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>اپلیکیشن</p>
                    </a>
                    <a href='../Forms/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>فرم ها</p>
                    </a>
                </div>
                <div>
                    <a href='../Repository/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>انبار</p>
                    </a>
                    <a href='../ElectronicalMail/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>اضطراری(EM/PM)</p>
                    </a>
                </div>
                <div>
                    <a href='../Terminal/Marketer/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پایانه های بازاریاب ها</p>
                    </a>
                </div>
                <div>
                    <a href='../Settings/Customization/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>تنظیمات</p>
                    </a>
                </div>
            </section>
        </section>
    </main>
</body>
</html>

