<?php
    require_once '../../header-up.php';
?>
    <title>پاسارگاد</title>
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
                    <a href='group/contact/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>ثبت گروهی مخاطبین جدید</p>
                    </a>
                    <a href='group/update/status/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>بروز رسانی گروهی</p>
                    </a>
                </div>
                <div>
                    <a href='update/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>اصلاحات</p>
                    </a>
                    <a href='./AllocateSerial/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>تخصیص</p>
                    </a>
                </div>
                <div>
                    <a href='./ReplacementSerial/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>جایگزینی سریال</p>
                    </a>
                    <a href='group/update/reconfig/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>ویرایش پذیرنده</p>
                    </a>
                </div>
                <div>
                    <a href='single/ResetPassword/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>باز نشانی رمز</p>
                    </a>
                    <a href='Transaction/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>ریز تراکنش</p>
                    </a>
                </div>
            </section>
        </section>
    </main>
</body>
</html>