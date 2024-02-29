<?php
    require_once '../../header-up.php';
?>
    <title>انواع ورود گروهی</title>
    <?php 
    require_once '../../header.php';
?>
<style>
    main{
	display:block;
	margin: 0 auto;
}
#MainSection {
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    background-color: inherit;
    width: 100%;
    height: calc(100vh - 64px);
    overflow-y: scroll;
}
#FunctionalMenu {
    display: flex;
    flex-direction: column;
    width: 90%;
    margin: 50px auto;
}
</style>
    <main>
        <section id='MainSection'>
            <section>
                <a onclick='history.back();'>
                    <button id='ReturnFormButton'>
                        <img src='<?= ROOT_URL; ?>img/return.webp' style='width:100%;'></img>
                    </button>
                </a>
            </section>
            <section id='FunctionalMenu'>
                <div>
                    <a href='<?= ROOT_URL; ?>view\PaymentTerminal\import\Import-passargad.php' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پاسارگاد</p>
                    </a>
                    <a href='irankish/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>ایران کیش</p>
                    </a>
                </div>
                <div>
                    <a href='pardakhtnovin/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پرداخت نوین</p>
                    </a>
                    <a href='sepehr/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>سپهر</p>
                    </a>
                </div>
                <div>
                    <a href='fanava/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>فن آوا</p>
                    </a>
                    <a href='Sadad/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>سداد</p>
                    </a>
                </div>
                <div>
                    <a href='Sayan/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>سایان کارت</p>
                    </a>
                    <a href='Parsian/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پارسیان</p>
                    </a>
                </div>
                <div>
                    <a href='Saman/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>سامان</p>
                    </a>
                    <a href='َAsanPardakht/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>آسان پرداخت</p>
                    </a>
                </div>
                <div>
                    <a href='Behpardakht/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>به پرداخت</p>
                    </a>
                    <a href='Eniac/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>انیاک</p>
                    </a>
                </div>
                <div>
                    <a href='Transaction/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>سود تراکنش</p>
                    </a>
                    <a href='Ownership/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>مالکیت</p>
                    </a>
                </div>
            </section>
            <p>به روز رسانی بر مبنای شبا می تواند 12000 مورد را در 11 دقیقه که معادل 660 ثانیه است را به روز نماید</p>
            <p>این مقدار معادل این است که در هر ثانیه 18 عدد مورد به روز می شود که یکی از دستاورد های مهم</p>
            <p>از سال 2020 تا به امروز می باشد</p>
        </section>
    </main>
</body>

</html>