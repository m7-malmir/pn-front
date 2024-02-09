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
<?php include 'sidemenu.php' ?>
        <section id="MainSection">
            <section id='FunctionalMenu'>
                <div>
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\postalcode.php' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>تأییدیه پستی</p>
                    </a>
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\IbanVerificator.php' class='classification'>
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
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\Activation.html' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>فعال سازی</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\Application.html' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>اپلیکیشن</p>
                    </a>
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\Forms.html' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>فرم ها</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\Repository.html' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>انبار</p>
                    </a>
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\ElectronicalMail.html' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>اضطراری(EM/PM)</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\Marketer.html' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پایانه های بازاریاب ها</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\Setting.html' class='classification'>
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

