<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
     <title>پذیرنده</title>
<?php 
 require_once("{$base_dir}header.php");
?>
    <style>
        main {
            display: block;
            margin: 0 auto;
        }
    </style>

        <section id='MainSection'>
            <form style='display: none;' action='../costumer/.php' id='CostumerView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' action='../document/.php' id='DocumentView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' action='../request/.php' id='RequestView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' action='../terminal/.php' id='TerminalView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' action='../terminal/new/' id='terminal_new' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4280870160'></input>
            </form>
            <form style='display: none;' action='delete.php' id='DeleteCostumer' method='POST'></form>
            <form action='edit/' method='GET' style='display:flex;flex-direction:column;width:100%;'
                enctype='multipart/form-data'>
                <article class='Cadre' style='color: #344767;'>
                    <div style='display:flex;'>
                        <p class='CadreTitle' style='width: calc(100% - 220px);'>اطلاعات شناسایی</p>
                        <div style='display:flex;width:200px;'>
                            <button class='SendButton' form='DeleteCostumer' name='sid' value="3703"
                                style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
                            <button class='SendButton' name='aWRjb2Rl' value="4280870160"
                                style="background-image:url('../../../../../library/images/edit.webp')"></button>
                        </div>
                    </div>
                    <div class='TableRow4'>
                        <button type='submit' class='PagingButton' name='c2lk' value='' form='TerminalView'>نمایش
                            ترمینال</button>
                        <button type='submit' class='PagingButton' name='c2lk' value='' form='RequestView'>نمایش
                            درخواست</button>
                        <button type='submit' class='PagingButton' name='c2lk' value='' form='DocumentView'>نمایش
                            مدارک</button>
                        <button type='submit' class='PagingButton' form='terminal_new'>پایانه جدید</button>
                    </div>
                    <div class='TableRow4'>
                        <input value='تاریخ ثبت:'></input>
                        <input value='1402-11-02'></input>
                        <input value='نوع پذیرنده:'></input>
                        <select name='kind'>
                            <option value=''>انتخاب کنید</option>
                            <option value='1' selected>حقیقی</option>
                            <option value='2'>حقوقی</option>
                        </select>
                    </div>
                    <div class='TableRow4'>
                        <input value='جنسیت:'></input>
                        <select name='gender'>
                            <option value=''>انتخاب کنید</option>
                            <option value='0' selected>مرد</option>
                            <option value='1'>زن</option>
                        </select>
                        <input value='ملیت'></input>
                        <select name='nationality'>
                            <option value=''>انتخاب کنید</option>
                            <option value='0' selected>ایرانی</option>
                            <option value='1'>خارجی</option>
                        </select>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام:'></input>
                        <input value='مهدی'></input>
                        <input value='نام خانوادگی:'></input>
                        <input value='جعفری'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام پدر:'></input>
                        <input value=' شعبان'></input>
                        <input value='محل تولد'></input>
                        <input value='زنجان'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='کد ملی:'></input>
                        <input name='idcode' value='4280870160' maxlength='10'
                            oninput='javascript: if (10 < this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                        <input value='شماره شناسنامه'></input>
                        <input name='oldidcode' value='21608'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='کشور:'></input>
                        <select name='Country'>
                            <option value=''>انتخاب کشور</option>
                            <option value='IR'>ایران</option>
                            <option value='AF'>افغانستان</option>
                            <option value='PK'>پاکستان</option>
                            <option value='TM'>ترکمسنتان</option>
                            <option value='SY'>سوریه</option>
                            <option value='IQ'>عراق</option>
                            <option value='LB'>لبنان</option>
                            <option value='CHI'>چین</option>
                        </select>
                        <input value='تاریخ تولد'></input>
                        <input id='birthday' class='birthday' name='birthday' value='1360/06/20'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='حرف شناسنامه'></input>
                        <input value='ر'></input>
                        <input value='سریال شناسنامه:'></input>
                        <input name='BirthCertificateSeries' value='761529'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='ردیف شناسنامه'></input>
                        <input value='12'></input>
                        <input value='کد پستی:'></input>
                        <input value='4536115638'></input>
                    </div>
                    <div class='TableRow2'>
                        <input style='width:24%;' value='نشانی:'></input>
                        <input style='width:74%;' name='reason'
                            value='زنجان شهرستان ایجرود شهر زرین اباد مرکزی خیابان شهید رسولی کوچه جعفری ۶ پلاک ۱۴۴'
                            placeholder=''></input>
                    </div>
                </article>
                <article class='Cadre' style='color: #344767;'>
                    <div style='display:flex;'>
                        <p class='CadreTitle' style='width: calc(100% - 220px);'>مشخصات فروشگاه</p>
                        <div style='display:flex;width:200px;'>
                            <button class='SendButton' form='DeleteCostumer' name='sid' value="3703"
                                style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
                            <button class='SendButton' name='aWRjb2Rl' value="4280870160"
                                style="background-image:url('../../../../../library/images/edit.webp')"></button>
                        </div>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام فروشگاه:'></input>
                        <input value='میوه فروشی جعفری'></input>
                        <input value='کد مالیاتی:'></input>
                        <input value='2196171734'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='شهر:'></input>
                        <input value='زرین آباد'></input>
                        <input value='استان'></input>
                        <input value='زنجان'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='صنف:'></input>
                        <input value='غلات و حبوبات'></input>
                        <input value='کد صنف:'></input>
                        <input value='54990002'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='تلفن همراه:'></input>
                        <input value='09126412114'></input>
                        <input value='تلفن ثابت:'></input>
                        <input value='024 36226823'></input>
                        <input style='display:none;' value='فکس'></input>
                        <input style='display:none;' value='024 36226823'></input>
                    </div>
                    <div class='TableRow2'>
                        <input style='width:24%;' value='نشانی:'></input>
                        <input style='width:74%;' name='reason'
                            value='زنجان شهرستان ایجرود شهر زرین اباد مرکزی خیابان شهید رسولی کوچه جعفری ۶ پلاک ۱۴۴'
                            placeholder=''></input>
                    </div>
                </article>
                <article class='Cadre' style='color: #344767;'>
                    <div style='display:flex;'>
                        <p class='CadreTitle' style='width: calc(100% - 220px);'>مشخصات معرف نخست</p>
                        <div style='display:flex;width:200px;'>
                            <button class='SendButton' form='DeleteCostumer' name='sid' value="3703"
                                style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
                            <button class='SendButton' name='aWRjb2Rl' value="4280870160"
                                style="background-image:url('../../../../../library/images/edit.webp')"></button>
                        </div>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام:'></input>
                        <input value='محمد'></input>
                        <input value='نام خانوادگی:'></input>
                        <input value='جعفری'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='کد ملی:'></input>
                        <input value='4270936479'></input>
                        <input value='نام پدر'></input>
                        <input value='شعبان'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='تلفن ثابت'></input>
                        <input value='02433246874' maxlength='11'
                            oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                        <input value='تلفن همراه'></input>
                        <input value='09126412114' maxlength='11'
                            oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                    </div>
                    <div class='TableRow2'>
                        <input style='width:24%;' value='نشانی:'></input>
                        <input style='width:74%;' name='reason' value='زنجان روستای زرین اباد مرکزی کوچه جعفری ۴ پ ۱۳۶'
                            placeholder=''></input>
                    </div>
                </article>
                <article class='Cadre' style='color: #344767;'>
                    <div style='display:flex;'>
                        <p class='CadreTitle' style='width: calc(100% - 220px);'>مشخصات معرف دوم</p>
                        <div style='display:flex;width:200px;'>
                            <button class='SendButton' form='DeleteCostumer' name='sid' value="3703"
                                style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
                            <button class='SendButton' name='aWRjb2Rl' value="4280870160"
                                style="background-image:url('../../../../../library/images/edit.webp')"></button>
                        </div>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام:'></input>
                        <input value='ابراهیم'></input>
                        <input value='نام خانوادگی:'></input>
                        <input value='جعفری'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='کد ملی:'></input>
                        <input value='4270529431'></input>
                        <input value='نام پدر'></input>
                        <input value='موسی'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='تلفن ثابت'></input>
                        <input value='02435248822' maxlength='11'
                            oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                        <input value='تلفن همراه'></input>
                        <input value='09104832350' maxlength='11'
                            oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                    </div>
                    <div class='TableRow2'>
                        <input style='width:24%;' value='نشانی:'></input>
                        <input style='width:74%;' name='reason' value='زنجان روستای اینچه رهبری کوچه مسجد '
                            placeholder=''></input>
                    </div>
                </article>
                <article class='Cadre' style='color: #344767;'>
                    <div style='display:flex;'>
                        <p class='CadreTitle' style='width: calc(100% - 220px);'>مشخصات معرف سوم</p>
                        <div style='display:flex;width:200px;'>
                            <button class='SendButton' form='DeleteCostumer' name='sid' value="3703"
                                style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
                            <button class='SendButton' name='aWRjb2Rl' value="4280870160"
                                style="background-image:url('../../../../../library/images/edit.webp')"></button>
                        </div>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام:'></input>
                        <input value='undefined'></input>
                        <input value='نام خانوادگی:'></input>
                        <input value='undefined'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='کد ملی:'></input>
                        <input value='undefined'></input>
                        <input value='نام پدر'></input>
                        <input value='undefined'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='تلفن ثابت'></input>
                        <input value='undefined' maxlength='11'
                            oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                        <input value='تلفن همراه'></input>
                        <input value='undefined' maxlength='11'
                            oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                    </div>
                    <div class='TableRow2'>
                        <input style='width:24%;' value='نشانی:'></input>
                        <input style='width:74%;' name='reason' value='undefined' placeholder=''></input>
                    </div>
                </article>
                </table>
            </form>
        </section>
    </main>
</body>

</html>