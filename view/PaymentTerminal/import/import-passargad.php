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
                <a href='<?= ROOT_URL; ?>view\PaymentTerminal\import\passargad-iban.php' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>بر مبنای شبا</p>
                    </a>
                    <a href='terminal/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>بر مبنای ترمینال</p>
                    </a>
                </div>
                <div>
                    <a href='ShaparakError/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>ورود خطا های شاپرکی</p>
                    </a>
                    <a href='ElectronicalMail/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>ورود پیام های اضطراری EM</p>
                    </a>
                </div>
                <div>
                    <a href='Document/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>بایگانی</p>
                    </a>
                    <a href='Serial/' class='classification'>
                        <button style=''>
                            <img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
                        </button>
                        <p>بر مبنای سریال</p>
                    </a>
                </div>
            </section>
            <style>
                #Help {
                    width: 300px;
                    margin: 10px auto;
                }

                #Help table {
                    width: 100%;
                }
            </style>
            <section id='Help'>
                <h5>راهنمای دریافت فایل ترمینال</h5>
                <table>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ورود به PSP</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>نوار ابزار</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>پایانه ها</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>اطلاعات پایانه ها</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>خروجی اکسل</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>باز کردن اکسل</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>انتخاب ستون تاریخ ایجاد</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>انتخاب گزینه SORT A-Z</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>کپی کردن ثبت های روز قبل حد اکثر 300 عدد</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>الصاق در یک اکسل دیگر و یا حذف موارد غیر انتخاب</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section id='Help'>
                <h5>راهنمای دریافت فایل خطای شاپرک</h5>
                <table>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ورود به PSP</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>نوار ابزار</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>مدیریت پذیرندگان</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>ترمینال ها</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>خروجی اکسل</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>فیلتر وضعیت</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>و فقط مواردی که خطا دارند را نگهمیداریم بقیه اطلاعات را حذف می نمایم</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section id='Help'>
                <h5>راهنمای دریافت فایل EM/PM</h5>
                <table>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ورود به PSP</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>نوار ابزار</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>امور دفاتر</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>درخواست ها</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>کل درخواست ها</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>تغییر وضعیت وظیفه به جاری</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>تغییر نوع وظیفه به خرابی</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>خروجی اکسل</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section id='Help'>
                <h5>راهنمای دریافت فایل مدارک</h5>
                <table>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ورود به PSP</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>نوار ابزار</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>مدیریت پذیرندگان</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>پذیرندگان</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>اسناد پذیرندگان</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>خروجی اکسل</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>وضعیت نیاز به تکمیل کاملا حذف شود</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>زیرا نیاز به تکمیل وضعیت موقتی است</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section id='Help'>
                <h5>راهنمای دریافت فایل سود تراکنش</h5>
                <table>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ورود به PSP</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>نوار ابزار</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>امور دفاتر</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>گزارش ها</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>سرجمع تراکنش ماهیانه</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>خروجی اکسل</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>باز کردن فایل اکسل</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>حذف تمامی ستون ها به جز تریمنال و تعداد تراکنش خرید موفق</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>توجه داشته باشید ستون اول باید ترمینال باشد و ستون دوم تعداد تراکنش</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </main>
</body>

</html>