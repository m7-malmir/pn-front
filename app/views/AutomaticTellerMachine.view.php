<?php 
    require_once 'header-up.view.php';
?>
    <title>منو عابر بانک | نیک پی</title>
    <meta name='robots' content='noindex, nofollow'>
    </meta>
    <?php 
    require_once 'header.view.php';
?>
    <main>
        <section class='side_menu'>
            <div style=''></div>
            <a class='side_menu_topic' style='background-color:inherit;'>
                <img src='<?= ROOT_URL; ?>public/assets/img/paqi_logo.png'></img>
                <p>منو خودپرداز</p>
            </a>
            <a style='width:90%;margin:10px auto;font-size:16px;text-decoration:none;color: white;text-align:center;border-bottom: 1px solid white;'
                href='#'></a>
            <a href='/membership/bank/PaymentTerminal/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/home.png'></img>
                <p>میزکار</p>
            </a>
            <a href='/membership/bank/PaymentTerminal/V1/costumer/new/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/new_acceptor.png'></img>
                <p>ثبت پذیرنده</p>
            </a>
            <a href='/membership/bank/PaymentTerminal/V1/costumer/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                <p>لیست پذیرنده ها</p>
            </a>
            <a href='/membership/bank/PaymentTerminal/V1/terminal/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/pos.png'></img>
                <p>لیست پایانه ها</p>
            </a>
            <a href='/membership/bank/PaymentTerminal/V1/request/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/request.png'></img>
                <p>لیست درخواست ها</p>
            </a>
            <a href='/membership/bank/PaymentTerminal/V1/document/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/document.png'></img>
                <p>لیست بایگانی</p>
            </a>

        </section>
        <section id="MainSection">
            <section id='FunctionalMenu'>
                <div>
                    <a href='/membership/tool/PostalCode/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>تأییدیه پستی</p>
                    </a>
                    <a href='/membership/tool/IbanVerificator/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>تأییدیه شبا</p>
                    </a>
                </div>
                <div>
                    <a href='../Export/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>خروجی</p>
                    </a>
                    <a href='../Import/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>ورودی</p>
                    </a>
                </div>
                <div>
                    <a href='../api/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>وب سرویس</p>
                    </a>
                    <a href='../Activation/' class='classification' style='display:none;'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>فعال سازی</p>
                    </a>
                </div>
                <div>
                    <a href='../Repository/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>انبار</p>
                    </a>
                    <a href='../Settings/Customization/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>تنظیمات</p>
                    </a>
                </div>
            </section>
        </section>
    </main>
</body>

</html>
1