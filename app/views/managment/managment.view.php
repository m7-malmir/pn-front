<?php 

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
   <title>پنل مدیریتی | نیک پی</title>
    <meta name='description' content='پروفایل'>
    </meta>
    <meta name='robots' content='noindex, nofollow'>
<?php 
require_once("{$base_dir}header.php");
?>

    <main style='display:flex;flex-direction:column;'>
        <section>
            <a href='../.'>
                <button id='ReturnFormButton'>
                    <img src='<?= ROOT_URL; ?>public/assets/img/return.webp' style='width:100%;'></img>
                </button>
            </a>
            <a href='/membership/setting/'>
                <button id='ReturnFormButton' style='float: right;'>
                    <img src='<?= ROOT_URL; ?>public/assets/img/setting_logo_black_512X512.webp' style='width:100%;'></img>
                </button>
            </a>
        </section>
        <section id='FunctionalMenu'>
            <div>
                <a href='<?= ROOT_URL; ?>public/managment/ministerial' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/ministerial01.webp'></img>
                    </button>
                    <p>اداری</p>
                </a>
                <a href='/membership/bank/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/banking.webp'></img>
                    </button>
                    <p>بانکداری</p>
                </a>
            </div>
            <div>
                <a href='/membership/stock/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/stock.webp'></img>
                    </button>
                    <p>سهام</p>
                </a>
                <a href='/membership/contact/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/user_logo_265X265.webp'></img>
                    </button>
                    <p>مخاطبین</p>
                </a>
            </div>
            <div>
                <a href='../../membership/accounting/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/accounting_logo_385X385.webp'></img>
                    </button>
                    <p>حسابداری</p>
                </a>
                <a href='../img/Insurance/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/insurance.webp'></img>
                    </button>
                    <p>بیمه</p>
                </a>
            </div>
            <div>
                <a href='/membership/message/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/messenger.webp'></img>
                    </button>
                    <p>پیام رسان</p>
                </a>
                <a href='/membership/maintenance/' class='classification'>
                    <button style=''>
                        <img src='images/maintenance.webp'></img>
                    </button>
                    <p>تعمیرگاه</p>
                </a>
            </div>
            <div>
                <a href='/membership/shop/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/shop_logo_512X512.webp'></img>
                    </button>
                    <p>فروشگاه</p>
                </a>
            </div>
            <div>
                <a href='../../membership/CallCenter/' class='classification'>
                    <button style=''>
                        <img src='images/call_center_white.webp'></img>
                    </button>
                    <p>مرکز تماس</p>
                </a>
                <a href='../../membership/ServiceProvider/' class='classification'>
                    <button style=''>
                        <img src='images/specialist_white.webp'></img>
                    </button>
                    <p>خدمات رسان</p>
                </a>
            </div>
            <div>
                <a href='../../membership/page/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/page_logo_985X985.webp'></img>
                    </button>
                    <p>صفحات</p>
                </a>
                <a href='../../membership/product/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/user_logo_265X265.webp'></img>
                    </button>
                    <p>کالا/خدمات</p>
                </a>
            </div>
            <div>
                <a href='../../membership/agenda/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/agenda.webp'></img>
                    </button>
                    <p>برنامه ریزی</p>
                </a>
                <a href='../../membership/navigation/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/navigationbar_logo_512X512.webp'></img>
                    </button>
                    <p>نوار ابزار</p>
                </a>
            </div>
            <div>
                <a href='../../membership/sitemap/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/xml_logo.webp'></img>
                    </button>
                    <p>نقشه سایت</p>
                </a>
                <a href='../../membership/import/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/import.webp'></img>
                    </button>
                    <p>ورود داده</p>
                </a>
            </div>
            <div>
                <a href='../../membership/option/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/option.webp'></img>
                    </button>
                    <p>گزینه ها</p>
                </a>
                <a href='../../membership/tool/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/Applications.webp'></img>
                    </button>
                    <p>برنامه</p>
                </a>
            </div>
            <div>
                <a href='/membership/update/?first=yes' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/update.webp'></img>
                    </button>
                    <p>بروز رسانی</p>
                </a>
                <a href='/membership/Logistic/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/Logistic.webp'></img>
                    </button>
                    <p>حمل و نقل</p>
                </a>
            </div>
            <div>
                <a href='/membership/Psychology/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/psychology.webp'></img>
                    </button>
                    <p>روانشناسی</p>
                </a>
                <a href='/membership/filemanager/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/files.webp'></img>
                    </button>
                    <p>مدیریت فایل</p>
                </a>
            </div>
            <div>
                <a href='/membership/MiddleMan/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/MiddleMan.webp'></img>
                    </button>
                    <p>واسطه</p>
                </a>
                <a href='/membership/TermsAndConditions/' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/TermsAndConditions.webp'></img>
                    </button>
                    <p>شرایط و ضوابط</p>
                </a>
            </div>
            <div>
                <a href='/membership/backup' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/transfer_money.webp'></img>
                    </button>
                    <p>پشتیبان گیری</p>
                </a>
                <a href='https://paqi.ir/Help-IR.pdf' class='classification'>
                    <button style=''>
                        <img src='<?= ROOT_URL; ?>public/assets/img/ChatAble1.webp'></img>
                    </button>
                    <p>راهنما</p>
                </a>
            </div>
            <div>
                <a href='../../' class='classification'>
                    <button style=''>
                        <img src='home.webp'></img>
                    </button>
                    <p>صفحه اصلی</p>
                </a>
            </div>
        </section>
    </main>

</html>