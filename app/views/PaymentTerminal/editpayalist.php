<?php include 'sidemenu.php' ?>

<style>
    input {
		padding: 0 !important;
	}
</style>
       <section id="MainSection">
            <section id='InscriptionSection'>
                <form action='modify.php' method='POST'
                    style='display:flex;flex-direction:column;max-width:1024px;margin:50px auto;'
                    enctype='multipart/form-data'>
                    <?php
            foreach ($cas_data_arr as $key => $value){
                if ($value['customer_id'] == $key_id){
                  $_SESSION['id']=$value['customer_id'];
            ?>
                    <article class='label' style=''>
                        <p class='LabelTitle'>اطلاعات پایانه (4066)</p>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>نام پذیرنده</label>
                                <input value='<?= $value['customer_manager_name']; ?>&nbsp;<?= $value['customer_manager_family']; ?>' autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>نام فروشگاه</label>
                                <input name='companyname' value='جوشکاری نوآوران' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>شماره حساب</label>
                                <input name='ban' value='371145790' maxlength='19' autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>کد شعبه</label>
                                <input type='number' name='bankcode' value='1005' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>شماره شبا</label>
                                <input name='iban' value='IR440130100000000371145790' maxlength='26'
                                    autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>پایانه فروشگاه</label>
                                <input name='terminal' value='' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>پذیرنده</label>
                                <input name='acceptancecode' value='' autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>کد پیگیری</label>
                                <input name='trackingcode' value='' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>سریال</label>
                                <input name='serialnumber' value='' autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>علت</label>
                                <input name='reason' value=' ' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>پروژه</label>
                                <select id='project' name='project'>
                                    <option value='فن آوا'>فن آوا</option>
                                    <option value='پاسارگاد' selected>پاسارگاد</option>
                                    <option value='پرداخت نوین'>پرداخت نوین</option>
                                    <option value='سپهر'>سپهر</option>
                                </select>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>مدل دستگاه</label>
                                <select id='posmodel' name='posmodel'>
                                    <option value='NEWLAND/ME31/GPRS' selected>NEWLAND/ME31/GPRS</option>
                                    <option value='TRENDIT/T3/GPRS'>TRENDIT/T3/GPRS</option>
                                </select>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>نوع دستگاه</label>
                                <select id='poskind' name='poskind'>
                                    <option value='1' selected>GPRS</option>
                                    <option value='3'>typical</option>
                                </select>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>وضعیت</label>
                                <select id='status' name='status'>
                                    <option value='1' class='select_option'>همه وضعیت</option>
                                    <option value='2' class='select_option' selected>ارسال به شرکت</option>
                                    <option value='3' class='select_option'>ارسال به مرکز</option>
                                    <option value='4' class='select_option'>ارسال به شاپرک</option>
                                    <option value='5' class='select_option'>تأیید شاپرک</option>
                                    <option value='6' class='select_option'>تأیید نصب</option>
                                    <option value='7' class='select_option'>فعال شده</option>
                                    <option value='8' class='select_option'>ارسال به ابطال</option>
                                    <option value='9' class='select_option'>ابطال شده</option>
                                    <option value='10' class='select_option'>مردود شرکت</option>
                                </select>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>شماره شبا 2</label>
                                <input name='iban2' value='' autocomplete='off' maxlength='26'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>شماره حساب 2</label>
                                <input name='ban2' value='' autocomplete='off' maxlength='19'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>شماره شبا 3</label>
                                <input name='iban3' value='' autocomplete='off' maxlength='26'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>شماره حساب 3</label>
                                <input name='ban3' value='' autocomplete='off' maxlength='19'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>کد وب سرویس</label>
                                <input name='webid' value='' autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>شناسه تجهیزات بین المللی</label>
                                <input name='imei' value='' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>شماره سیم کارت</label>
                                <input name='SimCardNumber' value='' autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>شماره جواز کسب</label>
                                <input name='business_license_id' value='' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>تاریخ صدور جواز کسب</label>
                                <input name='business_license_register_date' value='' autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>تاریخ انقضا جواز کسب</label>
                                <input name='business_license_expire_date' value='' autocomplete='off'></input>
                            </div>
                            <div class='table_row_2_partition'>
                                <label>کد یا کد های مشارکت</label>
                                <input name='owners_id' value='' autocomplete='off'></input>
                            </div>
                        </div>
                        <div class='TableRow2'>
                            <div class='table_row_2_partition'>
                                <label>صنف</label>
                                <input id="SearchboxFilter11" onkeyup="LiveFilter('11');" autocomplete='off'
                                    autocomplete='off' value='ساخت در و پنجره فلزی' required></input>
                                <select id="SelectListFilter11" name="SelectFilter11" size="4"
                                    style='display:none;width:100%;height:150px;position:absolute;top:50px;'
                                    autocomplete='off'>
                                    <option onclick='CopyToValue(11,"خشکبار و آجیل فروش--54410002","54410002");'>خشکبار
                                        و آجیل فروش 54410002</option>
                                    <option onclick='CopyToValue(11,"نانوایی سنتی--54620001","54620001");'>نانوایی سنتی
                                        54620001</option>
                                    <option onclick='CopyToValue(11,"میدان میوه و تره بار--54990002","54990002");'>میدان
                                        میوه و تره بار 54990002</option>
                                    <option onclick='CopyToValue(11,"سوپرمارکت و خواربار فروشی--54110001","54110001");'>
                                        سوپرمارکت و خواربار فروشی 54110001</option>
                                    <option
                                        onclick='CopyToValue(11,"بار فروشان عمده فروشی میوه و تره بار--53000001","53000001");'>
                                        بار فروشان عمده فروشی میوه و تره بار 53000001</option>
                                    <option
                                        onclick='CopyToValue(11,"بنکدار مواد غذایی عمده فروش برنج--53000002","53000002");'>
                                        بنکدار مواد غذایی عمده فروش برنج 53000002</option>
                                    <option
                                        onclick='CopyToValue(11,"بنکدار مواد غذایی عمده فروش چای--53000003","53000003");'>
                                        بنکدار مواد غذایی عمده فروش چای 53000003</option>
                                    <option
                                        onclick='CopyToValue(11,"بنکدار مواد غذایی عمده فروش روغن های خوراکی--53000004","53000004");'>
                                        بنکدار مواد غذایی عمده فروش روغن های خوراکی 53000004</option>
                                    <option
                                        onclick='CopyToValue(11,"بنکدار مواد غذایی عمده فروش کلی--53000005","53000005");'>
                                        بنکدار مواد غذایی عمده فروش کلی 53000005</option>
                                    <option onclick='CopyToValue(11,"آسیاب و عمده فروشی آرد--53000006","53000006");'>
                                        آسیاب و عمده فروشی آرد 53000006</option>
                                    <option onclick='CopyToValue(11,"گالری هنری--59710001","59710001");'>گالری هنری
                                        59710001</option>
                                    <option onclick='CopyToValue(11,"طراحی و گرافیک و نقاشی--59710002","59710002");'>
                                        طراحی و گرافیک و نقاشی 59710002</option>
                                    <option onclick='CopyToValue(11,"خطاطی و تابلونویسی--59710003","59710003");'>خطاطی و
                                        تابلونویسی 59710003</option>
                                    <option onclick='CopyToValue(11,"سفال، سنگی، کاشی و سرامیک--59700003","59700003");'>
                                        سفال، سنگی، کاشی و سرامیک 59700003</option>
                                    <option onclick='CopyToValue(11,"صنایع دستی پارچه ای--59700002","59700002");'>صنایع
                                        دستی پارچه ای 59700002</option>
                                    <option onclick='CopyToValue(11,"خدمات مجالس و تشریفات--72990001","72990001");'>
                                        خدمات مجالس و تشریفات 72990001</option>
                                    <option
                                        onclick='CopyToValue(11,"لوازم خیاطی، لوازم گل دوزی و سوزن دوزی--59490001","59490001");'>
                                        لوازم خیاطی، لوازم گل دوزی و سوزن دوزی 59490001</option>
                                    <option onclick='CopyToValue(11,"فروشگاه صنایع دستی--59700001","59700001");'>فروشگاه
                                        صنایع دستی 59700001</option>
                                    <option onclick='CopyToValue(11,"دفاتر ثبت ازدواج و طلاق--81110001","81110001");'>
                                        دفاتر ثبت ازدواج و طلاق 81110001</option>
                                    <option onclick='CopyToValue(11,"دفاتر پیشخوان دولت--93990001","93990001");'>دفاتر
                                        پیشخوان دولت 93990001</option>
                                    <option onclick='CopyToValue(11,"سفارتخانه--93990002","93990002");'>سفارتخانه
                                        93990002</option>
                                    <option onclick='CopyToValue(11,"دفاتر پلیس + 10--93990003","93990003");'>دفاتر پلیس
                                        + 10 93990003</option>
                                    <option onclick='CopyToValue(11,"دفاتر ICT روستایی--93990004","93990004");'>دفاتر
                                        ICT روستایی 93990004</option>
                                    <option onclick='CopyToValue(11,"شهرداری--93990005","93990005");'>شهرداری 93990005
                                    </option>
                                    <option onclick='CopyToValue(11,"دفاتر امور مشترکین--93990006","93990006");'>دفاتر
                                        امور مشترکین 93990006</option>
                                    <option onclick='CopyToValue(11,"دفاتر کفالت و اتباع خارجی--93990007","93990007");'>
                                        دفاتر کفالت و اتباع خارجی 93990007</option>
                                    <option
                                        onclick='CopyToValue(11,"شرکت تولید و پخش مواد غذایی--54110002","54110002");'>
                                        شرکت تولید و پخش مواد غذایی 54110002</option>
                                    <option
                                        onclick='CopyToValue(11,"ارائه دهندگان خدمات مشارکت در ساخت--15200001","15200001");'>
                                        ارائه دهندگان خدمات مشارکت در ساخت 15200001</option>
                                    <option onclick='CopyToValue(11,"اداره برق و قبوض--49000001","49000001");'>اداره برق
                                        و قبوض 49000001</option>
                                    <option onclick='CopyToValue(11,"اداره گاز و قبوض--49000002","49000002");'>اداره گاز
                                        و قبوض 49000002</option>
                                    <option onclick='CopyToValue(11,"اداره آب و فاضلاب و قبوض--49000003","49000003");'>
                                        اداره آب و فاضلاب و قبوض 49000003</option>
                                    <option onclick='CopyToValue(11,"فروشگاه‌ زنجیره‌ای و بزرگ--53110001","53110001");'>
                                        فروشگاه‌ زنجیره‌ای و بزرگ 53110001</option>
                                    <option
                                        onclick='CopyToValue(11,"سایر کسب و کارهای مرتبط با این گروه صنفی--79970000","79970000");'>
                                        سایر کسب و کارهای مرتبط با این گروه صنفی 79970000</option>
                                    <option
                                        onclick='CopyToValue(11,"آکواریوم عمومی، باغ‌وحش و استخرهای نمایش دلفین--79980001","79980001");'>
                                        آکواریوم عمومی، باغ‌وحش و استخرهای نمایش دلفین 79980001</option>
                                    <option onclick='CopyToValue(11,"پارک آبی--79990001","79990001");'>پارک آبی 79990001
                                    </option>
                                    <option onclick='CopyToValue(11,"نجاری و درودگری--17500001","17500001");'>نجاری و
                                        درودگری 17500001</option>
                                    <option
                                        onclick='CopyToValue(11,"خاتم کاری، منبت کاری و مصنوعات چوبی--17500002","17500002");'>
                                        خاتم کاری، منبت کاری و مصنوعات چوبی 17500002</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشان مواد شیمیایی و آلی--51690001","51690001");'>
                                        عمده فروشان مواد شیمیایی و آلی 51690001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشان مواد، مصنوعات پلاستیکی و نایلون--51690002","51690002");'>
                                        عمده فروشان مواد، مصنوعات پلاستیکی و نایلون 51690002</option>
                                    <option onclick='CopyToValue(11,"عمده فروشان گازهای صنعتی--51690003","51690003");'>
                                        عمده فروشان گازهای صنعتی 51690003</option>
                                    <option onclick='CopyToValue(11,"پیچ و مهره فروشان--52510002","52510002");'>پیچ و
                                        مهره فروشان 52510002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه قفل و لولا و یراق‌آلات--52510003","52510003");'>
                                        فروشگاه قفل و لولا و یراق‌آلات 52510003</option>
                                    <option onclick='CopyToValue(11,"ابزارفروشان--52510001","52510001");'>ابزارفروشان
                                        52510001</option>
                                    <option onclick='CopyToValue(11,"قفل و کلیدسازی--52510004","52510004");'>قفل و
                                        کلیدسازی 52510004</option>
                                    <option onclick='CopyToValue(11,"خدمات نظام مهندسی--89110002","89110002");'>خدمات
                                        نظام مهندسی 89110002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه لوازم و کالای ورزشی--59410001","59410001");'>
                                        فروشگاه لوازم و کالای ورزشی 59410001</option>
                                    <option onclick='CopyToValue(11,"لوازم صید و شنا--59410002","59410002");'>لوازم صید
                                        و شنا 59410002</option>
                                    <option
                                        onclick='CopyToValue(11,"اجاره لوازم برگزاری مجالس و مبلمان--73940001","73940001");'>
                                        اجاره لوازم برگزاری مجالس و مبلمان 73940001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان آهن‌آلات ساختمانی، میلگرد، نبشی و ورق--50510001","50510001");'>
                                        فروشندگان آهن‌آلات ساختمانی، میلگرد، نبشی و ورق 50510001</option>
                                    <option onclick='CopyToValue(11,"ضایعات فلزی و غیرفلزی--50510002","50510002");'>
                                        ضایعات فلزی و غیرفلزی 50510002</option>
                                    <option
                                        onclick='CopyToValue(11,"ذوب فلزات،ریخته گری و قالب سازی--50510003","50510003");'>
                                        ذوب فلزات،ریخته گری و قالب سازی 50510003</option>
                                    <option
                                        onclick='CopyToValue(11,"آلومینیوم و مصنوعات نوردی آن--50510004","50510004");'>
                                        آلومینیوم و مصنوعات نوردی آن 50510004</option>
                                    <option onclick='CopyToValue(11,"مس و مصنوعات مسی--50510005","50510005");'>مس و
                                        مصنوعات مسی 50510005</option>
                                    <option onclick='CopyToValue(11,"پرسکاری فلزات--50510006","50510006");'>پرسکاری
                                        فلزات 50510006</option>
                                    <option onclick='CopyToValue(11,"رنگ و آبکاری فلزات--50510007","50510007");'>رنگ و
                                        آبکاری فلزات 50510007</option>
                                    <option onclick='CopyToValue(11,"فروش فرفورژه--50510008","50510008");'>فروش فرفورژه
                                        50510008</option>
                                    <option onclick='CopyToValue(11,"تراشکاری و فلزکاری--50510009","50510009");'>
                                        تراشکاری و فلزکاری 50510009</option>
                                    <option
                                        onclick='CopyToValue(11,"لعاب کاری و رنگ کاری فلزات--50510010","50510010");'>
                                        لعاب کاری و رنگ کاری فلزات 50510010</option>
                                    <option onclick='CopyToValue(11,"طراحی و ساخت طلا و جواهر--59440003","59440003");'>
                                        طراحی و ساخت طلا و جواهر 59440003</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه طلا و جواهرآلات و سنگ های قیمتی--59440004","59440004");'>
                                        فروشگاه طلا و جواهرآلات و سنگ های قیمتی 59440004</option>
                                    <option onclick='CopyToValue(11,"خرده فروشی سکه طلا--59440005","59440005");'>خرده
                                        فروشی سکه طلا 59440005</option>
                                    <option onclick='CopyToValue(11,"فروشگاه ساعت--59440001","59440001");'>فروشگاه ساعت
                                        59440001</option>
                                    <option onclick='CopyToValue(11,"فروشگاه نقره--59440002","59440002");'>فروشگاه نقره
                                        59440002</option>
                                    <option onclick='CopyToValue(11,"خدمات مهاجرت و ویزا--89990001","89990001");'>خدمات
                                        مهاجرت و ویزا 89990001</option>
                                    <option onclick='CopyToValue(11,"حمام عمومی و گرمابه داران--89990002","89990002");'>
                                        حمام عمومی و گرمابه داران 89990002</option>
                                    <option onclick='CopyToValue(11,"حفر چاه عمیق و نیمه عمیق--89990003","89990003");'>
                                        حفر چاه عمیق و نیمه عمیق 89990003</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات روانشناسی و روانکاوی و گفتار درمانی--72770002","72770002");'>
                                        خدمات روانشناسی و روانکاوی و گفتار درمانی 72770002</option>
                                    <option onclick='CopyToValue(11,"پلاسکو--57190004","57190004");'>پلاسکو 57190004
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"مواد اولیه و لوازم کشاورزی و باغبانی--52610001","52610001");'>
                                        مواد اولیه و لوازم کشاورزی و باغبانی 52610001</option>
                                    <option
                                        onclick='CopyToValue(11,"لوازم آبیاری و آبرسانی کشاورزی و صنعتی--52610002","52610002");'>
                                        لوازم آبیاری و آبرسانی کشاورزی و صنعتی 52610002</option>
                                    <option onclick='CopyToValue(11,"فروشندگان نهال--52610003","52610003");'>فروشندگان
                                        نهال 52610003</option>
                                    <option onclick='CopyToValue(11,"خدمات چمن‌کاری و فضای سبز--07800001","07800001");'>
                                        خدمات چمن‌کاری و فضای سبز 07800001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان پرنده، ماهی و حیوانات خانگی--59950001","59950001");'>
                                        فروشندگان پرنده، ماهی و حیوانات خانگی 59950001</option>
                                    <option onclick='CopyToValue(11,"دامداری و دامپروری--07630001","07630001");'>دامداری
                                        و دامپروری 07630001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه غذا و لوازم حیوانات خانگی (پت شاپ)--59950002","59950002");'>
                                        فروشگاه غذا و لوازم حیوانات خانگی (پت شاپ) 59950002</option>
                                    <option onclick='CopyToValue(11,"مهد کودک--83510001","83510001");'>مهد کودک 83510001
                                    </option>
                                    <option onclick='CopyToValue(11,"مدارس ابتدایی--82110001","82110001");'>مدارس
                                        ابتدایی 82110001</option>
                                    <option onclick='CopyToValue(11,"متوسطه اول و دوم--82110002","82110002");'>متوسطه
                                        اول و دوم 82110002</option>
                                    <option onclick='CopyToValue(11,"هنرستان--82110003","82110003");'>هنرستان 82110003
                                    </option>
                                    <option onclick='CopyToValue(11,"دانشگاه دولتی--82200001","82200001");'>دانشگاه
                                        دولتی 82200001</option>
                                    <option onclick='CopyToValue(11,"دانشگاه آزاد--82200002","82200002");'>دانشگاه آزاد
                                        82200002</option>
                                    <option onclick='CopyToValue(11,"دانشگاه غیرانتفاعی--82200003","82200003");'>دانشگاه
                                        غیرانتفاعی 82200003</option>
                                    <option onclick='CopyToValue(11,"دانشگاه جامع علمی کاربردی--82200004","82200004");'>
                                        دانشگاه جامع علمی کاربردی 82200004</option>
                                    <option onclick='CopyToValue(11,"دانشگاه پیام‌نور--82200005","82200005");'>دانشگاه
                                        پیام‌نور 82200005</option>
                                    <option onclick='CopyToValue(11,"دانشگاه علوم پزشکی--82200006","82200006");'>دانشگاه
                                        علوم پزشکی 82200006</option>
                                    <option onclick='CopyToValue(11,"مرکز تربیت معلم--82200007","82200007");'>مرکز تربیت
                                        معلم 82200007</option>
                                    <option onclick='CopyToValue(11,"آموزشگاه‌ زبان‌های خارجی--82990001","82990001");'>
                                        آموزشگاه‌ زبان‌های خارجی 82990001</option>
                                    <option onclick='CopyToValue(11,"آموزشگاه‌ هنر و موسیقی--82990002","82990002");'>
                                        آموزشگاه‌ هنر و موسیقی 82990002</option>
                                    <option onclick='CopyToValue(11,"آموزشگاه رانندگی--82990003","82990003");'>آموزشگاه
                                        رانندگی 82990003</option>
                                    <option onclick='CopyToValue(11,"آموزشگاه درسی و کنکور--82990004","82990004");'>
                                        آموزشگاه درسی و کنکور 82990004</option>
                                    <option
                                        onclick='CopyToValue(11,"تجهیزات پخت و پز رستوران‌ها--50460001","50460001");'>
                                        تجهیزات پخت و پز رستوران‌ها 50460001</option>
                                    <option
                                        onclick='CopyToValue(11,"تشکدوزان و صندلی سازان اتومبیل--55330003","55330003");'>
                                        تشکدوزان و صندلی سازان اتومبیل 55330003</option>
                                    <option
                                        onclick='CopyToValue(11,"تزئینات اتومبیل و نصب دزدگیر--55330002","55330002");'>
                                        تزئینات اتومبیل و نصب دزدگیر 55330002</option>
                                    <option onclick='CopyToValue(11,"اگزوزسازی--75380001","75380001");'>اگزوزسازی
                                        75380001</option>
                                    <option
                                        onclick='CopyToValue(11,"آهنگری و آهن کشی انواع خودرو--75380002","75380002");'>
                                        آهنگری و آهن کشی انواع خودرو 75380002</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات برق اتومبیل، باطری ساز و باطری فروش--75380003","75380003");'>
                                        خدمات برق اتومبیل، باطری ساز و باطری فروش 75380003</option>
                                    <option onclick='CopyToValue(11,"شرکت خودروسازی--55110001","55110001");'>شرکت
                                        خودروسازی 55110001</option>
                                    <option
                                        onclick='CopyToValue(11,"پایانه‌های اتوبوسی بین شهری--41310001","41310001");'>
                                        پایانه‌های اتوبوسی بین شهری 41310001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش و خدمات ماشین آلات حفاری--55990001","55990001");'>
                                        فروش و خدمات ماشین آلات حفاری 55990001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش و خدمات ماشین آلات راه سازی و ساختمانی--55990002","55990002");'>
                                        فروش و خدمات ماشین آلات راه سازی و ساختمانی 55990002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش و خدمات ماشین آلات و ادوات کشاورزی--55990003","55990003");'>
                                        فروش و خدمات ماشین آلات و ادوات کشاورزی 55990003</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش و خدمات ماشین آلات صنعتی--55990004","55990004");'>
                                        فروش و خدمات ماشین آلات صنعتی 55990004</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش و خدمات ماشین آلات چاپ و صحافی--55990005","55990005");'>
                                        فروش و خدمات ماشین آلات چاپ و صحافی 55990005</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش و خدمات ماشین آلات مرغداری--55990006","55990006");'>
                                        فروش و خدمات ماشین آلات مرغداری 55990006</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش و خدمات ماشین آلات تراشکاری--55990007","55990007");'>
                                        فروش و خدمات ماشین آلات تراشکاری 55990007</option>
                                    <option onclick='CopyToValue(11,"باسکول‌داری--55990008","55990008");'>باسکول‌داری
                                        55990008</option>
                                    <option onclick='CopyToValue(11,"فروش جرثقیل--55990009","55990009");'>فروش جرثقیل
                                        55990009</option>
                                    <option onclick='CopyToValue(11,"فروش چرخ خیاطی--57220002","57220002");'>فروش چرخ
                                        خیاطی 57220002</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیر موبایل و لوازم جانبی--76290001","76290001");'>
                                        تعمیر موبایل و لوازم جانبی 76290001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه سیگار، قلیان و فندک--59930001","59930001");'>
                                        فروشگاه سیگار، قلیان و فندک 59930001</option>
                                    <option
                                        onclick='CopyToValue(11,"فرش دستبافت، گلیم و تابلو فرش--57130001","57130001");'>
                                        فرش دستبافت، گلیم و تابلو فرش 57130001</option>
                                    <option
                                        onclick='CopyToValue(11,"کریستال،چینی، بلورفروشی، لوازم کادویی و کالای لوکس--59500001","59500001");'>
                                        کریستال،چینی، بلورفروشی، لوازم کادویی و کالای لوکس 59500001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان لوازم خانگی برقی--57220001","57220001");'>
                                        فروشندگان لوازم خانگی برقی 57220001</option>
                                    <option onclick='CopyToValue(11,"تولید و فروش مانکن--50460002","50460002");'>تولید و
                                        فروش مانکن 50460002</option>
                                    <option
                                        onclick='CopyToValue(11,"تشک، پتو و کالای خواب (روتختی، ملحفه...)--59490002","59490002");'>
                                        تشک، پتو و کالای خواب (روتختی، ملحفه...) 59490002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه لوازم پرده، لوردراپه--57140001","57140001");'>
                                        فروشگاه لوازم پرده، لوردراپه 57140001</option>
                                    <option
                                        onclick='CopyToValue(11,"دوخت، نصب و تعمیر انواع پرده--57140002","57140002");'>
                                        دوخت، نصب و تعمیر انواع پرده 57140002</option>
                                    <option onclick='CopyToValue(11,"دوخت لباس عروس و شب--56970002","56970002");'>دوخت
                                        لباس عروس و شب 56970002</option>
                                    <option
                                        onclick='CopyToValue(11,"تولیدی مانتو شلوار و لباس زنانه--56970003","56970003");'>
                                        تولیدی مانتو شلوار و لباس زنانه 56970003</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه پوشاک نوزاد و کودک--56410001","56410001");'>
                                        فروشگاه پوشاک نوزاد و کودک 56410001</option>
                                    <option onclick='CopyToValue(11,"خیاطی و تعمیرات لباس--56970001","56970001");'>خیاطی
                                        و تعمیرات لباس 56970001</option>
                                    <option onclick='CopyToValue(11,"لوازم نوزاد و سیسمونی--56410002","56410002");'>
                                        لوازم نوزاد و سیسمونی 56410002</option>
                                    <option
                                        onclick='CopyToValue(11,"تولیدی کت و شلوار و لباس مردانه--56970004","56970004");'>
                                        تولیدی کت و شلوار و لباس مردانه 56970004</option>
                                    <option onclick='CopyToValue(11,"گونی و کیسه دوزی--56970005","56970005");'>گونی و
                                        کیسه دوزی 56970005</option>
                                    <option onclick='CopyToValue(11,"پارچه فروشان--59490003","59490003");'>پارچه فروشان
                                        59490003</option>
                                    <option onclick='CopyToValue(11,"جوراب فروشی--56990002","56990002");'>جوراب فروشی
                                        56990002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان نخ، کاموا و لوازم بافندگی--59490004","59490004");'>
                                        فروشندگان نخ، کاموا و لوازم بافندگی 59490004</option>
                                    <option onclick='CopyToValue(11,"منسوجات و کالای کشباف--56990003","56990003");'>
                                        منسوجات و کالای کشباف 56990003</option>
                                    <option
                                        onclick='CopyToValue(11,"تجهیزات و لوازم پزشکی، بیمارستانی و آزمایشگاهی--50470001","50470001");'>
                                        تجهیزات و لوازم پزشکی، بیمارستانی و آزمایشگاهی 50470001</option>
                                    <option
                                        onclick='CopyToValue(11,"تجهیزات و لوازم دندانپزشکی--50470002","50470002");'>
                                        تجهیزات و لوازم دندانپزشکی 50470002</option>
                                    <option onclick='CopyToValue(11,"پزشکان عمومی--80110001","80110001");'>پزشکان عمومی
                                        80110001</option>
                                    <option onclick='CopyToValue(11,"بیمارستان‌ دولتی--80620001","80620001");'>
                                        بیمارستان‌ دولتی 80620001</option>
                                    <option onclick='CopyToValue(11,"بیمارستان‌ خصوصی--80620002","80620002");'>
                                        بیمارستان‌ خصوصی 80620002</option>
                                    <option onclick='CopyToValue(11,"درمانگاه--80620003","80620003");'>درمانگاه 80620003
                                    </option>
                                    <option onclick='CopyToValue(11,"کلینیک ترک اعتیاد--80990001","80990001");'>کلینیک
                                        ترک اعتیاد 80990001</option>
                                    <option onclick='CopyToValue(11,"بیمارستان حیوانات--07420001","07420001");'>
                                        بیمارستان حیوانات 07420001</option>
                                    <option onclick='CopyToValue(11,"داروخانه--59120001","59120001");'>داروخانه 59120001
                                    </option>
                                    <option onclick='CopyToValue(11,"لیزر و زیبایی--80990002","80990002");'>لیزر و
                                        زیبایی 80990002</option>
                                    <option onclick='CopyToValue(11,"سازمان انتقال خون--80990003","80990003");'>سازمان
                                        انتقال خون 80990003</option>
                                    <option onclick='CopyToValue(11,"خدمات فیزیوتراپی--80990004","80990004");'>خدمات
                                        فیزیوتراپی 80990004</option>
                                    <option onclick='CopyToValue(11,"تغذیه و رژیم درمانی--80990005","80990005");'>تغذیه
                                        و رژیم درمانی 80990005</option>
                                    <option onclick='CopyToValue(11,"داربست و اتصالات فلزی--17990001","17990001");'>
                                        داربست و اتصالات فلزی 17990001</option>
                                    <option onclick='CopyToValue(11,"لوله و اتصالات ساختمانی--17990002","17990002");'>
                                        لوله و اتصالات ساختمانی 17990002</option>
                                    <option onclick='CopyToValue(11,"آسانسور و بالابر برقی--17990003","17990003");'>
                                        آسانسور و بالابر برقی 17990003</option>
                                    <option onclick='CopyToValue(11,"کابینت آشپزخانه--52000002","52000002");'>کابینت
                                        آشپزخانه 52000002</option>
                                    <option onclick='CopyToValue(11,"بنایی و معماری--17400001","17400001");'>بنایی و
                                        معماری 17400001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات معماری، مهندسی و نقشه‌برداری--89110001","89110001");'>
                                        خدمات معماری، مهندسی و نقشه‌برداری 89110001</option>
                                    <option onclick='CopyToValue(11,"سیمانکاری--17400002","17400002");'>سیمانکاری
                                        17400002</option>
                                    <option
                                        onclick='CopyToValue(11,"کاشی‌کاری و سرامیک‌کاری و نصب پارکت و کفپوش--17400003","17400003");'>
                                        کاشی‌کاری و سرامیک‌کاری و نصب پارکت و کفپوش 17400003</option>
                                    <option onclick='CopyToValue(11,"نماسازی ساختمان--17400004","17400004");'>نماسازی
                                        ساختمان 17400004</option>
                                    <option onclick='CopyToValue(11,"فخاران تولید آجر و گچ--17400005","17400005");'>
                                        فخاران تولید آجر و گچ 17400005</option>
                                    <option onclick='CopyToValue(11,"نقاش ساختمان--17400006","17400006");'>نقاش ساختمان
                                        17400006</option>
                                    <option
                                        onclick='CopyToValue(11,"ایزوگام عایق‌کاری سقف و دیوار--17400007","17400007");'>
                                        ایزوگام عایق‌کاری سقف و دیوار 17400007</option>
                                    <option onclick='CopyToValue(11,"گچ‌کاری--17400008","17400008");'>گچ‌کاری 17400008
                                    </option>
                                    <option onclick='CopyToValue(11,"سوله سازی--17990005","17990005");'>سوله سازی
                                        17990005</option>
                                    <option
                                        onclick='CopyToValue(11,"لوله بازکنی و تشخیص ترکیدگی لوله--17110001","17110001");'>
                                        لوله بازکنی و تشخیص ترکیدگی لوله 17110001</option>
                                    <option
                                        onclick='CopyToValue(11,"کاغذ دیواری و تزیینات داخلی ساختمان--52310001","52310001");'>
                                        کاغذ دیواری و تزیینات داخلی ساختمان 52310001</option>
                                    <option onclick='CopyToValue(11,"گودبرداری ساختمان--17990006","17990006");'>
                                        گودبرداری ساختمان 17990006</option>
                                    <option
                                        onclick='CopyToValue(11,"شیشه‌بری و فروشندگی شیشه و آیینه--52310002","52310002");'>
                                        شیشه‌بری و فروشندگی شیشه و آیینه 52310002</option>
                                    <option
                                        onclick='CopyToValue(11,"تخلیه کنندگان چاه و فاضلاب--17110002","17110002");'>
                                        تخلیه کنندگان چاه و فاضلاب 17110002</option>
                                    <option
                                        onclick='CopyToValue(11,"کانال سازی و کانال کشی ساختمان--17110005","17110005");'>
                                        کانال سازی و کانال کشی ساختمان 17110005</option>
                                    <option
                                        onclick='CopyToValue(11,"تاسیسات ساختمان (لوله کشی،سرمایشی،گرمایشی)--17110004","17110004");'>
                                        تاسیسات ساختمان (لوله کشی،سرمایشی،گرمایشی) 17110004</option>
                                    <option
                                        onclick='CopyToValue(11,"سیستم حرارتی، برودتی و تهویه مطبوع--17110003","17110003");'>
                                        سیستم حرارتی، برودتی و تهویه مطبوع 17110003</option>
                                    <option
                                        onclick='CopyToValue(11,"ارائه دهندگان خدمات شبکه کامپیوتری--48160001","48160001");'>
                                        ارائه دهندگان خدمات شبکه کامپیوتری 48160001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان تلفن همراه و تجهیزات جانبی--48120001","48120001");'>
                                        فروشندگان تلفن همراه و تجهیزات جانبی 48120001</option>
                                    <option onclick='CopyToValue(11,"ارائه دهنده خدمات اینترنت--48160002","48160002");'>
                                        ارائه دهنده خدمات اینترنت 48160002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه تجهیزات الکترونیکی (به جز لوازم خانگی)--57320001","57320001");'>
                                        فروشگاه تجهیزات الکترونیکی (به جز لوازم خانگی) 57320001</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرکاران لوازم صوتی و تصویری--76220001","76220001");'>
                                        تعمیرکاران لوازم صوتی و تصویری 76220001</option>
                                    <option
                                        onclick='CopyToValue(11,"الکتروموتور،سیم پیچ و ژنراتور--17310002","17310002");'>
                                        الکتروموتور،سیم پیچ و ژنراتور 17310002</option>
                                    <option onclick='CopyToValue(11,"سیم کشی برق و تلفن--17310001","17310001");'>سیم کشی
                                        برق و تلفن 17310001</option>
                                    <option
                                        onclick='CopyToValue(11,"تولید کننده لوازم برقی و بردهای الکترونیکی--50650003","50650003");'>
                                        تولید کننده لوازم برقی و بردهای الکترونیکی 50650003</option>
                                    <option
                                        onclick='CopyToValue(11,"تابلوسازان و موسسات برق صنعتی--50650002","50650002");'>
                                        تابلوسازان و موسسات برق صنعتی 50650002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان تلفن، دستگاه و تجهیزات مخابراطی--48120002","48120002");'>
                                        فروشندگان تلفن، دستگاه و تجهیزات مخابراطی 48120002</option>
                                    <option onclick='CopyToValue(11,"چاپ خانه داران--27410001","27410001");'>چاپ خانه
                                        داران 27410001</option>
                                    <option onclick='CopyToValue(11,"خدمات نشر--27410002","27410002");'>خدمات نشر
                                        27410002</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات فتوکپی، زیراکس و اوزالید--73380002","73380002");'>
                                        خدمات فتوکپی، زیراکس و اوزالید 73380002</option>
                                    <option
                                        onclick='CopyToValue(11,"تولید کارت، پاکت، جعبه و محصولات کاغذی و مقوایی--59470001","59470001");'>
                                        تولید کارت، پاکت، جعبه و محصولات کاغذی و مقوایی 59470001</option>
                                    <option onclick='CopyToValue(11,"مهر و آرم و چاپ اسکرین--73380001","73380001");'>مهر
                                        و آرم و چاپ اسکرین 73380001</option>
                                    <option onclick='CopyToValue(11,"خدمات تایپ و ترجمه--27410003","27410003");'>خدمات
                                        تایپ و ترجمه 27410003</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه لوازم آرایشی و بهداشتی--59770001","59770001");'>
                                        فروشگاه لوازم آرایشی و بهداشتی 59770001</option>
                                    <option onclick='CopyToValue(11,"آرایشگاه مردانه--72300001","72300001");'>آرایشگاه
                                        مردانه 72300001</option>
                                    <option
                                        onclick='CopyToValue(11,"سالن‌های زیبایی و آرایشگاه‌های زنانه--72300002","72300002");'>
                                        سالن‌های زیبایی و آرایشگاه‌های زنانه 72300002</option>
                                    <option onclick='CopyToValue(11,"عطر و ادکلن--59770002","59770002");'>عطر و ادکلن
                                        59770002</option>
                                    <option
                                        onclick='CopyToValue(11,"مسافرخانه و مهمانپذیر و پانسیون--70110001","70110001");'>
                                        مسافرخانه و مهمانپذیر و پانسیون 70110001</option>
                                    <option onclick='CopyToValue(11,"هتل--70110002","70110002");'>هتل 70110002</option>
                                    <option onclick='CopyToValue(11,"خانه سالمندان--80500001","80500001");'>خانه
                                        سالمندان 80500001</option>
                                    <option onclick='CopyToValue(11,"میوه فروشی و سبزی فروشی--54990001","54990001");'>
                                        میوه فروشی و سبزی فروشی 54990001</option>
                                    <option onclick='CopyToValue(11,"زعفران فروشی--54410006","54410006");'>زعفران فروشی
                                        54410006</option>
                                    <option onclick='CopyToValue(11,"کشتارگاه--54220001","54220001");'>کشتارگاه 54220001
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"قصابی و فروش محصولات گوشتی--54220002","54220002");'>
                                        قصابی و فروش محصولات گوشتی 54220002</option>
                                    <option
                                        onclick='CopyToValue(11,"سردخانه و انبار محصولات کشاورزی--42250001","42250001");'>
                                        سردخانه و انبار محصولات کشاورزی 42250001</option>
                                    <option onclick='CopyToValue(11,"قنادی و شیرینی فروشی--54410001","54410001");'>قنادی
                                        و شیرینی فروشی 54410001</option>
                                    <option onclick='CopyToValue(11,"رستوران و سالن غذاخوری--58120001","58120001");'>
                                        رستوران و سالن غذاخوری 58120001</option>
                                    <option
                                        onclick='CopyToValue(11,"طباخان و فروشندگان کله، پاچه و سیرابی--58120002","58120002");'>
                                        طباخان و فروشندگان کله، پاچه و سیرابی 58120002</option>
                                    <option onclick='CopyToValue(11,"جگر، دل و قلوه--58120003","58120003");'>جگر، دل و
                                        قلوه 58120003</option>
                                    <option onclick='CopyToValue(11,"سفره خانه--58120004","58120004");'>سفره خانه
                                        58120004</option>
                                    <option onclick='CopyToValue(11,"کبابی، حلیم و آش--58120005","58120005");'>کبابی،
                                        حلیم و آش 58120005</option>
                                    <option onclick='CopyToValue(11,"حلواساز و عصار--54410003","54410003");'>حلواساز و
                                        عصار 54410003</option>
                                    <option onclick='CopyToValue(11,"چای خانه و قهوه خانه--58140001","58140001");'>چای
                                        خانه و قهوه خانه 58140001</option>
                                    <option onclick='CopyToValue(11,"عسل فروشی--54410004","54410004");'>عسل فروشی
                                        54410004</option>
                                    <option onclick='CopyToValue(11,"سوهان و گز--54410005","54410005");'>سوهان و گز
                                        54410005</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده‌فروشی و پخش ابزار و یراق‌آلات--50720001","50720001");'>
                                        عمده‌فروشی و پخش ابزار و یراق‌آلات 50720001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان لوازم یدکی خودرو--55330001","55330001");'>
                                        فروشندگان لوازم یدکی خودرو 55330001</option>
                                    <option
                                        onclick='CopyToValue(11,"لباس زیر، راحتی و خانگی زنانه--56310001","56310001");'>
                                        لباس زیر، راحتی و خانگی زنانه 56310001</option>
                                    <option onclick='CopyToValue(11,"شال و روسری فروشی--56310002","56310002");'>شال و
                                        روسری فروشی 56310002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان لوستر، آباژور، آیینه و شمعدان و قاب عکس--57190001","57190001");'>
                                        فروشندگان لوستر، آباژور، آیینه و شمعدان و قاب عکس 57190001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان اجناس سفالی و سرامیکی--57190002","57190002");'>
                                        فروشندگان اجناس سفالی و سرامیکی 57190002</option>
                                    <option onclick='CopyToValue(11,"لوازم و ظروف آشپزخانه--57190003","57190003");'>
                                        لوازم و ظروف آشپزخانه 57190003</option>
                                    <option onclick='CopyToValue(11,"پارک‌های جنگلی--70110004","70110004");'>پارک‌های
                                        جنگلی 70110004</option>
                                    <option onclick='CopyToValue(11,"برگزاری همایش و سمینار--73990001","73990001");'>
                                        برگزاری همایش و سمینار 73990001</option>
                                    <option onclick='CopyToValue(11,"دارالترجمه رسمی--73990002","73990002");'>دارالترجمه
                                        رسمی 73990002</option>
                                    <option onclick='CopyToValue(11,"تعمیرکاران خودرو--75380004","75380004");'>
                                        تعمیرکاران خودرو 75380004</option>
                                    <option onclick='CopyToValue(11,"ادارات گمرک--93110001","93110001");'>ادارات گمرک
                                        93110001</option>
                                    <option onclick='CopyToValue(11,"سازمان امور مالیاتی--93110002","93110002");'>سازمان
                                        امور مالیاتی 93110002</option>
                                    <option onclick='CopyToValue(11,"کشاورزی و باغداری--07630002","07630002");'>کشاورزی
                                        و باغداری 07630002</option>
                                    <option onclick='CopyToValue(11,"پرورش طیور--07630003","07630003");'>پرورش طیور
                                        07630003</option>
                                    <option onclick='CopyToValue(11,"پرورش ماهی و آبزی پروری--07630005","07630005");'>
                                        پرورش ماهی و آبزی پروری 07630005</option>
                                    <option onclick='CopyToValue(11,"پرورش و تولید قارچ--07630006","07630006");'>پرورش و
                                        تولید قارچ 07630006</option>
                                    <option onclick='CopyToValue(11,"پرورش زنبور عسل--07630004","07630004");'>پرورش
                                        زنبور عسل 07630004</option>
                                    <option onclick='CopyToValue(11,"تعاونی مسکن--15200002","15200002");'>تعاونی مسکن
                                        15200002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان عمده تجهیزات و قطعات الکتریکی--50650001","50650001");'>
                                        فروشندگان عمده تجهیزات و قطعات الکتریکی 50650001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه‌ تزئینات داخلی ساختمان--52000001","52000001");'>
                                        فروشگاه‌ تزئینات داخلی ساختمان 52000001</option>
                                    <option onclick='CopyToValue(11,"فروشگاه غلات و حبوبات--54110003","54110003");'>
                                        فروشگاه غلات و حبوبات 54110003</option>
                                    <option
                                        onclick='CopyToValue(11,"لوازم بسته بندی و ظروف یکبار مصرف--57190005","57190005");'>
                                        لوازم بسته بندی و ظروف یکبار مصرف 57190005</option>
                                    <option onclick='CopyToValue(11,"کافی شاپ و کافه تریا--58140002","58140002");'>کافی
                                        شاپ و کافه تریا 58140002</option>
                                    <option
                                        onclick='CopyToValue(11,"سایر کسب و کارهای مرتبط با این گروه صنفی--59700000","59700000");'>
                                        سایر کسب و کارهای مرتبط با این گروه صنفی 59700000</option>
                                    <option
                                        onclick='CopyToValue(11,"نصابان دوربین مداربسته و سیستم های امنیتی--73930001","73930001");'>
                                        نصابان دوربین مداربسته و سیستم های امنیتی 73930001</option>
                                    <option onclick='CopyToValue(11,"استادیوم ورزشی--79410001","79410001");'>استادیوم
                                        ورزشی 79410001</option>
                                    <option onclick='CopyToValue(11,"موزه‌ و نمایشگاه هنری--79910001","79910001");'>
                                        موزه‌ و نمایشگاه هنری 79910001</option>
                                    <option onclick='CopyToValue(11,"طب سوزنی--80990006","80990006");'>طب سوزنی 80990006
                                    </option>
                                    <option onclick='CopyToValue(11,"طب کار--80990007","80990007");'>طب کار 80990007
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"مدارس دانش آموزان استثنایی--82110004","82110004");'>
                                        مدارس دانش آموزان استثنایی 82110004</option>
                                    <option onclick='CopyToValue(11,"مجتمع آموزشی--82110005","82110005");'>مجتمع آموزشی
                                        82110005</option>
                                    <option
                                        onclick='CopyToValue(11,"آموزشگاه خیاطی و طراحی دوخت--82490001","82490001");'>
                                        آموزشگاه خیاطی و طراحی دوخت 82490001</option>
                                    <option
                                        onclick='CopyToValue(11,"آموزشگاه آرایشگری و پیرایشگری--82490002","82490002");'>
                                        آموزشگاه آرایشگری و پیرایشگری 82490002</option>
                                    <option
                                        onclick='CopyToValue(11,"آموزشگاه کامپیوتر (سخت افزار - نرم افزار)--82490003","82490003");'>
                                        آموزشگاه کامپیوتر (سخت افزار - نرم افزار) 82490003</option>
                                    <option onclick='CopyToValue(11,"آموزشگاه رباتیک--82490004","82490004");'>آموزشگاه
                                        رباتیک 82490004</option>
                                    <option onclick='CopyToValue(11,"آموزشگاه تعمیرات موبایل--82490005","82490005");'>
                                        آموزشگاه تعمیرات موبایل 82490005</option>
                                    <option onclick='CopyToValue(11,"آموزشگاه خلبانی--82490006","82490006");'>آموزشگاه
                                        خلبانی 82490006</option>
                                    <option onclick='CopyToValue(11,"آموزشگاه برق--82490007","82490007");'>آموزشگاه برق
                                        82490007</option>
                                    <option
                                        onclick='CopyToValue(11,"آموزشگاه فرش، قالیبافی و تابلوفرش--82490008","82490008");'>
                                        آموزشگاه فرش، قالیبافی و تابلوفرش 82490008</option>
                                    <option
                                        onclick='CopyToValue(11,"مجتمع آموزشگاهی بزرگ و چند منظوره--82990005","82990005");'>
                                        مجتمع آموزشگاهی بزرگ و چند منظوره 82990005</option>
                                    <option onclick='CopyToValue(11,"کمیته امداد--83980001","83980001");'>کمیته امداد
                                        83980001</option>
                                    <option
                                        onclick='CopyToValue(11,"هیئت مذهبی، حسینه، مساجد، مصلی--86610001","86610001");'>
                                        هیئت مذهبی، حسینه، مساجد، مصلی 86610001</option>
                                    <option onclick='CopyToValue(11,"دفاتر امام جمعه و مراجع--86610002","86610002");'>
                                        دفاتر امام جمعه و مراجع 86610002</option>
                                    <option onclick='CopyToValue(11,"حوزه علمیه و مدارس دینی--86610003","86610003");'>
                                        حوزه علمیه و مدارس دینی 86610003</option>
                                    <option onclick='CopyToValue(11,"شورای حل اختلاف--92110001","92110001");'>شورای حل
                                        اختلاف 92110001</option>
                                    <option onclick='CopyToValue(11,"سازمان تعزیرات حکومتی--93990008","93990008");'>
                                        سازمان تعزیرات حکومتی 93990008</option>
                                    <option onclick='CopyToValue(11,"سازمان ثبت احوال--93990009","93990009");'>سازمان
                                        ثبت احوال 93990009</option>
                                    <option onclick='CopyToValue(11,"مرکز تعویض پلاک--93990010","93990010");'>مرکز تعویض
                                        پلاک 93990010</option>
                                    <option onclick='CopyToValue(11,"سازمان پزشکی قانونی--93990011","93990011");'>سازمان
                                        پزشکی قانونی 93990011</option>
                                    <option onclick='CopyToValue(11,"سازمان آتش نشانی--93990012","93990012");'>سازمان
                                        آتش نشانی 93990012</option>
                                    <option onclick='CopyToValue(11,"مرکز معاینه فنی خودرو--93990013","93990013");'>مرکز
                                        معاینه فنی خودرو 93990013</option>
                                    <option onclick='CopyToValue(11,"دفاتر خدمات الکترونیک شهر--93990014","93990014");'>
                                        دفاتر خدمات الکترونیک شهر 93990014</option>
                                    <option onclick='CopyToValue(11,"شورایاری--93990015","93990015");'>شورایاری 93990015
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"توزیع کنندگان عمده کتاب، روزنامه، مجله و گاهنامه--51920001","51920001");'>
                                        توزیع کنندگان عمده کتاب، روزنامه، مجله و گاهنامه 51920001</option>
                                    <option onclick='CopyToValue(11,"خدمات مشاوره ازدواج--72770001","72770001");'>خدمات
                                        مشاوره ازدواج 72770001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات دکور و معماری داخلی ساختمان--17990004","17990004");'>
                                        خدمات دکور و معماری داخلی ساختمان 17990004</option>
                                    <option
                                        onclick='CopyToValue(11,"خرازی فروشی و فروشندگان لوازم ارزان--53310001","53310001");'>
                                        خرازی فروشی و فروشندگان لوازم ارزان 53310001</option>
                                    <option
                                        onclick='CopyToValue(11,"فرآورده گوشتی، همبرگر، سوسیس و کالباس--54220003","54220003");'>
                                        فرآورده گوشتی، همبرگر، سوسیس و کالباس 54220003</option>
                                    <option onclick='CopyToValue(11,"سمعی و بصری (کمک اموزشی)--50460004","50460004");'>
                                        سمعی و بصری (کمک اموزشی) 50460004</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی طلا و جواهرآلات--50940001","50940001");'>
                                        عمده فروشی طلا و جواهرآلات 50940001</option>
                                    <option onclick='CopyToValue(11,"عمده فروشی ساعت--50940002","50940002");'>عمده فروشی
                                        ساعت 50940002</option>
                                    <option onclick='CopyToValue(11,"فروشگاه شکلات و آب‌نبات--54410007","54410007");'>
                                        فروشگاه شکلات و آب‌نبات 54410007</option>
                                    <option onclick='CopyToValue(11,"فروشگاه چای و قهوه--54410008","54410008");'>فروشگاه
                                        چای و قهوه 54410008</option>
                                    <option onclick='CopyToValue(11,"نمایشگاه‌ خودرو--55210001","55210001");'>نمایشگاه‌
                                        خودرو 55210001</option>
                                    <option
                                        onclick='CopyToValue(11,"کسب و کارهای مرتبط با فناوری زنجیره بلوک--78000001","78000001");'>
                                        کسب و کارهای مرتبط با فناوری زنجیره بلوک 78000001</option>
                                    <option onclick='CopyToValue(11,"بازارگاه آنلاین--52620001","52620001");'>بازارگاه
                                        آنلاین 52620001</option>
                                    <option
                                        onclick='CopyToValue(11,"نان صنعتی، حجیم و نیمه حجیم--54630001","54630001");'>
                                        نان صنعتی، حجیم و نیمه حجیم 54630001</option>
                                    <option
                                        onclick='CopyToValue(11,"کلوچه و نان شیرین (خشکه پزی)--54630002","54630002");'>
                                        کلوچه و نان شیرین (خشکه پزی) 54630002</option>
                                    <option
                                        onclick='CopyToValue(11,"جایگاه‌ شارژ خودروهای برقی--55520001","55520001");'>
                                        جایگاه‌ شارژ خودروهای برقی 55520001</option>
                                    <option onclick='CopyToValue(11,"عطاری--59150001","59150001");'>عطاری 59150001
                                    </option>
                                    <option onclick='CopyToValue(11,"شرکت های سبدگردان--62120001","62120001");'>شرکت های
                                        سبدگردان 62120001</option>
                                    <option onclick='CopyToValue(11,"صندوق های سرمایه گذاری--62120002","62120002");'>
                                        صندوق های سرمایه گذاری 62120002</option>
                                    <option onclick='CopyToValue(11,"کیف الکترونیک پول--65400001","65400001");'>کیف
                                        الکترونیک پول 65400001</option>
                                    <option onclick='CopyToValue(11,"کلینیک تخصصی پوست و مو--80320001","80320001");'>
                                        کلینیک تخصصی پوست و مو 80320001</option>
                                    <option onclick='CopyToValue(11,"مغز و اعصاب--80320002","80320002");'>مغز و اعصاب
                                        80320002</option>
                                    <option onclick='CopyToValue(11,"قلب و عروق--80320003","80320003");'>قلب و عروق
                                        80320003</option>
                                    <option onclick='CopyToValue(11,"پوست و مو--80320004","80320004");'>پوست و مو
                                        80320004</option>
                                    <option onclick='CopyToValue(11,"زنان و زایمان--80320005","80320005");'>زنان و
                                        زایمان 80320005</option>
                                    <option onclick='CopyToValue(11,"ارتوپدی--80320006","80320006");'>ارتوپدی 80320006
                                    </option>
                                    <option onclick='CopyToValue(11,"اورولوژی--80320007","80320007");'>اورولوژی 80320007
                                    </option>
                                    <option onclick='CopyToValue(11,"اطفال--80320008","80320008");'>اطفال 80320008
                                    </option>
                                    <option onclick='CopyToValue(11,"داخلی--80320009","80320009");'>داخلی 80320009
                                    </option>
                                    <option onclick='CopyToValue(11,"گوارش--80320010","80320010");'>گوارش 80320010
                                    </option>
                                    <option onclick='CopyToValue(11,"گوش، حلق، بینی--80320011","80320011");'>گوش، حلق،
                                        بینی 80320011</option>
                                    <option onclick='CopyToValue(11,"روانپزشک--80320012","80320012");'>روانپزشک 80320012
                                    </option>
                                    <option onclick='CopyToValue(11,"انکولوژی--80320013","80320013");'>انکولوژی 80320013
                                    </option>
                                    <option onclick='CopyToValue(11,"ریه--80320014","80320014");'>ریه 80320014</option>
                                    <option onclick='CopyToValue(11,"غدد--80320015","80320015");'>غدد 80320015</option>
                                    <option onclick='CopyToValue(11,"پلاستیک و زیبایی--80320016","80320016");'>پلاستیک و
                                        زیبایی 80320016</option>
                                    <option onclick='CopyToValue(11,"پا پزشکی--80320017","80320017");'>پا پزشکی 80320017
                                    </option>
                                    <option onclick='CopyToValue(11,"پزشکان طب سنتی--80330001","80330001");'>پزشکان طب
                                        سنتی 80330001</option>
                                    <option onclick='CopyToValue(11,"رادیولوژی و سنوگرافی--80440001","80440001");'>
                                        رادیولوژی و سنوگرافی 80440001</option>
                                    <option onclick='CopyToValue(11,"عکس برداری هسته ای--80440002","80440002");'>عکس
                                        برداری هسته ای 80440002</option>
                                    <option onclick='CopyToValue(11,"ماموگرافی--80440003","80440003");'>ماموگرافی
                                        80440003</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه ملزومات ایمنی و اطفای حریق--50990001","50990001");'>
                                        فروشگاه ملزومات ایمنی و اطفای حریق 50990001</option>
                                    <option
                                        onclick='CopyToValue(11,"نصابان سیستم‌های اطفا حریق--50990002","50990002");'>
                                        نصابان سیستم‌های اطفا حریق 50990002</option>
                                    <option onclick='CopyToValue(11,"مزایده--53100001","53100001");'>مزایده 53100001
                                    </option>
                                    <option onclick='CopyToValue(11,"شرکت های بیمه--59600001","59600001");'>شرکت های
                                        بیمه 59600001</option>
                                    <option
                                        onclick='CopyToValue(11,"کارگزاری ها‌ و نمایندگان بیمه--59600002","59600002");'>
                                        کارگزاری ها‌ و نمایندگان بیمه 59600002</option>
                                    <option onclick='CopyToValue(11,"کارگزاری ها--62110001","62110001");'>کارگزاری ها
                                        62110001</option>
                                    <option onclick='CopyToValue(11,"سازمان تامین اجتماعی--63000001","63000001");'>
                                        سازمان تامین اجتماعی 63000001</option>
                                    <option
                                        onclick='CopyToValue(11,"صندوق های قرض الحسنه دارای مجوز--60120001","60120001");'>
                                        صندوق های قرض الحسنه دارای مجوز 60120001</option>
                                    <option onclick='CopyToValue(11,"کلینیک حیوانات خانگی--07420002","07420002");'>
                                        کلینیک حیوانات خانگی 07420002</option>
                                    <option onclick='CopyToValue(11,"پانسیون حیوانات--07420003","07420003");'>پانسیون
                                        حیوانات 07420003</option>
                                    <option onclick='CopyToValue(11,"خدمات درمانی دام و طیور--07420004","07420004");'>
                                        خدمات درمانی دام و طیور 07420004</option>
                                    <option onclick='CopyToValue(11,"داروخانه دامپزشکی--07420005","07420005");'>داروخانه
                                        دامپزشکی 07420005</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه لوازم کشاورزی و دامداری--07630007","07630007");'>
                                        فروشگاه لوازم کشاورزی و دامداری 07630007</option>
                                    <option onclick='CopyToValue(11,"فروش دام--07630008","07630008");'>فروش دام 07630008
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"شرکت ساختمانی و انبوه سازی--15200003","15200003");'>
                                        شرکت ساختمانی و انبوه سازی 15200003</option>
                                    <option onclick='CopyToValue(11,"تاسیسات برقی ساختمان--17310003","17310003");'>
                                        تاسیسات برقی ساختمان 17310003</option>
                                    <option onclick='CopyToValue(11,"ساخت در و پنجره چوبی--17500003","17500003");'>ساخت
                                        در و پنجره چوبی 17500003</option>
                                    <option onclick='CopyToValue(11,"پوشش سقف--17610001","17610001");'>پوشش سقف 17610001
                                    </option>
                                    <option onclick='CopyToValue(11,"نصب شیروانی، گاتر و آبرو--17610002","17610002");'>
                                        نصب شیروانی، گاتر و آبرو 17610002</option>
                                    <option onclick='CopyToValue(11,"کناف کاری--17610003","17610003");'>کناف کاری
                                        17610003</option>
                                    <option onclick='CopyToValue(11,"آسفالت کاری--17710001","17710001");'>آسفالت کاری
                                        17710001</option>
                                    <option onclick='CopyToValue(11,"بتن‌ ریزی--17710002","17710002");'>بتن‌ ریزی
                                        17710002</option>
                                    <option onclick='CopyToValue(11,"خدمات تخریب ساختمان--17990007","17990007");'>خدمات
                                        تخریب ساختمان 17990007</option>
                                    <option
                                        onclick='CopyToValue(11,"ساخت و نصب در و کرکره اتومات--17990008","17990008");'>
                                        ساخت و نصب در و کرکره اتومات 17990008</option>
                                    <option onclick='CopyToValue(11,"ساخت در و پنجره فلزی--17990009","17990009");'>ساخت
                                        در و پنجره فلزی 17990009</option>
                                    <option onclick='CopyToValue(11,"تولید و نصب آلاچیق--17990010","17990010");'>تولید و
                                        نصب آلاچیق 17990010</option>
                                    <option onclick='CopyToValue(11,"صحافی، دفتر و آلبوم سازی--27410004","27410004");'>
                                        صحافی، دفتر و آلبوم سازی 27410004</option>
                                    <option
                                        onclick='CopyToValue(11,"حروف‌چینی، لیتوگرافی و ماشین تحریر--27910001","27910001");'>
                                        حروف‌چینی، لیتوگرافی و ماشین تحریر 27910001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه مواد شوینده و بهداشتی--28420001","28420001");'>
                                        فروشگاه مواد شوینده و بهداشتی 28420001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش مواد شوینده و پاک کننده--28420002","28420002");'>
                                        عمده فروشی و پخش مواد شوینده و پاک کننده 28420002</option>
                                    <option onclick='CopyToValue(11,"خطوط ریلی باری--40110001","40110001");'>خطوط ریلی
                                        باری 40110001</option>
                                    <option onclick='CopyToValue(11,"قطار شهری (مترو)--41110001","41110001");'>قطار شهری
                                        (مترو) 41110001</option>
                                    <option
                                        onclick='CopyToValue(11,"حمل و نقل قایق و کشتی مسافری--41110002","41110002");'>
                                        حمل و نقل قایق و کشتی مسافری 41110002</option>
                                    <option onclick='CopyToValue(11,"راه آهن مسافربری--41120001","41120001");'>راه آهن
                                        مسافربری 41120001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات آمبولانس و حمل بیمار--41190001","41190001");'>
                                        خدمات آمبولانس و حمل بیمار 41190001</option>
                                    <option onclick='CopyToValue(11,"تاکسی فرودگاه--41210001","41210001");'>تاکسی
                                        فرودگاه 41210001</option>
                                    <option onclick='CopyToValue(11,"تاکسی اینترنتی--41210002","41210002");'>تاکسی
                                        اینترنتی 41210002</option>
                                    <option onclick='CopyToValue(11,"تاکسی تلفنی--41210003","41210003");'>تاکسی تلفنی
                                        41210003</option>
                                    <option onclick='CopyToValue(11,"پایانه اتوبوسی شهری--41310002","41310002");'>پایانه
                                        اتوبوسی شهری 41310002</option>
                                    <option onclick='CopyToValue(11,"خدمات باربری هوایی--42140001","42140001");'>خدمات
                                        باربری هوایی 42140001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات باربری با کامیون و وانت--42140002","42140002");'>
                                        خدمات باربری با کامیون و وانت 42140002</option>
                                    <option onclick='CopyToValue(11,"خدمات پیک و ارسال مرسولات--42150001","42150001");'>
                                        خدمات پیک و ارسال مرسولات 42150001</option>
                                    <option onclick='CopyToValue(11,"اجاره کشتی‌ و قایق تفریحی--44110001","44110001");'>
                                        اجاره کشتی‌ و قایق تفریحی 44110001</option>
                                    <option onclick='CopyToValue(11,"اجاره قایق و جت اسکی--44570001","44570001");'>اجاره
                                        قایق و جت اسکی 44570001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات نگهداری و تعمیرات قایق و کشتی--44680001","44680001");'>
                                        خدمات نگهداری و تعمیرات قایق و کشتی 44680001</option>
                                    <option onclick='CopyToValue(11,"آژانس فروش بلیط--45110001","45110001");'>آژانس فروش
                                        بلیط 45110001</option>
                                    <option onclick='CopyToValue(11,"فروش بلیط اینترنتی--45110002","45110002");'>فروش
                                        بلیط اینترنتی 45110002</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات عملیات و نگهداری فرودگاه و سایت پروازی--45820001","45820001");'>
                                        خدمات عملیات و نگهداری فرودگاه و سایت پروازی 45820001</option>
                                    <option
                                        onclick='CopyToValue(11,"تورهای مسافرتی و خدمات گردشگری--47220001","47220001");'>
                                        تورهای مسافرتی و خدمات گردشگری 47220001</option>
                                    <option onclick='CopyToValue(11,"عوارض راه--47840001","47840001");'>عوارض راه
                                        47840001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات حمل و نقل (نامذکور در کدهای دیگر)--47890001","47890001");'>
                                        خدمات حمل و نقل (نامذکور در کدهای دیگر) 47890001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش اینترنتی شارژ تلفن همراه--48140001","48140001");'>
                                        فروش اینترنتی شارژ تلفن همراه 48140001</option>
                                    <option onclick='CopyToValue(11,"تلویزیون‌های اینترنتی--48990001","48990001");'>
                                        تلویزیون‌های اینترنتی 48990001</option>
                                    <option onclick='CopyToValue(11,"پادکست‌ها--48990002","48990002");'>پادکست‌ها
                                        48990002</option>
                                    <option onclick='CopyToValue(11,"ویدیوکست‌ها--48990003","48990003");'>ویدیوکست‌ها
                                        48990003</option>
                                    <option onclick='CopyToValue(11,"اداره مخابرات و قبوض--49000004","49000004");'>اداره
                                        مخابرات و قبوض 49000004</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده‌فروشی و پخش لوازم یدکی خودرو--50130001","50130001");'>
                                        عمده‌فروشی و پخش لوازم یدکی خودرو 50130001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده‌فروشی و پخش لوازم موتورسیکلت--50130002","50130002");'>
                                        عمده‌فروشی و پخش لوازم موتورسیکلت 50130002</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده‌فروشی و پخش لوازم ماشین‌الات سنگین--50130003","50130003");'>
                                        عمده‌فروشی و پخش لوازم ماشین‌الات سنگین 50130003</option>
                                    <option
                                        onclick='CopyToValue(11,"صندلی آمفی تئاتر، غرفه سازی و امور نمایشگاهی--50210001","50210001");'>
                                        صندلی آمفی تئاتر، غرفه سازی و امور نمایشگاهی 50210001</option>
                                    <option onclick='CopyToValue(11,"مبلمان اداری--50210002","50210002");'>مبلمان اداری
                                        50210002</option>
                                    <option
                                        onclick='CopyToValue(11,"مبلمان شهری، مجوعه های بازی، ایستگاه اتوبوس و تاکسی--50210003","50210003");'>
                                        مبلمان شهری، مجوعه های بازی، ایستگاه اتوبوس و تاکسی 50210003</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش مصالح ساختمانی--50390001","50390001");'>
                                        عمده فروشی و پخش مصالح ساختمانی 50390001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش لوازم و ماشین‌های اداری--50440001","50440001");'>
                                        عمده فروشی و پخش لوازم و ماشین‌های اداری 50440001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی لپ تاپ، کامپیوتر--50450001","50450001");'>
                                        عمده فروشی لپ تاپ، کامپیوتر 50450001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی قطعات کامپیوتر و لوازم مرتبط--50450002","50450002");'>
                                        عمده فروشی قطعات کامپیوتر و لوازم مرتبط 50450002</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی لوازم جانبی (کاور،کیف لپ تاپ)--50450003","50450003");'>
                                        عمده فروشی لوازم جانبی (کاور،کیف لپ تاپ) 50450003</option>
                                    <option onclick='CopyToValue(11,"تجهیزات پخت و پز تجاری--50460003","50460003");'>
                                        تجهیزات پخت و پز تجاری 50460003</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش لوازم و تجهیزات پزشکی، آزمایشگاهی، بیمارستانی و دندانپزشکی--50470003","50470003");'>
                                        فروش لوازم و تجهیزات پزشکی، آزمایشگاهی، بیمارستانی و دندانپزشکی 50470003
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرکنندگان لوازم و تجهیزات پزشکی، آزمایشگاهی، بیمارستانی و دندانپزشکی--50470004","50470004");'>
                                        تعمیرکنندگان لوازم و تجهیزات پزشکی، آزمایشگاهی، بیمارستانی و دندانپزشکی 50470004
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"ابزار سلامت و طب (محافظ طبی، ماساژور، دستگاه بخور و...)--50470005","50470005");'>
                                        ابزار سلامت و طب (محافظ طبی، ماساژور، دستگاه بخور و...) 50470005</option>
                                    <option
                                        onclick='CopyToValue(11,"لوازم ارتوپدی پزشکی و اعضا مصنوعی--50470006","50470006");'>
                                        لوازم ارتوپدی پزشکی و اعضا مصنوعی 50470006</option>
                                    <option
                                        onclick='CopyToValue(11,"لوازم کمک شنوایی پزشکی (سمعک)--50470007","50470007");'>
                                        لوازم کمک شنوایی پزشکی (سمعک) 50470007</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشندگان عمده تجهیزات لوله‌کشی، شوفاژ و تهویه مطبوع--50740001","50740001");'>
                                        فروشندگان عمده تجهیزات لوله‌کشی، شوفاژ و تهویه مطبوع 50740001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش ملزومات صنعتی (نامذکور در کدهای دیگر)--50850001","50850001");'>
                                        عمده فروشی و پخش ملزومات صنعتی (نامذکور در کدهای دیگر) 50850001</option>
                                    <option onclick='CopyToValue(11,"عمده فروشی نقره--50940003","50940003");'>عمده فروشی
                                        نقره 50940003</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشان کاغذ، اوراق اداری و مواد مصرفی فتوکپی--51110001","51110001");'>
                                        عمده فروشان کاغذ، اوراق اداری و مواد مصرفی فتوکپی 51110001</option>
                                    <option onclick='CopyToValue(11,"عمده فروشان لوازم التحریر--51110002","51110002");'>
                                        عمده فروشان لوازم التحریر 51110002</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش دارو و محصولات آرایشی--51220001","51220001");'>
                                        عمده فروشی و پخش دارو و محصولات آرایشی 51220001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده‌فروشی و پخش لوازم آرایشی--51220002","51220002");'>
                                        عمده‌فروشی و پخش لوازم آرایشی 51220002</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده‌فروشی و پخش عطر و ادکلن--51220003","51220003");'>
                                        عمده‌فروشی و پخش عطر و ادکلن 51220003</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشان لوازم خیاطی و دوزندگی--51310001","51310001");'>
                                        عمده فروشان لوازم خیاطی و دوزندگی 51310001</option>
                                    <option
                                        onclick='CopyToValue(11,"بنکدار و طاقه فروش پارچه و پرده--51310002","51310002");'>
                                        بنکدار و طاقه فروش پارچه و پرده 51310002</option>
                                    <option onclick='CopyToValue(11,"عمده فروشان پتو و روتختی--51310003","51310003");'>
                                        عمده فروشان پتو و روتختی 51310003</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده‌فروشی و پخش یونیفرم و لباس کار--51370001","51370001");'>
                                        عمده‌فروشی و پخش یونیفرم و لباس کار 51370001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده‌فروشی و پخش کفش ماشینی و کار--51390001","51390001");'>
                                        عمده‌فروشی و پخش کفش ماشینی و کار 51390001</option>
                                    <option onclick='CopyToValue(11,"عمده‌فروشی و پخش کفش--51390002","51390002");'>
                                        عمده‌فروشی و پخش کفش 51390002</option>
                                    <option onclick='CopyToValue(11,"عمده‌فروشی و پخش کیف--51390003","51390003");'>
                                        عمده‌فروشی و پخش کیف 51390003</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده‌فروشی و پخش کیف و کفش--51390004","51390004");'>
                                        عمده‌فروشی و پخش کیف و کفش 51390004</option>
                                    <option onclick='CopyToValue(11,"عمده فروشی لوازم کفاشی--51390005","51390005");'>
                                        عمده فروشی لوازم کفاشی 51390005</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش نفت خام و مشتقات--51720001","51720001");'>
                                        عمده فروشی و پخش نفت خام و مشتقات 51720001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش گل و گیاه--51930001","51930001");'>
                                        عمده فروشی و پخش گل و گیاه 51930001</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش لوازم گلفروشی--51930002","51930002");'>
                                        عمده فروشی و پخش لوازم گلفروشی 51930002</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش رنگ، جلا و مواد مصرفی نقاشی--51980001","51980001");'>
                                        عمده فروشی و پخش رنگ، جلا و مواد مصرفی نقاشی 51980001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه موزاییک، کاشی و سرامیک و سنگ، پارکت و کفپوش--52110001","52110001");'>
                                        فروشگاه موزاییک، کاشی و سرامیک و سنگ، پارکت و کفپوش 52110001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه چوب، الوار، مصالح چوبی و پوشش سقف--52110002","52110002");'>
                                        فروشگاه چوب، الوار، مصالح چوبی و پوشش سقف 52110002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش سیمان، شن و ماسه، آجر و گچ--52110003","52110003");'>
                                        فروش سیمان، شن و ماسه، آجر و گچ 52110003</option>
                                    <option
                                        onclick='CopyToValue(11,"ابزار و یراق آلات ساختمانی (دستگیره، پریز و ...)--52110004","52110004");'>
                                        ابزار و یراق آلات ساختمانی (دستگیره، پریز و ...) 52110004</option>
                                    <option onclick='CopyToValue(11,"گاتر و آبروها--52110005","52110005");'>گاتر و
                                        آبروها 52110005</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه سیمان و مصنوعات سیمانی--52110006","52110006");'>
                                        فروشگاه سیمان و مصنوعات سیمانی 52110006</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش تجهیزات و قطعات الکتریکی--52510005","52510005");'>
                                        فروش تجهیزات و قطعات الکتریکی 52510005</option>
                                    <option
                                        onclick='CopyToValue(11,"ساخت و مونتاژ خانه‌های پیش ساخته قابل حمل و کانکس--52710001","52710001");'>
                                        ساخت و مونتاژ خانه‌های پیش ساخته قابل حمل و کانکس 52710001</option>
                                    <option onclick='CopyToValue(11,"فروشگاه زیتون، ترشی--54110004","54110004");'>
                                        فروشگاه زیتون، ترشی 54110004</option>
                                    <option onclick='CopyToValue(11,"یخ فروشی--54110005","54110005");'>یخ فروشی 54110005
                                    </option>
                                    <option onclick='CopyToValue(11,"تعاونی مصرف--54110006","54110006");'>تعاونی مصرف
                                        54110006</option>
                                    <option onclick='CopyToValue(11,"فروشنده چای و برنج--54110007","54110007");'>فروشنده
                                        چای و برنج 54110007</option>
                                    <option onclick='CopyToValue(11,"فروشگاه محصولات لبنی--54510001","54510001");'>
                                        فروشگاه محصولات لبنی 54510001</option>
                                    <option onclick='CopyToValue(11,"لاستیک فروشی--55320001","55320001");'>لاستیک فروشی
                                        55320001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش لوازم یدکی موتورسیکلت--55330004","55330004");'>
                                        فروش لوازم یدکی موتورسیکلت 55330004</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش لوازم یدکی ماشین‌آلات سنگین--55330005","55330005");'>
                                        فروش لوازم یدکی ماشین‌آلات سنگین 55330005</option>
                                    <option onclick='CopyToValue(11,"جایگاه بنزین--55420001","55420001");'>جایگاه بنزین
                                        55420001</option>
                                    <option onclick='CopyToValue(11,"جایگاه CNG--55420002","55420002");'>جایگاه CNG
                                        55420002</option>
                                    <option onclick='CopyToValue(11,"جایگاه گازوئیل--55420003","55420003");'>جایگاه
                                        گازوئیل 55420003</option>
                                    <option onclick='CopyToValue(11,"فروش قایق و کشتی--55510001","55510001");'>فروش قایق
                                        و کشتی 55510001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش تریلرهای تفریحی و مسافرتی--55610001","55610001");'>
                                        فروش تریلرهای تفریحی و مسافرتی 55610001</option>
                                    <option onclick='CopyToValue(11,"فروشگاه‌ موتورسیکلت--55710001","55710001");'>
                                        فروشگاه‌ موتورسیکلت 55710001</option>
                                    <option onclick='CopyToValue(11,"فروش و خدمات لیفتراک--55990010","55990010");'>فروش
                                        و خدمات لیفتراک 55990010</option>
                                    <option onclick='CopyToValue(11,"فروشگاه محصولات حجاب--56310003","56310003");'>
                                        فروشگاه محصولات حجاب 56310003</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه بدلیجات تزئینی (اکسسوری)--56310004","56310004");'>
                                        فروشگاه بدلیجات تزئینی (اکسسوری) 56310004</option>
                                    <option onclick='CopyToValue(11,"فروشگاه پوشاک خانواده--56510001","56510001");'>
                                        فروشگاه پوشاک خانواده 56510001</option>
                                    <option onclick='CopyToValue(11,"شلوار جین و کتان--56510002","56510002");'>شلوار جین
                                        و کتان 56510002</option>
                                    <option onclick='CopyToValue(11,"پوشاک بزرگسالان--56510003","56510003");'>پوشاک
                                        بزرگسالان 56510003</option>
                                    <option onclick='CopyToValue(11,"فروشگاه لباس مجلسی و عروس--56510004","56510004");'>
                                        فروشگاه لباس مجلسی و عروس 56510004</option>
                                    <option onclick='CopyToValue(11,"مانتو و پالتو فروشی--56510005","56510005");'>مانتو
                                        و پالتو فروشی 56510005</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه یونیفرم و لباس اداری زنانه--56510006","56510006");'>
                                        فروشگاه یونیفرم و لباس اداری زنانه 56510006</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه کت و شلوار و پیراهن--56510007","56510007");'>
                                        فروشگاه کت و شلوار و پیراهن 56510007</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه لباس راحتی و زیر مردانه--56510008","56510008");'>
                                        فروشگاه لباس راحتی و زیر مردانه 56510008</option>
                                    <option onclick='CopyToValue(11,"فروشگاه پوشاک مردانه--56510009","56510009");'>
                                        فروشگاه پوشاک مردانه 56510009</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه یونیفرم و لباس نظامی--56510010","56510010");'>
                                        فروشگاه یونیفرم و لباس نظامی 56510010</option>
                                    <option onclick='CopyToValue(11,"فروشگاه لباس ورزشی--56550001","56550001");'>فروشگاه
                                        لباس ورزشی 56550001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه تخصصی پوشاک و لوازم سوارکاری--56550002","56550002");'>
                                        فروشگاه تخصصی پوشاک و لوازم سوارکاری 56550002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه تخصصی فروش کفش ورزشی--56550003","56550003");'>
                                        فروشگاه تخصصی فروش کفش ورزشی 56550003</option>
                                    <option onclick='CopyToValue(11,"کیف و کفش فروشی--56610001","56610001");'>کیف و کفش
                                        فروشی 56610001</option>
                                    <option onclick='CopyToValue(11,"کیف فروشی--56610002","56610002");'>کیف فروشی
                                        56610002</option>
                                    <option onclick='CopyToValue(11,"کفش فروشی--56610003","56610003");'>کفش فروشی
                                        56610003</option>
                                    <option onclick='CopyToValue(11,"فروشگاه پوشاک پوستین و خز--56810001","56810001");'>
                                        فروشگاه پوشاک پوستین و خز 56810001</option>
                                    <option onclick='CopyToValue(11,"پوشاک و اکسسوری چرم--56810002","56810002");'>پوشاک
                                        و اکسسوری چرم 56810002</option>
                                    <option onclick='CopyToValue(11,"نساجی و ریسندگی--56970006","56970006");'>نساجی و
                                        ریسندگی 56970006</option>
                                    <option onclick='CopyToValue(11,"رنگرزی و صباغی--56970007","56970007");'>رنگرزی و
                                        صباغی 56970007</option>
                                    <option
                                        onclick='CopyToValue(11,"دوزندگی لوازم ایمنی و لباس کار--56970008","56970008");'>
                                        دوزندگی لوازم ایمنی و لباس کار 56970008</option>
                                    <option onclick='CopyToValue(11,"دوزندگی لباس نظامی--56970009","56970009");'>دوزندگی
                                        لباس نظامی 56970009</option>
                                    <option
                                        onclick='CopyToValue(11,"دستکش، کلاه، شال گردن، حوله ...--56990001","56990001");'>
                                        دستکش، کلاه، شال گردن، حوله ... 56990001</option>
                                    <option
                                        onclick='CopyToValue(11,"لوازم و تزئینات سفره عقد (خنچه عقد)--56990004","56990004");'>
                                        لوازم و تزئینات سفره عقد (خنچه عقد) 56990004</option>
                                    <option onclick='CopyToValue(11,"مبلمان خانگی--57120001","57120001");'>مبلمان خانگی
                                        57120001</option>
                                    <option onclick='CopyToValue(11,"سرویس خواب بزرگسال--57120002","57120002");'>سرویس
                                        خواب بزرگسال 57120002</option>
                                    <option
                                        onclick='CopyToValue(11,"سرویس خواب نوزاد، کودک و نوجوان--57120003","57120003");'>
                                        سرویس خواب نوزاد، کودک و نوجوان 57120003</option>
                                    <option onclick='CopyToValue(11,"کالای چوب--57120004","57120004");'>کالای چوب
                                        57120004</option>
                                    <option onclick='CopyToValue(11,"فرش ماشینی و موکت--57130002","57130002");'>فرش
                                        ماشینی و موکت 57130002</option>
                                    <option onclick='CopyToValue(11,"پارچه پرده فروشی--57140003","57140003");'>پارچه
                                        پرده فروشی 57140003</option>
                                    <option onclick='CopyToValue(11,"پارچه مبلی فروشی--57140004","57140004");'>پارچه
                                        مبلی فروشی 57140004</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش شومینه، آتشدان، باربیکیو و لوازم جانبی--57180001","57180001");'>
                                        فروش شومینه، آتشدان، باربیکیو و لوازم جانبی 57180001</option>
                                    <option
                                        onclick='CopyToValue(11,"دکوری و تزئینی (مجسمه، شمع و...)--57190006","57190006");'>
                                        دکوری و تزئینی (مجسمه، شمع و...) 57190006</option>
                                    <option onclick='CopyToValue(11,"فروشگاه صوتی و تصویری--57220003","57220003");'>
                                        فروشگاه صوتی و تصویری 57220003</option>
                                    <option onclick='CopyToValue(11,"نمایندگی صوتی و تصویری--57220004","57220004");'>
                                        نمایندگی صوتی و تصویری 57220004</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه لوازم و ادوات موسیقی--57330001","57330001");'>
                                        فروشگاه لوازم و ادوات موسیقی 57330001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه‌ نرم افزار کامپیوتری--57340001","57340001");'>
                                        فروشگاه‌ نرم افزار کامپیوتری 57340001</option>
                                    <option onclick='CopyToValue(11,"فروشگاه محصولات رسانه‌ای--57350001","57350001");'>
                                        فروشگاه محصولات رسانه‌ای 57350001</option>
                                    <option onclick='CopyToValue(11,"کترینگ و تهیه غذا--58110001","58110001");'>کترینگ و
                                        تهیه غذا 58110001</option>
                                    <option onclick='CopyToValue(11,"بستنی و آبمیوه فروشی--58140003","58140003");'>بستنی
                                        و آبمیوه فروشی 58140003</option>
                                    <option onclick='CopyToValue(11,"رستوران‌های غذاهای آماده--58140004","58140004");'>
                                        رستوران‌های غذاهای آماده 58140004</option>
                                    <option onclick='CopyToValue(11,"فست فود--58140005","58140005");'>فست فود 58140005
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه اینترنتی محصولات دیجیتال (کتاب، فیلم، موسیقی)--58150001","58150001");'>
                                        فروشگاه اینترنتی محصولات دیجیتال (کتاب، فیلم، موسیقی) 58150001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه اینترنتی بازی‌های دیجیتال--58160001","58160001");'>
                                        فروشگاه اینترنتی بازی‌های دیجیتال 58160001</option>
                                    <option
                                        onclick='CopyToValue(11,"کالاهای دیجیتال (نرم افزارهای کاربردی، به غیر از بازی)--58170001","58170001");'>
                                        کالاهای دیجیتال (نرم افزارهای کاربردی، به غیر از بازی) 58170001</option>
                                    <option onclick='CopyToValue(11,"فروش کالاهای دیجیتال--58180001","58180001");'>فروش
                                        کالاهای دیجیتال 58180001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه‌ سمساری و دسته دوم فروشی--59310001","59310001");'>
                                        فروشگاه‌ سمساری و دسته دوم فروشی 59310001</option>
                                    <option
                                        onclick='CopyToValue(11,"عتیقه فروشی (فروش، تعمیر و بازسازی)--59320001","59320001");'>
                                        عتیقه فروشی (فروش، تعمیر و بازسازی) 59320001</option>
                                    <option onclick='CopyToValue(11,"مغازه کارگشایی--59330001","59330001");'>مغازه
                                        کارگشایی 59330001</option>
                                    <option onclick='CopyToValue(11,"انبار اوراق خودرو--59350001","59350001");'>انبار
                                        اوراق خودرو 59350001</option>
                                    <option onclick='CopyToValue(11,"فروشگاه‌ دوچرخه--59400001","59400001");'>فروشگاه‌
                                        دوچرخه 59400001</option>
                                    <option onclick='CopyToValue(11,"تجهیزات سفر و کمپینگ--59410003","59410003");'>
                                        تجهیزات سفر و کمپینگ 59410003</option>
                                    <option onclick='CopyToValue(11,"کتاب فروشی--59420001","59420001");'>کتاب فروشی
                                        59420001</option>
                                    <option onclick='CopyToValue(11,"کتابخانه--59420002","59420002");'>کتابخانه 59420002
                                    </option>
                                    <option onclick='CopyToValue(11,"فروشگاه لوازم التحریر--59430001","59430001");'>
                                        فروشگاه لوازم التحریر 59430001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه اسباب بازی و وسایل سرگرمی--59450001","59450001");'>
                                        فروشگاه اسباب بازی و وسایل سرگرمی 59450001</option>
                                    <option
                                        onclick='CopyToValue(11,"دوربین و تجهیزات عکاسی و فیلم برداری--59460001","59460001");'>
                                        دوربین و تجهیزات عکاسی و فیلم برداری 59460001</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرات دوربین و تجهیزات عکاسی و فیلم برداری--59460002","59460002");'>
                                        تعمیرات دوربین و تجهیزات عکاسی و فیلم برداری 59460002</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش وسایل کادویی و تزئینی--59470002","59470002");'>
                                        فروش وسایل کادویی و تزئینی 59470002</option>
                                    <option onclick='CopyToValue(11,"ساک و چمدان--59480001","59480001");'>ساک و چمدان
                                        59480001</option>
                                    <option onclick='CopyToValue(11,"مصنوعات و ظروف فلزی--59700004","59700004");'>
                                        مصنوعات و ظروف فلزی 59700004</option>
                                    <option onclick='CopyToValue(11,"مصنوعات چوبی و حصیری--59700005","59700005");'>
                                        مصنوعات چوبی و حصیری 59700005</option>
                                    <option onclick='CopyToValue(11,"شیشه و آبگینه--59700006","59700006");'>شیشه و
                                        آبگینه 59700006</option>
                                    <option
                                        onclick='CopyToValue(11,"مصنوعات چرم دست دوز و طبیعی--59700007","59700007");'>
                                        مصنوعات چرم دست دوز و طبیعی 59700007</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش مواد اولیه، دستگاه‌ها و ملزومات صنایع دستی--59700008","59700008");'>
                                        فروش مواد اولیه، دستگاه‌ها و ملزومات صنایع دستی 59700008</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه‌ سکه و تمبر کلکسیونی--59720001","59720001");'>
                                        فروشگاه‌ سکه و تمبر کلکسیونی 59720001</option>
                                    <option onclick='CopyToValue(11,"فروشگاه کالاهای مذهبی--59730001","59730001");'>
                                        فروشگاه کالاهای مذهبی 59730001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش روغن های مراقبتی و درمانی--59770003","59770003");'>
                                        فروش روغن های مراقبتی و درمانی 59770003</option>
                                    <option
                                        onclick='CopyToValue(11,"فروشگاه موی مصنوعی و کلاه گیس--59770004","59770004");'>
                                        فروشگاه موی مصنوعی و کلاه گیس 59770004</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش چوب؛ ذغال سنگ و سایر سوخت های جامد--59830001","59830001");'>
                                        فروش چوب؛ ذغال سنگ و سایر سوخت های جامد 59830001</option>
                                    <option onclick='CopyToValue(11,"فروش نفت به مصرف کنندگان--59830002","59830002");'>
                                        فروش نفت به مصرف کنندگان 59830002</option>
                                    <option onclick='CopyToValue(11,"فروش سوخت هواپیما--59830003","59830003");'>فروش
                                        سوخت هواپیما 59830003</option>
                                    <option onclick='CopyToValue(11,"فروش سوخت قایق و کشتی--59830004","59830004");'>فروش
                                        سوخت قایق و کشتی 59830004</option>
                                    <option
                                        onclick='CopyToValue(11,"توزیع کنندگان و شارژ کپسول گاز--59830005","59830005");'>
                                        توزیع کنندگان و شارژ کپسول گاز 59830005</option>
                                    <option onclick='CopyToValue(11,"گلفروشی--59920001","59920001");'>گلفروشی 59920001
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"فروش گیاهان آپارتمانی و درختچه تزئینی--59920002","59920002");'>
                                        فروش گیاهان آپارتمانی و درختچه تزئینی 59920002</option>
                                    <option
                                        onclick='CopyToValue(11,"عمده فروشی و پخش سیگار و قلیان--59930002","59930002");'>
                                        عمده فروشی و پخش سیگار و قلیان 59930002</option>
                                    <option onclick='CopyToValue(11,"دکه روزنامه فروشی--59940001","59940001");'>دکه
                                        روزنامه فروشی 59940001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش تجهیزات استخرهای خانگی، جکوزی، وان--59960001","59960001");'>
                                        فروش تجهیزات استخرهای خانگی، جکوزی، وان 59960001</option>
                                    <option onclick='CopyToValue(11,"خیمه و پشه بند--59980001","59980001");'>خیمه و پشه
                                        بند 59980001</option>
                                    <option
                                        onclick='CopyToValue(11,"بانک‌ها و موسسات مالی و اعتباری مجاز--60100001","60100001");'>
                                        بانک‌ها و موسسات مالی و اعتباری مجاز 60100001</option>
                                    <option onclick='CopyToValue(11,"صرافی--60510001","60510001");'>صرافی 60510001
                                    </option>
                                    <option onclick='CopyToValue(11,"مشاورین املاک و مستغلات--65130001","65130001");'>
                                        مشاورین املاک و مستغلات 65130001</option>
                                    <option onclick='CopyToValue(11,"اجاره انبار و سوله--65130002","65130002");'>اجاره
                                        انبار و سوله 65130002</option>
                                    <option onclick='CopyToValue(11,"متل (راه‌سرا)--70110003","70110003");'>متل
                                        (راه‌سرا) 70110003</option>
                                    <option onclick='CopyToValue(11,"اردوگاه ورزشی و تفریحی--70320001","70320001");'>
                                        اردوگاه ورزشی و تفریحی 70320001</option>
                                    <option onclick='CopyToValue(11,"خشکشویی--72160001","72160001");'>خشکشویی 72160001
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"قالی‌شویی، مرمت و رفوگری فرش--72170001","72170001");'>
                                        قالی‌شویی، مرمت و رفوگری فرش 72170001</option>
                                    <option onclick='CopyToValue(11,"استودیو عکاسی--72210001","72210001");'>استودیو
                                        عکاسی 72210001</option>
                                    <option onclick='CopyToValue(11,"کفاشی--72510001","72510001");'>کفاشی 72510001
                                    </option>
                                    <option onclick='CopyToValue(11,"تعمیرات انواع کیف--72510002","72510002");'>تعمیرات
                                        انواع کیف 72510002</option>
                                    <option onclick='CopyToValue(11,"خدمات کفن و دفن--72610001","72610001");'>خدمات کفن
                                        و دفن 72610001</option>
                                    <option onclick='CopyToValue(11,"خدمات اجاره انواع لباس--72960001","72960001");'>
                                        خدمات اجاره انواع لباس 72960001</option>
                                    <option onclick='CopyToValue(11,"اجاره لباس عروس و شب--72960002","72960002");'>اجاره
                                        لباس عروس و شب 72960002</option>
                                    <option onclick='CopyToValue(11,"سالن ماساژ درمانی--72970001","72970001");'>سالن
                                        ماساژ درمانی 72970001</option>
                                    <option onclick='CopyToValue(11,"اسپا--72970002","72970002");'>اسپا 72970002
                                    </option>
                                    <option onclick='CopyToValue(11,"تالارهای پذیرایی--72990002","72990002");'>تالارهای
                                        پذیرایی 72990002</option>
                                    <option onclick='CopyToValue(11,"خدمات تبلیغات و بازاریابی--73110001","73110001");'>
                                        خدمات تبلیغات و بازاریابی 73110001</option>
                                    <option onclick='CopyToValue(11,"مؤسسات اعتبارسنجی--73210001","73210001");'>مؤسسات
                                        اعتبارسنجی 73210001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات عکاسی و گرافیک تجاری--73330001","73330001");'>
                                        خدمات عکاسی و گرافیک تجاری 73330001</option>
                                    <option onclick='CopyToValue(11,"عریضه نویسی--73390001","73390001");'>عریضه نویسی
                                        73390001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش کود، سم و داروهای شیمیایی محصولات کشاورزی--73420001","73420001");'>
                                        فروش کود، سم و داروهای شیمیایی محصولات کشاورزی 73420001</option>
                                    <option
                                        onclick='CopyToValue(11,"ارائه انواع خدمات سمپاشی و ضدعفونی--73420002","73420002");'>
                                        ارائه انواع خدمات سمپاشی و ضدعفونی 73420002</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات نظافت، نگهداری و سرایداری--73490001","73490001");'>
                                        خدمات نظافت، نگهداری و سرایداری 73490001</option>
                                    <option onclick='CopyToValue(11,"آژانس کاریابی--73610001","73610001");'>آژانس
                                        کاریابی 73610001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات برنامه نویسی و طراحی سایت--73720001","73720001");'>
                                        خدمات برنامه نویسی و طراحی سایت 73720001</option>
                                    <option onclick='CopyToValue(11,"کافی نت--73790001","73790001");'>کافی نت 73790001
                                    </option>
                                    <option onclick='CopyToValue(11,"تعمیرات و خدمات کامپیوتری--73790002","73790002");'>
                                        تعمیرات و خدمات کامپیوتری 73790002</option>
                                    <option onclick='CopyToValue(11,"شرکت‌های مشاوره مدیریت--73920001","73920001");'>
                                        شرکت‌های مشاوره مدیریت 73920001</option>
                                    <option onclick='CopyToValue(11,"آژانس حفاظتی و امنیتی--73930002","73930002");'>
                                        آژانس حفاظتی و امنیتی 73930002</option>
                                    <option
                                        onclick='CopyToValue(11,"ارائه دهندگان خدمات محافظ شخصی--73930003","73930003");'>
                                        ارائه دهندگان خدمات محافظ شخصی 73930003</option>
                                    <option
                                        onclick='CopyToValue(11,"تعلیم، آموزش و فروش سگ‌های نگهبان--73930004","73930004");'>
                                        تعلیم، آموزش و فروش سگ‌های نگهبان 73930004</option>
                                    <option onclick='CopyToValue(11,"اسکورت و حمل محموله--73930005","73930005");'>اسکورت
                                        و حمل محموله 73930005</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش انواع گاوصندوق و سکیوریتی باکس--73930006","73930006");'>
                                        فروش انواع گاوصندوق و سکیوریتی باکس 73930006</option>
                                    <option onclick='CopyToValue(11,"خدمات اجاره زیورآلات--73940002","73940002");'>خدمات
                                        اجاره زیورآلات 73940002</option>
                                    <option
                                        onclick='CopyToValue(11,"اجاره لوازم و تجهیزات صنعتی--73940003","73940003");'>
                                        اجاره لوازم و تجهیزات صنعتی 73940003</option>
                                    <option
                                        onclick='CopyToValue(11,"اجاره لوازم سفر، کمپینگ و سرگرمی--73940004","73940004");'>
                                        اجاره لوازم سفر، کمپینگ و سرگرمی 73940004</option>
                                    <option onclick='CopyToValue(11,"لابراتور ظهور عکس و فیلم--73950001","73950001");'>
                                        لابراتور ظهور عکس و فیلم 73950001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات بازرگانی وارادت و صادرات--73990003","73990003");'>
                                        خدمات بازرگانی وارادت و صادرات 73990003</option>
                                    <option
                                        onclick='CopyToValue(11,"اجاره ماشین بدون/با راننده--75120001","75120001");'>
                                        اجاره ماشین بدون/با راننده 75120001</option>
                                    <option
                                        onclick='CopyToValue(11,"اجاره دهندگان کامیون و تریلر و ماشین‌آلات سنگین--75130001","75130001");'>
                                        اجاره دهندگان کامیون و تریلر و ماشین‌آلات سنگین 75130001</option>
                                    <option onclick='CopyToValue(11,"پارکینگ و گاراژ--75230001","75230001");'>پارکینگ و
                                        گاراژ 75230001</option>
                                    <option onclick='CopyToValue(11,"صافکاری و گلگیرسازی خودرو--75310001","75310001");'>
                                        صافکاری و گلگیرسازی خودرو 75310001</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرکاران لاستیک خودرو (آپاراتی)--75340001","75340001");'>
                                        تعمیرکاران لاستیک خودرو (آپاراتی) 75340001</option>
                                    <option onclick='CopyToValue(11,"نقاشی اتومبیل--75350001","75350001");'>نقاشی
                                        اتومبیل 75350001</option>
                                    <option onclick='CopyToValue(11,"کارواش--75420001","75420001");'>کارواش 75420001
                                    </option>
                                    <option onclick='CopyToValue(11,"یدک‌کشی و بکسل خودرو--75490001","75490001");'>
                                        یدک‌کشی و بکسل خودرو 75490001</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرکاران لوازم برقی خانگی (به جز یخچال و فریزر)--76220002","76220002");'>
                                        تعمیرکاران لوازم برقی خانگی (به جز یخچال و فریزر) 76220002</option>
                                    <option onclick='CopyToValue(11,"تعمیرکاران یخچال، فریز--76230001","76230001");'>
                                        تعمیرکاران یخچال، فریز 76230001</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرکاران کولرهای گازی، هواساز و دستگاه‌های تهویه هوا--76230002","76230002");'>
                                        تعمیرکاران کولرهای گازی، هواساز و دستگاه‌های تهویه هوا 76230002</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرگاه ساعت مچی و دیواری--76310001","76310001");'>
                                        تعمیرگاه ساعت مچی و دیواری 76310001</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرگاه اشیا قیمتی و نقره جات--76310002","76310002");'>
                                        تعمیرگاه اشیا قیمتی و نقره جات 76310002</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرات و رویه‌کوبی مبلمان--76410001","76410001");'>
                                        تعمیرات و رویه‌کوبی مبلمان 76410001</option>
                                    <option onclick='CopyToValue(11,"آهنگری--76920001","76920001");'>آهنگری 76920001
                                    </option>
                                    <option onclick='CopyToValue(11,"تعمیرات دوچرخه--76990001","76990001");'>تعمیرات
                                        دوچرخه 76990001</option>
                                    <option onclick='CopyToValue(11,"تعمیر لوازم ورزشی--76990002","76990002");'>تعمیر
                                        لوازم ورزشی 76990002</option>
                                    <option onclick='CopyToValue(11,"تعمیر ماشین چاپ--76990003","76990003");'>تعمیر
                                        ماشین چاپ 76990003</option>
                                    <option
                                        onclick='CopyToValue(11,"تعمیرکاران لوازم شخصی برقی (ریش تراش، اتو مو ...)--76990004","76990004");'>
                                        تعمیرکاران لوازم شخصی برقی (ریش تراش، اتو مو ...) 76990004</option>
                                    <option
                                        onclick='CopyToValue(11,"تولید و پخش فیلم و محصولات چندرسانه‌ای--78290001","78290001");'>
                                        تولید و پخش فیلم و محصولات چندرسانه‌ای 78290001</option>
                                    <option onclick='CopyToValue(11,"سینما--78320001","78320001");'>سینما 78320001
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"تهیه‌کنندگان تئاتر و آژانس‌های فروش بلیط تئاتر--79220001","79220001");'>
                                        تهیه‌کنندگان تئاتر و آژانس‌های فروش بلیط تئاتر 79220001</option>
                                    <option onclick='CopyToValue(11,"ارکستر و گروه موسیقی--79290001","79290001");'>
                                        ارکستر و گروه موسیقی 79290001</option>
                                    <option onclick='CopyToValue(11,"برگزارکنندگان کنسرت--79290002","79290002");'>
                                        برگزارکنندگان کنسرت 79290002</option>
                                    <option onclick='CopyToValue(11,"سالن بیلیارد و اسنوکر--79320001","79320001");'>سالن
                                        بیلیارد و اسنوکر 79320001</option>
                                    <option onclick='CopyToValue(11,"سالن بولینگ--79330001","79330001");'>سالن بولینگ
                                        79330001</option>
                                    <option
                                        onclick='CopyToValue(11,"باشگاه های ورزشی حرفه‌ای و قهرمانی--79410002","79410002");'>
                                        باشگاه های ورزشی حرفه‌ای و قهرمانی 79410002</option>
                                    <option onclick='CopyToValue(11,"جاذبه های گردشگری--79910002","79910002");'>جاذبه
                                        های گردشگری 79910002</option>
                                    <option onclick='CopyToValue(11,"با‌غ و موزه گیاه‌شناسی--79910003","79910003");'>
                                        با‌غ و موزه گیاه‌شناسی 79910003</option>
                                    <option onclick='CopyToValue(11,"نمایشگاه گردشگری--79910004","79910004");'>نمایشگاه
                                        گردشگری 79910004</option>
                                    <option onclick='CopyToValue(11,"فروش کنسول های بازی--79930001","79930001");'>فروش
                                        کنسول های بازی 79930001</option>
                                    <option
                                        onclick='CopyToValue(11,"فروش بازی های کامپیوتری و ویدیوئی--79930002","79930002");'>
                                        فروش بازی های کامپیوتری و ویدیوئی 79930002</option>
                                    <option onclick='CopyToValue(11,"گیم‌نت--79940001","79940001");'>گیم‌نت 79940001
                                    </option>
                                    <option onclick='CopyToValue(11,"سیرک--79960001","79960001");'>سیرک 79960001
                                    </option>
                                    <option onclick='CopyToValue(11,"شهربازی--79960002","79960002");'>شهربازی 79960002
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"باشگاه بدنسازی و پرورش اندام--79970001","79970001");'>
                                        باشگاه بدنسازی و پرورش اندام 79970001</option>
                                    <option onclick='CopyToValue(11,"باشگاه تنیس--79970002","79970002");'>باشگاه تنیس
                                        79970002</option>
                                    <option onclick='CopyToValue(11,"مجتمع و باشگاه‌ ورزشی--79970003","79970003");'>
                                        مجتمع و باشگاه‌ ورزشی 79970003</option>
                                    <option onclick='CopyToValue(11,"باشگاه تیراندازی--79970004","79970004");'>باشگاه
                                        تیراندازی 79970004</option>
                                    <option onclick='CopyToValue(11,"باشگاه سوارکاری--79970005","79970005");'>باشگاه
                                        سوارکاری 79970005</option>
                                    <option onclick='CopyToValue(11,"باشگاه صخره نوردی--79970006","79970006");'>باشگاه
                                        صخره نوردی 79970006</option>
                                    <option
                                        onclick='CopyToValue(11,"باشگاه چتر بازی و پاراگلایدر--79970007","79970007");'>
                                        باشگاه چتر بازی و پاراگلایدر 79970007</option>
                                    <option onclick='CopyToValue(11,"زمین و باشگاه گلف--79970008","79970008");'>زمین و
                                        باشگاه گلف 79970008</option>
                                    <option
                                        onclick='CopyToValue(11,"اجاره‌دهندگان هواپیماهای تفریحی، چتربازی، پاراگلایدر، وینگسوت و لوازم پروازهای تفریحی--79990002","79990002");'>
                                        اجاره‌دهندگان هواپیماهای تفریحی، چتربازی، پاراگلایدر، وینگسوت و لوازم پروازهای
                                        تفریحی 79990002</option>
                                    <option onclick='CopyToValue(11,"اجاره دهندگان دوچرخه--79990003","79990003");'>اجاره
                                        دهندگان دوچرخه 79990003</option>
                                    <option
                                        onclick='CopyToValue(11,"اجاره دهندگان موتورسیکلت‌های تفریحی--79990004","79990004");'>
                                        اجاره دهندگان موتورسیکلت‌های تفریحی 79990004</option>
                                    <option onclick='CopyToValue(11,"پیست اسکی--79990005","79990005");'>پیست اسکی
                                        79990005</option>
                                    <option onclick='CopyToValue(11,"پیست اسکیت--79990006","79990006");'>پیست اسکیت
                                        79990006</option>
                                    <option onclick='CopyToValue(11,"سالن تیراندازی (تفریحی)--79990007","79990007");'>
                                        سالن تیراندازی (تفریحی) 79990007</option>
                                    <option
                                        onclick='CopyToValue(11,"موسسات اجاره خودروهای تفریحاتی و خانه‌های متحرک--79990008","79990008");'>
                                        موسسات اجاره خودروهای تفریحاتی و خانه‌های متحرک 79990008</option>
                                    <option onclick='CopyToValue(11,"خدمات دندانپزشکی--80210001","80210001");'>خدمات
                                        دندانپزشکی 80210001</option>
                                    <option onclick='CopyToValue(11,"ارتودنسی--80210002","80210002");'>ارتودنسی 80210002
                                    </option>
                                    <option
                                        onclick='CopyToValue(11,"کسب و کارهای مرتبط با این گروه صنفی--80320000","80320000");'>
                                        کسب و کارهای مرتبط با این گروه صنفی 80320000</option>
                                    <option onclick='CopyToValue(11,"چشم‌پزشک و بینایی‌سنجی--80420001","80420001");'>
                                        چشم‌پزشک و بینایی‌سنجی 80420001</option>
                                    <option onclick='CopyToValue(11,"خدمات عینک و لنز--80430001","80430001");'>خدمات
                                        عینک و لنز 80430001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات پرستاری و مراقبت‌های فردی--80500002","80500002");'>
                                        خدمات پرستاری و مراقبت‌های فردی 80500002</option>
                                    <option onclick='CopyToValue(11,"پرستاران کودک--80500003","80500003");'>پرستاران
                                        کودک 80500003</option>
                                    <option onclick='CopyToValue(11,"تزریقات--80620004","80620004");'>تزریقات 80620004
                                    </option>
                                    <option onclick='CopyToValue(11,"آزمایشگاه‌های پاتولوژی--80710001","80710001");'>
                                        آزمایشگاه‌های پاتولوژی 80710001</option>
                                    <option onclick='CopyToValue(11,"لابراتوارهای دندانپزشکی--80710002","80710002");'>
                                        لابراتوارهای دندانپزشکی 80710002</option>
                                    <option onclick='CopyToValue(11,"مامایی--80990008","80990008");'>مامایی 80990008
                                    </option>
                                    <option onclick='CopyToValue(11,"کایروپراکتور--80990009","80990009");'>کایروپراکتور
                                        80990009</option>
                                    <option onclick='CopyToValue(11,"دفاتر وکالت--81110002","81110002");'>دفاتر وکالت
                                        81110002</option>
                                    <option onclick='CopyToValue(11,"دانشگاه پردیس خودگردان--82200008","82200008");'>
                                        دانشگاه پردیس خودگردان 82200008</option>
                                    <option onclick='CopyToValue(11,"مراکز آموزشی مجازی--82410001","82410001");'>مراکز
                                        آموزشی مجازی 82410001</option>
                                    <option onclick='CopyToValue(11,"موسسات خیریه--83980002","83980002");'>موسسات خیریه
                                        83980002</option>
                                    <option onclick='CopyToValue(11,"سازمان نظام مهندسی--85000001","85000001");'>سازمان
                                        نظام مهندسی 85000001</option>
                                    <option
                                        onclick='CopyToValue(11,"انجمن‌ها و اتحادیه‌های مدنی، اجتماعی و برادری--86410001","86410001");'>
                                        انجمن‌ها و اتحادیه‌های مدنی، اجتماعی و برادری 86410001</option>
                                    <option onclick='CopyToValue(11,"احزاب و سازمان های سیاسی--86510001","86510001");'>
                                        احزاب و سازمان های سیاسی 86510001</option>
                                    <option
                                        onclick='CopyToValue(11,"سایر سازمان‌ها و اتحادیه‌ها (نامذکور در کدهای دیگر)--86990001","86990001");'>
                                        سایر سازمان‌ها و اتحادیه‌ها (نامذکور در کدهای دیگر) 86990001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات آزمون و لابراتور برای سایر کسب وکارها--87340001","87340001");'>
                                        خدمات آزمون و لابراتور برای سایر کسب وکارها 87340001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات حسابداری، حسابرسی و دفترداری--89310001","89310001");'>
                                        خدمات حسابداری، حسابرسی و دفترداری 89310001</option>
                                    <option
                                        onclick='CopyToValue(11,"دادگاه و خدمات قضایی و دادرسی--92110002","92110002");'>
                                        دادگاه و خدمات قضایی و دادرسی 92110002</option>
                                    <option onclick='CopyToValue(11,"جرایم--92220001","92220001");'>جرایم 92220001
                                    </option>
                                    <option onclick='CopyToValue(11,"دهیاری--93990016","93990016");'>دهیاری 93990016
                                    </option>
                                    <option onclick='CopyToValue(11,"دفاتر و ادارات پست دولتی--94020001","94020001");'>
                                        دفاتر و ادارات پست دولتی 94020001</option>
                                    <option onclick='CopyToValue(11,"جمع آوری وجوه دولتی--94050001","94050001");'>جمع
                                        آوری وجوه دولتی 94050001</option>
                                    <option onclick='CopyToValue(11,"رزرو جهت نمایشگاه کتاب--97000001","97000001");'>
                                        رزرو جهت نمایشگاه کتاب 97000001</option>
                                    <option onclick='CopyToValue(11,"قوه قضاییه--98000001","98000001");'>قوه قضاییه
                                        98000001</option>
                                    <option onclick='CopyToValue(11,"ثبت اسناد و املاک کشور--98010001","98010001");'>ثبت
                                        اسناد و املاک کشور 98010001</option>
                                    <option
                                        onclick='CopyToValue(11,"خدمات پرداخت الکترونیکی (پرداخت یاری)--98020001","98020001");'>
                                        خدمات پرداخت الکترونیکی (پرداخت یاری) 98020001</option>
                                    <option
                                        onclick='CopyToValue(11,"رزرو جهت کسب و کارهای ویژه--98030001","98030001");'>
                                        رزرو جهت کسب و کارهای ویژه 98030001</option>
                                </select>
                            </div>
                        </div>
                    </article>

                    <article id='PagingButton'>
                        <input style='display:none;' id='guildcode' name='guildcode' value='17990009'
                            autocomplete='off'></input>
                        <button class='SubmitBtn' type='button' onclick="history.back();">قبلی</button>
                        <button class='SubmitBtn' name='c2lk' value="4066" type='submit'>تأیید</button>
                    </article>
                    <?php } } ?>
                </form>
            </section>
        </section>
    </main>
</body>
<script>
    function CopyToValue(id, name, guildcode) {
        console.log(String(guildcode));
        document.getElementById('guildcode').value = guildcode;
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