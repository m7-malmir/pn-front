<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
    <title>منو کارتخوان | نیک پی</title>
    <meta name='robots' content='noindex, nofollow'>
    </meta>
<?php 
 require_once("{$base_dir}header.php");
?>
<style>
    main{
	display:block;
	margin: 0 auto;
}

</style>
    <main>
<?php include "sidemenu.php"; ?>
        <section id="MainSection">
            <section id='FunctionalMenu'>
                <div>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\postalcode' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>تأییدیه پستی</p>
                    </a>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\IbanVerificator' class='classification'>
                        <button style="">
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>تأییدیه شبا</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\export' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>خروجی</p>
                    </a>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\import\Import' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>ورودی</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\webapi\webapi' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>وب سرویس</p>
                    </a>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\Activation' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>فعال سازی</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\Application' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>اپلیکیشن</p>
                    </a>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\Forms' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>فرم ها</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\Repository' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>انبار</p>
                    </a>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\ElectronicalMail' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>اضطراری(EM/PM)</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\Marketer' class='classification'>
                        <button style="">
                            <img src='<?= ROOT_URL; ?>public/assets/img/pos1.webp'></img>
                        </button>
                        <p>پایانه های بازاریاب ها</p>
                    </a>
                </div>
                <div>
                    <a href='<?= ROOT_URL; ?>public\PaymentTerminal\Setting' class='classification'>
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

