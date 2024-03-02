<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
    <title>خدمات پس از فروش</title>
    <?php 
 require_once("{$base_dir}header.php");
?>
    <main>
        <section class='side_menu'>
            <div style=''></div>
            <a class='side_menu_topic' style='background-color:inherit;'>
                <img src='<?= ROOT_URL; ?>public/assets/img/paqi_logo.png'></img>
                <p>منو تعمیرگاه</p>
            </a>
            <a style='width:90%;margin:20px auto;font-size:16px;text-decoration:none;color: white;text-align:center;border-bottom: 1px solid white;'
                href='#'></a>
            <a href='/membership/maintenance/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/home.png'></img>
                <p>میزکار</p>
            </a>
            <a href='/membership/maintenance/New/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/new_acceptor.png'></img>
                <p>ثبت تعمیری</p>
            </a>
            <a href='/membership/maintenance/reception/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                <p>بخش پذیرش</p>
            </a>
            <a href='/membership/maintenance/triage/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                <p>تریاژ</p>
            </a>
            <a href='/membership/maintenance/workshop/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                <p>تعمیرگاه</p>
            </a>
            <a href='/membership/maintenance/Declaration/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                <p>اعلام هزینه</p>
            </a>
            <a href='/membership/maintenance/QualityControl/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                <p>کنترل کیفیت</p>
            </a>
            <a href='/membership/maintenance/clearance/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/new_acceptor.png'></img>
                <p>بخش ترخیص</p>
            </a>
            <a href='/membership/maintenance/archive/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/new_acceptor.png'></img>
                <p>بخش تحویل</p>
            </a>
            <a href='/membership/maintenance/Report/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                <p>گزارشگیری</p>
            </a>
            <a href='/membership/maintenance/Setting/' class='side_menu_topic'>
                <img src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                <p>تنظیمات</p>
            </a>


        </section><!--side_menu_fix_pos-->
        <section id='MainSection'>
            <section>
                <a onclick='history.back();'>
                    <button id='ReturnFormButton'>
                        <img src='<?= ROOT_URL; ?>public/assets/img/return.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a>
                    <button id='ReturnFormButton' form='Export'>
                        <img src='<?= ROOT_URL; ?>public/assets/img/Excel.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a style='display:none;' href='/membership/accounting/invoice/Sell/import/'>
                    <button id='ReturnFormButton'>
                        <img src='<?= ROOT_URL; ?>public/assets/img/import11.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a>
                    <button id='ReturnFormButton' form="CancelForm">
                        <img src='<?= ROOT_URL; ?>public/assets/img/NoFilter.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a>
                    <button id='ReturnFormButton' form="SearchForm">
                        <img src='<?= ROOT_URL; ?>public/assets/img/magnifier11.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a>
                    <button onclick="ToggleSideToolbar('SideToolbar');" id='ReturnFormButton' style='float: right;'>
                        <img src='<?= ROOT_URL; ?>public/assets/img/more.webp' style='width:100%;'></img>
                    </button>
                </a>
            </section>
            <form action='/membership/maintenance/Search/' method='GET' style='display: none;' id='Search'></form>
            <form id='CancelForm' action='./.' method='GET' style='display: none;'></form>
            <form action='export/' method='POST' style='display: none;' id='Export'></form>
            <div id='scounter2' style='display:none;'>
            </div>
            <section class='resultat'>

            </section>
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
                                <th class=''>
                                    <div class='search_div' id='customid'>
                                        <label>پیگیری</label>
                                        <input name='Y3VzdG9taWQ=' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='indate'>
                                        <label>ورود</label>
                                        <input name='aW5kYXRl' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='status'>
                                        <label>وضعیت</label>
                                        <select name='c3RhdHVz'>
                                            <option value='' selected>همه موارد</option>
                                            <option value='منتظر پذیرش'>منتظر پذیرش( 0 )</option>
                                            <option value='پذیرش'>پذیرش( 0 )</option>
                                            <option value='تعمیرگاه'>تعمیرگاه( 0 )</option>
                                            <option value='تعمیرگاه تخصصی'>تعمیرگاه تخصصی( 0 )</option>
                                            <option value='اعلام هزینه'>اعلام هزینه( 0 )</option>
                                            <option value='در حال تعمیر'>در حال تعمیر( 0 )</option>
                                            <option value='آماده'>آماده( 0 )</option>
                                            <option value='درخواست ارسال'>درخواست ارسال( 2 )</option>
                                            <option value='بایگانی'>بایگانی( 0 ) </option>
                                        </select>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='serial'>
                                        <label>سریال</label>
                                        <input name='c2VyaWFs' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='client'>
                                        <label>نام</label>
                                        <input name='Y2xpZW50' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id=''>
                                        <label>نماینده</label>
                                        <select id="SelectListFilter11" name="YWdlbnQ=" size="4"
                                            style='width:100%;display:none;height:150px;position:absolute;top:50px;'
                                            autocomplete='off'>
                                            <option onclick="CopyToValue(11,'admin admin');" value='admin'>admin admin
                                            </option>
                                            <option onclick="CopyToValue(11,'ساسان قاسمی');" value='sassan'>ساسان قاسمی
                                            </option>
                                            <option onclick="CopyToValue(11,'هدیه روزبیانی');" value='rozbayani'>هدیه
                                                روزبیانی</option>
                                            <option onclick="CopyToValue(11,'رامین علی دوست جیراندرق');"
                                                value='raminalidost'>رامین علی دوست جیراندرق</option>
                                            <option onclick="CopyToValue(11,'عسل کلینی');" value='koleyni'>عسل کلینی
                                            </option>
                                            <option onclick="CopyToValue(11,'سارا فرمانی');" value='farmani'>سارا فرمانی
                                            </option>
                                            <option onclick="CopyToValue(11,'حسین فرهیخته');" value='hoseinfarhikhte'>
                                                حسین فرهیخته</option>
                                            <option onclick="CopyToValue(11,'سارا حاجی');" value='sarahaji'>سارا حاجی
                                            </option>
                                            <option onclick="CopyToValue(11,'حجت بختیاری');" value='virapose'>حجت
                                                بختیاری</option>
                                            <option onclick="CopyToValue(11,'امین کیانی');" value='kiani'>امین کیانی
                                            </option>
                                            <option onclick="CopyToValue(11,'امین کیانی');" value='aminkiani'>امین کیانی
                                            </option>
                                            <option onclick="CopyToValue(11,'فرزاد رفعتی نیا');" value='farzadrafati'>
                                                فرزاد رفعتی نیا</option>
                                            <option onclick="CopyToValue(11,'محمد هادی  ندائی');" value='2360301004'>
                                                محمد هادی ندائی</option>
                                            <option onclick="CopyToValue(11,'هادی فرمنی');" value='hadifarmani'>هادی
                                                فرمنی</option>
                                            <option onclick="CopyToValue(11,'امیر درویش');" value='amirdarvish'>امیر
                                                درویش</option>
                                            <option onclick="CopyToValue(11,'حسین علیزاده');" value='pnp.alizade'>حسین
                                                علیزاده</option>
                                            <option onclick="CopyToValue(11,'پوریا فعله گری');" value='pnp.falegari'>
                                                پوریا فعله گری</option>
                                            <option onclick="CopyToValue(11,'سینا  محمودوند');" value='pnp.sina'>سینا
                                                محمودوند</option>
                                            <option onclick="CopyToValue(11,'غلامرضا قنواتی');" value='pnp.ghanavati'>
                                                غلامرضا قنواتی</option>
                                            <option onclick="CopyToValue(11,'مرتضی عباسی');" value='pnp.mortezaabasi'>
                                                مرتضی عباسی</option>
                                            <option onclick="CopyToValue(11,'علی غفاری');" value='pnp.alighafari'>علی
                                                غفاری</option>
                                            <option onclick="CopyToValue(11,'حسین  نفر');" value='pnp.nafar'>حسین نفر
                                            </option>
                                            <option onclick="CopyToValue(11,'محمدرضا  کریمیان');" value='pnp.gandom'>
                                                محمدرضا کریمیان</option>
                                            <option onclick="CopyToValue(11,'رامین یدالهی');" value='azarpos'>رامین
                                                یدالهی</option>
                                            <option onclick="CopyToValue(11,'سجاد  بشیری');" value='almaspay'>سجاد بشیری
                                            </option>
                                            <option onclick="CopyToValue(11,'مرتضی جهان');" value='pnp.jahan'>مرتضی جهان
                                            </option>
                                            <option onclick="CopyToValue(11,'منصور محمدحسینی');" value='mansorhoseini'>
                                                منصور محمدحسینی</option>
                                            <option onclick="CopyToValue(11,'امیر قلندری');" value='Bivamir'>امیر قلندری
                                            </option>
                                            <option onclick="CopyToValue(11,'میلاد مقرب');" value='Pnp.kartnet'>میلاد
                                                مقرب</option>
                                            <option onclick="CopyToValue(11,'رضا سلگی');" value='pnp.solgi'>رضا سلگی
                                            </option>
                                            <option onclick="CopyToValue(11,'فرزانه  غافرین');" value='pishrosaman'>
                                                فرزانه غافرین</option>
                                            <option onclick="CopyToValue(11,'آیدا ابراهیمی');" value='Aidaebrahimi'>آیدا
                                                ابراهیمی</option>
                                            <option onclick="CopyToValue(11,'ایمان بقائی');" value='paxfriend'>ایمان
                                                بقائی</option>
                                            <option onclick="CopyToValue(11,'حسام مالمیر');" value='minitek'>حسام مالمیر
                                            </option>
                                            <option onclick="CopyToValue(11,'رضا سلگی');" value='psp.nikpay'>رضا سلگی
                                            </option>
                                            <option onclick="CopyToValue(11,'مونا بابایی');" value='babaei'>مونا بابایی
                                            </option>
                                            <option onclick="CopyToValue(11,'محمد حسین زا‌‌‌‌‌ءری');" value='pnp.zaeri'>
                                                محمد حسین زا‌‌‌‌‌ءری</option>
                                            <option onclick="CopyToValue(11,'نفیسه عزیزی');" value='pnp.azizi'>نفیسه
                                                عزیزی</option>
                                            <option onclick="CopyToValue(11,'مهدی منصور خیاو');" value='Arvinpos'>مهدی
                                                منصور خیاو</option>
                                            <option onclick="CopyToValue(11,'سید محمد حسین شاهزاده فاضلی');"
                                                value='pnp.rasam'>سید محمد حسین شاهزاده فاضلی</option>
                                            <option onclick="CopyToValue(11,'آیدا شکوهی زاده');" value='pnp.jahanpos'>
                                                آیدا شکوهی زاده</option>
                                            <option onclick="CopyToValue(11,'زهرا مختاری');" value='honampay'>زهرا
                                                مختاری</option>
                                            <option onclick="CopyToValue(11,'حسین کیانی');" value='Pishrosam6an'>حسین
                                                کیانی</option>
                                            <option onclick="CopyToValue(11,'حسین کیایی');" value='Pishrosam689an'>حسین
                                                کیایی</option>
                                            <option onclick="CopyToValue(11,'حسین کیایی');" value='Farzanehpishro'>حسین
                                                کیایی</option>
                                            <option onclick="CopyToValue(11,'سید حسین موسوی وند');" value='mosavipos'>
                                                سید حسین موسوی وند</option>
                                            <option onclick="CopyToValue(11,'جواد فرهادیان');" value='pars'>جواد
                                                فرهادیان</option>
                                            <option onclick="CopyToValue(11,'محمد قربانی');" value='motamed'>محمد قربانی
                                            </option>
                                            <option onclick="CopyToValue(11,'رضا عظیمی');" value='fixpos'>رضا عظیمی
                                            </option>
                                            <option onclick="CopyToValue(11,'علی مهین آباد');" value='pishro.sayar'>علی
                                                مهین آباد</option>
                                            <option onclick="CopyToValue(11,'وحید  خانی');" value='vahidkhani '>وحید
                                                خانی</option>
                                            <option onclick="CopyToValue(11,'محمد ناصری فورگ');" value='naseri'>محمد
                                                ناصری فورگ</option>
                                            <option onclick="CopyToValue(11,'حمید حکیم نجفی');" value='hamidnajafi'>حمید
                                                حکیم نجفی</option>
                                            <option onclick="CopyToValue(11,'miss izd');" value='missizd'>miss izd
                                            </option>
                                            <option onclick="CopyToValue(11,'علیرضا وجدانی');" value='vojdani'>علیرضا
                                                وجدانی</option>
                                            <option onclick="CopyToValue(11,'ندا ایزدی');" value='izadi'>ندا ایزدی
                                            </option>
                                            <option onclick="CopyToValue(11,'سارا نجیمی');" value='saranajimi'>سارا
                                                نجیمی</option>
                                            <option onclick="CopyToValue(11,'لادن محمدی');" value='ladanmohmadi'>لادن
                                                محمدی</option>
                                            <option onclick="CopyToValue(11,'امان اله حقانی خواه');" value='haqani'>امان
                                                اله حقانی خواه</option>
                                            <option onclick="CopyToValue(11,'سجاد سمیعی');" value='hidapos'>سجاد سمیعی
                                            </option>
                                            <option onclick="CopyToValue(11,'میلاد مشیری تادوانی');"
                                                value='میلاد مشیری تادوانی'>میلاد مشیری تادوانی</option>
                                            <option onclick="CopyToValue(11,'محمد جواد فردائی پور');"
                                                value='fardayipor'>محمد جواد فردائی پور</option>
                                            <option onclick="CopyToValue(11,'علی  ترحمی');" value='alitarahomi'>علی
                                                ترحمی</option>
                                            <option onclick="CopyToValue(11,'جواد صفری');" value='javadsafari'>جواد صفری
                                            </option>
                                            <option onclick="CopyToValue(11,'رضا  بابازاده');" value='Saminpos'>رضا
                                                بابازاده</option>
                                            <option onclick="CopyToValue(11,'جلیل کریمی');" value='jalilkarimi'>جلیل
                                                کریمی</option>
                                            <option onclick="CopyToValue(11,'محمد حاجی زاده');" value='mohamadhajizade'>
                                                محمد حاجی زاده</option>
                                            <option onclick="CopyToValue(11,'رضا فلاحی');" value='rezafalahi'>رضا فلاحی
                                            </option>
                                            <option onclick="CopyToValue(11,'مهرداد  باتوانی');" value='batavani'>مهرداد
                                                باتوانی</option>
                                            <option onclick="CopyToValue(11,'مریم ری کا');" value='maryam reyka'>مریم ری
                                                کا</option>
                                            <option onclick="CopyToValue(11,'robot robot');" value='robot'>robot robot
                                            </option>
                                            <option onclick="CopyToValue(11,'negar ghafurian');"
                                                value='Negar Ghafurian'>negar ghafurian</option>
                                            <option onclick="CopyToValue(11,'احمد حیدری');" value='pnpheydari'>احمد
                                                حیدری</option>
                                            <option onclick="CopyToValue(11,'زهرا بدیلی زاده');" value='Badili zade'>
                                                زهرا بدیلی زاده</option>
                                            <option onclick="CopyToValue(11,'امید قیاسوند');" value='OMID'>امید قیاسوند
                                            </option>
                                            <option onclick="CopyToValue(11,'آزاده محمدی');" value='azadeh'>آزاده محمدی
                                            </option>
                                            <option onclick="CopyToValue(11,'زینب نوایی');" value='navaie'>زینب نوایی
                                            </option>
                                            <option onclick="CopyToValue(11,'حسین پاشا');" value='pnp.pasha'>حسین پاشا
                                            </option>
                                            <option onclick="CopyToValue(11,'پیشخوان انصاری');" value='ansari'>پیشخوان
                                                انصاری</option>
                                            <option onclick="CopyToValue(11,'مهدی ایزدی');" value='mahdi.izadi'>مهدی
                                                ایزدی</option>
                                            <option onclick="CopyToValue(11,'نوید اخترشناس');" value='akhtarpos'>نوید
                                                اخترشناس</option>
                                            <option onclick="CopyToValue(11,'محمد محمودی');" value='pmp.jahan'>محمد
                                                محمودی</option>
                                            <option onclick="CopyToValue(11,'مصطفی عبدالهی');" value='arses'>مصطفی
                                                عبدالهی</option>
                                            <option onclick="CopyToValue(11,'نادر دانشور');" value='Naderdaneshvar'>نادر
                                                دانشور</option>
                                            <option onclick="CopyToValue(11,'میثم مالکی');" value='p.nicpay'>میثم مالکی
                                            </option>
                                            <option onclick="CopyToValue(11,'محمد مهدی مقدس بیات');"
                                                value='mohamadmahdi moghadas bayat'>محمد مهدی مقدس بیات</option>
                                            <option onclick="CopyToValue(11,'معین ملک لو');" value='OMID.PAY'>معین ملک
                                                لو</option>
                                            <option onclick="CopyToValue(11,'سید جواد حسینی');"
                                                value='seyed javad Hosseini'>سید جواد حسینی</option>
                                            <option onclick="CopyToValue(11,'رضا  دهکاهی');" value='reza dehkahi'>رضا
                                                دهکاهی</option>
                                            <option onclick="CopyToValue(11,'محمد  کاظمی نژاد');"
                                                value='mohamad kazemi nejad'>محمد کاظمی نژاد</option>
                                            <option onclick="CopyToValue(11,'مهران مقتدری نسب');"
                                                value='moghtaderi nasab'>مهران مقتدری نسب</option>
                                            <option onclick="CopyToValue(11,'امیر راشدی');" value='amir rashedi'>امیر
                                                راشدی</option>
                                            <option onclick="CopyToValue(11,'حامد  جهانبازی ');"
                                                value='hamed jahanbazi'>حامد جهانبازی </option>
                                            <option onclick="CopyToValue(11,'محمد هژیری');" value='mohamad hojabri'>محمد
                                                هژیری</option>
                                            <option onclick="CopyToValue(11,'رضا بنجوئی');" value='reza bonjoyi'>رضا
                                                بنجوئی</option>
                                            <option onclick="CopyToValue(11,'محمود فراهانی');" value='computer novin'>
                                                محمود فراهانی</option>
                                            <option onclick="CopyToValue(11,'مهدی  اسدی');" value='mehdi asadi'>مهدی
                                                اسدی</option>
                                            <option onclick="CopyToValue(11,'بختیار بامری');" value='bakhtiyar bameri'>
                                                بختیار بامری</option>
                                            <option onclick="CopyToValue(11,'ولید اب سالان');" value='valid absalan'>
                                                ولید اب سالان</option>
                                            <option onclick="CopyToValue(11,'اعظم سادات  سید النگی');"
                                                value='seyed alangi'>اعظم سادات سید النگی</option>
                                            <option onclick="CopyToValue(11,'فردین برزگررازیان');"
                                                value='fardin barzegar'>فردین برزگررازیان</option>
                                            <option onclick="CopyToValue(11,'حمید  راغ');" value='arta pardaz'>حمید راغ
                                            </option>
                                            <option onclick="CopyToValue(11,'محمد  فتاحی');" value='mohamad fatahi'>محمد
                                                فتاحی</option>
                                            <option onclick="CopyToValue(11,'ذکریا زارعی طاسکند');" value='Z.Zareei'>
                                                ذکریا زارعی طاسکند</option>
                                            <option onclick="CopyToValue(11,'فاطمه بیستونی');" value='bistoni'>فاطمه
                                                بیستونی</option>
                                            <option onclick="CopyToValue(11,'امیر حاجی حسین لو');"
                                                value='haji hoseinlo'>امیر حاجی حسین لو</option>
                                            <option onclick="CopyToValue(11,'غلامرضا حسنلو');" value='hasanlo'>غلامرضا
                                                حسنلو</option>
                                            <option onclick="CopyToValue(11,'سینا کوهی گوی اغاج');" value='sina kohi'>
                                                سینا کوهی گوی اغاج</option>
                                            <option onclick="CopyToValue(11,'عمران نظری');" value='nazari'>عمران نظری
                                            </option>
                                            <option onclick="CopyToValue(11,'کبری ملائی');" value='molayi'>کبری ملائی
                                            </option>
                                            <option onclick="CopyToValue(11,'بهزاد رزمجوحاجی ابادی');" value='razmjo'>
                                                بهزاد رزمجوحاجی ابادی</option>
                                            <option onclick="CopyToValue(11,'ارزو سریو');" value='SARIVE'>ارزو سریو
                                            </option>
                                            <option onclick="CopyToValue(11,'مهدی نادرپور');" value='NADERPOR'>مهدی
                                                نادرپور</option>
                                            <option onclick="CopyToValue(11,'هاشم هجرتی');" value='HEJRATI'>هاشم هجرتی
                                            </option>
                                            <option onclick="CopyToValue(11,'سجاد اردمه');" value='ARDAME'>سجاد اردمه
                                            </option>
                                            <option onclick="CopyToValue(11,'حسین  قوامی فر');" value='ghavami far'>حسین
                                                قوامی فر</option>
                                            <option onclick="CopyToValue(11,'محمد صالحی');" value='mohamadsalehi'>محمد
                                                صالحی</option>
                                            <option onclick="CopyToValue(11,'زهرا رضائی');" value='rezayi'>زهرا رضائی
                                            </option>
                                            <option onclick="CopyToValue(11,'محمد تقی ملائی');"
                                                value='MOHAMAD TAGHI MOLAYI'>محمد تقی ملائی</option>
                                            <option onclick="CopyToValue(11,'محمد محزون');" value='MAHZON'>محمد محزون
                                            </option>
                                            <option onclick="CopyToValue(11,'محمد رابحی');" value='rabehi'>محمد رابحی
                                            </option>
                                            <option onclick="CopyToValue(11,'رضا  ربیعی خوندابی');" value='RABIEE'>رضا
                                                ربیعی خوندابی</option>
                                            <option onclick="CopyToValue(11,'رضا ناجی');" value='NAJI'>رضا ناجی</option>
                                            <option onclick="CopyToValue(11,'سعید شیخ الاسلامی');"
                                                value='sheykholeslami'>سعید شیخ الاسلامی</option>
                                        </select>
                                        <input name='' value='' style='width:100%;' id="SearchboxFilter11"
                                            class="SearchFilter2" placeholder="نام نماینده" onkeyup="LiveFilter('11');"
                                            autocomplete='off'>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id=''>
                                        <label>مدل</label>
                                        <input name=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='outdate'>
                                        <label>خروج</label>
                                        <input name='b3V0ZGF0ZQ==' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='mobile'>
                                        <label>نلفن همراه</label>
                                        <input name='bW9iaWxl' value=''></input>
                                    </div>
                                </th>
                                <th id='functional_th_td' style='min-width:60px;border-top-right-radius: 1rem;'>
                                    <a style='display:none;margin-top:8px;margin-bottom:0;' method='GET'>
                                        <button class='more_button' type='submit' style=''>
                                            عملیات
                                        </button>
                                    </a>
                                    0
                                </th>
                            </tr>
                            <button style='display:none;'></button>
                        </form>

                        <tr style="">
                            <td style='width:50px;'>
                                <div class='Counter' style=''>1</div>
                            </td>
                            <td class='LittleScreen'><input value="1"></input></td>
                            <td class='LittleScreen'><input value="1401-05-26-10:07:33"></input></td>
                            <td class='LittleScreen'><input value='آماده'></input></td>
                            <td class='MiddleScreen'><input value=''></input></td>
                            <td class='MiddleScreen'><input value=''></input></td>
                            <td class='MiddleScreen'><input value='رضا سلگی'></input></td>
                            <td class='MiddleScreen'><input value='PAX D210 B'></input></td>
                            <td class='MiddleScreen'><input value=''></input></td>
                            <td class='MiddleScreen'><input value=''></input></td>

                            <td id='functional_th_td' style='z-index:1;height: 28px;left:0;position: sticky;'>
                                <form action='.php#2' style='margin-bottom:0;' method='GET'>
                                    <button id='more_button2' class='more_button' onclick='toggleTheFunctionalMenu1(2);'
                                        type='button' name='' value=''>
                                        بیشتر
                                    </button>
                                    <input type='hidden' name='c2lk' value='2' style=''></input>
                                    <button
                                        style='display:none;padding: 0;background-color:inherit;border: none;color: white;'
                                        type='button'>
                                        &#x25BC;
                                    </button>
                                </form>
                                <div id='TheFunctionalMenu12' value='2' class='slidemenu_table' style='width:250px;'>
                                    <form action='#'
                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                        method='GET'>
                                        <button type='button' onclick="reporting('2');" class='more_button'>
                                            نمایش
                                        </button>
                                    </form>

                                    <form action='.php' method='GET'
                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                        <button class='more_button' name='c2lk' value='2'>
                                            ویرایش
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr style="">
                            <td style='width:50px;'>
                                <div class='Counter' style=''>2</div>
                            </td>
                            <td class='LittleScreen'><input value=""></input></td>
                            <td class='LittleScreen'><input value="1401-05-26-09:59:02"></input></td>
                            <td class='LittleScreen'><input value='آماده'></input></td>
                            <td class='MiddleScreen'><input value='72154587'></input></td>
                            <td class='MiddleScreen'><input value=''></input></td>
                            <td class='MiddleScreen'><input value='رضا سلگی'></input></td>
                            <td class='MiddleScreen'><input value='new pos 7210'></input></td>
                            <td class='MiddleScreen'><input value=''></input></td>
                            <td class='MiddleScreen'><input value=''></input></td>

                            <td id='functional_th_td' style='z-index:2;height: 28px;left:0;position: sticky;'>
                                <form action='.php#1' style='margin-bottom:0;' method='GET'>
                                    <button id='more_button1' class='more_button' onclick='toggleTheFunctionalMenu1(1);'
                                        type='button' name='' value=''>
                                        بیشتر
                                    </button>
                                    <input type='hidden' name='c2lk' value='1' style=''></input>
                                    <button
                                        style='display:none;padding: 0;background-color:inherit;border: none;color: white;'
                                        type='button'>
                                        &#x25BC;
                                    </button>
                                </form>
                                <div id='TheFunctionalMenu11' value='1' class='slidemenu_table' style='width:250px;'>
                                    <form action='#'
                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                        method='GET'>
                                        <button type='button' onclick="reporting('1');" class='more_button'>
                                            نمایش
                                        </button>
                                    </form>

                                    <form action='.php' method='GET'
                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'>
                                        <button class='more_button' name='c2lk' value='1'>
                                            ویرایش
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
                    name='pagination' value='1'>1</button>
            </section>
        </section>
    </main>
