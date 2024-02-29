<?php
require_once '../../header-up.php';
?>
<title>پی اس پی ها</title>
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
@media screen and (min-width:768px) {
    #MainSection {
        width:100%!important;
        margin-right: 0!important;
    }
}
</style>
<?php 
require_once '../../header.php';
?>
    <main>
        <section id='MainSection'>
            <section>
                <a onclick='history.back();'>
                    <button id='ReturnFormButton'>
                        <img src='<?= ROOT_URL; ?>img/return.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a href='setting/'>
                    <button id='ReturnFormButton' style='float: right;'>
                        <img src='<?= ROOT_URL; ?>img/setting_logo_black_512X512.webp' style='width:100%;'></img>
                    </button>
                </a>
            </section>
            <section id='FunctionalMenu'>
                <div>
                    <a href='<?= ROOT_URL; ?>view\paymentterminal\webapi\webapipassargad.php' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پاسارگاد</p>
                    </a>
                    <a href='pardakhtnovin/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پرداخت نوین</p>
                    </a>
                </div>
                <div>
                    <a href='irankish/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>ایران کیش</p>
                    </a>
                    <a href='Fanava/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>فناوا</p>
                    </a>
                </div>
                <div>
                    <a href='Sepehr/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>سپهر</p>
                    </a>
                    <a href='Sadad/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>سداد</p>
                    </a>
                </div>
                <div>
                    <a href='Parsian/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پارسیان</p>
                    </a>
                    <a href='saman/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>سامان</p>
                    </a>
                </div>
                <div>
                    <a href='behpardakht/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>به پرداخت</p>
                    </a>
                    <a href='sayancard/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>سایان کارد</p>
                    </a>
                </div>
                <div>
                    <a href='damavand/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>دماوند</p>
                    </a>
                    <a href='Eniac/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>انیاک</p>
                    </a>
                </div>
                <div>
                    <a href='ayandeh/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>آینده</p>
                    </a>
                </div>
                <div>
                    <a href='Internal/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پاکی (داخلی)</p>
                    </a>
                    <a href='/membership/bank/PaymentTerminal/WebServices/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>مخصوص نمایندگان</p>
                    </a>
                </div>
                <div>
                    <a href='message/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>پیامک</p>
                    </a>
                </div>
            </section>
        </section>
    </main>
</body>

</html>