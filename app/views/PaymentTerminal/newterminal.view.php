<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;
require_once ("{$base_dir}header-up.php");
?>
<title>ترمینال جدید</title>

<?php
require_once ("{$base_dir}header.php");
?>
<style>
    input{
        width: 95%!important;
        height: calc(2rem + 2px)!important;
    }
</style>
<main>
    <?php include 'sidemenu.php' ?> 

        <section id="MainSection">
            <section id='InscriptionSection'>
                <form action='modify.php' method='POST'
                    style='display:flex;flex-direction:column;max-width:1024px;margin:50px auto;'
                    enctype='multipart/form-data'>
                    <article class='label' style=''>
                        <p class='LabelTitle'>درخواست پایانه جدید</p>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>نام فروشگاه</label>
                                <input name='companyname' value='' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>شبکه دستگاه</label>
                                <select name='poskind' required>
                                    <option value=''>نوع ترمینال</option>
                                    <option value='1'>GPRS</option>
                                    <option value='3'>Typical</option>
                                </select>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>پروژه</label>
                                <select name='project' id='project' required>
                                    <option value=''>انتخاب پروژه</option>
                                    <option name='سپهر'>سپهر</option>
                                    <option name='فن آوا'>فن آوا</option>
                                    <option name='پاسارگاد'>پاسارگاد</option>
                                    <option name='پرداخت نوین'>پرداخت نوین</option>
                                </select>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>مدل دستگاه</label>
                                <select id='posmodel' name='posmodel' required>
                                    <option value=''>انتخاب مدل</option>
                                    <option value='NEWLAND/ME31/GPRS'>NEWLAND/ME31/GPRS</option>
                                    <option value='TRENDIT/T3/GPRS'>TRENDIT/T3/GPRS</option>
                                </select>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <input style='display:none;' id='username' name='username' value=''
                                autocomplete='off'></input>
                            <div class='table_row_2_partition' style=''>
                                <label>نام کاربری</label>
                                <input id="SearchboxFilter11" onkeyup="LiveFilter('11');" autocomplete='off'
                                    autocomplete='off' value=''></input>
                                <select id="SelectListFilter11" name="SelectFilter11" size="4"
                                    style='display:none;width:100%;height:150px;position:absolute;top:50px;z-index:2;'
                                    autocomplete='off'>
                                    <option onclick='CopyToValue(11,"admin admin","admin","username");'>admin admin
                                    </option>
                                    <option onclick='CopyToValue(11,"ساسان قاسمی","sassan","username");'>ساسان قاسمی
                                    </option>
                                    <option onclick='CopyToValue(11,"هدیه روزبیانی","rozbayani","username");'>هدیه
                                        روزبیانی</option>
                                    <option
                                        onclick='CopyToValue(11,"رامین علی دوست جیراندرق","raminalidost","username");'>
                                        رامین علی دوست جیراندرق</option>
                                    <option onclick='CopyToValue(11,"عسل کلینی","koleyni","username");'>عسل کلینی
                                    </option>
                                    <option onclick='CopyToValue(11,"سارا فرمانی","farmani","username");'>سارا فرمانی
                                    </option>
                                    <option onclick='CopyToValue(11,"حسین فرهیخته","hoseinfarhikhte","username");'>حسین
                                        فرهیخته</option>
                                    <option onclick='CopyToValue(11,"سارا حاجی","sarahaji","username");'>سارا حاجی
                                    </option>
                                    <option onclick='CopyToValue(11,"حجت بختیاری","virapose","username");'>حجت بختیاری
                                    </option>
                                    <option onclick='CopyToValue(11,"امین کیانی","kiani","username");'>امین کیانی
                                    </option>
                                    <option onclick='CopyToValue(11,"امین کیانی","aminkiani","username");'>امین کیانی
                                    </option>
                                    <option onclick='CopyToValue(11,"فرزاد رفعتی نیا","farzadrafati","username");'>فرزاد
                                        رفعتی نیا</option>
                                    <option onclick='CopyToValue(11,"محمد هادی  ندائی","2360301004","username");'>محمد
                                        هادی ندائی</option>
                                    <option onclick='CopyToValue(11,"هادی فرمنی","hadifarmani","username");'>هادی فرمنی
                                    </option>
                                    <option onclick='CopyToValue(11,"امیر درویش","amirdarvish","username");'>امیر درویش
                                    </option>
                                    <option onclick='CopyToValue(11,"حسین علیزاده","pnp.alizade","username");'>حسین
                                        علیزاده</option>
                                    <option onclick='CopyToValue(11,"پوریا فعله گری","pnp.falegari","username");'>پوریا
                                        فعله گری</option>
                                    <option onclick='CopyToValue(11,"سینا  محمودوند","pnp.sina","username");'>سینا
                                        محمودوند</option>
                                    <option onclick='CopyToValue(11,"غلامرضا قنواتی","pnp.ghanavati","username");'>
                                        غلامرضا قنواتی</option>
                                    <option onclick='CopyToValue(11,"مرتضی عباسی","pnp.mortezaabasi","username");'>مرتضی
                                        عباسی</option>
                                    <option onclick='CopyToValue(11,"علی غفاری","pnp.alighafari","username");'>علی غفاری
                                    </option>
                                    <option onclick='CopyToValue(11,"حسین  نفر","pnp.nafar","username");'>حسین نفر
                                    </option>
                                    <option onclick='CopyToValue(11,"محمدرضا  کریمیان","pnp.gandom","username");'>
                                        محمدرضا کریمیان</option>
                                    <option onclick='CopyToValue(11,"رامین یدالهی","azarpos","username");'>رامین یدالهی
                                    </option>
                                    <option onclick='CopyToValue(11,"سجاد  بشیری","almaspay","username");'>سجاد بشیری
                                    </option>
                                    <option onclick='CopyToValue(11,"مرتضی جهان","pnp.jahan","username");'>مرتضی جهان
                                    </option>
                                    <option onclick='CopyToValue(11,"منصور محمدحسینی","mansorhoseini","username");'>
                                        منصور محمدحسینی</option>
                                    <option onclick='CopyToValue(11,"امیر قلندری","Bivamir","username");'>امیر قلندری
                                    </option>
                                    <option onclick='CopyToValue(11,"میلاد مقرب","Pnp.kartnet","username");'>میلاد مقرب
                                    </option>
                                    <option onclick='CopyToValue(11,"رضا سلگی","pnp.solgi","username");'>رضا سلگی
                                    </option>
                                    <option onclick='CopyToValue(11,"فرزانه  غافرین","pishrosaman","username");'>فرزانه
                                        غافرین</option>
                                    <option onclick='CopyToValue(11,"آیدا ابراهیمی","Aidaebrahimi","username");'>آیدا
                                        ابراهیمی</option>
                                    <option onclick='CopyToValue(11,"ایمان بقائی","paxfriend","username");'>ایمان بقائی
                                    </option>
                                    <option onclick='CopyToValue(11,"حسام مالمیر","minitek","username");'>حسام مالمیر
                                    </option>
                                    <option onclick='CopyToValue(11,"رضا سلگی","psp.nikpay","username");'>رضا سلگی
                                    </option>
                                    <option onclick='CopyToValue(11,"مونا بابایی","babaei","username");'>مونا بابایی
                                    </option>
                                    <option onclick='CopyToValue(11,"محمد حسین زا‌‌‌‌‌ءری","pnp.zaeri","username");'>
                                        محمد حسین زا‌‌‌‌‌ءری</option>
                                    <option onclick='CopyToValue(11,"نفیسه عزیزی","pnp.azizi","username");'>نفیسه عزیزی
                                    </option>
                                    <option onclick='CopyToValue(11,"مهدی منصور خیاو","Arvinpos","username");'>مهدی
                                        منصور خیاو</option>
                                    <option
                                        onclick='CopyToValue(11,"سید محمد حسین شاهزاده فاضلی","pnp.rasam","username");'>
                                        سید محمد حسین شاهزاده فاضلی</option>
                                    <option onclick='CopyToValue(11,"آیدا شکوهی زاده","pnp.jahanpos","username");'>آیدا
                                        شکوهی زاده</option>
                                    <option onclick='CopyToValue(11,"زهرا مختاری","honampay","username");'>زهرا مختاری
                                    </option>
                                    <option onclick='CopyToValue(11,"حسین کیانی","Pishrosam6an","username");'>حسین کیانی
                                    </option>
                                    <option onclick='CopyToValue(11,"حسین کیایی","Pishrosam689an","username");'>حسین
                                        کیایی</option>
                                    <option onclick='CopyToValue(11,"حسین کیایی","Farzanehpishro","username");'>حسین
                                        کیایی</option>
                                    <option onclick='CopyToValue(11,"سید حسین موسوی وند","mosavipos","username");'>سید
                                        حسین موسوی وند</option>
                                    <option onclick='CopyToValue(11,"جواد فرهادیان","pars","username");'>جواد فرهادیان
                                    </option>
                                    <option onclick='CopyToValue(11,"محمد قربانی","motamed","username");'>محمد قربانی
                                    </option>
                                    <option onclick='CopyToValue(11,"رضا عظیمی","fixpos","username");'>رضا عظیمی
                                    </option>
                                    <option onclick='CopyToValue(11,"علی مهین آباد","pishro.sayar","username");'>علی
                                        مهین آباد</option>
                                    <option onclick='CopyToValue(11,"وحید  خانی","vahidkhani ","username");'>وحید خانی
                                    </option>
                                    <option onclick='CopyToValue(11,"محمد ناصری فورگ","naseri","username");'>محمد ناصری
                                        فورگ</option>
                                    <option onclick='CopyToValue(11,"حمید حکیم نجفی","hamidnajafi","username");'>حمید
                                        حکیم نجفی</option>
                                    <option onclick='CopyToValue(11,"miss izd","missizd","username");'>miss izd</option>
                                    <option onclick='CopyToValue(11,"علیرضا وجدانی","vojdani","username");'>علیرضا
                                        وجدانی</option>
                                    <option onclick='CopyToValue(11,"ندا ایزدی","izadi","username");'>ندا ایزدی</option>
                                    <option onclick='CopyToValue(11,"سارا نجیمی","saranajimi","username");'>سارا نجیمی
                                    </option>
                                    <option onclick='CopyToValue(11,"لادن محمدی","ladanmohmadi","username");'>لادن محمدی
                                    </option>
                                    <option onclick='CopyToValue(11,"امان اله حقانی خواه","haqani","username");'>امان
                                        اله حقانی خواه</option>
                                    <option onclick='CopyToValue(11,"سجاد سمیعی","hidapos","username");'>سجاد سمیعی
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"میلاد مشیری تادوانی","میلاد مشیری تادوانی","username");'>
                                        میلاد مشیری تادوانی</option>
                                    <option onclick='CopyToValue(11,"محمد جواد فردائی پور","fardayipor","username");'>
                                        محمد جواد فردائی پور</option>
                                    <option onclick='CopyToValue(11,"علی  ترحمی","alitarahomi","username");'>علی ترحمی
                                    </option>
                                    <option onclick='CopyToValue(11,"جواد صفری","javadsafari","username");'>جواد صفری
                                    </option>
                                    <option onclick='CopyToValue(11,"رضا  بابازاده","Saminpos","username");'>رضا
                                        بابازاده</option>
                                    <option onclick='CopyToValue(11,"جلیل کریمی","jalilkarimi","username");'>جلیل کریمی
                                    </option>
                                    <option onclick='CopyToValue(11,"محمد حاجی زاده","mohamadhajizade","username");'>
                                        محمد حاجی زاده</option>
                                    <option onclick='CopyToValue(11,"رضا فلاحی","rezafalahi","username");'>رضا فلاحی
                                    </option>
                                    <option onclick='CopyToValue(11,"مهرداد  باتوانی","batavani","username");'>مهرداد
                                        باتوانی</option>
                                    <option onclick='CopyToValue(11,"مریم ری کا","maryam reyka","username");'>مریم ری کا
                                    </option>
                                    <option onclick='CopyToValue(11,"robot robot","robot","username");'>robot robot
                                    </option>
                                    <option onclick='CopyToValue(11,"negar ghafurian","Negar Ghafurian","username");'>
                                        negar ghafurian</option>
                                    <option onclick='CopyToValue(11,"احمد حیدری","pnpheydari","username");'>احمد حیدری
                                    </option>
                                    <option onclick='CopyToValue(11,"زهرا بدیلی زاده","Badili zade","username");'>زهرا
                                        بدیلی زاده</option>
                                    <option onclick='CopyToValue(11,"امید قیاسوند","OMID","username");'>امید قیاسوند
                                    </option>
                                    <option onclick='CopyToValue(11,"آزاده محمدی","azadeh","username");'>آزاده محمدی
                                    </option>
                                    <option onclick='CopyToValue(11,"زینب نوایی","navaie","username");'>زینب نوایی
                                    </option>
                                    <option onclick='CopyToValue(11,"حسین پاشا","pnp.pasha","username");'>حسین پاشا
                                    </option>
                                    <option onclick='CopyToValue(11,"پیشخوان انصاری","ansari","username");'>پیشخوان
                                        انصاری</option>
                                    <option onclick='CopyToValue(11,"مهدی ایزدی","mahdi.izadi","username");'>مهدی ایزدی
                                    </option>
                                    <option onclick='CopyToValue(11,"نوید اخترشناس","akhtarpos","username");'>نوید
                                        اخترشناس</option>
                                    <option onclick='CopyToValue(11,"محمد محمودی","pmp.jahan","username");'>محمد محمودی
                                    </option>
                                    <option onclick='CopyToValue(11,"مصطفی عبدالهی","arses","username");'>مصطفی عبدالهی
                                    </option>
                                    <option onclick='CopyToValue(11,"نادر دانشور","Naderdaneshvar","username");'>نادر
                                        دانشور</option>
                                    <option onclick='CopyToValue(11,"میثم مالکی","p.nicpay","username");'>میثم مالکی
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"محمد مهدی مقدس بیات","mohamadmahdi moghadas bayat","username");'>
                                        محمد مهدی مقدس بیات</option>
                                    <option onclick='CopyToValue(11,"معین ملک لو","OMID.PAY","username");'>معین ملک لو
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"سید جواد حسینی","seyed javad Hosseini","username");'>
                                        سید جواد حسینی</option>
                                    <option onclick='CopyToValue(11,"رضا  دهکاهی","reza dehkahi","username");'>رضا
                                        دهکاهی</option>
                                    <option
                                        onclick='CopyToValue(11,"محمد  کاظمی نژاد","mohamad kazemi nejad","username");'>
                                        محمد کاظمی نژاد</option>
                                    <option onclick='CopyToValue(11,"مهران مقتدری نسب","moghtaderi nasab","username");'>
                                        مهران مقتدری نسب</option>
                                    <option onclick='CopyToValue(11,"امیر راشدی","amir rashedi","username");'>امیر راشدی
                                    </option>
                                    <option onclick='CopyToValue(11,"حامد  جهانبازی ","hamed jahanbazi","username");'>
                                        حامد جهانبازی </option>
                                    <option onclick='CopyToValue(11,"محمد هژیری","mohamad hojabri","username");'>محمد
                                        هژیری</option>
                                    <option onclick='CopyToValue(11,"رضا بنجوئی","reza bonjoyi","username");'>رضا بنجوئی
                                    </option>
                                    <option onclick='CopyToValue(11,"محمود فراهانی","computer novin","username");'>محمود
                                        فراهانی</option>
                                    <option onclick='CopyToValue(11,"مهدی  اسدی","mehdi asadi","username");'>مهدی اسدی
                                    </option>
                                    <option onclick='CopyToValue(11,"بختیار بامری","bakhtiyar bameri","username");'>
                                        بختیار بامری</option>
                                    <option onclick='CopyToValue(11,"ولید اب سالان","valid absalan","username");'>ولید
                                        اب سالان</option>
                                    <option
                                        onclick='CopyToValue(11,"اعظم سادات  سید النگی","seyed alangi","username");'>
                                        اعظم سادات سید النگی</option>
                                    <option onclick='CopyToValue(11,"فردین برزگررازیان","fardin barzegar","username");'>
                                        فردین برزگررازیان</option>
                                    <option onclick='CopyToValue(11,"حمید  راغ","arta pardaz","username");'>حمید راغ
                                    </option>
                                    <option onclick='CopyToValue(11,"محمد  فتاحی","mohamad fatahi","username");'>محمد
                                        فتاحی</option>
                                    <option onclick='CopyToValue(11,"ذکریا زارعی طاسکند","Z.Zareei","username");'>ذکریا
                                        زارعی طاسکند</option>
                                    <option onclick='CopyToValue(11,"فاطمه بیستونی","bistoni","username");'>فاطمه
                                        بیستونی</option>
                                    <option onclick='CopyToValue(11,"امیر حاجی حسین لو","haji hoseinlo","username");'>
                                        امیر حاجی حسین لو</option>
                                    <option onclick='CopyToValue(11,"غلامرضا حسنلو","hasanlo","username");'>غلامرضا
                                        حسنلو</option>
                                    <option onclick='CopyToValue(11,"سینا کوهی گوی اغاج","sina kohi","username");'>سینا
                                        کوهی گوی اغاج</option>
                                    <option onclick='CopyToValue(11,"عمران نظری","nazari","username");'>عمران نظری
                                    </option>
                                    <option onclick='CopyToValue(11,"کبری ملائی","molayi","username");'>کبری ملائی
                                    </option>
                                    <option onclick='CopyToValue(11,"بهزاد رزمجوحاجی ابادی","razmjo","username");'>بهزاد
                                        رزمجوحاجی ابادی</option>
                                    <option onclick='CopyToValue(11,"ارزو سریو","SARIVE","username");'>ارزو سریو
                                    </option>
                                    <option onclick='CopyToValue(11,"مهدی نادرپور","NADERPOR","username");'>مهدی نادرپور
                                    </option>
                                    <option onclick='CopyToValue(11,"هاشم هجرتی","HEJRATI","username");'>هاشم هجرتی
                                    </option>
                                    <option onclick='CopyToValue(11,"سجاد اردمه","ARDAME","username");'>سجاد اردمه
                                    </option>
                                    <option onclick='CopyToValue(11,"حسین  قوامی فر","ghavami far","username");'>حسین
                                        قوامی فر</option>
                                    <option onclick='CopyToValue(11,"محمد صالحی","mohamadsalehi","username");'>محمد
                                        صالحی</option>
                                    <option onclick='CopyToValue(11,"زهرا رضائی","rezayi","username");'>زهرا رضائی
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"محمد تقی ملائی","MOHAMAD TAGHI MOLAYI","username");'>
                                        محمد تقی ملائی</option>
                                    <option onclick='CopyToValue(11,"محمد محزون","MAHZON","username");'>محمد محزون
                                    </option>
                                    <option onclick='CopyToValue(11,"محمد رابحی","rabehi","username");'>محمد رابحی
                                    </option>
                                    <option onclick='CopyToValue(11,"رضا  ربیعی خوندابی","RABIEE","username");'>رضا
                                        ربیعی خوندابی</option>
                                    <option onclick='CopyToValue(11,"رضا ناجی","NAJI","username");'>رضا ناجی</option>
                                    <option onclick='CopyToValue(11,"سعید شیخ الاسلامی","sheykholeslami","username");'>
                                        سعید شیخ الاسلامی</option>
                                    <option onclick='CopyToValue(11,"برهان  بهرامی","borhan bahrami","username");'>برهان
                                        بهرامی</option>
                                    <option onclick='CopyToValue(11,"اعظم حسینی","AZAM HOSEYNI","username");'>اعظم حسینی
                                    </option>
                                    <option onclick='CopyToValue(11,"عمر ابرون","abron","username");'>عمر ابرون</option>
                                    <option
                                        onclick='CopyToValue(11,"میلاد شهریار بهرامی","shahriyar bahrami","username");'>
                                        میلاد شهریار بهرامی</option>
                                    <option
                                        onclick='CopyToValue(11,"محمد حسین  اکبری خوراسگانی","AKBARI KHORASGANI","username");'>
                                        محمد حسین اکبری خوراسگانی</option>
                                    <option onclick='CopyToValue(11,"محمد  عمران زاده","OMRANZADE","username");'>محمد
                                        عمران زاده</option>
                                    <option onclick='CopyToValue(11,"محمد نظیفی","nazifi","username");'>محمد نظیفی
                                    </option>
                                    <option onclick='CopyToValue(11,"ریبوار  مرادی","RIBVARMORADI","username");'>ریبوار
                                        مرادی</option>
                                    <option onclick='CopyToValue(11,"مرتضی وکیلی زارج","vakili zarj","username");'>مرتضی
                                        وکیلی زارج</option>
                                    <option onclick='CopyToValue(11,"بهمن  جابری مله خان","bahmanjaberi","username");'>
                                        بهمن جابری مله خان</option>
                                    <option onclick='CopyToValue(11,"محسن  اسحقی اقکند","eshaghi","username");'>محسن
                                        اسحقی اقکند</option>
                                    <option
                                        onclick='CopyToValue(11,"امیر  علیخانی بجستانی","alikhani bajestani","username");'>
                                        امیر علیخانی بجستانی</option>
                                    <option onclick='CopyToValue(11,"فرامرز  حبیبی","HABIBI","username");'>فرامرز حبیبی
                                    </option>
                                    <option onclick='CopyToValue(11,"سجاد عابدزاده","ABEDZADE","username");'>سجاد
                                        عابدزاده</option>
                                    <option onclick='CopyToValue(11,"محمد  پایروندی","payravandi","username");'>محمد
                                        پایروندی</option>
                                    <option onclick='CopyToValue(11,"رضا سلگی","","username");'>رضا سلگی</option>
                                    <option onclick='CopyToValue(11,"رضا سلگی","","username");'>رضا سلگی</option>
                                    <option onclick='CopyToValue(11,"رضا سلگی","","username");'>رضا سلگی</option>
                                    <option onclick='CopyToValue(11,"محمد حسین زاءری","","username");'>محمد حسین زاءری
                                    </option>
                                    <option onclick='CopyToValue(11,"محمد حسین زاءری","","username");'>محمد حسین زاءری
                                    </option>
                                    <option onclick='CopyToValue(11,"محمد حسین زاءری","","username");'>محمد حسین زاءری
                                    </option>
                                </select>
                            </div>
                            <div class='table_row_2_partition' id='pna' style=''>
                                <label>صنف</label>
                                <input id="SearchboxFilter13" onkeyup="LiveFilter('13');" autocomplete='off'
                                    autocomplete='off' value=''></input>
                                <select id="SelectListFilter13" name="SelectFilter13" size="4"
                                    style='display:none;width:100%;height:150px;position:absolute;top:50px;z-index:2;'
                                    autocomplete='off'>
                                    <option
                                        onclick='CopyToValue(13,"خشکبار و آجیل فروش--54410002","54410002","guildcode");'>
                                        خشکبار و آجیل فروش 54410002</option>
                                    <option onclick='CopyToValue(13,"نانوایی سنتی--54620001","54620001","guildcode");'>
                                        نانوایی سنتی 54620001</option>
                                    <option
                                        onclick='CopyToValue(13,"میدان میوه و تره بار--54990002","54990002","guildcode");'>
                                        میدان میوه و تره بار 54990002</option>
                                    <option
                                        onclick='CopyToValue(13,"سوپرمارکت و خواربار فروشی--54110001","54110001","guildcode");'>
                                        سوپرمارکت و خواربار فروشی 54110001</option>
                                    <option
                                        onclick='CopyToValue(13,"بار فروشان عمده فروشی میوه و تره بار--53000001","53000001","guildcode");'>
                                        بار فروشان عمده فروشی میوه و تره بار 53000001</option>
                                    <option
                                        onclick='CopyToValue(13,"بنکدار مواد غذایی عمده فروش برنج--53000002","53000002","guildcode");'>
                                        بنکدار مواد غذایی عمده فروش برنج 53000002</option>
                                    <option
                                        onclick='CopyToValue(13,"بنکدار مواد غذایی عمده فروش چای--53000003","53000003","guildcode");'>
                                        بنکدار مواد غذایی عمده فروش چای 53000003</option>
                                    <option
                                        onclick='CopyToValue(13,"بنکدار مواد غذایی عمده فروش روغن های خوراکی--53000004","53000004","guildcode");'>
                                        بنکدار مواد غذایی عمده فروش روغن های خوراکی 53000004</option>
                                    <option
                                        onclick='CopyToValue(13,"بنکدار مواد غذایی عمده فروش کلی--53000005","53000005","guildcode");'>
                                        بنکدار مواد غذایی عمده فروش کلی 53000005</option>
                                    <option
                                        onclick='CopyToValue(13,"آسیاب و عمده فروشی آرد--53000006","53000006","guildcode");'>
                                        آسیاب و عمده فروشی آرد 53000006</option>
                                    <option onclick='CopyToValue(13,"گالری هنری--59710001","59710001","guildcode");'>
                                        گالری هنری 59710001</option>
                                    <option
                                        onclick='CopyToValue(13,"طراحی و گرافیک و نقاشی--59710002","59710002","guildcode");'>
                                        طراحی و گرافیک و نقاشی 59710002</option>
                                    <option
                                        onclick='CopyToValue(13,"خطاطی و تابلونویسی--59710003","59710003","guildcode");'>
                                        خطاطی و تابلونویسی 59710003</option>
                                    <option
                                        onclick='CopyToValue(13,"سفال، سنگی، کاشی و سرامیک--59700003","59700003","guildcode");'>
                                        سفال، سنگی، کاشی و سرامیک 59700003</option>
                                    <option
                                        onclick='CopyToValue(13,"صنایع دستی پارچه ای--59700002","59700002","guildcode");'>
                                        صنایع دستی پارچه ای 59700002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات مجالس و تشریفات--72990001","72990001","guildcode");'>
                                        خدمات مجالس و تشریفات 72990001</option>
                                    <option
                                        onclick='CopyToValue(13,"لوازم خیاطی، لوازم گل دوزی و سوزن دوزی--59490001","59490001","guildcode");'>
                                        لوازم خیاطی، لوازم گل دوزی و سوزن دوزی 59490001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه صنایع دستی--59700001","59700001","guildcode");'>
                                        فروشگاه صنایع دستی 59700001</option>
                                    <option
                                        onclick='CopyToValue(13,"دفاتر ثبت ازدواج و طلاق--81110001","81110001","guildcode");'>
                                        دفاتر ثبت ازدواج و طلاق 81110001</option>
                                    <option
                                        onclick='CopyToValue(13,"دفاتر پیشخوان دولت--93990001","93990001","guildcode");'>
                                        دفاتر پیشخوان دولت 93990001</option>
                                    <option onclick='CopyToValue(13,"سفارتخانه--93990002","93990002","guildcode");'>
                                        سفارتخانه 93990002</option>
                                    <option
                                        onclick='CopyToValue(13,"دفاتر پلیس + 10--93990003","93990003","guildcode");'>
                                        دفاتر پلیس + 10 93990003</option>
                                    <option
                                        onclick='CopyToValue(13,"دفاتر ICT روستایی--93990004","93990004","guildcode");'>
                                        دفاتر ICT روستایی 93990004</option>
                                    <option onclick='CopyToValue(13,"شهرداری--93990005","93990005","guildcode");'>
                                        شهرداری 93990005</option>
                                    <option
                                        onclick='CopyToValue(13,"دفاتر امور مشترکین--93990006","93990006","guildcode");'>
                                        دفاتر امور مشترکین 93990006</option>
                                    <option
                                        onclick='CopyToValue(13,"دفاتر کفالت و اتباع خارجی--93990007","93990007","guildcode");'>
                                        دفاتر کفالت و اتباع خارجی 93990007</option>
                                    <option
                                        onclick='CopyToValue(13,"شرکت تولید و پخش مواد غذایی--54110002","54110002","guildcode");'>
                                        شرکت تولید و پخش مواد غذایی 54110002</option>
                                    <option
                                        onclick='CopyToValue(13,"ارائه دهندگان خدمات مشارکت در ساخت--15200001","15200001","guildcode");'>
                                        ارائه دهندگان خدمات مشارکت در ساخت 15200001</option>
                                    <option
                                        onclick='CopyToValue(13,"اداره برق و قبوض--49000001","49000001","guildcode");'>
                                        اداره برق و قبوض 49000001</option>
                                    <option
                                        onclick='CopyToValue(13,"اداره گاز و قبوض--49000002","49000002","guildcode");'>
                                        اداره گاز و قبوض 49000002</option>
                                    <option
                                        onclick='CopyToValue(13,"اداره آب و فاضلاب و قبوض--49000003","49000003","guildcode");'>
                                        اداره آب و فاضلاب و قبوض 49000003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه‌ زنجیره‌ای و بزرگ--53110001","53110001","guildcode");'>
                                        فروشگاه‌ زنجیره‌ای و بزرگ 53110001</option>
                                    <option
                                        onclick='CopyToValue(13,"سایر کسب و کارهای مرتبط با این گروه صنفی--79970000","79970000","guildcode");'>
                                        سایر کسب و کارهای مرتبط با این گروه صنفی 79970000</option>
                                    <option
                                        onclick='CopyToValue(13,"آکواریوم عمومی، باغ‌وحش و استخرهای نمایش دلفین--79980001","79980001","guildcode");'>
                                        آکواریوم عمومی، باغ‌وحش و استخرهای نمایش دلفین 79980001</option>
                                    <option onclick='CopyToValue(13,"پارک آبی--79990001","79990001","guildcode");'>پارک
                                        آبی 79990001</option>
                                    <option
                                        onclick='CopyToValue(13,"نجاری و درودگری--17500001","17500001","guildcode");'>
                                        نجاری و درودگری 17500001</option>
                                    <option
                                        onclick='CopyToValue(13,"خاتم کاری، منبت کاری و مصنوعات چوبی--17500002","17500002","guildcode");'>
                                        خاتم کاری، منبت کاری و مصنوعات چوبی 17500002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشان مواد شیمیایی و آلی--51690001","51690001","guildcode");'>
                                        عمده فروشان مواد شیمیایی و آلی 51690001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشان مواد، مصنوعات پلاستیکی و نایلون--51690002","51690002","guildcode");'>
                                        عمده فروشان مواد، مصنوعات پلاستیکی و نایلون 51690002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشان گازهای صنعتی--51690003","51690003","guildcode");'>
                                        عمده فروشان گازهای صنعتی 51690003</option>
                                    <option
                                        onclick='CopyToValue(13,"پیچ و مهره فروشان--52510002","52510002","guildcode");'>
                                        پیچ و مهره فروشان 52510002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه قفل و لولا و یراق‌آلات--52510003","52510003","guildcode");'>
                                        فروشگاه قفل و لولا و یراق‌آلات 52510003</option>
                                    <option onclick='CopyToValue(13,"ابزارفروشان--52510001","52510001","guildcode");'>
                                        ابزارفروشان 52510001</option>
                                    <option
                                        onclick='CopyToValue(13,"قفل و کلیدسازی--52510004","52510004","guildcode");'>قفل
                                        و کلیدسازی 52510004</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات نظام مهندسی--89110002","89110002","guildcode");'>
                                        خدمات نظام مهندسی 89110002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه لوازم و کالای ورزشی--59410001","59410001","guildcode");'>
                                        فروشگاه لوازم و کالای ورزشی 59410001</option>
                                    <option
                                        onclick='CopyToValue(13,"لوازم صید و شنا--59410002","59410002","guildcode");'>
                                        لوازم صید و شنا 59410002</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره لوازم برگزاری مجالس و مبلمان--73940001","73940001","guildcode");'>
                                        اجاره لوازم برگزاری مجالس و مبلمان 73940001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان آهن‌آلات ساختمانی، میلگرد، نبشی و ورق--50510001","50510001","guildcode");'>
                                        فروشندگان آهن‌آلات ساختمانی، میلگرد، نبشی و ورق 50510001</option>
                                    <option
                                        onclick='CopyToValue(13,"ضایعات فلزی و غیرفلزی--50510002","50510002","guildcode");'>
                                        ضایعات فلزی و غیرفلزی 50510002</option>
                                    <option
                                        onclick='CopyToValue(13,"ذوب فلزات،ریخته گری و قالب سازی--50510003","50510003","guildcode");'>
                                        ذوب فلزات،ریخته گری و قالب سازی 50510003</option>
                                    <option
                                        onclick='CopyToValue(13,"آلومینیوم و مصنوعات نوردی آن--50510004","50510004","guildcode");'>
                                        آلومینیوم و مصنوعات نوردی آن 50510004</option>
                                    <option
                                        onclick='CopyToValue(13,"مس و مصنوعات مسی--50510005","50510005","guildcode");'>
                                        مس و مصنوعات مسی 50510005</option>
                                    <option onclick='CopyToValue(13,"پرسکاری فلزات--50510006","50510006","guildcode");'>
                                        پرسکاری فلزات 50510006</option>
                                    <option
                                        onclick='CopyToValue(13,"رنگ و آبکاری فلزات--50510007","50510007","guildcode");'>
                                        رنگ و آبکاری فلزات 50510007</option>
                                    <option onclick='CopyToValue(13,"فروش فرفورژه--50510008","50510008","guildcode");'>
                                        فروش فرفورژه 50510008</option>
                                    <option
                                        onclick='CopyToValue(13,"تراشکاری و فلزکاری--50510009","50510009","guildcode");'>
                                        تراشکاری و فلزکاری 50510009</option>
                                    <option
                                        onclick='CopyToValue(13,"لعاب کاری و رنگ کاری فلزات--50510010","50510010","guildcode");'>
                                        لعاب کاری و رنگ کاری فلزات 50510010</option>
                                    <option
                                        onclick='CopyToValue(13,"طراحی و ساخت طلا و جواهر--59440003","59440003","guildcode");'>
                                        طراحی و ساخت طلا و جواهر 59440003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه طلا و جواهرآلات و سنگ های قیمتی--59440004","59440004","guildcode");'>
                                        فروشگاه طلا و جواهرآلات و سنگ های قیمتی 59440004</option>
                                    <option
                                        onclick='CopyToValue(13,"خرده فروشی سکه طلا--59440005","59440005","guildcode");'>
                                        خرده فروشی سکه طلا 59440005</option>
                                    <option onclick='CopyToValue(13,"فروشگاه ساعت--59440001","59440001","guildcode");'>
                                        فروشگاه ساعت 59440001</option>
                                    <option onclick='CopyToValue(13,"فروشگاه نقره--59440002","59440002","guildcode");'>
                                        فروشگاه نقره 59440002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات مهاجرت و ویزا--89990001","89990001","guildcode");'>
                                        خدمات مهاجرت و ویزا 89990001</option>
                                    <option
                                        onclick='CopyToValue(13,"حمام عمومی و گرمابه داران--89990002","89990002","guildcode");'>
                                        حمام عمومی و گرمابه داران 89990002</option>
                                    <option
                                        onclick='CopyToValue(13,"حفر چاه عمیق و نیمه عمیق--89990003","89990003","guildcode");'>
                                        حفر چاه عمیق و نیمه عمیق 89990003</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات روانشناسی و روانکاوی و گفتار درمانی--72770002","72770002","guildcode");'>
                                        خدمات روانشناسی و روانکاوی و گفتار درمانی 72770002</option>
                                    <option onclick='CopyToValue(13,"پلاسکو--57190004","57190004","guildcode");'>پلاسکو
                                        57190004</option>
                                    <option
                                        onclick='CopyToValue(13,"مواد اولیه و لوازم کشاورزی و باغبانی--52610001","52610001","guildcode");'>
                                        مواد اولیه و لوازم کشاورزی و باغبانی 52610001</option>
                                    <option
                                        onclick='CopyToValue(13,"لوازم آبیاری و آبرسانی کشاورزی و صنعتی--52610002","52610002","guildcode");'>
                                        لوازم آبیاری و آبرسانی کشاورزی و صنعتی 52610002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان نهال--52610003","52610003","guildcode");'>
                                        فروشندگان نهال 52610003</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات چمن‌کاری و فضای سبز--07800001","07800001","guildcode");'>
                                        خدمات چمن‌کاری و فضای سبز 07800001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان پرنده، ماهی و حیوانات خانگی--59950001","59950001","guildcode");'>
                                        فروشندگان پرنده، ماهی و حیوانات خانگی 59950001</option>
                                    <option
                                        onclick='CopyToValue(13,"دامداری و دامپروری--07630001","07630001","guildcode");'>
                                        دامداری و دامپروری 07630001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه غذا و لوازم حیوانات خانگی (پت شاپ)--59950002","59950002","guildcode");'>
                                        فروشگاه غذا و لوازم حیوانات خانگی (پت شاپ) 59950002</option>
                                    <option onclick='CopyToValue(13,"مهد کودک--83510001","83510001","guildcode");'>مهد
                                        کودک 83510001</option>
                                    <option onclick='CopyToValue(13,"مدارس ابتدایی--82110001","82110001","guildcode");'>
                                        مدارس ابتدایی 82110001</option>
                                    <option
                                        onclick='CopyToValue(13,"متوسطه اول و دوم--82110002","82110002","guildcode");'>
                                        متوسطه اول و دوم 82110002</option>
                                    <option onclick='CopyToValue(13,"هنرستان--82110003","82110003","guildcode");'>
                                        هنرستان 82110003</option>
                                    <option onclick='CopyToValue(13,"دانشگاه دولتی--82200001","82200001","guildcode");'>
                                        دانشگاه دولتی 82200001</option>
                                    <option onclick='CopyToValue(13,"دانشگاه آزاد--82200002","82200002","guildcode");'>
                                        دانشگاه آزاد 82200002</option>
                                    <option
                                        onclick='CopyToValue(13,"دانشگاه غیرانتفاعی--82200003","82200003","guildcode");'>
                                        دانشگاه غیرانتفاعی 82200003</option>
                                    <option
                                        onclick='CopyToValue(13,"دانشگاه جامع علمی کاربردی--82200004","82200004","guildcode");'>
                                        دانشگاه جامع علمی کاربردی 82200004</option>
                                    <option
                                        onclick='CopyToValue(13,"دانشگاه پیام‌نور--82200005","82200005","guildcode");'>
                                        دانشگاه پیام‌نور 82200005</option>
                                    <option
                                        onclick='CopyToValue(13,"دانشگاه علوم پزشکی--82200006","82200006","guildcode");'>
                                        دانشگاه علوم پزشکی 82200006</option>
                                    <option
                                        onclick='CopyToValue(13,"مرکز تربیت معلم--82200007","82200007","guildcode");'>
                                        مرکز تربیت معلم 82200007</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه‌ زبان‌های خارجی--82990001","82990001","guildcode");'>
                                        آموزشگاه‌ زبان‌های خارجی 82990001</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه‌ هنر و موسیقی--82990002","82990002","guildcode");'>
                                        آموزشگاه‌ هنر و موسیقی 82990002</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه رانندگی--82990003","82990003","guildcode");'>
                                        آموزشگاه رانندگی 82990003</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه درسی و کنکور--82990004","82990004","guildcode");'>
                                        آموزشگاه درسی و کنکور 82990004</option>
                                    <option
                                        onclick='CopyToValue(13,"تجهیزات پخت و پز رستوران‌ها--50460001","50460001","guildcode");'>
                                        تجهیزات پخت و پز رستوران‌ها 50460001</option>
                                    <option
                                        onclick='CopyToValue(13,"تشکدوزان و صندلی سازان اتومبیل--55330003","55330003","guildcode");'>
                                        تشکدوزان و صندلی سازان اتومبیل 55330003</option>
                                    <option
                                        onclick='CopyToValue(13,"تزئینات اتومبیل و نصب دزدگیر--55330002","55330002","guildcode");'>
                                        تزئینات اتومبیل و نصب دزدگیر 55330002</option>
                                    <option onclick='CopyToValue(13,"اگزوزسازی--75380001","75380001","guildcode");'>
                                        اگزوزسازی 75380001</option>
                                    <option
                                        onclick='CopyToValue(13,"آهنگری و آهن کشی انواع خودرو--75380002","75380002","guildcode");'>
                                        آهنگری و آهن کشی انواع خودرو 75380002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات برق اتومبیل، باطری ساز و باطری فروش--75380003","75380003","guildcode");'>
                                        خدمات برق اتومبیل، باطری ساز و باطری فروش 75380003</option>
                                    <option
                                        onclick='CopyToValue(13,"شرکت خودروسازی--55110001","55110001","guildcode");'>
                                        شرکت خودروسازی 55110001</option>
                                    <option
                                        onclick='CopyToValue(13,"پایانه‌های اتوبوسی بین شهری--41310001","41310001","guildcode");'>
                                        پایانه‌های اتوبوسی بین شهری 41310001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش و خدمات ماشین آلات حفاری--55990001","55990001","guildcode");'>
                                        فروش و خدمات ماشین آلات حفاری 55990001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش و خدمات ماشین آلات راه سازی و ساختمانی--55990002","55990002","guildcode");'>
                                        فروش و خدمات ماشین آلات راه سازی و ساختمانی 55990002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش و خدمات ماشین آلات و ادوات کشاورزی--55990003","55990003","guildcode");'>
                                        فروش و خدمات ماشین آلات و ادوات کشاورزی 55990003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش و خدمات ماشین آلات صنعتی--55990004","55990004","guildcode");'>
                                        فروش و خدمات ماشین آلات صنعتی 55990004</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش و خدمات ماشین آلات چاپ و صحافی--55990005","55990005","guildcode");'>
                                        فروش و خدمات ماشین آلات چاپ و صحافی 55990005</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش و خدمات ماشین آلات مرغداری--55990006","55990006","guildcode");'>
                                        فروش و خدمات ماشین آلات مرغداری 55990006</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش و خدمات ماشین آلات تراشکاری--55990007","55990007","guildcode");'>
                                        فروش و خدمات ماشین آلات تراشکاری 55990007</option>
                                    <option onclick='CopyToValue(13,"باسکول‌داری--55990008","55990008","guildcode");'>
                                        باسکول‌داری 55990008</option>
                                    <option onclick='CopyToValue(13,"فروش جرثقیل--55990009","55990009","guildcode");'>
                                        فروش جرثقیل 55990009</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش چرخ خیاطی--57220002","57220002","guildcode");'>
                                        فروش چرخ خیاطی 57220002</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیر موبایل و لوازم جانبی--76290001","76290001","guildcode");'>
                                        تعمیر موبایل و لوازم جانبی 76290001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه سیگار، قلیان و فندک--59930001","59930001","guildcode");'>
                                        فروشگاه سیگار، قلیان و فندک 59930001</option>
                                    <option
                                        onclick='CopyToValue(13,"فرش دستبافت، گلیم و تابلو فرش--57130001","57130001","guildcode");'>
                                        فرش دستبافت، گلیم و تابلو فرش 57130001</option>
                                    <option
                                        onclick='CopyToValue(13,"کریستال،چینی، بلورفروشی، لوازم کادویی و کالای لوکس--59500001","59500001","guildcode");'>
                                        کریستال،چینی، بلورفروشی، لوازم کادویی و کالای لوکس 59500001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان لوازم خانگی برقی--57220001","57220001","guildcode");'>
                                        فروشندگان لوازم خانگی برقی 57220001</option>
                                    <option
                                        onclick='CopyToValue(13,"تولید و فروش مانکن--50460002","50460002","guildcode");'>
                                        تولید و فروش مانکن 50460002</option>
                                    <option
                                        onclick='CopyToValue(13,"تشک، پتو و کالای خواب (روتختی، ملحفه...)--59490002","59490002","guildcode");'>
                                        تشک، پتو و کالای خواب (روتختی، ملحفه...) 59490002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه لوازم پرده، لوردراپه--57140001","57140001","guildcode");'>
                                        فروشگاه لوازم پرده، لوردراپه 57140001</option>
                                    <option
                                        onclick='CopyToValue(13,"دوخت، نصب و تعمیر انواع پرده--57140002","57140002","guildcode");'>
                                        دوخت، نصب و تعمیر انواع پرده 57140002</option>
                                    <option
                                        onclick='CopyToValue(13,"دوخت لباس عروس و شب--56970002","56970002","guildcode");'>
                                        دوخت لباس عروس و شب 56970002</option>
                                    <option
                                        onclick='CopyToValue(13,"تولیدی مانتو شلوار و لباس زنانه--56970003","56970003","guildcode");'>
                                        تولیدی مانتو شلوار و لباس زنانه 56970003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه پوشاک نوزاد و کودک--56410001","56410001","guildcode");'>
                                        فروشگاه پوشاک نوزاد و کودک 56410001</option>
                                    <option
                                        onclick='CopyToValue(13,"خیاطی و تعمیرات لباس--56970001","56970001","guildcode");'>
                                        خیاطی و تعمیرات لباس 56970001</option>
                                    <option
                                        onclick='CopyToValue(13,"لوازم نوزاد و سیسمونی--56410002","56410002","guildcode");'>
                                        لوازم نوزاد و سیسمونی 56410002</option>
                                    <option
                                        onclick='CopyToValue(13,"تولیدی کت و شلوار و لباس مردانه--56970004","56970004","guildcode");'>
                                        تولیدی کت و شلوار و لباس مردانه 56970004</option>
                                    <option
                                        onclick='CopyToValue(13,"گونی و کیسه دوزی--56970005","56970005","guildcode");'>
                                        گونی و کیسه دوزی 56970005</option>
                                    <option onclick='CopyToValue(13,"پارچه فروشان--59490003","59490003","guildcode");'>
                                        پارچه فروشان 59490003</option>
                                    <option onclick='CopyToValue(13,"جوراب فروشی--56990002","56990002","guildcode");'>
                                        جوراب فروشی 56990002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان نخ، کاموا و لوازم بافندگی--59490004","59490004","guildcode");'>
                                        فروشندگان نخ، کاموا و لوازم بافندگی 59490004</option>
                                    <option
                                        onclick='CopyToValue(13,"منسوجات و کالای کشباف--56990003","56990003","guildcode");'>
                                        منسوجات و کالای کشباف 56990003</option>
                                    <option
                                        onclick='CopyToValue(13,"تجهیزات و لوازم پزشکی، بیمارستانی و آزمایشگاهی--50470001","50470001","guildcode");'>
                                        تجهیزات و لوازم پزشکی، بیمارستانی و آزمایشگاهی 50470001</option>
                                    <option
                                        onclick='CopyToValue(13,"تجهیزات و لوازم دندانپزشکی--50470002","50470002","guildcode");'>
                                        تجهیزات و لوازم دندانپزشکی 50470002</option>
                                    <option onclick='CopyToValue(13,"پزشکان عمومی--80110001","80110001","guildcode");'>
                                        پزشکان عمومی 80110001</option>
                                    <option
                                        onclick='CopyToValue(13,"بیمارستان‌ دولتی--80620001","80620001","guildcode");'>
                                        بیمارستان‌ دولتی 80620001</option>
                                    <option
                                        onclick='CopyToValue(13,"بیمارستان‌ خصوصی--80620002","80620002","guildcode");'>
                                        بیمارستان‌ خصوصی 80620002</option>
                                    <option onclick='CopyToValue(13,"درمانگاه--80620003","80620003","guildcode");'>
                                        درمانگاه 80620003</option>
                                    <option
                                        onclick='CopyToValue(13,"کلینیک ترک اعتیاد--80990001","80990001","guildcode");'>
                                        کلینیک ترک اعتیاد 80990001</option>
                                    <option
                                        onclick='CopyToValue(13,"بیمارستان حیوانات--07420001","07420001","guildcode");'>
                                        بیمارستان حیوانات 07420001</option>
                                    <option onclick='CopyToValue(13,"داروخانه--59120001","59120001","guildcode");'>
                                        داروخانه 59120001</option>
                                    <option onclick='CopyToValue(13,"لیزر و زیبایی--80990002","80990002","guildcode");'>
                                        لیزر و زیبایی 80990002</option>
                                    <option
                                        onclick='CopyToValue(13,"سازمان انتقال خون--80990003","80990003","guildcode");'>
                                        سازمان انتقال خون 80990003</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات فیزیوتراپی--80990004","80990004","guildcode");'>
                                        خدمات فیزیوتراپی 80990004</option>
                                    <option
                                        onclick='CopyToValue(13,"تغذیه و رژیم درمانی--80990005","80990005","guildcode");'>
                                        تغذیه و رژیم درمانی 80990005</option>
                                    <option
                                        onclick='CopyToValue(13,"داربست و اتصالات فلزی--17990001","17990001","guildcode");'>
                                        داربست و اتصالات فلزی 17990001</option>
                                    <option
                                        onclick='CopyToValue(13,"لوله و اتصالات ساختمانی--17990002","17990002","guildcode");'>
                                        لوله و اتصالات ساختمانی 17990002</option>
                                    <option
                                        onclick='CopyToValue(13,"آسانسور و بالابر برقی--17990003","17990003","guildcode");'>
                                        آسانسور و بالابر برقی 17990003</option>
                                    <option
                                        onclick='CopyToValue(13,"کابینت آشپزخانه--52000002","52000002","guildcode");'>
                                        کابینت آشپزخانه 52000002</option>
                                    <option
                                        onclick='CopyToValue(13,"بنایی و معماری--17400001","17400001","guildcode");'>
                                        بنایی و معماری 17400001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات معماری، مهندسی و نقشه‌برداری--89110001","89110001","guildcode");'>
                                        خدمات معماری، مهندسی و نقشه‌برداری 89110001</option>
                                    <option onclick='CopyToValue(13,"سیمانکاری--17400002","17400002","guildcode");'>
                                        سیمانکاری 17400002</option>
                                    <option
                                        onclick='CopyToValue(13,"کاشی‌کاری و سرامیک‌کاری و نصب پارکت و کفپوش--17400003","17400003","guildcode");'>
                                        کاشی‌کاری و سرامیک‌کاری و نصب پارکت و کفپوش 17400003</option>
                                    <option
                                        onclick='CopyToValue(13,"نماسازی ساختمان--17400004","17400004","guildcode");'>
                                        نماسازی ساختمان 17400004</option>
                                    <option
                                        onclick='CopyToValue(13,"فخاران تولید آجر و گچ--17400005","17400005","guildcode");'>
                                        فخاران تولید آجر و گچ 17400005</option>
                                    <option onclick='CopyToValue(13,"نقاش ساختمان--17400006","17400006","guildcode");'>
                                        نقاش ساختمان 17400006</option>
                                    <option
                                        onclick='CopyToValue(13,"ایزوگام عایق‌کاری سقف و دیوار--17400007","17400007","guildcode");'>
                                        ایزوگام عایق‌کاری سقف و دیوار 17400007</option>
                                    <option onclick='CopyToValue(13,"گچ‌کاری--17400008","17400008","guildcode");'>
                                        گچ‌کاری 17400008</option>
                                    <option onclick='CopyToValue(13,"سوله سازی--17990005","17990005","guildcode");'>سوله
                                        سازی 17990005</option>
                                    <option
                                        onclick='CopyToValue(13,"لوله بازکنی و تشخیص ترکیدگی لوله--17110001","17110001","guildcode");'>
                                        لوله بازکنی و تشخیص ترکیدگی لوله 17110001</option>
                                    <option
                                        onclick='CopyToValue(13,"کاغذ دیواری و تزیینات داخلی ساختمان--52310001","52310001","guildcode");'>
                                        کاغذ دیواری و تزیینات داخلی ساختمان 52310001</option>
                                    <option
                                        onclick='CopyToValue(13,"گودبرداری ساختمان--17990006","17990006","guildcode");'>
                                        گودبرداری ساختمان 17990006</option>
                                    <option
                                        onclick='CopyToValue(13,"شیشه‌بری و فروشندگی شیشه و آیینه--52310002","52310002","guildcode");'>
                                        شیشه‌بری و فروشندگی شیشه و آیینه 52310002</option>
                                    <option
                                        onclick='CopyToValue(13,"تخلیه کنندگان چاه و فاضلاب--17110002","17110002","guildcode");'>
                                        تخلیه کنندگان چاه و فاضلاب 17110002</option>
                                    <option
                                        onclick='CopyToValue(13,"کانال سازی و کانال کشی ساختمان--17110005","17110005","guildcode");'>
                                        کانال سازی و کانال کشی ساختمان 17110005</option>
                                    <option
                                        onclick='CopyToValue(13,"تاسیسات ساختمان (لوله کشی،سرمایشی،گرمایشی)--17110004","17110004","guildcode");'>
                                        تاسیسات ساختمان (لوله کشی،سرمایشی،گرمایشی) 17110004</option>
                                    <option
                                        onclick='CopyToValue(13,"سیستم حرارتی، برودتی و تهویه مطبوع--17110003","17110003","guildcode");'>
                                        سیستم حرارتی، برودتی و تهویه مطبوع 17110003</option>
                                    <option
                                        onclick='CopyToValue(13,"ارائه دهندگان خدمات شبکه کامپیوتری--48160001","48160001","guildcode");'>
                                        ارائه دهندگان خدمات شبکه کامپیوتری 48160001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان تلفن همراه و تجهیزات جانبی--48120001","48120001","guildcode");'>
                                        فروشندگان تلفن همراه و تجهیزات جانبی 48120001</option>
                                    <option
                                        onclick='CopyToValue(13,"ارائه دهنده خدمات اینترنت--48160002","48160002","guildcode");'>
                                        ارائه دهنده خدمات اینترنت 48160002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه تجهیزات الکترونیکی (به جز لوازم خانگی)--57320001","57320001","guildcode");'>
                                        فروشگاه تجهیزات الکترونیکی (به جز لوازم خانگی) 57320001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرکاران لوازم صوتی و تصویری--76220001","76220001","guildcode");'>
                                        تعمیرکاران لوازم صوتی و تصویری 76220001</option>
                                    <option
                                        onclick='CopyToValue(13,"الکتروموتور،سیم پیچ و ژنراتور--17310002","17310002","guildcode");'>
                                        الکتروموتور،سیم پیچ و ژنراتور 17310002</option>
                                    <option
                                        onclick='CopyToValue(13,"سیم کشی برق و تلفن--17310001","17310001","guildcode");'>
                                        سیم کشی برق و تلفن 17310001</option>
                                    <option
                                        onclick='CopyToValue(13,"تولید کننده لوازم برقی و بردهای الکترونیکی--50650003","50650003","guildcode");'>
                                        تولید کننده لوازم برقی و بردهای الکترونیکی 50650003</option>
                                    <option
                                        onclick='CopyToValue(13,"تابلوسازان و موسسات برق صنعتی--50650002","50650002","guildcode");'>
                                        تابلوسازان و موسسات برق صنعتی 50650002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان تلفن، دستگاه و تجهیزات مخابراطی--48120002","48120002","guildcode");'>
                                        فروشندگان تلفن، دستگاه و تجهیزات مخابراطی 48120002</option>
                                    <option
                                        onclick='CopyToValue(13,"چاپ خانه داران--27410001","27410001","guildcode");'>چاپ
                                        خانه داران 27410001</option>
                                    <option onclick='CopyToValue(13,"خدمات نشر--27410002","27410002","guildcode");'>
                                        خدمات نشر 27410002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات فتوکپی، زیراکس و اوزالید--73380002","73380002","guildcode");'>
                                        خدمات فتوکپی، زیراکس و اوزالید 73380002</option>
                                    <option
                                        onclick='CopyToValue(13,"تولید کارت، پاکت، جعبه و محصولات کاغذی و مقوایی--59470001","59470001","guildcode");'>
                                        تولید کارت، پاکت، جعبه و محصولات کاغذی و مقوایی 59470001</option>
                                    <option
                                        onclick='CopyToValue(13,"مهر و آرم و چاپ اسکرین--73380001","73380001","guildcode");'>
                                        مهر و آرم و چاپ اسکرین 73380001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات تایپ و ترجمه--27410003","27410003","guildcode");'>
                                        خدمات تایپ و ترجمه 27410003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه لوازم آرایشی و بهداشتی--59770001","59770001","guildcode");'>
                                        فروشگاه لوازم آرایشی و بهداشتی 59770001</option>
                                    <option
                                        onclick='CopyToValue(13,"آرایشگاه مردانه--72300001","72300001","guildcode");'>
                                        آرایشگاه مردانه 72300001</option>
                                    <option
                                        onclick='CopyToValue(13,"سالن‌های زیبایی و آرایشگاه‌های زنانه--72300002","72300002","guildcode");'>
                                        سالن‌های زیبایی و آرایشگاه‌های زنانه 72300002</option>
                                    <option onclick='CopyToValue(13,"عطر و ادکلن--59770002","59770002","guildcode");'>
                                        عطر و ادکلن 59770002</option>
                                    <option
                                        onclick='CopyToValue(13,"مسافرخانه و مهمانپذیر و پانسیون--70110001","70110001","guildcode");'>
                                        مسافرخانه و مهمانپذیر و پانسیون 70110001</option>
                                    <option onclick='CopyToValue(13,"هتل--70110002","70110002","guildcode");'>هتل
                                        70110002</option>
                                    <option onclick='CopyToValue(13,"خانه سالمندان--80500001","80500001","guildcode");'>
                                        خانه سالمندان 80500001</option>
                                    <option
                                        onclick='CopyToValue(13,"میوه فروشی و سبزی فروشی--54990001","54990001","guildcode");'>
                                        میوه فروشی و سبزی فروشی 54990001</option>
                                    <option onclick='CopyToValue(13,"زعفران فروشی--54410006","54410006","guildcode");'>
                                        زعفران فروشی 54410006</option>
                                    <option onclick='CopyToValue(13,"کشتارگاه--54220001","54220001","guildcode");'>
                                        کشتارگاه 54220001</option>
                                    <option
                                        onclick='CopyToValue(13,"قصابی و فروش محصولات گوشتی--54220002","54220002","guildcode");'>
                                        قصابی و فروش محصولات گوشتی 54220002</option>
                                    <option
                                        onclick='CopyToValue(13,"سردخانه و انبار محصولات کشاورزی--42250001","42250001","guildcode");'>
                                        سردخانه و انبار محصولات کشاورزی 42250001</option>
                                    <option
                                        onclick='CopyToValue(13,"قنادی و شیرینی فروشی--54410001","54410001","guildcode");'>
                                        قنادی و شیرینی فروشی 54410001</option>
                                    <option
                                        onclick='CopyToValue(13,"رستوران و سالن غذاخوری--58120001","58120001","guildcode");'>
                                        رستوران و سالن غذاخوری 58120001</option>
                                    <option
                                        onclick='CopyToValue(13,"طباخان و فروشندگان کله، پاچه و سیرابی--58120002","58120002","guildcode");'>
                                        طباخان و فروشندگان کله، پاچه و سیرابی 58120002</option>
                                    <option
                                        onclick='CopyToValue(13,"جگر، دل و قلوه--58120003","58120003","guildcode");'>
                                        جگر، دل و قلوه 58120003</option>
                                    <option onclick='CopyToValue(13,"سفره خانه--58120004","58120004","guildcode");'>سفره
                                        خانه 58120004</option>
                                    <option
                                        onclick='CopyToValue(13,"کبابی، حلیم و آش--58120005","58120005","guildcode");'>
                                        کبابی، حلیم و آش 58120005</option>
                                    <option
                                        onclick='CopyToValue(13,"حلواساز و عصار--54410003","54410003","guildcode");'>
                                        حلواساز و عصار 54410003</option>
                                    <option
                                        onclick='CopyToValue(13,"چای خانه و قهوه خانه--58140001","58140001","guildcode");'>
                                        چای خانه و قهوه خانه 58140001</option>
                                    <option onclick='CopyToValue(13,"عسل فروشی--54410004","54410004","guildcode");'>عسل
                                        فروشی 54410004</option>
                                    <option onclick='CopyToValue(13,"سوهان و گز--54410005","54410005","guildcode");'>
                                        سوهان و گز 54410005</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش ابزار و یراق‌آلات--50720001","50720001","guildcode");'>
                                        عمده‌فروشی و پخش ابزار و یراق‌آلات 50720001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان لوازم یدکی خودرو--55330001","55330001","guildcode");'>
                                        فروشندگان لوازم یدکی خودرو 55330001</option>
                                    <option
                                        onclick='CopyToValue(13,"لباس زیر، راحتی و خانگی زنانه--56310001","56310001","guildcode");'>
                                        لباس زیر، راحتی و خانگی زنانه 56310001</option>
                                    <option
                                        onclick='CopyToValue(13,"شال و روسری فروشی--56310002","56310002","guildcode");'>
                                        شال و روسری فروشی 56310002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان لوستر، آباژور، آیینه و شمعدان و قاب عکس--57190001","57190001","guildcode");'>
                                        فروشندگان لوستر، آباژور، آیینه و شمعدان و قاب عکس 57190001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان اجناس سفالی و سرامیکی--57190002","57190002","guildcode");'>
                                        فروشندگان اجناس سفالی و سرامیکی 57190002</option>
                                    <option
                                        onclick='CopyToValue(13,"لوازم و ظروف آشپزخانه--57190003","57190003","guildcode");'>
                                        لوازم و ظروف آشپزخانه 57190003</option>
                                    <option
                                        onclick='CopyToValue(13,"پارک‌های جنگلی--70110004","70110004","guildcode");'>
                                        پارک‌های جنگلی 70110004</option>
                                    <option
                                        onclick='CopyToValue(13,"برگزاری همایش و سمینار--73990001","73990001","guildcode");'>
                                        برگزاری همایش و سمینار 73990001</option>
                                    <option
                                        onclick='CopyToValue(13,"دارالترجمه رسمی--73990002","73990002","guildcode");'>
                                        دارالترجمه رسمی 73990002</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرکاران خودرو--75380004","75380004","guildcode");'>
                                        تعمیرکاران خودرو 75380004</option>
                                    <option onclick='CopyToValue(13,"ادارات گمرک--93110001","93110001","guildcode");'>
                                        ادارات گمرک 93110001</option>
                                    <option
                                        onclick='CopyToValue(13,"سازمان امور مالیاتی--93110002","93110002","guildcode");'>
                                        سازمان امور مالیاتی 93110002</option>
                                    <option
                                        onclick='CopyToValue(13,"کشاورزی و باغداری--07630002","07630002","guildcode");'>
                                        کشاورزی و باغداری 07630002</option>
                                    <option onclick='CopyToValue(13,"پرورش طیور--07630003","07630003","guildcode");'>
                                        پرورش طیور 07630003</option>
                                    <option
                                        onclick='CopyToValue(13,"پرورش ماهی و آبزی پروری--07630005","07630005","guildcode");'>
                                        پرورش ماهی و آبزی پروری 07630005</option>
                                    <option
                                        onclick='CopyToValue(13,"پرورش و تولید قارچ--07630006","07630006","guildcode");'>
                                        پرورش و تولید قارچ 07630006</option>
                                    <option
                                        onclick='CopyToValue(13,"پرورش زنبور عسل--07630004","07630004","guildcode");'>
                                        پرورش زنبور عسل 07630004</option>
                                    <option onclick='CopyToValue(13,"تعاونی مسکن--15200002","15200002","guildcode");'>
                                        تعاونی مسکن 15200002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان عمده تجهیزات و قطعات الکتریکی--50650001","50650001","guildcode");'>
                                        فروشندگان عمده تجهیزات و قطعات الکتریکی 50650001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه‌ تزئینات داخلی ساختمان--52000001","52000001","guildcode");'>
                                        فروشگاه‌ تزئینات داخلی ساختمان 52000001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه غلات و حبوبات--54110003","54110003","guildcode");'>
                                        فروشگاه غلات و حبوبات 54110003</option>
                                    <option
                                        onclick='CopyToValue(13,"لوازم بسته بندی و ظروف یکبار مصرف--57190005","57190005","guildcode");'>
                                        لوازم بسته بندی و ظروف یکبار مصرف 57190005</option>
                                    <option
                                        onclick='CopyToValue(13,"کافی شاپ و کافه تریا--58140002","58140002","guildcode");'>
                                        کافی شاپ و کافه تریا 58140002</option>
                                    <option
                                        onclick='CopyToValue(13,"سایر کسب و کارهای مرتبط با این گروه صنفی--59700000","59700000","guildcode");'>
                                        سایر کسب و کارهای مرتبط با این گروه صنفی 59700000</option>
                                    <option
                                        onclick='CopyToValue(13,"نصابان دوربین مداربسته و سیستم های امنیتی--73930001","73930001","guildcode");'>
                                        نصابان دوربین مداربسته و سیستم های امنیتی 73930001</option>
                                    <option
                                        onclick='CopyToValue(13,"استادیوم ورزشی--79410001","79410001","guildcode");'>
                                        استادیوم ورزشی 79410001</option>
                                    <option
                                        onclick='CopyToValue(13,"موزه‌ و نمایشگاه هنری--79910001","79910001","guildcode");'>
                                        موزه‌ و نمایشگاه هنری 79910001</option>
                                    <option onclick='CopyToValue(13,"طب سوزنی--80990006","80990006","guildcode");'>طب
                                        سوزنی 80990006</option>
                                    <option onclick='CopyToValue(13,"طب کار--80990007","80990007","guildcode");'>طب کار
                                        80990007</option>
                                    <option
                                        onclick='CopyToValue(13,"مدارس دانش آموزان استثنایی--82110004","82110004","guildcode");'>
                                        مدارس دانش آموزان استثنایی 82110004</option>
                                    <option onclick='CopyToValue(13,"مجتمع آموزشی--82110005","82110005","guildcode");'>
                                        مجتمع آموزشی 82110005</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه خیاطی و طراحی دوخت--82490001","82490001","guildcode");'>
                                        آموزشگاه خیاطی و طراحی دوخت 82490001</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه آرایشگری و پیرایشگری--82490002","82490002","guildcode");'>
                                        آموزشگاه آرایشگری و پیرایشگری 82490002</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه کامپیوتر (سخت افزار - نرم افزار)--82490003","82490003","guildcode");'>
                                        آموزشگاه کامپیوتر (سخت افزار - نرم افزار) 82490003</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه رباتیک--82490004","82490004","guildcode");'>
                                        آموزشگاه رباتیک 82490004</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه تعمیرات موبایل--82490005","82490005","guildcode");'>
                                        آموزشگاه تعمیرات موبایل 82490005</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه خلبانی--82490006","82490006","guildcode");'>
                                        آموزشگاه خلبانی 82490006</option>
                                    <option onclick='CopyToValue(13,"آموزشگاه برق--82490007","82490007","guildcode");'>
                                        آموزشگاه برق 82490007</option>
                                    <option
                                        onclick='CopyToValue(13,"آموزشگاه فرش، قالیبافی و تابلوفرش--82490008","82490008","guildcode");'>
                                        آموزشگاه فرش، قالیبافی و تابلوفرش 82490008</option>
                                    <option
                                        onclick='CopyToValue(13,"مجتمع آموزشگاهی بزرگ و چند منظوره--82990005","82990005","guildcode");'>
                                        مجتمع آموزشگاهی بزرگ و چند منظوره 82990005</option>
                                    <option onclick='CopyToValue(13,"کمیته امداد--83980001","83980001","guildcode");'>
                                        کمیته امداد 83980001</option>
                                    <option
                                        onclick='CopyToValue(13,"هیئت مذهبی، حسینه، مساجد، مصلی--86610001","86610001","guildcode");'>
                                        هیئت مذهبی، حسینه، مساجد، مصلی 86610001</option>
                                    <option
                                        onclick='CopyToValue(13,"دفاتر امام جمعه و مراجع--86610002","86610002","guildcode");'>
                                        دفاتر امام جمعه و مراجع 86610002</option>
                                    <option
                                        onclick='CopyToValue(13,"حوزه علمیه و مدارس دینی--86610003","86610003","guildcode");'>
                                        حوزه علمیه و مدارس دینی 86610003</option>
                                    <option
                                        onclick='CopyToValue(13,"شورای حل اختلاف--92110001","92110001","guildcode");'>
                                        شورای حل اختلاف 92110001</option>
                                    <option
                                        onclick='CopyToValue(13,"سازمان تعزیرات حکومتی--93990008","93990008","guildcode");'>
                                        سازمان تعزیرات حکومتی 93990008</option>
                                    <option
                                        onclick='CopyToValue(13,"سازمان ثبت احوال--93990009","93990009","guildcode");'>
                                        سازمان ثبت احوال 93990009</option>
                                    <option
                                        onclick='CopyToValue(13,"مرکز تعویض پلاک--93990010","93990010","guildcode");'>
                                        مرکز تعویض پلاک 93990010</option>
                                    <option
                                        onclick='CopyToValue(13,"سازمان پزشکی قانونی--93990011","93990011","guildcode");'>
                                        سازمان پزشکی قانونی 93990011</option>
                                    <option
                                        onclick='CopyToValue(13,"سازمان آتش نشانی--93990012","93990012","guildcode");'>
                                        سازمان آتش نشانی 93990012</option>
                                    <option
                                        onclick='CopyToValue(13,"مرکز معاینه فنی خودرو--93990013","93990013","guildcode");'>
                                        مرکز معاینه فنی خودرو 93990013</option>
                                    <option
                                        onclick='CopyToValue(13,"دفاتر خدمات الکترونیک شهر--93990014","93990014","guildcode");'>
                                        دفاتر خدمات الکترونیک شهر 93990014</option>
                                    <option onclick='CopyToValue(13,"شورایاری--93990015","93990015","guildcode");'>
                                        شورایاری 93990015</option>
                                    <option
                                        onclick='CopyToValue(13,"توزیع کنندگان عمده کتاب، روزنامه، مجله و گاهنامه--51920001","51920001","guildcode");'>
                                        توزیع کنندگان عمده کتاب، روزنامه، مجله و گاهنامه 51920001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات مشاوره ازدواج--72770001","72770001","guildcode");'>
                                        خدمات مشاوره ازدواج 72770001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات دکور و معماری داخلی ساختمان--17990004","17990004","guildcode");'>
                                        خدمات دکور و معماری داخلی ساختمان 17990004</option>
                                    <option
                                        onclick='CopyToValue(13,"خرازی فروشی و فروشندگان لوازم ارزان--53310001","53310001","guildcode");'>
                                        خرازی فروشی و فروشندگان لوازم ارزان 53310001</option>
                                    <option
                                        onclick='CopyToValue(13,"فرآورده گوشتی، همبرگر، سوسیس و کالباس--54220003","54220003","guildcode");'>
                                        فرآورده گوشتی، همبرگر، سوسیس و کالباس 54220003</option>
                                    <option
                                        onclick='CopyToValue(13,"سمعی و بصری (کمک اموزشی)--50460004","50460004","guildcode");'>
                                        سمعی و بصری (کمک اموزشی) 50460004</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی طلا و جواهرآلات--50940001","50940001","guildcode");'>
                                        عمده فروشی طلا و جواهرآلات 50940001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی ساعت--50940002","50940002","guildcode");'>
                                        عمده فروشی ساعت 50940002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه شکلات و آب‌نبات--54410007","54410007","guildcode");'>
                                        فروشگاه شکلات و آب‌نبات 54410007</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه چای و قهوه--54410008","54410008","guildcode");'>
                                        فروشگاه چای و قهوه 54410008</option>
                                    <option
                                        onclick='CopyToValue(13,"نمایشگاه‌ خودرو--55210001","55210001","guildcode");'>
                                        نمایشگاه‌ خودرو 55210001</option>
                                    <option
                                        onclick='CopyToValue(13,"کسب و کارهای مرتبط با فناوری زنجیره بلوک--78000001","78000001","guildcode");'>
                                        کسب و کارهای مرتبط با فناوری زنجیره بلوک 78000001</option>
                                    <option
                                        onclick='CopyToValue(13,"بازارگاه آنلاین--52620001","52620001","guildcode");'>
                                        بازارگاه آنلاین 52620001</option>
                                    <option
                                        onclick='CopyToValue(13,"نان صنعتی، حجیم و نیمه حجیم--54630001","54630001","guildcode");'>
                                        نان صنعتی، حجیم و نیمه حجیم 54630001</option>
                                    <option
                                        onclick='CopyToValue(13,"کلوچه و نان شیرین (خشکه پزی)--54630002","54630002","guildcode");'>
                                        کلوچه و نان شیرین (خشکه پزی) 54630002</option>
                                    <option
                                        onclick='CopyToValue(13,"جایگاه‌ شارژ خودروهای برقی--55520001","55520001","guildcode");'>
                                        جایگاه‌ شارژ خودروهای برقی 55520001</option>
                                    <option onclick='CopyToValue(13,"عطاری--59150001","59150001","guildcode");'>عطاری
                                        59150001</option>
                                    <option
                                        onclick='CopyToValue(13,"شرکت های سبدگردان--62120001","62120001","guildcode");'>
                                        شرکت های سبدگردان 62120001</option>
                                    <option
                                        onclick='CopyToValue(13,"صندوق های سرمایه گذاری--62120002","62120002","guildcode");'>
                                        صندوق های سرمایه گذاری 62120002</option>
                                    <option
                                        onclick='CopyToValue(13,"کیف الکترونیک پول--65400001","65400001","guildcode");'>
                                        کیف الکترونیک پول 65400001</option>
                                    <option
                                        onclick='CopyToValue(13,"کلینیک تخصصی پوست و مو--80320001","80320001","guildcode");'>
                                        کلینیک تخصصی پوست و مو 80320001</option>
                                    <option onclick='CopyToValue(13,"مغز و اعصاب--80320002","80320002","guildcode");'>
                                        مغز و اعصاب 80320002</option>
                                    <option onclick='CopyToValue(13,"قلب و عروق--80320003","80320003","guildcode");'>قلب
                                        و عروق 80320003</option>
                                    <option onclick='CopyToValue(13,"پوست و مو--80320004","80320004","guildcode");'>پوست
                                        و مو 80320004</option>
                                    <option onclick='CopyToValue(13,"زنان و زایمان--80320005","80320005","guildcode");'>
                                        زنان و زایمان 80320005</option>
                                    <option onclick='CopyToValue(13,"ارتوپدی--80320006","80320006","guildcode");'>
                                        ارتوپدی 80320006</option>
                                    <option onclick='CopyToValue(13,"اورولوژی--80320007","80320007","guildcode");'>
                                        اورولوژی 80320007</option>
                                    <option onclick='CopyToValue(13,"اطفال--80320008","80320008","guildcode");'>اطفال
                                        80320008</option>
                                    <option onclick='CopyToValue(13,"داخلی--80320009","80320009","guildcode");'>داخلی
                                        80320009</option>
                                    <option onclick='CopyToValue(13,"گوارش--80320010","80320010","guildcode");'>گوارش
                                        80320010</option>
                                    <option
                                        onclick='CopyToValue(13,"گوش، حلق، بینی--80320011","80320011","guildcode");'>
                                        گوش، حلق، بینی 80320011</option>
                                    <option onclick='CopyToValue(13,"روانپزشک--80320012","80320012","guildcode");'>
                                        روانپزشک 80320012</option>
                                    <option onclick='CopyToValue(13,"انکولوژی--80320013","80320013","guildcode");'>
                                        انکولوژی 80320013</option>
                                    <option onclick='CopyToValue(13,"ریه--80320014","80320014","guildcode");'>ریه
                                        80320014</option>
                                    <option onclick='CopyToValue(13,"غدد--80320015","80320015","guildcode");'>غدد
                                        80320015</option>
                                    <option
                                        onclick='CopyToValue(13,"پلاستیک و زیبایی--80320016","80320016","guildcode");'>
                                        پلاستیک و زیبایی 80320016</option>
                                    <option onclick='CopyToValue(13,"پا پزشکی--80320017","80320017","guildcode");'>پا
                                        پزشکی 80320017</option>
                                    <option
                                        onclick='CopyToValue(13,"پزشکان طب سنتی--80330001","80330001","guildcode");'>
                                        پزشکان طب سنتی 80330001</option>
                                    <option
                                        onclick='CopyToValue(13,"رادیولوژی و سنوگرافی--80440001","80440001","guildcode");'>
                                        رادیولوژی و سنوگرافی 80440001</option>
                                    <option
                                        onclick='CopyToValue(13,"عکس برداری هسته ای--80440002","80440002","guildcode");'>
                                        عکس برداری هسته ای 80440002</option>
                                    <option onclick='CopyToValue(13,"ماموگرافی--80440003","80440003","guildcode");'>
                                        ماموگرافی 80440003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه ملزومات ایمنی و اطفای حریق--50990001","50990001","guildcode");'>
                                        فروشگاه ملزومات ایمنی و اطفای حریق 50990001</option>
                                    <option
                                        onclick='CopyToValue(13,"نصابان سیستم‌های اطفا حریق--50990002","50990002","guildcode");'>
                                        نصابان سیستم‌های اطفا حریق 50990002</option>
                                    <option onclick='CopyToValue(13,"مزایده--53100001","53100001","guildcode");'>مزایده
                                        53100001</option>
                                    <option onclick='CopyToValue(13,"شرکت های بیمه--59600001","59600001","guildcode");'>
                                        شرکت های بیمه 59600001</option>
                                    <option
                                        onclick='CopyToValue(13,"کارگزاری ها‌ و نمایندگان بیمه--59600002","59600002","guildcode");'>
                                        کارگزاری ها‌ و نمایندگان بیمه 59600002</option>
                                    <option onclick='CopyToValue(13,"کارگزاری ها--62110001","62110001","guildcode");'>
                                        کارگزاری ها 62110001</option>
                                    <option
                                        onclick='CopyToValue(13,"سازمان تامین اجتماعی--63000001","63000001","guildcode");'>
                                        سازمان تامین اجتماعی 63000001</option>
                                    <option
                                        onclick='CopyToValue(13,"صندوق های قرض الحسنه دارای مجوز--60120001","60120001","guildcode");'>
                                        صندوق های قرض الحسنه دارای مجوز 60120001</option>
                                    <option
                                        onclick='CopyToValue(13,"کلینیک حیوانات خانگی--07420002","07420002","guildcode");'>
                                        کلینیک حیوانات خانگی 07420002</option>
                                    <option
                                        onclick='CopyToValue(13,"پانسیون حیوانات--07420003","07420003","guildcode");'>
                                        پانسیون حیوانات 07420003</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات درمانی دام و طیور--07420004","07420004","guildcode");'>
                                        خدمات درمانی دام و طیور 07420004</option>
                                    <option
                                        onclick='CopyToValue(13,"داروخانه دامپزشکی--07420005","07420005","guildcode");'>
                                        داروخانه دامپزشکی 07420005</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه لوازم کشاورزی و دامداری--07630007","07630007","guildcode");'>
                                        فروشگاه لوازم کشاورزی و دامداری 07630007</option>
                                    <option onclick='CopyToValue(13,"فروش دام--07630008","07630008","guildcode");'>فروش
                                        دام 07630008</option>
                                    <option
                                        onclick='CopyToValue(13,"شرکت ساختمانی و انبوه سازی--15200003","15200003","guildcode");'>
                                        شرکت ساختمانی و انبوه سازی 15200003</option>
                                    <option
                                        onclick='CopyToValue(13,"تاسیسات برقی ساختمان--17310003","17310003","guildcode");'>
                                        تاسیسات برقی ساختمان 17310003</option>
                                    <option
                                        onclick='CopyToValue(13,"ساخت در و پنجره چوبی--17500003","17500003","guildcode");'>
                                        ساخت در و پنجره چوبی 17500003</option>
                                    <option onclick='CopyToValue(13,"پوشش سقف--17610001","17610001","guildcode");'>پوشش
                                        سقف 17610001</option>
                                    <option
                                        onclick='CopyToValue(13,"نصب شیروانی، گاتر و آبرو--17610002","17610002","guildcode");'>
                                        نصب شیروانی، گاتر و آبرو 17610002</option>
                                    <option onclick='CopyToValue(13,"کناف کاری--17610003","17610003","guildcode");'>کناف
                                        کاری 17610003</option>
                                    <option onclick='CopyToValue(13,"آسفالت کاری--17710001","17710001","guildcode");'>
                                        آسفالت کاری 17710001</option>
                                    <option onclick='CopyToValue(13,"بتن‌ ریزی--17710002","17710002","guildcode");'>بتن‌
                                        ریزی 17710002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات تخریب ساختمان--17990007","17990007","guildcode");'>
                                        خدمات تخریب ساختمان 17990007</option>
                                    <option
                                        onclick='CopyToValue(13,"ساخت و نصب در و کرکره اتومات--17990008","17990008","guildcode");'>
                                        ساخت و نصب در و کرکره اتومات 17990008</option>
                                    <option
                                        onclick='CopyToValue(13,"ساخت در و پنجره فلزی--17990009","17990009","guildcode");'>
                                        ساخت در و پنجره فلزی 17990009</option>
                                    <option
                                        onclick='CopyToValue(13,"تولید و نصب آلاچیق--17990010","17990010","guildcode");'>
                                        تولید و نصب آلاچیق 17990010</option>
                                    <option
                                        onclick='CopyToValue(13,"صحافی، دفتر و آلبوم سازی--27410004","27410004","guildcode");'>
                                        صحافی، دفتر و آلبوم سازی 27410004</option>
                                    <option
                                        onclick='CopyToValue(13,"حروف‌چینی، لیتوگرافی و ماشین تحریر--27910001","27910001","guildcode");'>
                                        حروف‌چینی، لیتوگرافی و ماشین تحریر 27910001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه مواد شوینده و بهداشتی--28420001","28420001","guildcode");'>
                                        فروشگاه مواد شوینده و بهداشتی 28420001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش مواد شوینده و پاک کننده--28420002","28420002","guildcode");'>
                                        عمده فروشی و پخش مواد شوینده و پاک کننده 28420002</option>
                                    <option
                                        onclick='CopyToValue(13,"خطوط ریلی باری--40110001","40110001","guildcode");'>
                                        خطوط ریلی باری 40110001</option>
                                    <option
                                        onclick='CopyToValue(13,"قطار شهری (مترو)--41110001","41110001","guildcode");'>
                                        قطار شهری (مترو) 41110001</option>
                                    <option
                                        onclick='CopyToValue(13,"حمل و نقل قایق و کشتی مسافری--41110002","41110002","guildcode");'>
                                        حمل و نقل قایق و کشتی مسافری 41110002</option>
                                    <option
                                        onclick='CopyToValue(13,"راه آهن مسافربری--41120001","41120001","guildcode");'>
                                        راه آهن مسافربری 41120001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات آمبولانس و حمل بیمار--41190001","41190001","guildcode");'>
                                        خدمات آمبولانس و حمل بیمار 41190001</option>
                                    <option onclick='CopyToValue(13,"تاکسی فرودگاه--41210001","41210001","guildcode");'>
                                        تاکسی فرودگاه 41210001</option>
                                    <option
                                        onclick='CopyToValue(13,"تاکسی اینترنتی--41210002","41210002","guildcode");'>
                                        تاکسی اینترنتی 41210002</option>
                                    <option onclick='CopyToValue(13,"تاکسی تلفنی--41210003","41210003","guildcode");'>
                                        تاکسی تلفنی 41210003</option>
                                    <option
                                        onclick='CopyToValue(13,"پایانه اتوبوسی شهری--41310002","41310002","guildcode");'>
                                        پایانه اتوبوسی شهری 41310002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات باربری هوایی--42140001","42140001","guildcode");'>
                                        خدمات باربری هوایی 42140001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات باربری با کامیون و وانت--42140002","42140002","guildcode");'>
                                        خدمات باربری با کامیون و وانت 42140002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات پیک و ارسال مرسولات--42150001","42150001","guildcode");'>
                                        خدمات پیک و ارسال مرسولات 42150001</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره کشتی‌ و قایق تفریحی--44110001","44110001","guildcode");'>
                                        اجاره کشتی‌ و قایق تفریحی 44110001</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره قایق و جت اسکی--44570001","44570001","guildcode");'>
                                        اجاره قایق و جت اسکی 44570001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات نگهداری و تعمیرات قایق و کشتی--44680001","44680001","guildcode");'>
                                        خدمات نگهداری و تعمیرات قایق و کشتی 44680001</option>
                                    <option
                                        onclick='CopyToValue(13,"آژانس فروش بلیط--45110001","45110001","guildcode");'>
                                        آژانس فروش بلیط 45110001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش بلیط اینترنتی--45110002","45110002","guildcode");'>
                                        فروش بلیط اینترنتی 45110002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات عملیات و نگهداری فرودگاه و سایت پروازی--45820001","45820001","guildcode");'>
                                        خدمات عملیات و نگهداری فرودگاه و سایت پروازی 45820001</option>
                                    <option
                                        onclick='CopyToValue(13,"تورهای مسافرتی و خدمات گردشگری--47220001","47220001","guildcode");'>
                                        تورهای مسافرتی و خدمات گردشگری 47220001</option>
                                    <option onclick='CopyToValue(13,"عوارض راه--47840001","47840001","guildcode");'>
                                        عوارض راه 47840001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات حمل و نقل (نامذکور در کدهای دیگر)--47890001","47890001","guildcode");'>
                                        خدمات حمل و نقل (نامذکور در کدهای دیگر) 47890001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش اینترنتی شارژ تلفن همراه--48140001","48140001","guildcode");'>
                                        فروش اینترنتی شارژ تلفن همراه 48140001</option>
                                    <option
                                        onclick='CopyToValue(13,"تلویزیون‌های اینترنتی--48990001","48990001","guildcode");'>
                                        تلویزیون‌های اینترنتی 48990001</option>
                                    <option onclick='CopyToValue(13,"پادکست‌ها--48990002","48990002","guildcode");'>
                                        پادکست‌ها 48990002</option>
                                    <option onclick='CopyToValue(13,"ویدیوکست‌ها--48990003","48990003","guildcode");'>
                                        ویدیوکست‌ها 48990003</option>
                                    <option
                                        onclick='CopyToValue(13,"اداره مخابرات و قبوض--49000004","49000004","guildcode");'>
                                        اداره مخابرات و قبوض 49000004</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش لوازم یدکی خودرو--50130001","50130001","guildcode");'>
                                        عمده‌فروشی و پخش لوازم یدکی خودرو 50130001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش لوازم موتورسیکلت--50130002","50130002","guildcode");'>
                                        عمده‌فروشی و پخش لوازم موتورسیکلت 50130002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش لوازم ماشین‌الات سنگین--50130003","50130003","guildcode");'>
                                        عمده‌فروشی و پخش لوازم ماشین‌الات سنگین 50130003</option>
                                    <option
                                        onclick='CopyToValue(13,"صندلی آمفی تئاتر، غرفه سازی و امور نمایشگاهی--50210001","50210001","guildcode");'>
                                        صندلی آمفی تئاتر، غرفه سازی و امور نمایشگاهی 50210001</option>
                                    <option onclick='CopyToValue(13,"مبلمان اداری--50210002","50210002","guildcode");'>
                                        مبلمان اداری 50210002</option>
                                    <option
                                        onclick='CopyToValue(13,"مبلمان شهری، مجوعه های بازی، ایستگاه اتوبوس و تاکسی--50210003","50210003","guildcode");'>
                                        مبلمان شهری، مجوعه های بازی، ایستگاه اتوبوس و تاکسی 50210003</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش مصالح ساختمانی--50390001","50390001","guildcode");'>
                                        عمده فروشی و پخش مصالح ساختمانی 50390001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش لوازم و ماشین‌های اداری--50440001","50440001","guildcode");'>
                                        عمده فروشی و پخش لوازم و ماشین‌های اداری 50440001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی لپ تاپ، کامپیوتر--50450001","50450001","guildcode");'>
                                        عمده فروشی لپ تاپ، کامپیوتر 50450001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی قطعات کامپیوتر و لوازم مرتبط--50450002","50450002","guildcode");'>
                                        عمده فروشی قطعات کامپیوتر و لوازم مرتبط 50450002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی لوازم جانبی (کاور،کیف لپ تاپ)--50450003","50450003","guildcode");'>
                                        عمده فروشی لوازم جانبی (کاور،کیف لپ تاپ) 50450003</option>
                                    <option
                                        onclick='CopyToValue(13,"تجهیزات پخت و پز تجاری--50460003","50460003","guildcode");'>
                                        تجهیزات پخت و پز تجاری 50460003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش لوازم و تجهیزات پزشکی، آزمایشگاهی، بیمارستانی و دندانپزشکی--50470003","50470003","guildcode");'>
                                        فروش لوازم و تجهیزات پزشکی، آزمایشگاهی، بیمارستانی و دندانپزشکی 50470003
                                    </option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرکنندگان لوازم و تجهیزات پزشکی، آزمایشگاهی، بیمارستانی و دندانپزشکی--50470004","50470004","guildcode");'>
                                        تعمیرکنندگان لوازم و تجهیزات پزشکی، آزمایشگاهی، بیمارستانی و دندانپزشکی 50470004
                                    </option>
                                    <option
                                        onclick='CopyToValue(13,"ابزار سلامت و طب (محافظ طبی، ماساژور، دستگاه بخور و...)--50470005","50470005","guildcode");'>
                                        ابزار سلامت و طب (محافظ طبی، ماساژور، دستگاه بخور و...) 50470005</option>
                                    <option
                                        onclick='CopyToValue(13,"لوازم ارتوپدی پزشکی و اعضا مصنوعی--50470006","50470006","guildcode");'>
                                        لوازم ارتوپدی پزشکی و اعضا مصنوعی 50470006</option>
                                    <option
                                        onclick='CopyToValue(13,"لوازم کمک شنوایی پزشکی (سمعک)--50470007","50470007","guildcode");'>
                                        لوازم کمک شنوایی پزشکی (سمعک) 50470007</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشندگان عمده تجهیزات لوله‌کشی، شوفاژ و تهویه مطبوع--50740001","50740001","guildcode");'>
                                        فروشندگان عمده تجهیزات لوله‌کشی، شوفاژ و تهویه مطبوع 50740001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش ملزومات صنعتی (نامذکور در کدهای دیگر)--50850001","50850001","guildcode");'>
                                        عمده فروشی و پخش ملزومات صنعتی (نامذکور در کدهای دیگر) 50850001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی نقره--50940003","50940003","guildcode");'>
                                        عمده فروشی نقره 50940003</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشان کاغذ، اوراق اداری و مواد مصرفی فتوکپی--51110001","51110001","guildcode");'>
                                        عمده فروشان کاغذ، اوراق اداری و مواد مصرفی فتوکپی 51110001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشان لوازم التحریر--51110002","51110002","guildcode");'>
                                        عمده فروشان لوازم التحریر 51110002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش دارو و محصولات آرایشی--51220001","51220001","guildcode");'>
                                        عمده فروشی و پخش دارو و محصولات آرایشی 51220001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش لوازم آرایشی--51220002","51220002","guildcode");'>
                                        عمده‌فروشی و پخش لوازم آرایشی 51220002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش عطر و ادکلن--51220003","51220003","guildcode");'>
                                        عمده‌فروشی و پخش عطر و ادکلن 51220003</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشان لوازم خیاطی و دوزندگی--51310001","51310001","guildcode");'>
                                        عمده فروشان لوازم خیاطی و دوزندگی 51310001</option>
                                    <option
                                        onclick='CopyToValue(13,"بنکدار و طاقه فروش پارچه و پرده--51310002","51310002","guildcode");'>
                                        بنکدار و طاقه فروش پارچه و پرده 51310002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشان پتو و روتختی--51310003","51310003","guildcode");'>
                                        عمده فروشان پتو و روتختی 51310003</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش یونیفرم و لباس کار--51370001","51370001","guildcode");'>
                                        عمده‌فروشی و پخش یونیفرم و لباس کار 51370001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش کفش ماشینی و کار--51390001","51390001","guildcode");'>
                                        عمده‌فروشی و پخش کفش ماشینی و کار 51390001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش کفش--51390002","51390002","guildcode");'>
                                        عمده‌فروشی و پخش کفش 51390002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش کیف--51390003","51390003","guildcode");'>
                                        عمده‌فروشی و پخش کیف 51390003</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده‌فروشی و پخش کیف و کفش--51390004","51390004","guildcode");'>
                                        عمده‌فروشی و پخش کیف و کفش 51390004</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی لوازم کفاشی--51390005","51390005","guildcode");'>
                                        عمده فروشی لوازم کفاشی 51390005</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش نفت خام و مشتقات--51720001","51720001","guildcode");'>
                                        عمده فروشی و پخش نفت خام و مشتقات 51720001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش گل و گیاه--51930001","51930001","guildcode");'>
                                        عمده فروشی و پخش گل و گیاه 51930001</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش لوازم گلفروشی--51930002","51930002","guildcode");'>
                                        عمده فروشی و پخش لوازم گلفروشی 51930002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش رنگ، جلا و مواد مصرفی نقاشی--51980001","51980001","guildcode");'>
                                        عمده فروشی و پخش رنگ، جلا و مواد مصرفی نقاشی 51980001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه موزاییک، کاشی و سرامیک و سنگ، پارکت و کفپوش--52110001","52110001","guildcode");'>
                                        فروشگاه موزاییک، کاشی و سرامیک و سنگ، پارکت و کفپوش 52110001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه چوب، الوار، مصالح چوبی و پوشش سقف--52110002","52110002","guildcode");'>
                                        فروشگاه چوب، الوار، مصالح چوبی و پوشش سقف 52110002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش سیمان، شن و ماسه، آجر و گچ--52110003","52110003","guildcode");'>
                                        فروش سیمان، شن و ماسه، آجر و گچ 52110003</option>
                                    <option
                                        onclick='CopyToValue(13,"ابزار و یراق آلات ساختمانی (دستگیره، پریز و ...)--52110004","52110004","guildcode");'>
                                        ابزار و یراق آلات ساختمانی (دستگیره، پریز و ...) 52110004</option>
                                    <option onclick='CopyToValue(13,"گاتر و آبروها--52110005","52110005","guildcode");'>
                                        گاتر و آبروها 52110005</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه سیمان و مصنوعات سیمانی--52110006","52110006","guildcode");'>
                                        فروشگاه سیمان و مصنوعات سیمانی 52110006</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش تجهیزات و قطعات الکتریکی--52510005","52510005","guildcode");'>
                                        فروش تجهیزات و قطعات الکتریکی 52510005</option>
                                    <option
                                        onclick='CopyToValue(13,"ساخت و مونتاژ خانه‌های پیش ساخته قابل حمل و کانکس--52710001","52710001","guildcode");'>
                                        ساخت و مونتاژ خانه‌های پیش ساخته قابل حمل و کانکس 52710001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه زیتون، ترشی--54110004","54110004","guildcode");'>
                                        فروشگاه زیتون، ترشی 54110004</option>
                                    <option onclick='CopyToValue(13,"یخ فروشی--54110005","54110005","guildcode");'>یخ
                                        فروشی 54110005</option>
                                    <option onclick='CopyToValue(13,"تعاونی مصرف--54110006","54110006","guildcode");'>
                                        تعاونی مصرف 54110006</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشنده چای و برنج--54110007","54110007","guildcode");'>
                                        فروشنده چای و برنج 54110007</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه محصولات لبنی--54510001","54510001","guildcode");'>
                                        فروشگاه محصولات لبنی 54510001</option>
                                    <option onclick='CopyToValue(13,"لاستیک فروشی--55320001","55320001","guildcode");'>
                                        لاستیک فروشی 55320001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش لوازم یدکی موتورسیکلت--55330004","55330004","guildcode");'>
                                        فروش لوازم یدکی موتورسیکلت 55330004</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش لوازم یدکی ماشین‌آلات سنگین--55330005","55330005","guildcode");'>
                                        فروش لوازم یدکی ماشین‌آلات سنگین 55330005</option>
                                    <option onclick='CopyToValue(13,"جایگاه بنزین--55420001","55420001","guildcode");'>
                                        جایگاه بنزین 55420001</option>
                                    <option onclick='CopyToValue(13,"جایگاه CNG--55420002","55420002","guildcode");'>
                                        جایگاه CNG 55420002</option>
                                    <option
                                        onclick='CopyToValue(13,"جایگاه گازوئیل--55420003","55420003","guildcode");'>
                                        جایگاه گازوئیل 55420003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش قایق و کشتی--55510001","55510001","guildcode");'>
                                        فروش قایق و کشتی 55510001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش تریلرهای تفریحی و مسافرتی--55610001","55610001","guildcode");'>
                                        فروش تریلرهای تفریحی و مسافرتی 55610001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه‌ موتورسیکلت--55710001","55710001","guildcode");'>
                                        فروشگاه‌ موتورسیکلت 55710001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش و خدمات لیفتراک--55990010","55990010","guildcode");'>
                                        فروش و خدمات لیفتراک 55990010</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه محصولات حجاب--56310003","56310003","guildcode");'>
                                        فروشگاه محصولات حجاب 56310003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه بدلیجات تزئینی (اکسسوری)--56310004","56310004","guildcode");'>
                                        فروشگاه بدلیجات تزئینی (اکسسوری) 56310004</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه پوشاک خانواده--56510001","56510001","guildcode");'>
                                        فروشگاه پوشاک خانواده 56510001</option>
                                    <option
                                        onclick='CopyToValue(13,"شلوار جین و کتان--56510002","56510002","guildcode");'>
                                        شلوار جین و کتان 56510002</option>
                                    <option
                                        onclick='CopyToValue(13,"پوشاک بزرگسالان--56510003","56510003","guildcode");'>
                                        پوشاک بزرگسالان 56510003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه لباس مجلسی و عروس--56510004","56510004","guildcode");'>
                                        فروشگاه لباس مجلسی و عروس 56510004</option>
                                    <option
                                        onclick='CopyToValue(13,"مانتو و پالتو فروشی--56510005","56510005","guildcode");'>
                                        مانتو و پالتو فروشی 56510005</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه یونیفرم و لباس اداری زنانه--56510006","56510006","guildcode");'>
                                        فروشگاه یونیفرم و لباس اداری زنانه 56510006</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه کت و شلوار و پیراهن--56510007","56510007","guildcode");'>
                                        فروشگاه کت و شلوار و پیراهن 56510007</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه لباس راحتی و زیر مردانه--56510008","56510008","guildcode");'>
                                        فروشگاه لباس راحتی و زیر مردانه 56510008</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه پوشاک مردانه--56510009","56510009","guildcode");'>
                                        فروشگاه پوشاک مردانه 56510009</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه یونیفرم و لباس نظامی--56510010","56510010","guildcode");'>
                                        فروشگاه یونیفرم و لباس نظامی 56510010</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه لباس ورزشی--56550001","56550001","guildcode");'>
                                        فروشگاه لباس ورزشی 56550001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه تخصصی پوشاک و لوازم سوارکاری--56550002","56550002","guildcode");'>
                                        فروشگاه تخصصی پوشاک و لوازم سوارکاری 56550002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه تخصصی فروش کفش ورزشی--56550003","56550003","guildcode");'>
                                        فروشگاه تخصصی فروش کفش ورزشی 56550003</option>
                                    <option
                                        onclick='CopyToValue(13,"کیف و کفش فروشی--56610001","56610001","guildcode");'>
                                        کیف و کفش فروشی 56610001</option>
                                    <option onclick='CopyToValue(13,"کیف فروشی--56610002","56610002","guildcode");'>کیف
                                        فروشی 56610002</option>
                                    <option onclick='CopyToValue(13,"کفش فروشی--56610003","56610003","guildcode");'>کفش
                                        فروشی 56610003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه پوشاک پوستین و خز--56810001","56810001","guildcode");'>
                                        فروشگاه پوشاک پوستین و خز 56810001</option>
                                    <option
                                        onclick='CopyToValue(13,"پوشاک و اکسسوری چرم--56810002","56810002","guildcode");'>
                                        پوشاک و اکسسوری چرم 56810002</option>
                                    <option
                                        onclick='CopyToValue(13,"نساجی و ریسندگی--56970006","56970006","guildcode");'>
                                        نساجی و ریسندگی 56970006</option>
                                    <option
                                        onclick='CopyToValue(13,"رنگرزی و صباغی--56970007","56970007","guildcode");'>
                                        رنگرزی و صباغی 56970007</option>
                                    <option
                                        onclick='CopyToValue(13,"دوزندگی لوازم ایمنی و لباس کار--56970008","56970008","guildcode");'>
                                        دوزندگی لوازم ایمنی و لباس کار 56970008</option>
                                    <option
                                        onclick='CopyToValue(13,"دوزندگی لباس نظامی--56970009","56970009","guildcode");'>
                                        دوزندگی لباس نظامی 56970009</option>
                                    <option
                                        onclick='CopyToValue(13,"دستکش، کلاه، شال گردن، حوله ...--56990001","56990001","guildcode");'>
                                        دستکش، کلاه، شال گردن، حوله ... 56990001</option>
                                    <option
                                        onclick='CopyToValue(13,"لوازم و تزئینات سفره عقد (خنچه عقد)--56990004","56990004","guildcode");'>
                                        لوازم و تزئینات سفره عقد (خنچه عقد) 56990004</option>
                                    <option onclick='CopyToValue(13,"مبلمان خانگی--57120001","57120001","guildcode");'>
                                        مبلمان خانگی 57120001</option>
                                    <option
                                        onclick='CopyToValue(13,"سرویس خواب بزرگسال--57120002","57120002","guildcode");'>
                                        سرویس خواب بزرگسال 57120002</option>
                                    <option
                                        onclick='CopyToValue(13,"سرویس خواب نوزاد، کودک و نوجوان--57120003","57120003","guildcode");'>
                                        سرویس خواب نوزاد، کودک و نوجوان 57120003</option>
                                    <option onclick='CopyToValue(13,"کالای چوب--57120004","57120004","guildcode");'>
                                        کالای چوب 57120004</option>
                                    <option
                                        onclick='CopyToValue(13,"فرش ماشینی و موکت--57130002","57130002","guildcode");'>
                                        فرش ماشینی و موکت 57130002</option>
                                    <option
                                        onclick='CopyToValue(13,"پارچه پرده فروشی--57140003","57140003","guildcode");'>
                                        پارچه پرده فروشی 57140003</option>
                                    <option
                                        onclick='CopyToValue(13,"پارچه مبلی فروشی--57140004","57140004","guildcode");'>
                                        پارچه مبلی فروشی 57140004</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش شومینه، آتشدان، باربیکیو و لوازم جانبی--57180001","57180001","guildcode");'>
                                        فروش شومینه، آتشدان، باربیکیو و لوازم جانبی 57180001</option>
                                    <option
                                        onclick='CopyToValue(13,"دکوری و تزئینی (مجسمه، شمع و...)--57190006","57190006","guildcode");'>
                                        دکوری و تزئینی (مجسمه، شمع و...) 57190006</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه صوتی و تصویری--57220003","57220003","guildcode");'>
                                        فروشگاه صوتی و تصویری 57220003</option>
                                    <option
                                        onclick='CopyToValue(13,"نمایندگی صوتی و تصویری--57220004","57220004","guildcode");'>
                                        نمایندگی صوتی و تصویری 57220004</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه لوازم و ادوات موسیقی--57330001","57330001","guildcode");'>
                                        فروشگاه لوازم و ادوات موسیقی 57330001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه‌ نرم افزار کامپیوتری--57340001","57340001","guildcode");'>
                                        فروشگاه‌ نرم افزار کامپیوتری 57340001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه محصولات رسانه‌ای--57350001","57350001","guildcode");'>
                                        فروشگاه محصولات رسانه‌ای 57350001</option>
                                    <option
                                        onclick='CopyToValue(13,"کترینگ و تهیه غذا--58110001","58110001","guildcode");'>
                                        کترینگ و تهیه غذا 58110001</option>
                                    <option
                                        onclick='CopyToValue(13,"بستنی و آبمیوه فروشی--58140003","58140003","guildcode");'>
                                        بستنی و آبمیوه فروشی 58140003</option>
                                    <option
                                        onclick='CopyToValue(13,"رستوران‌های غذاهای آماده--58140004","58140004","guildcode");'>
                                        رستوران‌های غذاهای آماده 58140004</option>
                                    <option onclick='CopyToValue(13,"فست فود--58140005","58140005","guildcode");'>فست
                                        فود 58140005</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه اینترنتی محصولات دیجیتال (کتاب، فیلم، موسیقی)--58150001","58150001","guildcode");'>
                                        فروشگاه اینترنتی محصولات دیجیتال (کتاب، فیلم، موسیقی) 58150001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه اینترنتی بازی‌های دیجیتال--58160001","58160001","guildcode");'>
                                        فروشگاه اینترنتی بازی‌های دیجیتال 58160001</option>
                                    <option
                                        onclick='CopyToValue(13,"کالاهای دیجیتال (نرم افزارهای کاربردی، به غیر از بازی)--58170001","58170001","guildcode");'>
                                        کالاهای دیجیتال (نرم افزارهای کاربردی، به غیر از بازی) 58170001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش کالاهای دیجیتال--58180001","58180001","guildcode");'>
                                        فروش کالاهای دیجیتال 58180001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه‌ سمساری و دسته دوم فروشی--59310001","59310001","guildcode");'>
                                        فروشگاه‌ سمساری و دسته دوم فروشی 59310001</option>
                                    <option
                                        onclick='CopyToValue(13,"عتیقه فروشی (فروش، تعمیر و بازسازی)--59320001","59320001","guildcode");'>
                                        عتیقه فروشی (فروش، تعمیر و بازسازی) 59320001</option>
                                    <option
                                        onclick='CopyToValue(13,"مغازه کارگشایی--59330001","59330001","guildcode");'>
                                        مغازه کارگشایی 59330001</option>
                                    <option
                                        onclick='CopyToValue(13,"انبار اوراق خودرو--59350001","59350001","guildcode");'>
                                        انبار اوراق خودرو 59350001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه‌ دوچرخه--59400001","59400001","guildcode");'>
                                        فروشگاه‌ دوچرخه 59400001</option>
                                    <option
                                        onclick='CopyToValue(13,"تجهیزات سفر و کمپینگ--59410003","59410003","guildcode");'>
                                        تجهیزات سفر و کمپینگ 59410003</option>
                                    <option onclick='CopyToValue(13,"کتاب فروشی--59420001","59420001","guildcode");'>
                                        کتاب فروشی 59420001</option>
                                    <option onclick='CopyToValue(13,"کتابخانه--59420002","59420002","guildcode");'>
                                        کتابخانه 59420002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه لوازم التحریر--59430001","59430001","guildcode");'>
                                        فروشگاه لوازم التحریر 59430001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه اسباب بازی و وسایل سرگرمی--59450001","59450001","guildcode");'>
                                        فروشگاه اسباب بازی و وسایل سرگرمی 59450001</option>
                                    <option
                                        onclick='CopyToValue(13,"دوربین و تجهیزات عکاسی و فیلم برداری--59460001","59460001","guildcode");'>
                                        دوربین و تجهیزات عکاسی و فیلم برداری 59460001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرات دوربین و تجهیزات عکاسی و فیلم برداری--59460002","59460002","guildcode");'>
                                        تعمیرات دوربین و تجهیزات عکاسی و فیلم برداری 59460002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش وسایل کادویی و تزئینی--59470002","59470002","guildcode");'>
                                        فروش وسایل کادویی و تزئینی 59470002</option>
                                    <option onclick='CopyToValue(13,"ساک و چمدان--59480001","59480001","guildcode");'>
                                        ساک و چمدان 59480001</option>
                                    <option
                                        onclick='CopyToValue(13,"مصنوعات و ظروف فلزی--59700004","59700004","guildcode");'>
                                        مصنوعات و ظروف فلزی 59700004</option>
                                    <option
                                        onclick='CopyToValue(13,"مصنوعات چوبی و حصیری--59700005","59700005","guildcode");'>
                                        مصنوعات چوبی و حصیری 59700005</option>
                                    <option onclick='CopyToValue(13,"شیشه و آبگینه--59700006","59700006","guildcode");'>
                                        شیشه و آبگینه 59700006</option>
                                    <option
                                        onclick='CopyToValue(13,"مصنوعات چرم دست دوز و طبیعی--59700007","59700007","guildcode");'>
                                        مصنوعات چرم دست دوز و طبیعی 59700007</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش مواد اولیه، دستگاه‌ها و ملزومات صنایع دستی--59700008","59700008","guildcode");'>
                                        فروش مواد اولیه، دستگاه‌ها و ملزومات صنایع دستی 59700008</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه‌ سکه و تمبر کلکسیونی--59720001","59720001","guildcode");'>
                                        فروشگاه‌ سکه و تمبر کلکسیونی 59720001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه کالاهای مذهبی--59730001","59730001","guildcode");'>
                                        فروشگاه کالاهای مذهبی 59730001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش روغن های مراقبتی و درمانی--59770003","59770003","guildcode");'>
                                        فروش روغن های مراقبتی و درمانی 59770003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروشگاه موی مصنوعی و کلاه گیس--59770004","59770004","guildcode");'>
                                        فروشگاه موی مصنوعی و کلاه گیس 59770004</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش چوب؛ ذغال سنگ و سایر سوخت های جامد--59830001","59830001","guildcode");'>
                                        فروش چوب؛ ذغال سنگ و سایر سوخت های جامد 59830001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش نفت به مصرف کنندگان--59830002","59830002","guildcode");'>
                                        فروش نفت به مصرف کنندگان 59830002</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش سوخت هواپیما--59830003","59830003","guildcode");'>
                                        فروش سوخت هواپیما 59830003</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش سوخت قایق و کشتی--59830004","59830004","guildcode");'>
                                        فروش سوخت قایق و کشتی 59830004</option>
                                    <option
                                        onclick='CopyToValue(13,"توزیع کنندگان و شارژ کپسول گاز--59830005","59830005","guildcode");'>
                                        توزیع کنندگان و شارژ کپسول گاز 59830005</option>
                                    <option onclick='CopyToValue(13,"گلفروشی--59920001","59920001","guildcode");'>
                                        گلفروشی 59920001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش گیاهان آپارتمانی و درختچه تزئینی--59920002","59920002","guildcode");'>
                                        فروش گیاهان آپارتمانی و درختچه تزئینی 59920002</option>
                                    <option
                                        onclick='CopyToValue(13,"عمده فروشی و پخش سیگار و قلیان--59930002","59930002","guildcode");'>
                                        عمده فروشی و پخش سیگار و قلیان 59930002</option>
                                    <option
                                        onclick='CopyToValue(13,"دکه روزنامه فروشی--59940001","59940001","guildcode");'>
                                        دکه روزنامه فروشی 59940001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش تجهیزات استخرهای خانگی، جکوزی، وان--59960001","59960001","guildcode");'>
                                        فروش تجهیزات استخرهای خانگی، جکوزی، وان 59960001</option>
                                    <option
                                        onclick='CopyToValue(13,"خیمه و پشه بند--59980001","59980001","guildcode");'>
                                        خیمه و پشه بند 59980001</option>
                                    <option
                                        onclick='CopyToValue(13,"بانک‌ها و موسسات مالی و اعتباری مجاز--60100001","60100001","guildcode");'>
                                        بانک‌ها و موسسات مالی و اعتباری مجاز 60100001</option>
                                    <option onclick='CopyToValue(13,"صرافی--60510001","60510001","guildcode");'>صرافی
                                        60510001</option>
                                    <option
                                        onclick='CopyToValue(13,"مشاورین املاک و مستغلات--65130001","65130001","guildcode");'>
                                        مشاورین املاک و مستغلات 65130001</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره انبار و سوله--65130002","65130002","guildcode");'>
                                        اجاره انبار و سوله 65130002</option>
                                    <option onclick='CopyToValue(13,"متل (راه‌سرا)--70110003","70110003","guildcode");'>
                                        متل (راه‌سرا) 70110003</option>
                                    <option
                                        onclick='CopyToValue(13,"اردوگاه ورزشی و تفریحی--70320001","70320001","guildcode");'>
                                        اردوگاه ورزشی و تفریحی 70320001</option>
                                    <option onclick='CopyToValue(13,"خشکشویی--72160001","72160001","guildcode");'>
                                        خشکشویی 72160001</option>
                                    <option
                                        onclick='CopyToValue(13,"قالی‌شویی، مرمت و رفوگری فرش--72170001","72170001","guildcode");'>
                                        قالی‌شویی، مرمت و رفوگری فرش 72170001</option>
                                    <option onclick='CopyToValue(13,"استودیو عکاسی--72210001","72210001","guildcode");'>
                                        استودیو عکاسی 72210001</option>
                                    <option onclick='CopyToValue(13,"کفاشی--72510001","72510001","guildcode");'>کفاشی
                                        72510001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرات انواع کیف--72510002","72510002","guildcode");'>
                                        تعمیرات انواع کیف 72510002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات کفن و دفن--72610001","72610001","guildcode");'>
                                        خدمات کفن و دفن 72610001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات اجاره انواع لباس--72960001","72960001","guildcode");'>
                                        خدمات اجاره انواع لباس 72960001</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره لباس عروس و شب--72960002","72960002","guildcode");'>
                                        اجاره لباس عروس و شب 72960002</option>
                                    <option
                                        onclick='CopyToValue(13,"سالن ماساژ درمانی--72970001","72970001","guildcode");'>
                                        سالن ماساژ درمانی 72970001</option>
                                    <option onclick='CopyToValue(13,"اسپا--72970002","72970002","guildcode");'>اسپا
                                        72970002</option>
                                    <option
                                        onclick='CopyToValue(13,"تالارهای پذیرایی--72990002","72990002","guildcode");'>
                                        تالارهای پذیرایی 72990002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات تبلیغات و بازاریابی--73110001","73110001","guildcode");'>
                                        خدمات تبلیغات و بازاریابی 73110001</option>
                                    <option
                                        onclick='CopyToValue(13,"مؤسسات اعتبارسنجی--73210001","73210001","guildcode");'>
                                        مؤسسات اعتبارسنجی 73210001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات عکاسی و گرافیک تجاری--73330001","73330001","guildcode");'>
                                        خدمات عکاسی و گرافیک تجاری 73330001</option>
                                    <option onclick='CopyToValue(13,"عریضه نویسی--73390001","73390001","guildcode");'>
                                        عریضه نویسی 73390001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش کود، سم و داروهای شیمیایی محصولات کشاورزی--73420001","73420001","guildcode");'>
                                        فروش کود، سم و داروهای شیمیایی محصولات کشاورزی 73420001</option>
                                    <option
                                        onclick='CopyToValue(13,"ارائه انواع خدمات سمپاشی و ضدعفونی--73420002","73420002","guildcode");'>
                                        ارائه انواع خدمات سمپاشی و ضدعفونی 73420002</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات نظافت، نگهداری و سرایداری--73490001","73490001","guildcode");'>
                                        خدمات نظافت، نگهداری و سرایداری 73490001</option>
                                    <option onclick='CopyToValue(13,"آژانس کاریابی--73610001","73610001","guildcode");'>
                                        آژانس کاریابی 73610001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات برنامه نویسی و طراحی سایت--73720001","73720001","guildcode");'>
                                        خدمات برنامه نویسی و طراحی سایت 73720001</option>
                                    <option onclick='CopyToValue(13,"کافی نت--73790001","73790001","guildcode");'>کافی
                                        نت 73790001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرات و خدمات کامپیوتری--73790002","73790002","guildcode");'>
                                        تعمیرات و خدمات کامپیوتری 73790002</option>
                                    <option
                                        onclick='CopyToValue(13,"شرکت‌های مشاوره مدیریت--73920001","73920001","guildcode");'>
                                        شرکت‌های مشاوره مدیریت 73920001</option>
                                    <option
                                        onclick='CopyToValue(13,"آژانس حفاظتی و امنیتی--73930002","73930002","guildcode");'>
                                        آژانس حفاظتی و امنیتی 73930002</option>
                                    <option
                                        onclick='CopyToValue(13,"ارائه دهندگان خدمات محافظ شخصی--73930003","73930003","guildcode");'>
                                        ارائه دهندگان خدمات محافظ شخصی 73930003</option>
                                    <option
                                        onclick='CopyToValue(13,"تعلیم، آموزش و فروش سگ‌های نگهبان--73930004","73930004","guildcode");'>
                                        تعلیم، آموزش و فروش سگ‌های نگهبان 73930004</option>
                                    <option
                                        onclick='CopyToValue(13,"اسکورت و حمل محموله--73930005","73930005","guildcode");'>
                                        اسکورت و حمل محموله 73930005</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش انواع گاوصندوق و سکیوریتی باکس--73930006","73930006","guildcode");'>
                                        فروش انواع گاوصندوق و سکیوریتی باکس 73930006</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات اجاره زیورآلات--73940002","73940002","guildcode");'>
                                        خدمات اجاره زیورآلات 73940002</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره لوازم و تجهیزات صنعتی--73940003","73940003","guildcode");'>
                                        اجاره لوازم و تجهیزات صنعتی 73940003</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره لوازم سفر، کمپینگ و سرگرمی--73940004","73940004","guildcode");'>
                                        اجاره لوازم سفر، کمپینگ و سرگرمی 73940004</option>
                                    <option
                                        onclick='CopyToValue(13,"لابراتور ظهور عکس و فیلم--73950001","73950001","guildcode");'>
                                        لابراتور ظهور عکس و فیلم 73950001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات بازرگانی وارادت و صادرات--73990003","73990003","guildcode");'>
                                        خدمات بازرگانی وارادت و صادرات 73990003</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره ماشین بدون/با راننده--75120001","75120001","guildcode");'>
                                        اجاره ماشین بدون/با راننده 75120001</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره دهندگان کامیون و تریلر و ماشین‌آلات سنگین--75130001","75130001","guildcode");'>
                                        اجاره دهندگان کامیون و تریلر و ماشین‌آلات سنگین 75130001</option>
                                    <option
                                        onclick='CopyToValue(13,"پارکینگ و گاراژ--75230001","75230001","guildcode");'>
                                        پارکینگ و گاراژ 75230001</option>
                                    <option
                                        onclick='CopyToValue(13,"صافکاری و گلگیرسازی خودرو--75310001","75310001","guildcode");'>
                                        صافکاری و گلگیرسازی خودرو 75310001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرکاران لاستیک خودرو (آپاراتی)--75340001","75340001","guildcode");'>
                                        تعمیرکاران لاستیک خودرو (آپاراتی) 75340001</option>
                                    <option onclick='CopyToValue(13,"نقاشی اتومبیل--75350001","75350001","guildcode");'>
                                        نقاشی اتومبیل 75350001</option>
                                    <option onclick='CopyToValue(13,"کارواش--75420001","75420001","guildcode");'>کارواش
                                        75420001</option>
                                    <option
                                        onclick='CopyToValue(13,"یدک‌کشی و بکسل خودرو--75490001","75490001","guildcode");'>
                                        یدک‌کشی و بکسل خودرو 75490001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرکاران لوازم برقی خانگی (به جز یخچال و فریزر)--76220002","76220002","guildcode");'>
                                        تعمیرکاران لوازم برقی خانگی (به جز یخچال و فریزر) 76220002</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرکاران یخچال، فریز--76230001","76230001","guildcode");'>
                                        تعمیرکاران یخچال، فریز 76230001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرکاران کولرهای گازی، هواساز و دستگاه‌های تهویه هوا--76230002","76230002","guildcode");'>
                                        تعمیرکاران کولرهای گازی، هواساز و دستگاه‌های تهویه هوا 76230002</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرگاه ساعت مچی و دیواری--76310001","76310001","guildcode");'>
                                        تعمیرگاه ساعت مچی و دیواری 76310001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرگاه اشیا قیمتی و نقره جات--76310002","76310002","guildcode");'>
                                        تعمیرگاه اشیا قیمتی و نقره جات 76310002</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرات و رویه‌کوبی مبلمان--76410001","76410001","guildcode");'>
                                        تعمیرات و رویه‌کوبی مبلمان 76410001</option>
                                    <option onclick='CopyToValue(13,"آهنگری--76920001","76920001","guildcode");'>آهنگری
                                        76920001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرات دوچرخه--76990001","76990001","guildcode");'>
                                        تعمیرات دوچرخه 76990001</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیر لوازم ورزشی--76990002","76990002","guildcode");'>
                                        تعمیر لوازم ورزشی 76990002</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیر ماشین چاپ--76990003","76990003","guildcode");'>
                                        تعمیر ماشین چاپ 76990003</option>
                                    <option
                                        onclick='CopyToValue(13,"تعمیرکاران لوازم شخصی برقی (ریش تراش، اتو مو ...)--76990004","76990004","guildcode");'>
                                        تعمیرکاران لوازم شخصی برقی (ریش تراش، اتو مو ...) 76990004</option>
                                    <option
                                        onclick='CopyToValue(13,"تولید و پخش فیلم و محصولات چندرسانه‌ای--78290001","78290001","guildcode");'>
                                        تولید و پخش فیلم و محصولات چندرسانه‌ای 78290001</option>
                                    <option onclick='CopyToValue(13,"سینما--78320001","78320001","guildcode");'>سینما
                                        78320001</option>
                                    <option
                                        onclick='CopyToValue(13,"تهیه‌کنندگان تئاتر و آژانس‌های فروش بلیط تئاتر--79220001","79220001","guildcode");'>
                                        تهیه‌کنندگان تئاتر و آژانس‌های فروش بلیط تئاتر 79220001</option>
                                    <option
                                        onclick='CopyToValue(13,"ارکستر و گروه موسیقی--79290001","79290001","guildcode");'>
                                        ارکستر و گروه موسیقی 79290001</option>
                                    <option
                                        onclick='CopyToValue(13,"برگزارکنندگان کنسرت--79290002","79290002","guildcode");'>
                                        برگزارکنندگان کنسرت 79290002</option>
                                    <option
                                        onclick='CopyToValue(13,"سالن بیلیارد و اسنوکر--79320001","79320001","guildcode");'>
                                        سالن بیلیارد و اسنوکر 79320001</option>
                                    <option onclick='CopyToValue(13,"سالن بولینگ--79330001","79330001","guildcode");'>
                                        سالن بولینگ 79330001</option>
                                    <option
                                        onclick='CopyToValue(13,"باشگاه های ورزشی حرفه‌ای و قهرمانی--79410002","79410002","guildcode");'>
                                        باشگاه های ورزشی حرفه‌ای و قهرمانی 79410002</option>
                                    <option
                                        onclick='CopyToValue(13,"جاذبه های گردشگری--79910002","79910002","guildcode");'>
                                        جاذبه های گردشگری 79910002</option>
                                    <option
                                        onclick='CopyToValue(13,"با‌غ و موزه گیاه‌شناسی--79910003","79910003","guildcode");'>
                                        با‌غ و موزه گیاه‌شناسی 79910003</option>
                                    <option
                                        onclick='CopyToValue(13,"نمایشگاه گردشگری--79910004","79910004","guildcode");'>
                                        نمایشگاه گردشگری 79910004</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش کنسول های بازی--79930001","79930001","guildcode");'>
                                        فروش کنسول های بازی 79930001</option>
                                    <option
                                        onclick='CopyToValue(13,"فروش بازی های کامپیوتری و ویدیوئی--79930002","79930002","guildcode");'>
                                        فروش بازی های کامپیوتری و ویدیوئی 79930002</option>
                                    <option onclick='CopyToValue(13,"گیم‌نت--79940001","79940001","guildcode");'>گیم‌نت
                                        79940001</option>
                                    <option onclick='CopyToValue(13,"سیرک--79960001","79960001","guildcode");'>سیرک
                                        79960001</option>
                                    <option onclick='CopyToValue(13,"شهربازی--79960002","79960002","guildcode");'>
                                        شهربازی 79960002</option>
                                    <option
                                        onclick='CopyToValue(13,"باشگاه بدنسازی و پرورش اندام--79970001","79970001","guildcode");'>
                                        باشگاه بدنسازی و پرورش اندام 79970001</option>
                                    <option onclick='CopyToValue(13,"باشگاه تنیس--79970002","79970002","guildcode");'>
                                        باشگاه تنیس 79970002</option>
                                    <option
                                        onclick='CopyToValue(13,"مجتمع و باشگاه‌ ورزشی--79970003","79970003","guildcode");'>
                                        مجتمع و باشگاه‌ ورزشی 79970003</option>
                                    <option
                                        onclick='CopyToValue(13,"باشگاه تیراندازی--79970004","79970004","guildcode");'>
                                        باشگاه تیراندازی 79970004</option>
                                    <option
                                        onclick='CopyToValue(13,"باشگاه سوارکاری--79970005","79970005","guildcode");'>
                                        باشگاه سوارکاری 79970005</option>
                                    <option
                                        onclick='CopyToValue(13,"باشگاه صخره نوردی--79970006","79970006","guildcode");'>
                                        باشگاه صخره نوردی 79970006</option>
                                    <option
                                        onclick='CopyToValue(13,"باشگاه چتر بازی و پاراگلایدر--79970007","79970007","guildcode");'>
                                        باشگاه چتر بازی و پاراگلایدر 79970007</option>
                                    <option
                                        onclick='CopyToValue(13,"زمین و باشگاه گلف--79970008","79970008","guildcode");'>
                                        زمین و باشگاه گلف 79970008</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره‌دهندگان هواپیماهای تفریحی، چتربازی، پاراگلایدر، وینگسوت و لوازم پروازهای تفریحی--79990002","79990002","guildcode");'>
                                        اجاره‌دهندگان هواپیماهای تفریحی، چتربازی، پاراگلایدر، وینگسوت و لوازم پروازهای
                                        تفریحی 79990002</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره دهندگان دوچرخه--79990003","79990003","guildcode");'>
                                        اجاره دهندگان دوچرخه 79990003</option>
                                    <option
                                        onclick='CopyToValue(13,"اجاره دهندگان موتورسیکلت‌های تفریحی--79990004","79990004","guildcode");'>
                                        اجاره دهندگان موتورسیکلت‌های تفریحی 79990004</option>
                                    <option onclick='CopyToValue(13,"پیست اسکی--79990005","79990005","guildcode");'>پیست
                                        اسکی 79990005</option>
                                    <option onclick='CopyToValue(13,"پیست اسکیت--79990006","79990006","guildcode");'>
                                        پیست اسکیت 79990006</option>
                                    <option
                                        onclick='CopyToValue(13,"سالن تیراندازی (تفریحی)--79990007","79990007","guildcode");'>
                                        سالن تیراندازی (تفریحی) 79990007</option>
                                    <option
                                        onclick='CopyToValue(13,"موسسات اجاره خودروهای تفریحاتی و خانه‌های متحرک--79990008","79990008","guildcode");'>
                                        موسسات اجاره خودروهای تفریحاتی و خانه‌های متحرک 79990008</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات دندانپزشکی--80210001","80210001","guildcode");'>
                                        خدمات دندانپزشکی 80210001</option>
                                    <option onclick='CopyToValue(13,"ارتودنسی--80210002","80210002","guildcode");'>
                                        ارتودنسی 80210002</option>
                                    <option
                                        onclick='CopyToValue(13,"کسب و کارهای مرتبط با این گروه صنفی--80320000","80320000","guildcode");'>
                                        کسب و کارهای مرتبط با این گروه صنفی 80320000</option>
                                    <option
                                        onclick='CopyToValue(13,"چشم‌پزشک و بینایی‌سنجی--80420001","80420001","guildcode");'>
                                        چشم‌پزشک و بینایی‌سنجی 80420001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات عینک و لنز--80430001","80430001","guildcode");'>
                                        خدمات عینک و لنز 80430001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات پرستاری و مراقبت‌های فردی--80500002","80500002","guildcode");'>
                                        خدمات پرستاری و مراقبت‌های فردی 80500002</option>
                                    <option onclick='CopyToValue(13,"پرستاران کودک--80500003","80500003","guildcode");'>
                                        پرستاران کودک 80500003</option>
                                    <option onclick='CopyToValue(13,"تزریقات--80620004","80620004","guildcode");'>
                                        تزریقات 80620004</option>
                                    <option
                                        onclick='CopyToValue(13,"آزمایشگاه‌های پاتولوژی--80710001","80710001","guildcode");'>
                                        آزمایشگاه‌های پاتولوژی 80710001</option>
                                    <option
                                        onclick='CopyToValue(13,"لابراتوارهای دندانپزشکی--80710002","80710002","guildcode");'>
                                        لابراتوارهای دندانپزشکی 80710002</option>
                                    <option onclick='CopyToValue(13,"مامایی--80990008","80990008","guildcode");'>مامایی
                                        80990008</option>
                                    <option onclick='CopyToValue(13,"کایروپراکتور--80990009","80990009","guildcode");'>
                                        کایروپراکتور 80990009</option>
                                    <option onclick='CopyToValue(13,"دفاتر وکالت--81110002","81110002","guildcode");'>
                                        دفاتر وکالت 81110002</option>
                                    <option
                                        onclick='CopyToValue(13,"دانشگاه پردیس خودگردان--82200008","82200008","guildcode");'>
                                        دانشگاه پردیس خودگردان 82200008</option>
                                    <option
                                        onclick='CopyToValue(13,"مراکز آموزشی مجازی--82410001","82410001","guildcode");'>
                                        مراکز آموزشی مجازی 82410001</option>
                                    <option onclick='CopyToValue(13,"موسسات خیریه--83980002","83980002","guildcode");'>
                                        موسسات خیریه 83980002</option>
                                    <option
                                        onclick='CopyToValue(13,"سازمان نظام مهندسی--85000001","85000001","guildcode");'>
                                        سازمان نظام مهندسی 85000001</option>
                                    <option
                                        onclick='CopyToValue(13,"انجمن‌ها و اتحادیه‌های مدنی، اجتماعی و برادری--86410001","86410001","guildcode");'>
                                        انجمن‌ها و اتحادیه‌های مدنی، اجتماعی و برادری 86410001</option>
                                    <option
                                        onclick='CopyToValue(13,"احزاب و سازمان های سیاسی--86510001","86510001","guildcode");'>
                                        احزاب و سازمان های سیاسی 86510001</option>
                                    <option
                                        onclick='CopyToValue(13,"سایر سازمان‌ها و اتحادیه‌ها (نامذکور در کدهای دیگر)--86990001","86990001","guildcode");'>
                                        سایر سازمان‌ها و اتحادیه‌ها (نامذکور در کدهای دیگر) 86990001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات آزمون و لابراتور برای سایر کسب وکارها--87340001","87340001","guildcode");'>
                                        خدمات آزمون و لابراتور برای سایر کسب وکارها 87340001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات حسابداری، حسابرسی و دفترداری--89310001","89310001","guildcode");'>
                                        خدمات حسابداری، حسابرسی و دفترداری 89310001</option>
                                    <option
                                        onclick='CopyToValue(13,"دادگاه و خدمات قضایی و دادرسی--92110002","92110002","guildcode");'>
                                        دادگاه و خدمات قضایی و دادرسی 92110002</option>
                                    <option onclick='CopyToValue(13,"جرایم--92220001","92220001","guildcode");'>جرایم
                                        92220001</option>
                                    <option onclick='CopyToValue(13,"دهیاری--93990016","93990016","guildcode");'>دهیاری
                                        93990016</option>
                                    <option
                                        onclick='CopyToValue(13,"دفاتر و ادارات پست دولتی--94020001","94020001","guildcode");'>
                                        دفاتر و ادارات پست دولتی 94020001</option>
                                    <option
                                        onclick='CopyToValue(13,"جمع آوری وجوه دولتی--94050001","94050001","guildcode");'>
                                        جمع آوری وجوه دولتی 94050001</option>
                                    <option
                                        onclick='CopyToValue(13,"رزرو جهت نمایشگاه کتاب--97000001","97000001","guildcode");'>
                                        رزرو جهت نمایشگاه کتاب 97000001</option>
                                    <option onclick='CopyToValue(13,"قوه قضاییه--98000001","98000001","guildcode");'>قوه
                                        قضاییه 98000001</option>
                                    <option
                                        onclick='CopyToValue(13,"ثبت اسناد و املاک کشور--98010001","98010001","guildcode");'>
                                        ثبت اسناد و املاک کشور 98010001</option>
                                    <option
                                        onclick='CopyToValue(13,"خدمات پرداخت الکترونیکی (پرداخت یاری)--98020001","98020001","guildcode");'>
                                        خدمات پرداخت الکترونیکی (پرداخت یاری) 98020001</option>
                                    <option
                                        onclick='CopyToValue(13,"رزرو جهت کسب و کارهای ویژه--98030001","98030001","guildcode");'>
                                        رزرو جهت کسب و کارهای ویژه 98030001</option>
                                </select>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>شماره حساب</label>
                                <input name='ban' autocomplete='off' maxlength='19'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>شماره شبا</label>
                                <input class='iban' name='iban' style='direction:ltr;' maxlength='26' value=''
                                    autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>کد بانک</label>
                                <input name='bankcode' value='' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>تعداد پایانه</label>
                                <input name='quantity' value='1' placeholder='' maxlength='99' required
                                    autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>شماره جواز کسب</label>
                                <input id='business_license_id' name='business_license_id' value=''
                                    autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>تاریخ شروع جواز کسب</label>
                                <input class='date' name='business_license_register_date'
                                    id='business_license_register_date' value='' autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>تاریخ پایان جواز کسب</label>
                                <input class='date' name='business_license_expire_date'
                                    id='business_license_expire_date' value='' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition' style='visibility:hidden;'></div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition' style='width:98%;'>
                                <label>توضیحات بیشتر</label>
                                <input style='width:100%;'
                                    value='در صورتی که نیاز دارید تا چندین پایانه تعریف کنید لطفا با بخش پشتیبانی تماس حاصل فرمایید'
                                    autocomplete='off'></input>
                            </div>
                        </div>
                    </article>
                    <article id='PagingButton'>
                        <input style='display:none;' id='guildcode' name='guildcode' value=''
                            autocomplete='off'></input>
                        <button class='SubmitBtn' type='button' onclick="history.back();">قبلی</button>
                        <button class='SubmitBtn' name='sidcode' value="3581008734" type='submit'>تأیید</button>
                    </article>
                </form>
            </section>
        </section>
    </main>
</body>
<script>


    // masked format
    $(window).load(function () {
        var iban = [{ "mask": "IR########################" }, { "mask": "(###) ###-##############" }];
        $('.iban').inputmask({
            mask: iban,
            greedy: false,
            definitions: { '#': { validator: "[0-9]", cardinality: 1 } }
        });

        var birthday = [{ "mask": "####/##/##" }, { "mask": "(###) ###-##############" }];
        $('.date').inputmask({
            mask: birthday,
            greedy: false,
            definitions: { '#': { validator: "[0-9]", cardinality: 1 } }
        });

    });

    function CopyToValue(id, name, value, field) {
        console.log(String(value));
        document.getElementById(field).value = value;
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
            var txtValue = option[i].value;

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