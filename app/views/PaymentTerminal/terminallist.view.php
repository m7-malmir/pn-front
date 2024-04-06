<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;
require_once ("{$base_dir}header-up.php");
$cas_data_arr = json_decode(json_encode($data['casdata']), true);

?>
<title>ترمینال</title>
<?php
require_once ("{$base_dir}header.php");
?>
<main>
    <?php include 'sidemenu.php' ?>
    <section id='MainSection'> 
        <section>
            <a style='display:none;' href='../admin/'>
                <button id='ReturnFormButton'>
                    <img src='<?= ROOT_URL; ?>public/assets/img/return.webp' style='width:100%;'></img>
                </button>
            </a>
            <a style='display:none;' href='Export/'>
                <button id='ReturnFormButton'>
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
            <a href='../Search/'>
                <button id='ReturnFormButton'>
                    <img src='<?= ROOT_URL; ?>public/assets/img/option11.webp' style='width:100%;'></img>
                </button>
            </a>
            <a>
                <button onclick="ToggleSideToolbar('SideToolbar');" id='ReturnFormButton' style='float: right;'>
                    <img src='<?= ROOT_URL; ?>public/assets/img/more.webp' style='width:100%;'></img>
                </button>
            </a>
        </section>
        <form id='ExpertSerachForm' action='../Search/#terminal' style='display: none;' method='GET'></form>
        <form id='CancelForm' action='./.' method='GET' style='display: none;'></form>
        <form action='./.' method='GET' style='display: none;'>
            <article>
                <div class='search_div' style='display:none;'>
                    <input name='dXNlcg==' value='' placeholder='نام کاربری'>
                    <button><img src='/library/images/search1-acacac.webp'></img></button>
                </div>
            </article>
        </form>
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
                            <th class='' style='min-width: 70px;'>
                                <div class='search_div' id='project'>
                                    <label>پروژه</label>
                                    <select name='cHJvamVjdA=='>
                                        <option value=''>انتخاب پروژه</option>
                                        <option name='پاسارگاد'>پاسارگاد</option>
                                        <option name='پرداخت نوین'>پرداخت نوین</option>
                                        <option name='ایران کیش'>ایران کیش</option>
                                        <option name='سداد'>سداد</option>
                                        <option name='سامان'>سامان</option>
                                        <option name='پارسیان'>پارسیان</option>
                                        <option name='سایان کارت'>سایان کارت</option>
                                        <option name='دماوند'>دماوند</option>
                                        <option name='سپهر'>سپهر</option>
                                        <option name='به پرداخت'>به پرداخت</option>
                                        <option name='آسان پرداخت'>آسان پرداخت</option>
                                        <option name='آینده'>آینده</option>
                                        <option name='فن آوا'>فن آوا</option>
                                    </select>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id=''>
                                    <label>تاریخ</label>
                                    <input name='' value=''></input>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id=''>
                                    <label>نماینده</label>
                                    <select id="SelectListFilter11" name="dXNlcg==" size="4"
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
                                        <option onclick="CopyToValue(11,'حسین فرهیخته');" value='hoseinfarhikhte'>حسین
                                            فرهیخته</option>
                                        <option onclick="CopyToValue(11,'سارا حاجی');" value='sarahaji'>سارا حاجی
                                        </option>
                                        <option onclick="CopyToValue(11,'حجت بختیاری');" value='virapose'>حجت بختیاری
                                        </option>
                                        <option onclick="CopyToValue(11,'امین کیانی');" value='kiani'>امین کیانی
                                        </option>
                                        <option onclick="CopyToValue(11,'امین کیانی');" value='aminkiani'>امین کیانی
                                        </option>
                                        <option onclick="CopyToValue(11,'فرزاد رفعتی نیا');" value='farzadrafati'>فرزاد
                                            رفعتی نیا</option>
                                        <option onclick="CopyToValue(11,'محمد هادی  ندائی');" value='2360301004'>محمد
                                            هادی ندائی</option>
                                        <option onclick="CopyToValue(11,'هادی فرمنی');" value='hadifarmani'>هادی فرمنی
                                        </option>
                                        <option onclick="CopyToValue(11,'امیر درویش');" value='amirdarvish'>امیر درویش
                                        </option>
                                        <option onclick="CopyToValue(11,'حسین علیزاده');" value='pnp.alizade'>حسین
                                            علیزاده</option>
                                        <option onclick="CopyToValue(11,'پوریا فعله گری');" value='pnp.falegari'>پوریا
                                            فعله گری</option>
                                        <option onclick="CopyToValue(11,'سینا  محمودوند');" value='pnp.sina'>سینا
                                            محمودوند</option>
                                        <option onclick="CopyToValue(11,'غلامرضا قنواتی');" value='pnp.ghanavati'>
                                            غلامرضا قنواتی</option>
                                        <option onclick="CopyToValue(11,'مرتضی عباسی');" value='pnp.mortezaabasi'>مرتضی
                                            عباسی</option>
                                        <option onclick="CopyToValue(11,'علی غفاری');" value='pnp.alighafari'>علی غفاری
                                        </option>
                                        <option onclick="CopyToValue(11,'حسین  نفر');" value='pnp.nafar'>حسین نفر
                                        </option>
                                        <option onclick="CopyToValue(11,'محمدرضا  کریمیان');" value='pnp.gandom'>محمدرضا
                                            کریمیان</option>
                                        <option onclick="CopyToValue(11,'رامین یدالهی');" value='azarpos'>رامین یدالهی
                                        </option>
                                        <option onclick="CopyToValue(11,'سجاد  بشیری');" value='almaspay'>سجاد بشیری
                                        </option>
                                        <option onclick="CopyToValue(11,'مرتضی جهان');" value='pnp.jahan'>مرتضی جهان
                                        </option>
                                        <option onclick="CopyToValue(11,'منصور محمدحسینی');" value='mansorhoseini'>منصور
                                            محمدحسینی</option>
                                        <option onclick="CopyToValue(11,'امیر قلندری');" value='Bivamir'>امیر قلندری
                                        </option>
                                        <option onclick="CopyToValue(11,'میلاد مقرب');" value='Pnp.kartnet'>میلاد مقرب
                                        </option>
                                        <option onclick="CopyToValue(11,'رضا سلگی');" value='pnp.solgi'>رضا سلگی
                                        </option>
                                        <option onclick="CopyToValue(11,'فرزانه  غافرین');" value='pishrosaman'>فرزانه
                                            غافرین</option>
                                        <option onclick="CopyToValue(11,'آیدا ابراهیمی');" value='Aidaebrahimi'>آیدا
                                            ابراهیمی</option>
                                        <option onclick="CopyToValue(11,'ایمان بقائی');" value='paxfriend'>ایمان بقائی
                                        </option>
                                        <option onclick="CopyToValue(11,'حسام مالمیر');" value='minitek'>حسام مالمیر
                                        </option>
                                        <option onclick="CopyToValue(11,'رضا سلگی');" value='psp.nikpay'>رضا سلگی
                                        </option>
                                        <option onclick="CopyToValue(11,'مونا بابایی');" value='babaei'>مونا بابایی
                                        </option>
                                        <option onclick="CopyToValue(11,'محمد حسین زا‌‌‌‌‌ءری');" value='pnp.zaeri'>محمد
                                            حسین زا‌‌‌‌‌ءری</option>
                                        <option onclick="CopyToValue(11,'نفیسه عزیزی');" value='pnp.azizi'>نفیسه عزیزی
                                        </option>
                                        <option onclick="CopyToValue(11,'مهدی منصور خیاو');" value='Arvinpos'>مهدی منصور
                                            خیاو</option>
                                        <option onclick="CopyToValue(11,'سید محمد حسین شاهزاده فاضلی');"
                                            value='pnp.rasam'>سید محمد حسین شاهزاده فاضلی</option>
                                        <option onclick="CopyToValue(11,'آیدا شکوهی زاده');" value='pnp.jahanpos'>آیدا
                                            شکوهی زاده</option>
                                        <option onclick="CopyToValue(11,'زهرا مختاری');" value='honampay'>زهرا مختاری
                                        </option>
                                        <option onclick="CopyToValue(11,'حسین کیانی');" value='Pishrosam6an'>حسین کیانی
                                        </option>
                                        <option onclick="CopyToValue(11,'حسین کیایی');" value='Pishrosam689an'>حسین
                                            کیایی</option>
                                        <option onclick="CopyToValue(11,'حسین کیایی');" value='Farzanehpishro'>حسین
                                            کیایی</option>
                                        <option onclick="CopyToValue(11,'سید حسین موسوی وند');" value='mosavipos'>سید
                                            حسین موسوی وند</option>
                                        <option onclick="CopyToValue(11,'جواد فرهادیان');" value='pars'>جواد فرهادیان
                                        </option>
                                        <option onclick="CopyToValue(11,'محمد قربانی');" value='motamed'>محمد قربانی
                                        </option>
                                        <option onclick="CopyToValue(11,'رضا عظیمی');" value='fixpos'>رضا عظیمی</option>
                                        <option onclick="CopyToValue(11,'علی مهین آباد');" value='pishro.sayar'>علی مهین
                                            آباد</option>
                                        <option onclick="CopyToValue(11,'وحید  خانی');" value='vahidkhani '>وحید خانی
                                        </option>
                                        <option onclick="CopyToValue(11,'محمد ناصری فورگ');" value='naseri'>محمد ناصری
                                            فورگ</option>
                                        <option onclick="CopyToValue(11,'حمید حکیم نجفی');" value='hamidnajafi'>حمید
                                            حکیم نجفی</option>
                                        <option onclick="CopyToValue(11,'miss izd');" value='missizd'>miss izd</option>
                                        <option onclick="CopyToValue(11,'علیرضا وجدانی');" value='vojdani'>علیرضا وجدانی
                                        </option>
                                        <option onclick="CopyToValue(11,'ندا ایزدی');" value='izadi'>ندا ایزدی</option>
                                        <option onclick="CopyToValue(11,'سارا نجیمی');" value='saranajimi'>سارا نجیمی
                                        </option>
                                        <option onclick="CopyToValue(11,'لادن محمدی');" value='ladanmohmadi'>لادن محمدی
                                        </option>
                                        <option onclick="CopyToValue(11,'امان اله حقانی خواه');" value='haqani'>امان اله
                                            حقانی خواه</option>
                                        <option onclick="CopyToValue(11,'سجاد سمیعی');" value='hidapos'>سجاد سمیعی
                                        </option>
                                        <option onclick="CopyToValue(11,'میلاد مشیری تادوانی');"
                                            value='میلاد مشیری تادوانی'>میلاد مشیری تادوانی</option>
                                        <option onclick="CopyToValue(11,'محمد جواد فردائی پور');" value='fardayipor'>
                                            محمد جواد فردائی پور</option>
                                        <option onclick="CopyToValue(11,'علی  ترحمی');" value='alitarahomi'>علی ترحمی
                                        </option>
                                        <option onclick="CopyToValue(11,'جواد صفری');" value='javadsafari'>جواد صفری
                                        </option>
                                        <option onclick="CopyToValue(11,'رضا  بابازاده');" value='Saminpos'>رضا بابازاده
                                        </option>
                                        <option onclick="CopyToValue(11,'جلیل کریمی');" value='jalilkarimi'>جلیل کریمی
                                        </option>
                                        <option onclick="CopyToValue(11,'محمد حاجی زاده');" value='mohamadhajizade'>محمد
                                            حاجی زاده</option>
                                        <option onclick="CopyToValue(11,'رضا فلاحی');" value='rezafalahi'>رضا فلاحی
                                        </option>
                                        <option onclick="CopyToValue(11,'مهرداد  باتوانی');" value='batavani'>مهرداد
                                            باتوانی</option>
                                        <option onclick="CopyToValue(11,'مریم ری کا');" value='maryam reyka'>مریم ری کا
                                        </option>
                                        <option onclick="CopyToValue(11,'robot robot');" value='robot'>robot robot
                                        </option>
                                        <option onclick="CopyToValue(11,'negar ghafurian');" value='Negar Ghafurian'>
                                            negar ghafurian</option>
                                        <option onclick="CopyToValue(11,'احمد حیدری');" value='pnpheydari'>احمد حیدری
                                        </option>
                                        <option onclick="CopyToValue(11,'زهرا بدیلی زاده');" value='Badili zade'>زهرا
                                            بدیلی زاده</option>
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
                                        <option onclick="CopyToValue(11,'مهدی ایزدی');" value='mahdi.izadi'>مهدی ایزدی
                                        </option>
                                        <option onclick="CopyToValue(11,'نوید اخترشناس');" value='akhtarpos'>نوید
                                            اخترشناس</option>
                                        <option onclick="CopyToValue(11,'محمد محمودی');" value='pmp.jahan'>محمد محمودی
                                        </option>
                                        <option onclick="CopyToValue(11,'مصطفی عبدالهی');" value='arses'>مصطفی عبدالهی
                                        </option>
                                        <option onclick="CopyToValue(11,'نادر دانشور');" value='Naderdaneshvar'>نادر
                                            دانشور</option>
                                        <option onclick="CopyToValue(11,'میثم مالکی');" value='p.nicpay'>میثم مالکی
                                        </option>
                                        <option onclick="CopyToValue(11,'محمد مهدی مقدس بیات');"
                                            value='mohamadmahdi moghadas bayat'>محمد مهدی مقدس بیات</option>
                                        <option onclick="CopyToValue(11,'معین ملک لو');" value='OMID.PAY'>معین ملک لو
                                        </option>
                                        <option onclick="CopyToValue(11,'سید جواد حسینی');"
                                            value='seyed javad Hosseini'>سید جواد حسینی</option>
                                        <option onclick="CopyToValue(11,'رضا  دهکاهی');" value='reza dehkahi'>رضا دهکاهی
                                        </option>
                                        <option onclick="CopyToValue(11,'محمد  کاظمی نژاد');"
                                            value='mohamad kazemi nejad'>محمد کاظمی نژاد</option>
                                        <option onclick="CopyToValue(11,'مهران مقتدری نسب');" value='moghtaderi nasab'>
                                            مهران مقتدری نسب</option>
                                        <option onclick="CopyToValue(11,'امیر راشدی');" value='amir rashedi'>امیر راشدی
                                        </option>
                                        <option onclick="CopyToValue(11,'حامد  جهانبازی ');" value='hamed jahanbazi'>
                                            حامد جهانبازی </option>
                                        <option onclick="CopyToValue(11,'محمد هژیری');" value='mohamad hojabri'>محمد
                                            هژیری</option>
                                        <option onclick="CopyToValue(11,'رضا بنجوئی');" value='reza bonjoyi'>رضا بنجوئی
                                        </option>
                                        <option onclick="CopyToValue(11,'محمود فراهانی');" value='computer novin'>محمود
                                            فراهانی</option>
                                        <option onclick="CopyToValue(11,'مهدی  اسدی');" value='mehdi asadi'>مهدی اسدی
                                        </option>
                                        <option onclick="CopyToValue(11,'بختیار بامری');" value='bakhtiyar bameri'>
                                            بختیار بامری</option>
                                        <option onclick="CopyToValue(11,'ولید اب سالان');" value='valid absalan'>ولید اب
                                            سالان</option>
                                        <option onclick="CopyToValue(11,'اعظم سادات  سید النگی');" value='seyed alangi'>
                                            اعظم سادات سید النگی</option>
                                        <option onclick="CopyToValue(11,'فردین برزگررازیان');" value='fardin barzegar'>
                                            فردین برزگررازیان</option>
                                        <option onclick="CopyToValue(11,'حمید  راغ');" value='arta pardaz'>حمید راغ
                                        </option>
                                        <option onclick="CopyToValue(11,'محمد  فتاحی');" value='mohamad fatahi'>محمد
                                            فتاحی</option>
                                        <option onclick="CopyToValue(11,'ذکریا زارعی طاسکند');" value='Z.Zareei'>ذکریا
                                            زارعی طاسکند</option>
                                        <option onclick="CopyToValue(11,'فاطمه بیستونی');" value='bistoni'>فاطمه بیستونی
                                        </option>
                                        <option onclick="CopyToValue(11,'امیر حاجی حسین لو');" value='haji hoseinlo'>
                                            امیر حاجی حسین لو</option>
                                        <option onclick="CopyToValue(11,'غلامرضا حسنلو');" value='hasanlo'>غلامرضا حسنلو
                                        </option>
                                        <option onclick="CopyToValue(11,'سینا کوهی گوی اغاج');" value='sina kohi'>سینا
                                            کوهی گوی اغاج</option>
                                        <option onclick="CopyToValue(11,'عمران نظری');" value='nazari'>عمران نظری
                                        </option>
                                        <option onclick="CopyToValue(11,'کبری ملائی');" value='molayi'>کبری ملائی
                                        </option>
                                        <option onclick="CopyToValue(11,'بهزاد رزمجوحاجی ابادی');" value='razmjo'>بهزاد
                                            رزمجوحاجی ابادی</option>
                                        <option onclick="CopyToValue(11,'ارزو سریو');" value='SARIVE'>ارزو سریو</option>
                                        <option onclick="CopyToValue(11,'مهدی نادرپور');" value='NADERPOR'>مهدی نادرپور
                                        </option>
                                        <option onclick="CopyToValue(11,'هاشم هجرتی');" value='HEJRATI'>هاشم هجرتی
                                        </option>
                                        <option onclick="CopyToValue(11,'سجاد اردمه');" value='ARDAME'>سجاد اردمه
                                        </option>
                                        <option onclick="CopyToValue(11,'حسین  قوامی فر');" value='ghavami far'>حسین
                                            قوامی فر</option>
                                        <option onclick="CopyToValue(11,'محمد صالحی');" value='mohamadsalehi'>محمد صالحی
                                        </option>
                                        <option onclick="CopyToValue(11,'زهرا رضائی');" value='rezayi'>زهرا رضائی
                                        </option>
                                        <option onclick="CopyToValue(11,'محمد تقی ملائی');"
                                            value='MOHAMAD TAGHI MOLAYI'>محمد تقی ملائی</option>
                                        <option onclick="CopyToValue(11,'محمد محزون');" value='MAHZON'>محمد محزون
                                        </option>
                                        <option onclick="CopyToValue(11,'محمد رابحی');" value='rabehi'>محمد رابحی
                                        </option>
                                        <option onclick="CopyToValue(11,'رضا  ربیعی خوندابی');" value='RABIEE'>رضا ربیعی
                                            خوندابی</option>
                                        <option onclick="CopyToValue(11,'رضا ناجی');" value='NAJI'>رضا ناجی</option>
                                        <option onclick="CopyToValue(11,'سعید شیخ الاسلامی');" value='sheykholeslami'>
                                            سعید شیخ الاسلامی</option>
                                        <option onclick="CopyToValue(11,'برهان  بهرامی');" value='borhan bahrami'>برهان
                                            بهرامی</option>
                                        <option onclick="CopyToValue(11,'اعظم حسینی');" value='AZAM HOSEYNI'>اعظم حسینی
                                        </option>
                                        <option onclick="CopyToValue(11,'عمر ابرون');" value='abron'>عمر ابرون</option>
                                        <option onclick="CopyToValue(11,'میلاد شهریار بهرامی');"
                                            value='shahriyar bahrami'>میلاد شهریار بهرامی</option>
                                        <option onclick="CopyToValue(11,'محمد حسین  اکبری خوراسگانی');"
                                            value='AKBARI KHORASGANI'>محمد حسین اکبری خوراسگانی</option>
                                        <option onclick="CopyToValue(11,'محمد  عمران زاده');" value='OMRANZADE'>محمد
                                            عمران زاده</option>
                                        <option onclick="CopyToValue(11,'محمد نظیفی');" value='nazifi'>محمد نظیفی
                                        </option>
                                        <option onclick="CopyToValue(11,'ریبوار  مرادی');" value='RIBVARMORADI'>ریبوار
                                            مرادی</option>
                                        <option onclick="CopyToValue(11,'مرتضی وکیلی زارج');" value='vakili zarj'>مرتضی
                                            وکیلی زارج</option>
                                        <option onclick="CopyToValue(11,'بهمن  جابری مله خان');" value='bahmanjaberi'>
                                            بهمن جابری مله خان</option>
                                        <option onclick="CopyToValue(11,'محسن  اسحقی اقکند');" value='eshaghi'>محسن
                                            اسحقی اقکند</option>
                                        <option onclick="CopyToValue(11,'امیر  علیخانی بجستانی');"
                                            value='alikhani bajestani'>امیر علیخانی بجستانی</option>
                                        <option onclick="CopyToValue(11,'فرامرز  حبیبی');" value='HABIBI'>فرامرز حبیبی
                                        </option>
                                        <option onclick="CopyToValue(11,'سجاد عابدزاده');" value='ABEDZADE'>سجاد
                                            عابدزاده</option>
                                    </select>
                                    <input name='Y29udGFjdA==' value='' style='width:100%;' id="SearchboxFilter11"
                                        class="SearchFilter2" placeholder="نام نماینده" onkeyup="LiveFilter('11');"
                                        autocomplete='off'>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id='status'>
                                    <label>وضعیت</label>
                                    <select name='c3RhdHVz'>
                                        <option value='' class='select_option'>همه وضعیت</option>
                                        <option value='کارتابل اولیه' class='select_option'>کارتابل اولیه</option>
                                        <option value='ارسال به شرکت' class='select_option'>ارسال به شرکت</option>
                                        <option value='ارسال به مرکز' class='select_option'>ارسال به مرکز</option>
                                        <option value='ارسال به شاپرک' class='select_option'>ارسال به شاپرک</option>
                                        <option value='تأیید شاپرک' class='select_option'>تأیید شاپرک</option>
                                        <option value='تأیید نصب' class='select_option'>تأیید نصب</option>
                                        <option value='فعال شده' class='select_option'>فعال شده</option>
                                        <option value='ارسال به ابطال' class='select_option'>ارسال به ابطال</option>
                                        <option value='ابطال شده' class='select_option'>ابطال شده</option>
                                        <option value='مردود شرکت' class='select_option'>مردود شرکت</option>
                                        <option value='مردود شاپرک' class='select_option'>مردود شاپرک</option>
                                        <option value='نا مشخص' class='select_option'>نا مشخص</option>
                                    </select>
                                </div>
                            </th>


                            <th class=''>
                                <div class='search_div' id='idcode'>
                                    <label>کد ملی</label>
                                    <input name='aWRjb2Rl' value=''></input>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id='serial'>
                                    <label>نام پذیرنده</label>
                                    <input name='' value=''></input>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id='serial'>
                                    <label>نام فروشگاه</label>
                                    <input name='' value=''></input>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id='serial'>
                                    <label>ترمینال</label>
                                    <input name='dGVybWluYWw=' value=''></input>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id='serial'>
                                    <label>پذیرنده</label>
                                    <input name='YWNjZXB0YW5jZWNvZGU=' value=''></input>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id='serial'>
                                    <label>سریال</label>
                                    <input name='c2VyaWFs' value=''></input>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id='serial'>
                                    <label>زمان فعال سازی</label>
                                    <input name='' value=''></input>
                                </div>
                            </th>
                            <th class=''>
                                <div class='search_div' id='serial'>
                                    <label>خطا</label>
                                    <input name='' value=''></input>
                                </div>
                            </th>
                            <th class='' style=''>
                                <div class='search_div' id='iban'>
                                    <label>شبا</label>
                                    <input name='aWJhbg==' value=''></input>
                                </div>
                            </th>
                            <th class='' style=''>
                                <div class='search_div' id='ban'>
                                    <label>حساب</label>
                                    <input name='YmFu' value=''></input>
                                </div>
                            </th>
                            <th class='' style=''>
                                <div class='search_div' id='posmodel'>
                                    <label>مدل دستگاه</label>
                                    <input name='cG9zbW9kZWw=' value=''></input>
                                </div>
                            </th>
                            <th class='' style=''>
                                <div class='search_div' id='TTQ'>
                                    <label>تعداد تراکنش</label>
                                    <input name='VFRR' value=''></input>
                                </div>
                            </th>
                            <th id='functional_th_td' style='min-width:60px;border-top-right-radius: 1rem;'>
                                <a style='display:none;margin-top:8px;margin-bottom:0;' method='GET'>
                                    <button class='more_button' type='submit' style=''>
                                        جستجو
                                    </button>
                                </a>
                                4.04K
                            </th>
                        </tr>
                    </form>

                    <?php
                           $i = 0;
                        foreach ($cas_data_arr as $variable => $key) {
                            $i++;
                             ?>
                    
                    <tr style="">
                        <td style='width:50px;'>
                            <div class='Counter' style='background-color:yellow;color: black;'><?= $i; ?></div>
                        </td>
                        <td class='MiddleScreens' style='width:35px;'>
                            <div class='ImageField'>
                                <img src='<?= ROOT_URL; ?>public/assets/img/Sepehr.webp'></img>
                            </div>
                        </td>
                        <td class='LittleScreens'><input value="<?= $key['date']; ?>"></input></td>
                        <td class=''><input value="<?= $key['customer_name']; ?>"></input></td>
                        <td class=''><input value='ارسال به شرکت'></input></td>
                        <td><input value='<?= $key['customer_nation_code']; ?>'></input></td>
                        <td><input value='<?= $key['customer_manager_name']; ?>&nbsp<?= $key['customer_manager_family']; ?>'></input></td>
                        <td class=''><input value='<?= $key['customer_store_name']; ?>'></input></td>
                        <td class=''><input value=''></input></td>
                        <td class=''><input value=''></input></td>
                        <td class=''><input value=''></input></td>
                        <td class=''><input value=''></input></td>
                        <td class=''><input style='width:250px;' value=''></input></td>
                        <td class=''><input style='width:225px;' value='IR<?= $key['customer_iban']; ?>'></input></td>
                        <td class=''><input value='<?= $key['customer_num_acount']; ?>'></input></td>
                        <td class=''><input value='<?= $key['customer_device_model']; ?>'></input></td>
                        <td class=''><input value=''></input></td>
                        <td id='functional_th_td' style='z-index:50;height: 28px;left:0;position: sticky;'>
                            <form action='view.php#4057' style='margin-bottom:0;' method='GET'>
                                <button id='more_button49' onclick='toggleTheFunctionalMenu1(49);' type='button'
                                    class='more_button' name='aWRjb2Rl' value='2790249695'>
                                    بیشتر
                                </button>
                                <input type='hidden' name='c2lk' value='<?= $key['customer_id']; ?>' style=''></input>
                            </form>
                            <div id='TheFunctionalMenu149' value='4057' class='slidemenu_table' style='width: 300px;'>
                                <form action='payalist'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                    method='GET'>
                                    <button class='more_button' name='aWRjb2Rl' value='<?= $key['customer_id']; ?>'>
                                        نمایش
                                    </button>
                                    <input type='hidden' name='' value='' style=''></input>
                                </form>
                                <form action='/membership/bank/PaymentTerminal/V1/costumer/view.php'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                    method='GET'>
                                    <button class='more_button' name='aWRjb2Rl' value='<?= $key['customer_id']; ?>'>
                                        پذیرنده
                                    </button>
                                    <input type='hidden' name='c2lk' value='<?= $key['customer_id']; ?>' style=''></input>
                                </form>
                                <form action='/membership/bank/PaymentTerminal/V1/document/view.php'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                    method='GET'>
                                    <button class='more_button' name='aWRjb2Rl' value='<?= $key['customer_id']; ?>'>
                                        مدارک
                                    </button>
                                    <input type='hidden' name='c2lk' value='<?= $key['customer_id']; ?>' style=''></input>
                                </form>
                                <form action='/membership/bank/PaymentTerminal/V1/document/upload/'
                                    style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                    method='GET'>
                                    <button class='more_button' name='aWRjb2Rl' value='<?= $key['customer_id']; ?>'>
                                        بارگذاری
                                    </button>
                                    <input type='hidden' name='c2lk' value='<?= $key['customer_id']; ?>' style=''></input>
                                </form>
                            </div>
                        </td>
                    </tr>


                    <?php } ?>




                </table>
            </div>
        </section>
        <section id='pagination'>
            <button type='submit' form='SearchForm' name='pagination' value='1'>1</button><input type='number'
                style='text-align:center;width:40px;background-color:inherit;color:white;border:1px solid white;font-weight: 900;'
                form='SearchForm' name='pagination' value='1'></input><button type='submit' form='SearchForm'
                name='pagination' value='81'>81</button><button type='submit' form='SearchForm' class='PagingButton'
                name='pagination' value='2'>»</button>
        </section>
    </section>
</main>
</body>
<script>
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
        more_button.innerHTML = 'بیشتر';
        if (TheFunctionalMenu1.style.display === 'flex') {
            TheFunctionalMenu1.style.display = 'none';
            more_button.innerHTML = 'بیشتر';
        } else {
            TheFunctionalMenu1.style.display = 'flex'
            more_button.innerHTML = 'کمتر';
        }
    }
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

</html>