</body>
<script>

    // نمایش جستجو
    function ToogleSearch(idname) {
        console.log(idname);
        var SearchField = document.getElementById(idname);
        if (SearchField.style.display === 'none') {
            SearchField.style.display = 'flex';
        } else {
            SearchField.style.display = 'none'
        }
    }
    // پیش نمایش اطلاعات
    function reporting(ssid) {
        //e.preventDefault();
        //var ssid = $('.show').val();
        $.ajax
            ({
                type: "POST",
                url: "show.php",
                data: { "ssid": ssid },
                success: function (data) {
                    $('.resultat').html(data);
                    //$('#publication_form')[0].reset();
                }
            });
    }


    // دکمه بیشتر
    function toggleTheFunctionalMenu0(id) {
        console.log(id);
        var TheFunctionalMenu0 = document.getElementById('TheFunctionalMenu0' + id);
        if (TheFunctionalMenu0.style.display === 'none') {
            TheFunctionalMenu0.style.display = 'flex';
        } else {
            TheFunctionalMenu0.style.display = 'none'
        }
    }
    function toggleTheFunctionalMenu1(id) {
        console.log(id);
        var TheFunctionalMenu1 = document.getElementById('TheFunctionalMenu1' + id);
        var more_button = document.getElementById('more_button' + id);
        more_button.innerHTML = 'کمتر';
        if (TheFunctionalMenu1.style.display === 'none') {
            TheFunctionalMenu1.style.display = 'flex';
            more_button.innerHTML = 'کمتر';
        } else {
            TheFunctionalMenu1.style.display = 'none'
            more_button.innerHTML = 'بیشتر';
        }
    }


    function SearchOption() {
        var i;
        var input = document.getElementById("SpecialSearcher");
        var filter = input.value.toUpperCase();
        var ul = document.getElementById("SearchList");
        var li = ul.getElementsByTagName("tr");
        for (i = 0; i < li.length; i++) {
            var a = li[i].getElementsByTagName("td")[0];
            var txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    function openslider() {
        var ul2 = document.getElementById("SearchList");
        ul2.style.display = "block";
    }
    function closeslider() {
        var ul10 = document.getElementById("SearchList");
        ul10.style.display = "none";

    }

    //
    function CopyToValue(id, name) {
        document.getElementById('SearchboxFilter' + id).value = name;
        document.getElementById("SelectListFilter" + id).style.display = "none";
    }

    function LiveFilter(id) {
        //------------- بخشی برای ورود اطلاعات -----------------------//
        var SearchboxFilter = document.getElementById("SearchboxFilter" + id);

        //---------- تبدیل ورود اطلاعات به حروف کوچک یا بزرگ ---------//
        var ValueSearchboxFilter = SearchboxFilter.value.toLowerCase();

        //------------ کل منو آبشاری را تشکیل می دهد ----------------//
        var SelectListFilter = document.getElementById("SelectListFilter" + id);
        SelectListFilter.style.display = "";

        //------- مشخص کردن گروهی از زیر مجموعه ها از طریق تگ--------//
        var option = SelectListFilter.getElementsByTagName("option");

        //-------------- شمارنده تمامی زیر مجموعه ها ----------------//
        for (i = 0; i < option.length; i++) {
            //---- اطلاعات هر زیر مجموعه اگر زیر مجموعه مضاعف داشت ---//
            //a = option[i].getElementsByTagName("a")[0];

            //---------- اطلاعات هر زیر مجموعه از نظر ارزشی ---------//
            //var txtValue = a.textContent || a.innerText;
            var txtValue = option[i].innerHTML;

            //------- در صورتی که تایپ شده منو باز شود -------//
            if (txtValue.indexOf(ValueSearchboxFilter) > -1) {
                //option[i].style.display = "";
                option[i].style.display = "";
            } else {
                //option[i].style.display = "none";
                option[i].style.display = "none";
            }
        }
        //-------- در صورتی که باکس جستجو خالی بشود بسته شود ------------//
        if (ValueSearchboxFilter.length == 0) {
            SelectListFilter.style.display = "none";
        }
    }
</script>

    <script src="./js/main.js"></script>
</html>