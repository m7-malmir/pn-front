<style>
        main {
            display: block;
            margin: 0 auto;
        }
</style>
    <main>
        <form action='delete.php' id='DeleteCostumer' method='POST'></form>
        <form action='' method='POST'
            style='display:flex;flex-direction:column;max-width:1024px;margin:50px auto;' enctype='multipart/form-data'>
            <section class='InfomrationTable'>
                <article>
                    <div class='TitleInfo'>اطلاعات شناسایی</div>
                    <div style='display:flex;width:130px;'>
                        <button class='SendButton' name='c2lk' value="3813"
                            style="background-image:url('<?= ROOT_URL; ?>public/assets/img/GreenCheck.webp')"></button>
                    </div>
                </article>
                <?php

					foreach ($cas_data_arr as $key=> $value) {

						if($value['customer_id']==$key_id){

					?>
                <div class='TablingInfo'>
                    <table>
                        <tr>
                            <th>تاریخ ثبت</th>
                            <td><input name='datep' value='1403-01-09'></input></td>
                        </tr>
                        <tr>
                            <th>جنسیت</th>
                            <td>
                                <select name='gender'>
                                    <option value=''>انتخاب کنید</option>
                                    <option value='0' selected>مرد</option>
                                    <option value='1'>زن</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>نام</th>
                            <td><input name='customer_manager_name' value='<?= $value['customer_manager_name']; ?>' required></input></td>
                            <input type='hidden' id='nameEN' value='aadl'></input>
                            <input type='hidden' id='lastnameEN' value='amiri'></input>
                        </tr>
                        <tr>
                            <th>نام پدر</th>
                            <td><input name='customer_fname' value='<?= $value['customer_fname']; ?>' required></input></td>
                            <input type='hidden' id='fathernameEN' value='mahr'></input>
                        </tr>
                        <tr>
                            <th>کد ملی</th>
                            <td><input readonly name="customer_nation_code" value='<?= $value['customer_nation_code']; ?>' maxlength='10'
                                    oninput='javascript: if (10 < this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'
                                    required></input></td>
                        <tr>
                            <th>محل تولد</th>
                            <td><input name='customer_birth_loc' value='خوی'></input></td>
                        </tr>
                        <input name='idcode' value='2790249695' type='hidden'></input>
                        <tr>
                            <th>کشور</th>
                            <td>
                                <select name='customer_birth_country'>
                                    <option value=''>انتخاب کشور</option>
                                    <option value='ایران' selected>ایران</option>
                                    <option value='افغانستان'>افغانستان</option>
                                    <option value='پاکستان'>پاکستان</option>
                                    <option value='ترکمسنتان'>ترکمسنتان</option>
                                    <option value='سوریه'>سوریه</option>
                                    <option value='عراق'>عراق</option>
                                    <option value='لبنان'>لبنان</option>
                                    <option value='چین'>چین</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>حرف شناسنامه</th>
                            <td>
                                <select name='customer_cert_letter'>
                                    <option value='الف'>الف</option>
                                    <option value='ب'>ب</option>
                                    <option value='ل'>ل</option>
                                    <option value='د' selected>د</option>
                                    <option value='ر'>ر</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>نوع پذیرنده</th>
                            <td>
                                <select name='kind' required>
                                    <option value=''>انتخاب کنید</option>
                                    <option value='1' selected>حقیقی</option>
                                    <option value='2'>حقوقی</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>ملیت</th>
                            <td>
                                <select name='nationality'>
                                    <option value=''>انتخاب کنید</option>
                                    <option value='0' selected>ایرانی</option>
                                    <option value='1'>خارجی</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>نام خانوادگی</th>
                            <td><input name='customer_manager_family' value='<?= $value['customer_manager_family']; ?>' required></input></td>
                        </tr>
                        <tr>
                            <th>تاریخ تولد</th>
                            <td><input id='birthday' class='birthday' name='customer_birth' value='1369/11/10'
                                    required></input></td>
                        </tr>
                        <tr>
                            <th>ش. شناسنامه</th>
                            <td><input name='customer_certid' value='<?= $value['customer_certid']; ?>' required></input></td>
                        </tr>
                        <tr>
                            <th>کد پستی</th>
                            <td><input name='customer_postal_code' value='<?= $value['customer_postal_code']; ?>' maxlength='10'
                                    oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                            </td>
                        </tr>
                        <tr>
                            <th>سریال شناسنامه</th>
                            <td><input name='customer_cert_serial' value='<?= $value['customer_cert_serial']; ?>'></input></td>
                        </tr>
                        <tr>
                            <th>ردیف شناسنامه</th>
                            <td><input name='customer_cert_row' value='<?= $value['customer_cert_row']; ?>'></input></td>
                        </tr>
                    </table>
                </div>
            </section>
            <section class='InfomrationTable'>
                <article>
                    <div class='TitleInfo'>مشخصات معرف</div>
                    <div style='display:flex;width:130px;'>
                        <button class='SendButton' name='c2lk' value="3813"
                            style="background-image:url('<?= ROOT_URL; ?>public/assets/img/GreenCheck.webp')"></button>
                    </div>
                </article>
                <div class='TablingInfo'>
                    <table>
                        <tr>
                            <th>نام</th>
                            <td><input name='cus_repres1_name' value='<?= $value['cus_repres1_name']; ?>'></input></td>
                        </tr>
                        <tr>
                            <th>نام پدر</th>
                            <td><input name='cus_repres1_fname' value='<?= $value['cus_repres1_fname']; ?>'></input></td>
                        </tr>
                        <tr>
                            <th>تلفن ثابت</th>
                            <td><input name='cus_repres1_tel' maxlength='11' value='<?= $value['cus_repres1_tel']; ?>'
                                    oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                            </td>
                        </tr>
                        <tr>
                            <th>نشانی</th>
                            <td colspan='2'><input name='cus_repres1_address' value='<?= $value['cus_repres1_address']; ?>'></input></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>نام خانوادگی</th>
                            <td><input name='cus_repres1_family' value='<?= $value['cus_repres1_family']; ?>'></input></td>
                        </tr>
                        <tr>
                            <th>کد ملی</th>
                            <td><input name='cus_repres1_id' value='<?= $value['cus_repres1_id']; ?>'></input></td>
                        </tr>
                        <tr>
                            <th>موبایل</th>
                            <td><input name='cus_repres1_mobile' maxlength='11' value='<?= $value['cus_repres1_mobile']; ?>'
                                    oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                            </td>
                        </tr>
                        <tr>
                            <th>فروشگاه</th>
                            <td><input name='cus_repres1_store_name' value='<?= $value['cus_repres1_store_name']; ?>'></input></td>
                        </tr>
                    </table>
                </div>
            </section>
            <section class='InfomrationTable'>
                <article>
                    <div class='TitleInfo'>مشخصات معرف دوم</div>
                    <div style='display:flex;width:130px;'>
                        <button class='SendButton' name='c2lk' value="3813"
                            style="background-image:url('<?= ROOT_URL; ?>public/assets/img/GreenCheck.webp')"></button>
                    </div>
                </article>
                <div class='TablingInfo'>
                    <table>
                        <tr>
                            <th>نام</th>
                            <td><input name='cus_repres2_name' value='<?= $value['cus_repres2_name']; ?>'></input></td>
                        </tr>
                        <tr>
                            <th>نام پدر</th>
                            <td><input name='cus_repres2_fname' value='<?= $value['cus_repres2_fname']; ?>'></input></td>
                        </tr>
                        <tr>
                            <th>تلفن ثابت</th>
                            <td><input name='cus_repres2_tel' maxlength='11' value='<?= $value['cus_repres2_tel']; ?>'
                                    oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                            </td>
                        </tr>
                        <tr>
                            <th>نشانی</th>
                            <td colspan='2'><input name='cus_repres2_address' value='<?= $value['cus_repres2_address']; ?>'></input></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>نام خانوادگی</th>
                            <td><input name='cus_repres2_family' value='<?= $value['cus_repres2_family']; ?>'></input></td>
                        </tr>
                        <tr>
                            <th>کد ملی</th>
                            <td><input name='cus_repres2_id' value='<?= $value['cus_repres2_id']; ?>'></input></td>
                        </tr>
                        <tr>
                            <th>موبایل</th>
                            <td><input name='cus_repres2_mobile' maxlength='11' value='<?= $value['cus_repres2_mobile']; ?>'
                                    oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                            </td>
                        </tr>
                        <tr>
                            <th>فروشگاه</th>
                            <td><input name='cus_repres2_store_name' value='<?= $value['cus_repres1_store_name']; ?>'></input></td>
                        </tr>
                    </table>
                </div>
            </section>
            <section class='InfomrationTable'>
                <article>
                    <div class='TitleInfo'>مشخصات معرف سوم</div>
                    <div style='display:flex;width:130px;'>
                        <button class='SendButton' name='c2lk' value="3813"
                            style="background-image:url('<?= ROOT_URL; ?>public/assets/img/GreenCheck.webp')"></button>
                    </div>
                </article>
                <div class='TablingInfo'>
                    <table>
                        <tr>
                            <th>نام</th>
                            <td><input name='presentername3' value='undefined'></input></td>
                        </tr>
                        <tr>
                            <th>نام پدر</th>
                            <td><input name='presenterfathername3' value='undefined'></input></td>
                        </tr>
                        <tr>
                            <th>تلفن ثابت</th>
                            <td><input name='presenterphone3' maxlength='11' value='undefined'
                                    oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                            </td>
                        </tr>
                        <tr>
                            <th>نشانی</th>
                            <td colspan='3'><input name='presenteraddress3' value='undefined'></input></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>نام خانوادگی</th>
                            <td><input name='presenterfamilyname3' value='undefined'></input></td>
                        </tr>
                        <tr>
                            <th>کد ملی</th>
                            <td><input name='presenteridcode3' value='undefined'></input></td>
                        </tr>
                        <tr>
                            <th>موبایل</th>
                            <td><input name='presentermobile3' maxlength='11' value='undefined'
                                    oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                            </td>
                        </tr>
                        <tr>
                            <th>فروشگاه</th>
                            <td><input name='presentershop3' value='undefined'></input></td>
                        </tr>
                    </table>
                </div>
            </section>
            <section class='InfomrationTable'>
                <article>
                    <div class='TitleInfo'>مشخصات فروشگاه</div>
                    <div style='display:flex;width:130px;'>
                        <button class='SendButton' name='c2lk' value="3813"
                            style="background-image:url('<?= ROOT_URL; ?>public/assets/img/GreenCheck.webp')"></button>
                    </div>
                </article>
                <div class='TablingInfo'>
                    <table>
                        <tr>
                            <th>کد مالیاتی</th>
                            <td><input name='tax_code' value='<?= $value['tax_code']; ?>' required></input></td>
                        </tr>
                        <tr>
                            <th>تلفن ثابت</th>
                            <td>
                                <div style='width:calc(100% - 100px);display:flex;'>
                                    <input name='customer_tel' style='width:calc(100% - 50px);' value='<?= $value['customer_tel']; ?>'
                                        maxlength='8'
                                        oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                                    <input style='width:50px;' value='044

' readonly></input>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>نام فروشگاه</th>
                            <td><input name='companyname' value='<?= $value['customer_store_name']; ?>' required></input></td>
                        </tr>
                        <tr>
                            <th>استان</th>
                            <td><input name='province' value=''></input></td>
                        </tr>
                        <tr>
                            <th>نشانی</th>
                            <td colspan='2'><input name='customer_address'
                                    value='<?= $value['customer_address']; ?>'
                                    required></input></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>فکس</th>
                            <td>
                                <div style='width:calc(100% - 100px);display:flex;'>
                                    <input style='width:calc(100% - 50px);' value='36352514' readonly></input>
                                    <input id='telephoneareacode' style='width:50px;' value='044

' readonly></input>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>موبایل</th>
                            <td><input name='customer_mobile' value='<?= $value['customer_mobile']; ?>' maxlength='11'
                                    oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <th>شهر</th>
                            <td>
                                <div class='search_field'
                                    style='position:sticky;display:flex;flex-direction:column;width:100%;'>
                                    <input style='width:100%;' id="SearchFilter11" name="SearchFilter"
                                        placeholder="جستجو شهر" onkeyup="filterItems11(this);" autocomplete='off'
                                        value='<?= $value['customer_city']; ?>'>
                                    <select id="SelectFilter11" name="SelectFilter11" size="4" onChange="update11();"
                                        style='width:100%;display:none;height:150px;position:absolute;top:36px;'
                                        required>
                                        <option value='108012'>تهران تهران</option>
                                        <option value='108015'>تهران دماوند</option>
                                        <option value='108039'>تهران ورامین</option>
                                        <option value='108022'>تهران کهریزک</option>
                                        <option value='108028'>تهران شهریار</option>
                                        <option value='105002'>البرز شهرجدیدهشتگرد</option>
                                        <option value='108001'>تهران اسلامشهر</option>
                                        <option value='118022'>قزوین قزوین</option>
                                        <option value='117010'>فارس آباده</option>
                                        <option value='128001'>مرکزی اراک</option>
                                        <option value='104051'>اصفهان شهرضا</option>
                                        <option value='128033'>مرکزی محلات</option>
                                        <option value='128008'>مرکزی تفرش</option>
                                        <option value='128009'>مرکزی خمین</option>
                                        <option value='128007'>مرکزی آشتیان</option>
                                        <option value='128025'>مرکزی شازند</option>
                                        <option value='128013'>مرکزی دلیجان</option>
                                        <option value='107032'>بوشهر بندرگناوه</option>
                                        <option value='107026'>بوشهر بندرکنگان</option>
                                        <option value='107023'>بوشهر بندردیر</option>
                                        <option value='107005'>بوشهر دلوار</option>
                                        <option value='107001'>بوشهر بوشهر</option>
                                        <option value='104005'>اصفهان اصفهان</option>
                                        <option value='104035'>اصفهان خوانسار</option>
                                        <option value='104072'>اصفهان گلپایگان</option>
                                        <option value='104100'>اصفهان نطنز</option>
                                        <option value='104091'>اصفهان نایین</option>
                                        <option value='104080'>اصفهان سده لنجان</option>
                                        <option value='104001'>اصفهان اردستان</option>
                                        <option value='104042'>اصفهان سمیرم</option>
                                        <option value='104058'>اصفهان فریدونشهر</option>
                                        <option value='104063'>اصفهان فلاورجان</option>
                                        <option value='104032'>اصفهان خمینی شهر</option>
                                        <option value='104049'>اصفهان میمه</option>
                                        <option value='104087'>اصفهان مبارکه</option>
                                        <option value='129006'>هرمزگان بندرعباس</option>
                                        <option value='129010'>هرمزگان بندرلنگه</option>
                                        <option value='129031'>هرمزگان میناب</option>
                                        <option value='129028'>هرمزگان قشم</option>
                                        <option value='129001'>هرمزگان ابوموسی</option>
                                        <option value='129023'>هرمزگان دهبارز</option>
                                        <option value='129016'>هرمزگان بندرجاسک</option>
                                        <option value='129018'>هرمزگان حاجی آباد</option>
                                        <option value='129013'>هرمزگان کیش</option>
                                        <option value='131024'>یزد یزد</option>
                                        <option value='131004'>یزد اردکان</option>
                                        <option value='131008'>یزد تفت</option>
                                        <option value='131006'>یزد بافق</option>
                                        <option value='131018'>یزد مهریز</option>
                                        <option value='131020'>یزد میبد</option>
                                        <option value='113024'>خوزستان بهبهان</option>
                                        <option value='125015'>گیلان رشت</option>
                                        <option value='125003'>گیلان آستارا</option>
                                        <option value='125026'>گیلان رودبار</option>
                                        <option value='125041'>گیلان فومن</option>
                                        <option value='125009'>گیلان تالش</option>
                                        <option value='125038'>گیلان صومعه سرا</option>
                                        <option value='125005'>گیلان آستانه اشرفیه</option>
                                        <option value='110003'>خراسان جنوبی بیرجند</option>
                                        <option value='125044'>گیلان لاهیجان</option>
                                        <option value='111020'>خراسان رضوی تربت حیدریه</option>
                                        <option value='125007'>گیلان بندرانزلی</option>
                                        <option value='125049'>گیلان لنگرود</option>
                                        <option value='117019'>فارس جهرم</option>
                                        <option value='125031'>گیلان رودسر</option>
                                        <option value='122029'>کرمانشاه هرسین</option>
                                        <option value='126010'>لرستان خرم آباد</option>
                                        <option value='126003'>لرستان الیگودرز</option>
                                        <option value='126024'>لرستان کوهدشت</option>
                                        <option value='126018'>لرستان دورود</option>
                                        <option value='126001'>لرستان ازنا</option>
                                        <option value='126007'>لرستان پلدختر</option>
                                        <option value='113031'>خوزستان دزفول</option>
                                        <option value='121019'>کرمان رفسنجان</option>
                                        <option value='101013'>آذربایجان شرقی تبریز</option>
                                        <option value='101049'>آذربایجان شرقی میانه</option>
                                        <option value='101004'>آذربایجان شرقی اهر</option>
                                        <option value='103008'>اردبیل خلخال</option>
                                        <option value='101022'>آذربایجان شرقی سراب</option>
                                        <option value='101042'>آذربایجان شرقی مرند</option>
                                        <option value='103019'>اردبیل مشگین شهر</option>
                                        <option value='101056'>آذربایجان شرقی هشترود</option>
                                        <option value='101011'>آذربایجان شرقی بناب</option>
                                        <option value='101028'>آذربایجان شرقی شبستر</option>
                                        <option value='101009'>آذربایجان شرقی بستان آباد</option>
                                        <option value='101036'>آذربایجان شرقی کلیبر</option>
                                        <option value='101054'>آذربایجان شرقی هریس</option>
                                        <option value='114014'>زنجان زنجان</option>
                                        <option value='114001'>زنجان ابهر</option>
                                        <option value='114007'>زنجان زرین رود</option>
                                        <option value='118015'>قزوین تاکستان</option>
                                        <option value='128020'>مرکزی ساوه</option>
                                        <option value='111044'>خراسان رضوی سبزوار</option>
                                        <option value='103001'>اردبیل اردبیل</option>
                                        <option value='103003'>اردبیل بیله سوار</option>
                                        <option value='103006'>اردبیل پارس آباد</option>
                                        <option value='120021'>کردستان کامیاران</option>
                                        <option value='120013'>کردستان سقز</option>
                                        <option value='120006'>کردستان بیجار</option>
                                        <option value='120020'>کردستان قروه</option>
                                        <option value='120002'>کردستان بانه</option>
                                        <option value='120025'>کردستان مریوان</option>
                                        <option value='120015'>کردستان سنندج</option>
                                        <option value='122017'>کرمانشاه صحنه</option>
                                        <option value='101038'>آذربایجان شرقی مراغه</option>
                                        <option value='102042'>آذربایجان غربی نقده</option>
                                        <option value='102001'>آذربایجان غربی ارومیه</option>
                                        <option value='102012'>آذربایجان غربی پیرانشهر</option>
                                        <option value='102035'>آذربایجان غربی ماکو</option>
                                        <option value='102025'>آذربایجان غربی سردشت</option>
                                        <option value='122001'>کرمانشاه اسلام آبادغرب</option>
                                        <option value='102019' selected>آذربایجان غربی خوی</option>
                                        <option value='102028'>آذربایجان غربی سلماس</option>
                                        <option value='102008'>آذربایجان غربی بوکان</option>
                                        <option value='102029'>آذربایجان غربی شاهین دژ</option>
                                        <option value='102014'>آذربایجان غربی تکاب</option>
                                        <option value='115005'>سمنان سمنان</option>
                                        <option value='115014'>سمنان گرمسار</option>
                                        <option value='115002'>سمنان دامغان</option>
                                        <option value='115008'>سمنان شاهرود</option>
                                        <option value='117051'>فارس فسا</option>
                                        <option value='122020'>کرمانشاه قصرشیرین</option>
                                        <option value='122004'>کرمانشاه پاوه</option>
                                        <option value='122025'>کرمانشاه کنگاور</option>
                                        <option value='122014'>کرمانشاه سرپل ذهاب</option>
                                        <option value='122027'>کرمانشاه گیلانغرب</option>
                                        <option value='122009'>کرمانشاه جوانرود</option>
                                        <option value='122022'>کرمانشاه کرمانشاه</option>
                                        <option value='122016'>کرمانشاه سنقر</option>
                                        <option value='130005'>همدان تویسرکان</option>
                                        <option value='120010'>کردستان دیواندره</option>
                                        <option value='119004'>قم قم</option>
                                        <option value='111053'>خراسان رضوی قوچان</option>
                                        <option value='117063'>فارس کازرون</option>
                                        <option value='130002'>همدان بهار</option>
                                        <option value='130009'>همدان رزن</option>
                                        <option value='130027'>همدان همدان</option>
                                        <option value='130023'>همدان نهاوند</option>
                                        <option value='130013'>همدان کبودرآهنگ</option>
                                        <option value='130001'>همدان اسدآباد</option>
                                        <option value='104069'>اصفهان کاشان</option>
                                        <option value='109001'>چهارمحال وبختیاری اردل</option>
                                        <option value='109012'>چهارمحال وبختیاری شهرکرد</option>
                                        <option value='109002'>چهارمحال وبختیاری بروجن</option>
                                        <option value='109022'>چهارمحال وبختیاری فارسان</option>
                                        <option value='109029'>چهارمحال وبختیاری لردگان</option>
                                        <option value='105009'>البرز کرج</option>
                                        <option value='126006'>لرستان بروجرد</option>
                                        <option value='130019'>همدان ملایر</option>
                                        <option value='102037'>آذربایجان غربی مهاباد</option>
                                        <option value='113006'>خوزستان اهواز</option>
                                        <option value='113045'>خوزستان شوش</option>
                                        <option value='113056'>خوزستان مسجدسلیمان</option>
                                        <option value='113048'>خوزستان شوشتر</option>
                                        <option value='113008'>خوزستان ایذه</option>
                                        <option value='113039'>خوزستان رامهرمز</option>
                                        <option value='113004'>خوزستان اندیمشک</option>
                                        <option value='113041'>خوزستان شادگان</option>
                                        <option value='113021'>خوزستان بندرماهشهر</option>
                                        <option value='113013'>خوزستان باغ ملک</option>
                                        <option value='102040'>آذربایجان غربی میاندوآب</option>
                                        <option value='104097'>اصفهان نجف آباد</option>
                                        <option value='113026'>خوزستان خرمشهر</option>
                                        <option value='113011'>خوزستان آبادان</option>
                                        <option value='111073'>خراسان رضوی نیشابور</option>
                                        <option value='117044'>فارس شیراز</option>
                                        <option value='117005'>فارس اقلید</option>
                                        <option value='117028'>فارس داراب</option>
                                        <option value='117083'>فارس مرودشت</option>
                                        <option value='117053'>فارس فیروزآباد</option>
                                        <option value='117093'>فارس نی ریز</option>
                                        <option value='117002'>فارس استهبان</option>
                                        <option value='106001'>ایلام ایلام</option>
                                        <option value='106011'>ایلام دهلران</option>
                                        <option value='106021'>ایلام مهران</option>
                                        <option value='106009'>ایلام دره شهر</option>
                                        <option value='123016'>کهگیلویه وبویراحمد دوگنبدان</option>
                                        <option value='121054'>کرمان کرمان</option>
                                        <option value='121013'>کرمان جیرفت</option>
                                        <option value='121031'>کرمان سیرجان</option>
                                        <option value='121004'>کرمان بافت</option>
                                        <option value='121006'>کرمان بردسیر</option>
                                        <option value='121027'>کرمان زرند</option>
                                        <option value='121038'>کرمان شهربابک</option>
                                        <option value='121058'>کرمان کهنوج</option>
                                        <option value='116012'>سیستان وبلوچستان زاهدان</option>
                                        <option value='116001'>سیستان وبلوچستان ایرانشهر</option>
                                        <option value='116011'>سیستان وبلوچستان زابل</option>
                                        <option value='116005'>سیستان وبلوچستان چابهار</option>
                                        <option value='116017'>سیستان وبلوچستان سراوان</option>
                                        <option value='116007'>سیستان وبلوچستان خاش</option>
                                        <option value='116033'>سیستان وبلوچستان نیک شهر</option>
                                        <option value='111062'>خراسان رضوی مشهد</option>
                                        <option value='111015'>خراسان رضوی تربت جام</option>
                                        <option value='112009'>خراسان شمالی شیروان</option>
                                        <option value='111060'>خراسان رضوی گناباد</option>
                                        <option value='111055'>خراسان رضوی کاشمر</option>
                                        <option value='111036'>خراسان رضوی درگز</option>
                                        <option value='110016'>خراسان جنوبی فردوس</option>
                                        <option value='110027'>خراسان جنوبی طبس</option>
                                        <option value='112001'>خراسان شمالی اسفراین</option>
                                        <option value='111009'>خراسان رضوی تایباد</option>
                                        <option value='110022'>خراسان جنوبی قاین</option>
                                        <option value='112003'>خراسان شمالی بجنورد</option>
                                        <option value='111025'>خراسان رضوی چناران</option>
                                        <option value='111029'>خراسان رضوی خواف</option>
                                        <option value='110025'>خراسان جنوبی نهبندان</option>
                                        <option value='111046'>خراسان رضوی سرخس</option>
                                        <option value='111050'>خراسان رضوی فریمان</option>
                                        <option value='124019'>گلستان گرگان</option>
                                        <option value='124023'>گلستان گنبدکاووس</option>
                                        <option value='124025'>گلستان مینودشت</option>
                                        <option value='127006'>مازندران بابل</option>
                                        <option value='127012'>مازندران بابلسر</option>
                                        <option value='127040'>مازندران قائم شهر</option>
                                        <option value='127043'>مازندران محمودآباد</option>
                                        <option value='127029'>مازندران ساری</option>
                                        <option value='127052'>مازندران نوشهر</option>
                                        <option value='127050'>مازندران نور</option>
                                        <option value='124014'>گلستان کردکوی</option>
                                        <option value='127015'>مازندران بهشهر</option>
                                        <option value='127024'>مازندران چالوس</option>
                                        <option value='127018'>مازندران تنکابن</option>
                                        <option value='127027'>مازندران رامسر</option>
                                        <option value='124008'>گلستان بندرترکمن</option>
                                        <option value='124012'>گلستان علی آباد</option>
                                        <option value='108016'>تهران رودهن</option>
                                        <option value='108011'>تهران پردیس</option>
                                        <option value='108010'>تهران بومهن</option>
                                        <option value='127001'>مازندران آمل</option>
                                        <option value='127048'>مازندران چمستان</option>
                                        <option value='109004'>چهارمحال وبختیاری سفیددشت</option>
                                        <option value='121052'>کرمان شهداد</option>
                                        <option value='121002'>کرمان امین شهر</option>
                                        <option value='119001'>قم جعفریه</option>
                                        <option value='121061'>کرمان منوجان</option>
                                        <option value='131001'>یزد ابرکوه</option>
                                        <option value='118007'>قزوین ارداق</option>
                                        <option value='125020'>گیلان پره سر</option>
                                        <option value='125021'>گیلان رضوانشهر</option>
                                        <option value='125037'>گیلان شفت</option>
                                        <option value='125004'>گیلان لوندویل</option>
                                        <option value='103005'>اردبیل اصلاندوز</option>
                                        <option value='103014'>اردبیل گرمی</option>
                                        <option value='131012'>یزد اشکذر</option>
                                        <option value='125006'>گیلان کیاشهر</option>
                                        <option value='103004'>اردبیل جعفرآباد</option>
                                        <option value='121011'>کرمان بم</option>
                                        <option value='109025'>چهارمحال وبختیاری شلمزار</option>
                                        <option value='131010'>یزد مروست</option>
                                        <option value='121056'>کرمان ماهان</option>
                                        <option value='125012'>گیلان لیسار</option>
                                        <option value='127039'>مازندران فریدونکنار</option>
                                        <option value='121003'>کرمان انار</option>
                                        <option value='131022'>یزد زارچ</option>
                                        <option value='125001'>گیلان املش</option>
                                        <option value='125014'>گیلان خمام</option>
                                        <option value='129020'>هرمزگان خمیر</option>
                                        <option value='111007'>خراسان رضوی شاندیز</option>
                                        <option value='121049'>کرمان چترود</option>
                                        <option value='129014'>هرمزگان پارسیان</option>
                                        <option value='104045'>اصفهان شاهین شهر</option>
                                        <option value='121034'>کرمان جوزم</option>
                                        <option value='121050'>کرمان راین</option>
                                        <option value='121016'>کرمان راور</option>
                                        <option value='125025'>گیلان رستم آباد</option>
                                        <option value='121040'>کرمان عنبرآباد</option>
                                        <option value='121044'>کرمان قلعه گنج</option>
                                        <option value='121021'>کرمان کشکوییه</option>
                                        <option value='121059'>کرمان کوهبنان</option>
                                        <option value='121028'>کرمان یزدان شهر</option>
                                        <option value='121060'>کرمان کیانشهر</option>
                                        <option value='125030'>گیلان رحیم آباد</option>
                                        <option value='125035'>گیلان سیاهکل</option>
                                        <option value='125018'>گیلان لشت نشا</option>
                                        <option value='125028'>گیلان منجیل</option>
                                        <option value='125051'>گیلان ماسال</option>
                                        <option value='125032'>گیلان کلاچای</option>
                                        <option value='125029'>گیلان چابکسر</option>
                                        <option value='129002'>هرمزگان بستک</option>
                                        <option value='129012'>هرمزگان کنگ</option>
                                        <option value='111008'>خراسان رضوی طرقبه</option>
                                        <option value='104006'>اصفهان بهارستان</option>
                                        <option value='104022'>اصفهان خورزوق</option>
                                        <option value='104081'>اصفهان فولادشهر</option>
                                        <option value='104065'>اصفهان کلیشادوسودرجان</option>
                                        <option value='104096'>اصفهان گلدشت</option>
                                        <option value='127022'>مازندران جویبار</option>
                                        <option value='127002'>مازندران دابودشت</option>
                                        <option value='127025'>مازندران کلاردشت</option>
                                        <option value='127028'>مازندران کتالم وسادات شهر</option>
                                        <option value='127036'>مازندران سلمان شهر</option>
                                        <option value='127010'>مازندران گلوگاه</option>
                                        <option value='127045'>مازندران نکا</option>
                                        <option value='108023'>تهران فشم</option>
                                        <option value='108024'>تهران لواسان</option>
                                        <option value='108033'>تهران فیروزکوه</option>
                                        <option value='121048'>کرمان جوپار</option>
                                        <option value='121035'>کرمان خاتون آباد</option>
                                        <option value='121057'>کرمان محی آباد</option>
                                        <option value='125036'>گیلان احمدسرگوراب</option>
                                        <option value='125016'>گیلان سنگر</option>
                                        <option value='121001'>کرمان ارزوییه</option>
                                        <option value='104018'>اصفهان آران وبیدگل</option>
                                        <option value='130004'>همدان لالجین</option>
                                        <option value='104064'>اصفهان قهدریجان</option>
                                        <option value='127044'>مازندران سورک</option>
                                        <option value='103011'>اردبیل سرعین</option>
                                        <option value='131007'>یزد بهاباد</option>
                                        <option value='109014'>چهارمحال وبختیاری فرخ شهر</option>
                                        <option value='103022'>اردبیل نمین</option>
                                        <option value='131011'>یزد هرات</option>
                                        <option value='118019'>قزوین اقبالیه</option>
                                        <option value='118005'>قزوین آبیک</option>
                                        <option value='118008'>قزوین آبگرم</option>
                                        <option value='118011'>قزوین دانسفهان</option>
                                        <option value='109023'>چهارمحال وبختیاری چلگرد</option>
                                        <option value='118024'>قزوین محمودآبادنمونه</option>
                                        <option value='118013'>قزوین شال</option>
                                        <option value='125017'>گیلان کوچصفهان</option>
                                        <option value='118010'>قزوین بویین زهرا</option>
                                        <option value='125027'>گیلان لوشان</option>
                                        <option value='118009'>قزوین آوج</option>
                                        <option value='125008'>گیلان اسالم</option>
                                        <option value='117079'>فارس لامرد</option>
                                        <option value='125011'>گیلان حویق</option>
                                        <option value='125047'>گیلان شلمان</option>
                                        <option value='117023'>فارس خرامه</option>
                                        <option value='125042'>گیلان ماسوله</option>
                                        <option value='117001'>فارس ارسنجان</option>
                                        <option value='121023'>کرمان رودبار</option>
                                        <option value='118001'>قزوین الوند</option>
                                        <option value='121043'>کرمان فهرج</option>
                                        <option value='104015'>اصفهان هرند</option>
                                        <option value='108006'>تهران پاکدشت</option>
                                        <option value='118004'>قزوین محمدیه</option>
                                        <option value='105006'>البرز طالقان</option>
                                        <option value='103010'>اردبیل هشتجین</option>
                                        <option value='103024'>اردبیل نیر</option>
                                        <option value='110011'>خراسان جنوبی سرایان</option>
                                        <option value='130011'>همدان فامنین</option>
                                        <option value='102032'>آذربایجان غربی شوط</option>
                                        <option value='118003'>قزوین شریفیه</option>
                                        <option value='105008'>البرز آسارا</option>
                                        <option value='105007'>البرز اشتهارد</option>
                                        <option value='105001'>البرز چهارباغ</option>
                                        <option value='105005'>البرز هشتگرد</option>
                                        <option value='105010'>البرز کمال شهر</option>
                                        <option value='105003'>البرز کوهسار</option>
                                        <option value='105011'>البرز گرمدره</option>
                                        <option value='105012'>البرز ماهدشت</option>
                                        <option value='105013'>البرز محمدشهر</option>
                                        <option value='105014'>البرز مشکین دشت</option>
                                        <option value='105016'>البرز نظرآباد</option>
                                        <option value='113001'>خوزستان امیدیه</option>
                                        <option value='102010'>آذربایجان غربی پلدشت</option>
                                        <option value='102006'>آذربایجان غربی اشنویه</option>
                                        <option value='108036'>تهران ملارد</option>
                                        <option value='101016'>آذربایجان شرقی جلفا</option>
                                        <option value='120009'>کردستان دهگلان</option>
                                        <option value='111057'>خراسان رضوی کلات</option>
                                        <option value='107007'>بوشهر جم</option>
                                        <option value='107028'>بوشهر سیراف</option>
                                        <option value='109010'>چهارمحال وبختیاری سودجان</option>
                                        <option value='104093'>اصفهان دهق</option>
                                        <option value='121015'>کرمان رابر</option>
                                        <option value='109026'>چهارمحال وبختیاری گهرو</option>
                                        <option value='109027'>چهارمحال وبختیاری ناغان</option>
                                        <option value='108002'>تهران چهاردانگه</option>
                                        <option value='107029'>بوشهر عسلویه</option>
                                        <option value='127026'>مازندران مرزن آباد</option>
                                        <option value='110024'>خراسان رضوی شوسف</option>
                                        <option value='108009'>تهران پیشوا</option>
                                        <option value='111024'>خراسان رضوی نقاب</option>
                                        <option value='109013'>چهارمحال وبختیاری طاقانک</option>
                                        <option value='108018'>تهران رباط کریم</option>
                                        <option value='105015'>البرز تنکمان</option>
                                        <option value='123001'>کهگیلویه وبویراحمد باشت</option>
                                        <option value='113054'>خوزستان گتوند</option>
                                        <option value='122028'>کرمانشاه بیستون</option>
                                        <option value='123006'>کهگیلویه وبویراحمد یاسوج</option>
                                        <option value='121047'>کرمان باغین</option>
                                        <option value='116022'>سیستان وبلوچستان راسک</option>
                                        <option value='122002'>کرمانشاه حمیل</option>
                                        <option value='108040'>تهران شهرجدید پرند</option>
                                        <option value='114015'>زنجان آب بر</option>
                                        <option value='107009'>بوشهر آب پخش</option>
                                        <option value='101006'>آذربایجان شرقی آذرشهر</option>
                                        <option value='128023'>مرکزی آستانه سربند</option>
                                        <option value='101001'>آذربایجان شرقی اسکو</option>
                                        <option value='124005'>گلستان آق قلا</option>
                                        <option value='127005'>مازندران امیرکلا</option>
                                        <option value='102034'>آذربایجان غربی بازرگان</option>
                                        <option value='107010'>بوشهر برازجان</option>
                                        <option value='129011'>هرمزگان چارک</option>
                                        <option value='107025'>بوشهر بندردیلم</option>
                                        <option value='122007'>کرمانشاه ازگله</option>
                                        <option value='129003'>هرمزگان جناح</option>
                                        <option value='123007'>کهگیلویه وبویراحمد چرام</option>
                                        <option value='128012'>مرکزی خنداب</option>
                                        <option value='104009'>اصفهان خوراسگان</option>
                                        <option value='107017'>بوشهر خورموج</option>
                                        <option value='104055'>اصفهان داران</option>
                                        <option value='123011'>کهگیلویه وبویراحمد دهدشت</option>
                                        <option value='122012'>کرمانشاه روانسر</option>
                                        <option value='109009'>چهارمحال وبختیاری سامان</option>
                                        <option value='101015'>آذربایجان شرقی سردرود</option>
                                        <option value='123010'>کهگیلویه وبویراحمد سی سخت</option>
                                        <option value='114010'>زنجان قیدار</option>
                                        <option value='124015'>گلستان کلاله</option>
                                        <option value='128031'>مرکزی کمیجان</option>
                                        <option value='115017'>سمنان مهدی شهر</option>
                                        <option value='101018'>آذربایجان شرقی هادیشهر</option>
                                        <option value='109017'>چهارمحال وبختیاری هفشجان</option>
                                        <option value='114006'>زنجان زرین آباد</option>
                                        <option value='114004'>زنجان هیدج</option>
                                        <option value='114003'>زنجان صایین قلعه</option>
                                        <option value='109011'>چهارمحال وبختیاری سورشجان</option>
                                        <option value='122010'>کرمانشاه کرند</option>
                                        <option value='111002'>خراسان رضوی بجستان</option>
                                        <option value='111005'>خراسان رضوی بردسکن</option>
                                        <option value='111027'>خراسان رضوی خلیل آباد</option>
                                        <option value='111066'>خراسان رضوی فیض آباد</option>
                                        <option value='111032'>خراسان رضوی قاسم آباد</option>
                                        <option value='101025'>آذربایجان شرقی تسوج</option>
                                        <option value='104027'>اصفهان تیران</option>
                                        <option value='101014'>آذربایجان شرقی خسروشهر</option>
                                        <option value='104024'>اصفهان دولت آباد</option>
                                        <option value='104079'>اصفهان زرین شهر</option>
                                        <option value='113057'>خوزستان هفتگل</option>
                                        <option value='113037'>خوزستان رامشیر</option>
                                        <option value='113059'>خوزستان هندیجان</option>
                                        <option value='117074'>فارس لار</option>
                                        <option value='114012'>زنجان خرمدره</option>
                                        <option value='117085'>فارس نورآباد</option>
                                        <option value='114017'>زنجان دندی</option>
                                        <option value='101024'>آذربایجان شرقی مهربان</option>
                                        <option value='101045'>آذربایجان شرقی ملکان</option>
                                        <option value='129025'>هرمزگان سیریک</option>
                                        <option value='101008'>آذربایجان شرقی ممقان</option>
                                        <option value='104098'>اصفهان بادرود</option>
                                        <option value='117026'>فارس خنج</option>
                                        <option value='126019'>لرستان الشتر</option>
                                        <option value='110002'>خراسان جنوبی بشرویه</option>
                                        <option value='107002'>بوشهر چغادک</option>
                                        <option value='128030'>مرکزی فرمهین</option>
                                        <option value='128019'>مرکزی مامونیه</option>
                                        <option value='128027'>مرکزی مهاجران</option>
                                        <option value='101007'>آذربایجان شرقی گوگان</option>
                                        <option value='104023'>اصفهان دستگرد</option>
                                        <option value='101031'>آذربایجان شرقی صوفیان</option>
                                        <option value='124013'>گلستان فاضل آباد</option>
                                        <option value='110013'>خراسان جنوبی سربیشه</option>
                                        <option value='104033'>اصفهان درچه</option>
                                        <option value='125013'>گیلان خشکبیجار</option>
                                        <option value='104030'>اصفهان چادگان</option>
                                        <option value='110026'>خراسان جنوبی دیهوک</option>
                                        <option value='101034'>آذربایجان شرقی عجب شیر</option>
                                        <option value='106003'>ایلام ایوان</option>
                                        <option value='106005'>ایلام آبدانان</option>
                                        <option value='113036'>خوزستان سوسنگرد</option>
                                        <option value='115006'>سمنان بسطام</option>
                                        <option value='117014'>فارس بوانات</option>
                                        <option value='109008'>چهارمحال وبختیاری بن</option>
                                        <option value='103012'>اردبیل گیوی</option>
                                        <option value='117068'>فارس اوز</option>
                                        <option value='117036'>فارس بیضا</option>
                                        <option value='117041'>فارس داریان</option>
                                        <option value='117031'>فارس مصیری</option>
                                        <option value='117042'>فارس زرقان</option>
                                        <option value='117038'>فارس سروستان</option>
                                        <option value='117017'>فارس سعادت شهر</option>
                                        <option value='117024'>فارس صفاشهر</option>
                                        <option value='117025'>فارس قادرآباد</option>
                                        <option value='117057'>فارس قیر</option>
                                        <option value='117066'>فارس کوار</option>
                                        <option value='117067'>فارس گراش</option>
                                        <option value='104011'>اصفهان کوهپایه</option>
                                        <option value='127037'>مازندران عباس آباد</option>
                                        <option value='117054'>فارس میمند</option>
                                        <option value='127034'>مازندران زیرآب</option>
                                        <option value='101029'>آذربایجان شرقی شرفخانه</option>
                                        <option value='116015'>سیستان وبلوچستان زهک</option>
                                        <option value='124006'>گلستان بندرگز</option>
                                        <option value='127035'>مازندران شیرگاه</option>
                                        <option value='124016'>گلستان گالیکش</option>
                                        <option value='127021'>مازندران نشتارود</option>
                                        <option value='104094'>اصفهان علویجه</option>
                                        <option value='127017'>مازندران رستمکلا</option>
                                        <option value='127033'>مازندران پل سفید</option>
                                        <option value='101050'>آذربایجان شرقی بخشایش</option>
                                        <option value='104076'>اصفهان چرمهین</option>
                                        <option value='101026'>آذربایجان شرقی خامنه</option>
                                        <option value='116037'>سیستان وبلوچستان دوست محمد</option>
                                        <option value='116036'>سیستان وبلوچستان محمدآباد</option>
                                        <option value='116028'>سیستان وبلوچستان زابلی</option>
                                        <option value='116027'>سیستان وبلوچستان کنارک</option>
                                        <option value='116013'>سیستان وبلوچستان میرجاوه</option>
                                        <option value='116009'>سیستان وبلوچستان گلمورتی</option>
                                        <option value='116023'>سیستان وبلوچستان سرباز</option>
                                        <option value='104016'>اصفهان ورزنه</option>
                                        <option value='124010'>گلستان دلند</option>
                                        <option value='117047'>فارس فراشبند</option>
                                        <option value='101002'>آذربایجان شرقی ایلخچی</option>
                                        <option value='101003'>آذربایجان شرقی سهند</option>
                                        <option value='101005'>آذربایجان شرقی هوراند</option>
                                        <option value='101010'>آذربایجان شرقی تیکمه داش</option>
                                        <option value='101012'>آذربایجان شرقی باسمنج</option>
                                        <option value='101017'>آذربایجان شرقی سیه رود</option>
                                        <option value='101019'>آذربایجان شرقی قره آغاج</option>
                                        <option value='101020'>آذربایجان شرقی خمارلو</option>
                                        <option value='101021'>آذربایجان شرقی دوزدوزان</option>
                                        <option value='101023'>آذربایجان شرقی شربیان</option>
                                        <option value='101027'>آذربایجان شرقی سیس</option>
                                        <option value='101030'>آذربایجان شرقی شندآباد</option>
                                        <option value='101032'>آذربایجان شرقی کوزه کنان</option>
                                        <option value='101033'>آذربایجان شرقی وایقان</option>
                                        <option value='101035'>آذربایجان شرقی آبش احمد</option>
                                        <option value='101037'>آذربایجان شرقی خداجو</option>
                                        <option value='101039'>آذربایجان شرقی بناب جدید</option>
                                        <option value='101040'>آذربایجان شرقی زنوز</option>
                                        <option value='101041'>آذربایجان شرقی کشکسرای</option>
                                        <option value='101043'>آذربایجان شرقی یامچی</option>
                                        <option value='101044'>آذربایجان شرقی لیلان</option>
                                        <option value='101046'>آذربایجان شرقی آقکند</option>
                                        <option value='101047'>آذربایجان شرقی ترک</option>
                                        <option value='101048'>آذربایجان شرقی ترکمانچای</option>
                                        <option value='101051'>آذربایجان شرقی خواجه</option>
                                        <option value='101052'>آذربایجان شرقی زرنق</option>
                                        <option value='101053'>آذربایجان شرقی کلوانق</option>
                                        <option value='101055'>آذربایجان شرقی نظرکهریزی</option>
                                        <option value='101057'>آذربایجان شرقی خاروانا</option>
                                        <option value='101058'>آذربایجان شرقی ورزقان</option>
                                        <option value='102002'>آذربایجان غربی سرو</option>
                                        <option value='102003'>آذربایجان غربی سیلوانه</option>
                                        <option value='102004'>آذربایجان غربی قوشچی</option>
                                        <option value='102005'>آذربایجان غربی نوشین</option>
                                        <option value='102007'>آذربایجان غربی نالوس</option>
                                        <option value='102009'>آذربایجان غربی سیمینه</option>
                                        <option value='102011'>آذربایجان غربی نازک علیا</option>
                                        <option value='102013'>آذربایجان غربی گردکشانه</option>
                                        <option value='102015'>آذربایجان غربی آواجیق</option>
                                        <option value='102016'>آذربایجان غربی سیه چشمه</option>
                                        <option value='102018'>آذربایجان غربی ایواوغلی</option>
                                        <option value='102020'>آذربایجان غربی دیزج دیز</option>
                                        <option value='102021'>آذربایجان غربی زرآباد</option>
                                        <option value='102022'>آذربایجان غربی فیرورق</option>
                                        <option value='102023'>آذربایجان غربی قطور</option>
                                        <option value='102024'>آذربایجان غربی ربط</option>
                                        <option value='129004'>هرمزگان سردشت</option>
                                        <option value='102026'>آذربایجان غربی میرآباد</option>
                                        <option value='102027'>آذربایجان غربی تازه شهر</option>
                                        <option value='102030'>آذربایجان غربی کشاورز</option>
                                        <option value='102031'>آذربایجان غربی محمودآباد</option>
                                        <option value='102033'>آذربایجان غربی مرگنلر</option>
                                        <option value='102036'>آذربایجان غربی خلیفان</option>
                                        <option value='104003'>اصفهان مهاباد</option>
                                        <option value='102038'>آذربایجان غربی باروق</option>
                                        <option value='102039'>آذربایجان غربی چهاربرج</option>
                                        <option value='102041'>آذربایجان غربی محمدیار</option>
                                        <option value='103002'>اردبیل هیر</option>
                                        <option value='103007'>اردبیل تازه کند</option>
                                        <option value='103009'>اردبیل کلور</option>
                                        <option value='103013'>اردبیل تازه کندانگوت</option>
                                        <option value='103015'>اردبیل رضی</option>
                                        <option value='103016'>اردبیل فخرآباد</option>
                                        <option value='103017'>اردبیل لاهرود</option>
                                        <option value='103018'>اردبیل مرادلو</option>
                                        <option value='103020'>اردبیل آبی بیگلو</option>
                                        <option value='103021'>اردبیل عنبران</option>
                                        <option value='103023'>اردبیل کوراییم</option>
                                        <option value='131009'>یزد نیر</option>
                                        <option value='104002'>اصفهان زواره</option>
                                        <option value='104004'>اصفهان اژیه</option>
                                        <option value='104007'>اصفهان تودشک</option>
                                        <option value='104008'>اصفهان حسن اباد</option>
                                        <option value='104010'>اصفهان سگزی</option>
                                        <option value='104012'>اصفهان محمدآباد</option>
                                        <option value='104013'>اصفهان نصرآباد</option>
                                        <option value='104014'>اصفهان نیک آباد</option>
                                        <option value='104017'>اصفهان ابوزیدآباد</option>
                                        <option value='104019'>اصفهان سفیدشهر</option>
                                        <option value='104020'>اصفهان نوش آباد</option>
                                        <option value='104021'>اصفهان حبیب آباد</option>
                                        <option value='111041'>خراسان رضوی دولت آباد</option>
                                        <option value='104025'>اصفهان شاپورآباد</option>
                                        <option value='104026'>اصفهان کمشچه</option>
                                        <option value='104028'>اصفهان رضوانشهر</option>
                                        <option value='104029'>اصفهان عسگران</option>
                                        <option value='104031'>اصفهان رزوه</option>
                                        <option value='104034'>اصفهان کوشک</option>
                                        <option value='104036'>اصفهان جندق</option>
                                        <option value='104037'>اصفهان خور</option>
                                        <option value='104038'>اصفهان فرخی</option>
                                        <option value='104039'>اصفهان دهاقان</option>
                                        <option value='104040'>اصفهان گلشن</option>
                                        <option value='104041'>اصفهان حنا</option>
                                        <option value='104043'>اصفهان کمه</option>
                                        <option value='104044'>اصفهان ونک</option>
                                        <option value='104046'>اصفهان گرگاب</option>
                                        <option value='104047'>اصفهان گزبرخوار</option>
                                        <option value='104048'>اصفهان لای بید</option>
                                        <option value='104050'>اصفهان وزوان</option>
                                        <option value='104052'>اصفهان منظریه</option>
                                        <option value='104053'>اصفهان افوس</option>
                                        <option value='104054'>اصفهان بویین ومیاندشت</option>
                                        <option value='104056'>اصفهان دامنه</option>
                                        <option value='104057'>اصفهان برف انبار</option>
                                        <option value='104059'>اصفهان ابریشم</option>
                                        <option value='104060'>اصفهان ایمانشهر</option>
                                        <option value='104061'>اصفهان بهاران شهر</option>
                                        <option value='104062'>اصفهان پیربکران</option>
                                        <option value='104066'>اصفهان برزک</option>
                                        <option value='104067'>اصفهان جوشقان وکامو</option>
                                        <option value='104068'>اصفهان قمصر</option>
                                        <option value='104070'>اصفهان مشکات</option>
                                        <option value='104071'>اصفهان نیاسر</option>
                                        <option value='104073'>اصفهان گلشهر</option>
                                        <option value='104074'>اصفهان گوگد</option>
                                        <option value='104075'>اصفهان باغ بهادران</option>
                                        <option value='104077'>اصفهان چمگردان</option>
                                        <option value='104078'>اصفهان زاینده رود</option>
                                        <option value='104082'>اصفهان ورنامخواست</option>
                                        <option value='104083'>اصفهان دیزیچه</option>
                                        <option value='104084'>اصفهان زیباشهر</option>
                                        <option value='104085'>اصفهان طالخونچه</option>
                                        <option value='104086'>اصفهان کرکوند</option>
                                        <option value='104088'>اصفهان مجلسی</option>
                                        <option value='104089'>اصفهان انارک</option>
                                        <option value='104090'>اصفهان بافران</option>
                                        <option value='104092'>اصفهان جوزدان</option>
                                        <option value='104095'>اصفهان کهریزسنگ</option>
                                        <option value='104099'>اصفهان خالدآباد</option>
                                        <option value='105004'>البرز گلسار</option>
                                        <option value='110005'>خراسان جنوبی محمدشهر</option>
                                        <option value='106002'>ایلام چوار</option>
                                        <option value='106004'>ایلام زرنه</option>
                                        <option value='106006'>ایلام سراب باغ</option>
                                        <option value='106007'>ایلام مورموری</option>
                                        <option value='106008'>ایلام بدره</option>
                                        <option value='106010'>ایلام پهله</option>
                                        <option value='106012'>ایلام موسیان</option>
                                        <option value='106013'>ایلام میمه</option>
                                        <option value='106014'>ایلام آسمان آباد</option>
                                        <option value='106015'>ایلام توحید</option>
                                        <option value='106017'>ایلام لومار</option>
                                        <option value='106018'>ایلام ارکواز</option>
                                        <option value='106019'>ایلام دلگشا</option>
                                        <option value='106020'>ایلام صالح آباد</option>
                                        <option value='107003'>بوشهر خارک</option>
                                        <option value='107004'>بوشهر اهرم</option>
                                        <option value='107006'>بوشهر انارستان</option>
                                        <option value='107008'>بوشهر ریز</option>
                                        <option value='107011'>بوشهر تنگ ارم</option>
                                        <option value='107012'>بوشهر دالکی</option>
                                        <option value='107013'>بوشهر سعد آباد</option>
                                        <option value='107014'>بوشهر شبانکاره</option>
                                        <option value='107015'>بوشهر کلمه</option>
                                        <option value='107016'>بوشهر وحدتیه</option>
                                        <option value='107018'>بوشهر شنبه</option>
                                        <option value='107019'>بوشهر کاکی</option>
                                        <option value='107020'>بوشهر آبدان</option>
                                        <option value='107021'>بوشهر بردخون</option>
                                        <option value='107022'>بوشهر بردستان</option>
                                        <option value='107024'>بوشهر امام حسن</option>
                                        <option value='107027'>بوشهر بنک</option>
                                        <option value='107030'>بوشهر نخل تقی</option>
                                        <option value='107031'>بوشهر بندرریگ</option>
                                        <option value='107032'>بوشهر بندرگناوه</option>
                                        <option value='108003'>تهران صالح آباد</option>
                                        <option value='108004'>تهران گلستان</option>
                                        <option value='108005'>تهران نسیم شهر</option>
                                        <option value='108007'>تهران شریف آباد</option>
                                        <option value='108008'>تهران فرون آباد</option>
                                        <option value='108013'>تهران آبسرد</option>
                                        <option value='108014'>تهران آبعلی</option>
                                        <option value='108017'>تهران کیلان</option>
                                        <option value='108019'>تهران نصیرشهر</option>
                                        <option value='108020'>تهران باقرشهر</option>
                                        <option value='108021'>تهران حسن آباد</option>
                                        <option value='108025'>تهران اندیشه</option>
                                        <option value='108026'>تهران باغستان</option>
                                        <option value='108027'>تهران شاهدشهر</option>
                                        <option value='108029'>تهران صباشهر</option>
                                        <option value='108030'>تهران فردوسیه</option>
                                        <option value='108031'>تهران وحیدیه</option>
                                        <option value='108032'>تهران ارجمند</option>
                                        <option value='108034'>تهران قدس</option>
                                        <option value='108035'>تهران صفادشت</option>
                                        <option value='108037'>تهران جوادآباد</option>
                                        <option value='108038'>تهران قرچک</option>
                                        <option value='109003'>چهارمحال وبختیاری بلداجی</option>
                                        <option value='109005'>چهارمحال وبختیاری فرادنبه</option>
                                        <option value='109006'>چهارمحال وبختیاری گندمان</option>
                                        <option value='109007'>چهارمحال وبختیاری نقنه</option>
                                        <option value='109015'>چهارمحال وبختیاری کیان</option>
                                        <option value='109016'>چهارمحال وبختیاری نافچ</option>
                                        <option value='109018'>چهارمحال وبختیاری وردنجان</option>
                                        <option value='109019'>چهارمحال وبختیاری باباحیدر</option>
                                        <option value='109020'>چهارمحال وبختیاری پردنجان</option>
                                        <option value='109021'>چهارمحال وبختیاری جونقان</option>
                                        <option value='109024'>چهارمحال وبختیاری دستنا</option>
                                        <option value='109028'>چهارمحال وبختیاری آلونی</option>
                                        <option value='109030'>چهارمحال وبختیاری مال خلیفه</option>
                                        <option value='109031'>چهارمحال وبختیاری منج</option>
                                        <option value='110001'>خراسان جنوبی ارسک</option>
                                        <option value='110004'>خراسان جنوبی خوسف</option>
                                        <option value='110006'>خراسان جنوبی اسدیه</option>
                                        <option value='110007'>خراسان جنوبی طبس مسینا</option>
                                        <option value='110008'>خراسان جنوبی قهستان</option>
                                        <option value='110009'>خراسان جنوبی گزیک</option>
                                        <option value='110010'>خراسان جنوبی آیسک</option>
                                        <option value='110012'>خراسان جنوبی سه قلعه</option>
                                        <option value='110014'>خراسان جنوبی مود</option>
                                        <option value='110015'>خراسان جنوبی اسلامیه</option>
                                        <option value='110017'>خراسان جنوبی اسفدن</option>
                                        <option value='110018'>خراسان جنوبی آرین شهر</option>
                                        <option value='110019'>خراسان جنوبی حاجی آباد</option>
                                        <option value='110020'>خراسان جنوبی خضری دشت بیاض</option>
                                        <option value='110021'>خراسان جنوبی زهان</option>
                                        <option value='110023'>خراسان جنوبی نیمبلوک</option>
                                        <option value='111001'>خراسان رضوی باخرز</option>
                                        <option value='111003'>خراسان رضوی یونسی</option>
                                        <option value='111004'>خراسان رضوی انابد</option>
                                        <option value='111006'>خراسان رضوی شهرآباد</option>
                                        <option value='111010'>خراسان رضوی کاریز</option>
                                        <option value='111011'>خراسان رضوی مشهدریزه</option>
                                        <option value='111012'>خراسان رضوی فیروزه</option>
                                        <option value='111013'>خراسان رضوی همت آباد</option>
                                        <option value='111014'>خراسان رضوی احمدابادصولت</option>
                                        <option value='111016'>خراسان رضوی صالح آباد</option>
                                        <option value='111017'>خراسان رضوی نصرآباد</option>
                                        <option value='111018'>خراسان رضوی نیل شهر</option>
                                        <option value='111019'>خراسان رضوی بایک</option>
                                        <option value='111021'>خراسان رضوی رباط سنگ</option>
                                        <option value='111022'>خراسان رضوی کدکن</option>
                                        <option value='111023'>خراسان رضوی جغتای</option>
                                        <option value='111026'>خراسان رضوی گلمکان</option>
                                        <option value='111028'>خراسان رضوی کندر</option>
                                        <option value='111030'>خراسان رضوی سلامی</option>
                                        <option value='111031'>خراسان رضوی سنگان</option>
                                        <option value='111033'>خراسان رضوی نشتیفان</option>
                                        <option value='111034'>خراسان رضوی سلطان آباد</option>
                                        <option value='111035'>خراسان رضوی چاپشلو</option>
                                        <option value='111037'>خراسان رضوی لطف آباد</option>
                                        <option value='111038'>خراسان رضوی نوخندان</option>
                                        <option value='111039'>خراسان رضوی جنگل</option>
                                        <option value='111040'>خراسان رضوی رشتخوار</option>
                                        <option value='111042'>خراسان رضوی داورزن</option>
                                        <option value='111043'>خراسان رضوی روداب</option>
                                        <option value='111045'>خراسان رضوی ششتمد</option>
                                        <option value='111047'>خراسان رضوی مزدآوند</option>
                                        <option value='111048'>خراسان رضوی سفیدسنگ</option>
                                        <option value='111049'>خراسان رضوی فرهادگرد</option>
                                        <option value='111051'>خراسان رضوی قلندرآباد</option>
                                        <option value='111052'>خراسان رضوی باجگیران</option>
                                        <option value='111054'>خراسان رضوی ریوش</option>
                                        <option value='111056'>خراسان رضوی شهرزو</option>
                                        <option value='111058'>خراسان رضوی بیدخت</option>
                                        <option value='111059'>خراسان رضوی کاخک</option>
                                        <option value='111061'>خراسان رضوی رضویه</option>
                                        <option value='111063'>خراسان رضوی مشهد ثامن</option>
                                        <option value='111064'>خراسان رضوی ملک آباد</option>
                                        <option value='111065'>خراسان رضوی شادمهر</option>
                                        <option value='111067'>خراسان رضوی بار</option>
                                        <option value='111068'>خراسان رضوی چکنه</option>
                                        <option value='111069'>خراسان رضوی خرو</option>
                                        <option value='111070'>خراسان رضوی درود</option>
                                        <option value='111071'>خراسان رضوی عشق آباد</option>
                                        <option value='111072'>خراسان رضوی قدمگاه</option>
                                        <option value='112002'>خراسان شمالی صفی آباد</option>
                                        <option value='112004'>خراسان شمالی حصارگرمخان</option>
                                        <option value='112005'>خراسان شمالی راز</option>
                                        <option value='112006'>خراسان شمالی جاجرم</option>
                                        <option value='112007'>خراسان شمالی سنخواست</option>
                                        <option value='112008'>خراسان شمالی شوقان</option>
                                        <option value='112010'>خراسان شمالی لوجلی</option>
                                        <option value='112011'>خراسان شمالی تیتکانلو</option>
                                        <option value='112012'>خراسان شمالی فاروج</option>
                                        <option value='112013'>خراسان شمالی ایور</option>
                                        <option value='112014'>خراسان شمالی درق</option>
                                        <option value='112015'>خراسان شمالی گرمه</option>
                                        <option value='112016'>خراسان شمالی آشخانه</option>
                                        <option value='112017'>خراسان شمالی پیش قلعه</option>
                                        <option value='112018'>خراسان شمالی قاضی</option>
                                        <option value='113002'>خوزستان جایزان</option>
                                        <option value='113003'>خوزستان قلعه خواجه</option>
                                        <option value='113005'>خوزستان حسینیه</option>
                                        <option value='113007'>خوزستان حمیدیه</option>
                                        <option value='113009'>خوزستان دهدز</option>
                                        <option value='113010'>خوزستان اروندکنار</option>
                                        <option value='113012'>خوزستان چویبده</option>
                                        <option value='113014'>خوزستان صیدون</option>
                                        <option value='113015'>خوزستان قلعه تل</option>
                                        <option value='113016'>خوزستان میداود</option>
                                        <option value='113017'>خوزستان شیبان</option>
                                        <option value='113018'>خوزستان ملاثانی</option>
                                        <option value='113019'>خوزستان ویس</option>
                                        <option value='113020'>خوزستان بندرامام خمینی</option>
                                        <option value='113022'>خوزستان چمران</option>
                                        <option value='113023'>خوزستان آغاجاری</option>
                                        <option value='113025'>خوزستان سردشت</option>
                                        <option value='113027'>خوزستان مینوشهر</option>
                                        <option value='113028'>خوزستان چغامیش</option>
                                        <option value='113029'>خوزستان حمزه</option>
                                        <option value='113030'>خوزستان دزآب</option>
                                        <option value='113032'>خوزستان سالند</option>
                                        <option value='113033'>خوزستان صفی آباد</option>
                                        <option value='113034'>خوزستان میانرود</option>
                                        <option value='113035'>خوزستان بستان</option>
                                        <option value='113038'>خوزستان مشراگه</option>
                                        <option value='113040'>خوزستان دارخوین</option>
                                        <option value='113042'>خوزستان الوان</option>
                                        <option value='113043'>خوزستان حر</option>
                                        <option value='113044'>خوزستان شاوور</option>
                                        <option value='113046'>خوزستان صالح مشطت</option>
                                        <option value='113047'>خوزستان شرافت</option>
                                        <option value='113049'>خوزستان گوریه</option>
                                        <option value='113050'>خوزستان ترکالکی</option>
                                        <option value='113051'>خوزستان جنت مکان</option>
                                        <option value='113052'>خوزستان سماله</option>
                                        <option value='113053'>خوزستان صالح شهر</option>
                                        <option value='113055'>خوزستان لالی</option>
                                        <option value='113058'>خوزستان زهره</option>
                                        <option value='113060'>خوزستان رفیع</option>
                                        <option value='113061'>خوزستان هویزه</option>
                                        <option value='114002'>زنجان سلطانیه</option>
                                        <option value='114005'>زنجان حلب</option>
                                        <option value='114008'>زنجان سجاس</option>
                                        <option value='114009'>زنجان سهرورد</option>
                                        <option value='114011'>زنجان گرماب</option>
                                        <option value='114013'>زنجان ارمغانخانه</option>
                                        <option value='114016'>زنجان چورزق</option>
                                        <option value='114018'>زنجان ماه نشان</option>
                                        <option value='115001'>سمنان امیریه</option>
                                        <option value='115003'>سمنان دیباج</option>
                                        <option value='115004'>سمنان سرخه</option>
                                        <option value='115007'>سمنان بیارجمند</option>
                                        <option value='115009'>سمنان کلاته خیج</option>
                                        <option value='115010'>سمنان مجن</option>
                                        <option value='115011'>سمنان میامی</option>
                                        <option value='115012'>سمنان ایوانکی</option>
                                        <option value='115013'>سمنان آرادان</option>
                                        <option value='115015'>سمنان درجزین</option>
                                        <option value='115016'>سمنان شهمیرزاد</option>
                                        <option value='116002'>سیستان وبلوچستان بزمان</option>
                                        <option value='116003'>سیستان وبلوچستان بمپور</option>
                                        <option value='116004'>سیستان وبلوچستان محمدان</option>
                                        <option value='116006'>سیستان وبلوچستان نگور</option>
                                        <option value='116008'>سیستان وبلوچستان نوک آباد</option>
                                        <option value='116010'>سیستان وبلوچستان بنجار</option>
                                        <option value='116014'>سیستان وبلوچستان نصرت آباد</option>
                                        <option value='116016'>سیستان وبلوچستان جالق</option>
                                        <option value='116018'>سیستان وبلوچستان سیرکان</option>
                                        <option value='116019'>سیستان وبلوچستان گشت</option>
                                        <option value='116020'>سیستان وبلوچستان محمدی</option>
                                        <option value='116021'>سیستان وبلوچستان پیشین</option>
                                        <option value='116024'>سیستان وبلوچستان سوران</option>
                                        <option value='116025'>سیستان وبلوچستان هیدوچ</option>
                                        <option value='116026'>سیستان وبلوچستان زرآباد</option>
                                        <option value='116029'>سیستان وبلوچستان اسپکه</option>
                                        <option value='116030'>سیستان وبلوچستان بنت</option>
                                        <option value='116031'>سیستان وبلوچستان فنوج</option>
                                        <option value='116032'>سیستان وبلوچستان قصرقند</option>
                                        <option value='116034'>سیستان وبلوچستان ادیمی</option>
                                        <option value='116035'>سیستان وبلوچستان علی اکبر</option>
                                        <option value='117003'>فارس ایج</option>
                                        <option value='117004'>فارس رونیز</option>
                                        <option value='117006'>فارس حسن آباد</option>
                                        <option value='117007'>فارس دژکرد</option>
                                        <option value='117008'>فارس سده</option>
                                        <option value='117009'>فارس ایزدخواست</option>
                                        <option value='117011'>فارس بهمن</option>
                                        <option value='117012'>فارس سورمق</option>
                                        <option value='117013'>فارس صغاد</option>
                                        <option value='117015'>فارس حسامی</option>
                                        <option value='117016'>فارس کره ای</option>
                                        <option value='117018'>فارس باب انار</option>
                                        <option value='117020'>فارس خاوران</option>
                                        <option value='117021'>فارس دوزه</option>
                                        <option value='117022'>فارس قطب آباد</option>
                                        <option value='117027'>فارس جنت شهر</option>
                                        <option value='117029'>فارس دوبرجی</option>
                                        <option value='117030'>فارس فدامی</option>
                                        <option value='117032'>فارس حاجی آباد</option>
                                        <option value='117033'>فارس دبیران</option>
                                        <option value='117034'>فارس شهرپیر</option>
                                        <option value='117035'>فارس اردکان</option>
                                        <option value='117037'>فارس هماشهر</option>
                                        <option value='117039'>فارس کوهنجان</option>
                                        <option value='117040'>فارس خانه زنیان</option>
                                        <option value='117043'>فارس شهرصدرا</option>
                                        <option value='117045'>فارس لپویی</option>
                                        <option value='117046'>فارس دهرم</option>
                                        <option value='117048'>فارس نوجین</option>
                                        <option value='117049'>فارس زاهدشهر</option>
                                        <option value='117050'>فارس ششده</option>
                                        <option value='117052'>فارس نوبندگان</option>
                                        <option value='126020'>لرستان فیروزآباد</option>
                                        <option value='117055'>فارس افزر</option>
                                        <option value='117056'>فارس امام شهر</option>
                                        <option value='117058'>فارس کارزین</option>
                                        <option value='117059'>فارس مبارک آباددیز</option>
                                        <option value='117060'>فارس بالاده</option>
                                        <option value='117061'>فارس خشت</option>
                                        <option value='117062'>فارس قایمیه</option>
                                        <option value='117064'>فارس کنارتخته</option>
                                        <option value='117065'>فارس نودان</option>
                                        <option value='117069'>فارس بنارویه</option>
                                        <option value='117070'>فارس بیرم</option>
                                        <option value='117071'>فارس جویم</option>
                                        <option value='117072'>فارس خور</option>
                                        <option value='117073'>فارس عمادده</option>
                                        <option value='117075'>فارس لطیفی</option>
                                        <option value='117076'>فارس اشکنان</option>
                                        <option value='117077'>فارس اهل</option>
                                        <option value='117078'>فارس علامرودشت</option>
                                        <option value='117080'>فارس رامجرد</option>
                                        <option value='117081'>فارس سیدان</option>
                                        <option value='117082'>فارس کامفیروز</option>
                                        <option value='117084'>فارس خومه زار</option>
                                        <option value='126013'>لرستان نورآباد</option>
                                        <option value='117086'>فارس اسیر</option>
                                        <option value='117087'>فارس گله دار</option>
                                        <option value='117088'>فارس مهر</option>
                                        <option value='117089'>فارس وراوی</option>
                                        <option value='117090'>فارس آباده طشک</option>
                                        <option value='117091'>فارس قطرویه</option>
                                        <option value='117092'>فارس مشکان</option>
                                        <option value='118002'>قزوین بیدستان</option>
                                        <option value='118006'>قزوین خاکعلی</option>
                                        <option value='118012'>قزوین سگزآباد</option>
                                        <option value='118014'>قزوین اسفرورین</option>
                                        <option value='118016'>قزوین خرمدشت</option>
                                        <option value='118017'>قزوین ضیاءآباد</option>
                                        <option value='118018'>قزوین نرجه</option>
                                        <option value='118020'>قزوین رازمیان</option>
                                        <option value='118021'>قزوین سیردان</option>
                                        <option value='118023'>قزوین کوهین</option>
                                        <option value='118025'>قزوین معلم کلایه</option>
                                        <option value='119002'>قم دستجرد</option>
                                        <option value='119003'>قم سلفچگان</option>
                                        <option value='119005'>قم قنوات</option>
                                        <option value='119006'>قم کهک</option>
                                        <option value='120001'>کردستان آرمرده</option>
                                        <option value='120003'>کردستان بویین سفلی</option>
                                        <option value='120004'>کردستان کانی سور</option>
                                        <option value='120005'>کردستان بابارشانی</option>
                                        <option value='120007'>کردستان یاسوکند</option>
                                        <option value='120008'>کردستان بلبان آباد</option>
                                        <option value='120011'>کردستان زرینه</option>
                                        <option value='120012'>کردستان سروآباد</option>
                                        <option value='120014'>کردستان صاحب</option>
                                        <option value='120016'>کردستان شویشه</option>
                                        <option value='120017'>کردستان دزج</option>
                                        <option value='120018'>کردستان دلبران</option>
                                        <option value='120019'>کردستان سریش آباد</option>
                                        <option value='120022'>کردستان موچش</option>
                                        <option value='120023'>کردستان چناره</option>
                                        <option value='120024'>کردستان کانی دینار</option>
                                        <option value='121005'>کرمان بزنجان</option>
                                        <option value='121007'>کرمان گلزار</option>
                                        <option value='121008'>کرمان لاله زار</option>
                                        <option value='121009'>کرمان نگار</option>
                                        <option value='121010'>کرمان بروات</option>
                                        <option value='121012'>کرمان جبالبارز</option>
                                        <option value='121014'>کرمان درب بهشت</option>
                                        <option value='121017'>کرمان هجدک</option>
                                        <option value='121018'>کرمان بهرمان</option>
                                        <option value='121020'>کرمان صفاییه</option>
                                        <option value='121022'>کرمان مس سرچشمه</option>
                                        <option value='121024'>کرمان محمدآباد</option>
                                        <option value='121025'>کرمان خانوک</option>
                                        <option value='121026'>کرمان ریحان</option>
                                        <option value='121029'>کرمان پاریز</option>
                                        <option value='121030'>کرمان زیدآباد</option>
                                        <option value='121032'>کرمان نجف شهر</option>
                                        <option value='121033'>کرمان هماشهر</option>
                                        <option value='121036'>کرمان خورسند</option>
                                        <option value='121037'>کرمان دهج</option>
                                        <option value='121039'>کرمان دوساری</option>
                                        <option value='121041'>کرمان مردهک</option>
                                        <option value='121042'>کرمان فاریاب</option>
                                        <option value='121045'>کرمان اختیارآباد</option>
                                        <option value='121046'>کرمان اندوهجرد</option>
                                        <option value='121051'>کرمان زنگی آباد</option>
                                        <option value='121053'>کرمان کاظم آباد</option>
                                        <option value='121055'>کرمان گلباف</option>
                                        <option value='121062'>کرمان نودژ</option>
                                        <option value='121063'>کرمان نرماشیر</option>
                                        <option value='121064'>کرمان نظام شهر</option>
                                        <option value='122003'>کرمانشاه باینگان</option>
                                        <option value='122005'>کرمانشاه نودشه</option>
                                        <option value='122006'>کرمانشاه نوسود</option>
                                        <option value='122008'>کرمانشاه تازه آباد</option>
                                        <option value='122011'>کرمانشاه گهواره</option>
                                        <option value='122013'>کرمانشاه شاهو</option>
                                        <option value='122015'>کرمانشاه سطر</option>
                                        <option value='122018'>کرمانشاه میان راهان</option>
                                        <option value='122019'>کرمانشاه سومار</option>
                                        <option value='122021'>کرمانشاه رباط</option>
                                        <option value='122023'>کرمانشاه کوزران</option>
                                        <option value='122024'>کرمانشاه هلشی</option>
                                        <option value='122026'>کرمانشاه سرمست</option>
                                        <option value='123002'>کهگیلویه وبویراحمد لیکک</option>
                                        <option value='123003'>کهگیلویه وبویراحمد گراب سفلی</option>
                                        <option value='123004'>کهگیلویه وبویراحمد مادوان</option>
                                        <option value='123005'>کهگیلویه وبویراحمد مارگون</option>
                                        <option value='123008'>کهگیلویه وبویراحمد پاتاوه</option>
                                        <option value='123009'>کهگیلویه وبویراحمد چیتاب</option>
                                        <option value='123012'>کهگیلویه وبویراحمد دیشموک</option>
                                        <option value='123013'>کهگیلویه وبویراحمد سوق</option>
                                        <option value='123014'>کهگیلویه وبویراحمد قلعه رییسی</option>
                                        <option value='123015'>کهگیلویه وبویراحمد لنده</option>
                                        <option value='124002'>گلستان نگین شهر</option>
                                        <option value='124003'>گلستان نوده خاندوز</option>
                                        <option value='124004'>گلستان انبارآلوم</option>
                                        <option value='124007'>گلستان نوکنده</option>
                                        <option value='124009'>گلستان خان ببین</option>
                                        <option value='124011'>گلستان رامیان</option>
                                        <option value='124017'>گلستان جلین</option>
                                        <option value='124018'>گلستان سرخنکلاته</option>
                                        <option value='124020'>گلستان سیمین شهر</option>
                                        <option value='124021'>گلستان گمیش تپه</option>
                                        <option value='124022'>گلستان اینچه برون</option>
                                        <option value='124024'>گلستان مراوه</option>
                                        <option value='125002'>گیلان رانکوه</option>
                                        <option value='125010'>گیلان چوبر</option>
                                        <option value='125019'>گیلان لولمان</option>
                                        <option value='125022'>گیلان بره سر</option>
                                        <option value='125023'>گیلان توتکابن</option>
                                        <option value='125024'>گیلان جیرنده</option>
                                        <option value='125033'>گیلان واجارگاه</option>
                                        <option value='125034'>گیلان دیلمان</option>
                                        <option value='125039'>گیلان گوراب زرمیخ</option>
                                        <option value='125040'>گیلان مرجقل</option>
                                        <option value='125043'>گیلان رودبنه</option>
                                        <option value='125045'>گیلان اطاقور</option>
                                        <option value='125046'>گیلان چاف و چمخاله</option>
                                        <option value='125048'>گیلان کومله</option>
                                        <option value='125050'>گیلان بازارجمعه</option>
                                        <option value='126002'>لرستان مومن آباد</option>
                                        <option value='126004'>لرستان شول آباد</option>
                                        <option value='126005'>لرستان اشترینان</option>
                                        <option value='126008'>لرستان معمولان</option>
                                        <option value='126009'>لرستان چغلوندی</option>
                                        <option value='127019'>مازندران خرم آباد</option>
                                        <option value='126011'>لرستان زاغه</option>
                                        <option value='126012'>لرستان سپیددشت</option>
                                        <option value='126014'>لرستان هفت چشمه</option>
                                        <option value='126015'>لرستان سراب دوره</option>
                                        <option value='126016'>لرستان ویسیان</option>
                                        <option value='126017'>لرستان چالانچولان</option>
                                        <option value='126021'>لرستان چقابل</option>
                                        <option value='126022'>لرستان درب گنبد</option>
                                        <option value='126023'>لرستان کونانی</option>
                                        <option value='126025'>لرستان گراب</option>
                                        <option value='127003'>مازندران رینه</option>
                                        <option value='127004'>مازندران گزنک</option>
                                        <option value='127007'>مازندران خوش رودپی</option>
                                        <option value='127008'>مازندران زرگرمحله</option>
                                        <option value='127009'>مازندران گتاب</option>
                                        <option value='127011'>مازندران مرزیکلا</option>
                                        <option value='127013'>مازندران بهنمیر</option>
                                        <option value='127014'>مازندران کله بست</option>
                                        <option value='127016'>مازندران خلیل شهر</option>
                                        <option value='127020'>مازندران شیرود</option>
                                        <option value='127023'>مازندران کوهی خیل</option>
                                        <option value='127030'>مازندران فریم</option>
                                        <option value='127031'>مازندران کیاسر</option>
                                        <option value='127032'>مازندران آلاشت</option>
                                        <option value='127038'>مازندران کلارآباد</option>
                                        <option value='127041'>مازندران کیاکلا</option>
                                        <option value='127042'>مازندران سرخرود</option>
                                        <option value='127046'>مازندران ایزدشهر</option>
                                        <option value='127047'>مازندران بلده</option>
                                        <option value='127049'>مازندران رویان</option>
                                        <option value='127051'>مازندران پول</option>
                                        <option value='128002'>مرکزی داودآباد</option>
                                        <option value='128003'>مرکزی ساروق</option>
                                        <option value='128004'>مرکزی سنجان</option>
                                        <option value='128005'>مرکزی کارچان</option>
                                        <option value='128006'>مرکزی کرهرود</option>
                                        <option value='128010'>مرکزی قورچی باشی</option>
                                        <option value='128011'>مرکزی جاورسیان</option>
                                        <option value='128014'>مرکزی نراق</option>
                                        <option value='128015'>مرکزی پرندک</option>
                                        <option value='128016'>مرکزی خشکرود</option>
                                        <option value='128017'>مرکزی رازقان</option>
                                        <option value='128018'>مرکزی زاویه</option>
                                        <option value='128021'>مرکزی غرق آباد</option>
                                        <option value='128022'>مرکزی نوبران</option>
                                        <option value='128024'>مرکزی توره</option>
                                        <option value='128026'>مرکزی شهباز</option>
                                        <option value='128028'>مرکزی هندودر</option>
                                        <option value='128029'>مرکزی خنجین</option>
                                        <option value='128032'>مرکزی میلاجرد</option>
                                        <option value='128034'>مرکزی نیمور</option>
                                        <option value='129005'>هرمزگان گوهران</option>
                                        <option value='129007'>هرمزگان تخت</option>
                                        <option value='129008'>هرمزگان فین</option>
                                        <option value='129009'>هرمزگان قلعه قاضی</option>
                                        <option value='129015'>هرمزگان کوشکنار</option>
                                        <option value='129017'>هرمزگان فارغان</option>
                                        <option value='129019'>هرمزگان سرگز</option>
                                        <option value='129021'>هرمزگان رویدر</option>
                                        <option value='129022'>هرمزگان بیکا</option>
                                        <option value='129024'>هرمزگان زیارتعلی</option>
                                        <option value='129026'>هرمزگان درگهان</option>
                                        <option value='129027'>هرمزگان سوزا</option>
                                        <option value='129029'>هرمزگان هرمز</option>
                                        <option value='129030'>هرمزگان سندرک</option>
                                        <option value='129032'>هرمزگان هشتبندی</option>
                                        <option value='130003'>همدان صالح آباد</option>
                                        <option value='130006'>همدان سرکان</option>
                                        <option value='130007'>همدان فرسفج</option>
                                        <option value='130008'>همدان دمق</option>
                                        <option value='130010'>همدان قروه درجزین</option>
                                        <option value='130012'>همدان شیرین سو</option>
                                        <option value='130014'>همدان گل تپه</option>
                                        <option value='130015'>همدان ازندریان</option>
                                        <option value='130016'>همدان جوکار</option>
                                        <option value='130017'>همدان زنگنه</option>
                                        <option value='130018'>همدان سامن</option>
                                        <option value='130020'>همدان برزول</option>
                                        <option value='130021'>همدان فیروزان</option>
                                        <option value='130022'>همدان گیان</option>
                                        <option value='130024'>همدان جورقان</option>
                                        <option value='130025'>همدان قهاوند</option>
                                        <option value='130026'>همدان مریانج</option>
                                        <option value='131002'>یزد مهردشت</option>
                                        <option value='131003'>یزد احمدآباد</option>
                                        <option value='131005'>یزد عقدا</option>
                                        <option value='131013'>یزد خضرآباد</option>
                                        <option value='131014'>یزد ندوشن</option>
                                        <option value='110028'>خراسان جنوبی عشق آباد</option>
                                        <option value='131019'>یزد بفروییه</option>
                                        <option value='131021'>یزد حمیدیا</option>
                                        <option value='131023'>یزد شاهدیه</option>
                                        <option value='106016'>ایلام سرابله</option>
                                        <option value='108041'>تهران ری</option>
                                        <option value='108042'>تهران شمشک</option>
                                        <option value='109032'>چهارمحال وبختیاری دشتک</option>
                                        <option value='109033'>چهارمحال وبختیاری سرخون</option>
                                        <option value='109034'>چهارمحال وبختیاری کاج</option>
                                        <option value='109035'>چهارمحال وبختیاری گوجان</option>
                                        <option value='109036'>چهارمحال وبختیاری چلیچه</option>
                                        <option value='109037'>چهارمحال وبختیاری صمصامی</option>
                                        <option value='109038'>چهارمحال وبختیاری بازفت</option>
                                        <option value='124001'>گلستان آزادشهر</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>-</th>
                            <td><input></input></td>
                        </tr>
                        <?php
						}
					}
					?>
                    </table>
                </div>
            </section>
            </table>
        </form>
    </main>
</body>
<script>

    //check idcode
    function myFunction2() {
        var x = document.getElementById("idcode").value;
        c = parseInt(x.charAt(9));
        n = parseInt(x.charAt(0)) * 10 +
            parseInt(x.charAt(1)) * 9 +
            parseInt(x.charAt(2)) * 8 +
            parseInt(x.charAt(3)) * 7 +
            parseInt(x.charAt(4)) * 6 +
            parseInt(x.charAt(5)) * 5 +
            parseInt(x.charAt(6)) * 4 +
            parseInt(x.charAt(7)) * 3 +
            parseInt(x.charAt(8)) * 2;
        r = n - parseInt(n / 11) * 11;
        if (x == '1111111111' ||
            x == '0000000000' ||
            x == '2222222222' ||
            x == '3333333333' ||
            x == '4444444444' ||
            x == '5555555555' ||
            x == '6666666666' ||
            x == '7777777777' ||
            x == '8888888888' ||
            x == '9999999999') {
            //document.getElementById("demo").innerHTML = " کد ملی وارد شده اشتباه است ";
            document.getElementById("idcode").style.color = "red";
        }
        else if ((r == 0 && r == c) || (r == 1 && c == 1) || (r > 1 && c == 11 - r)) {
            //document.getElementById("demo").innerHTML = " کد ملی وارد شده درست است ";
            document.getElementById("idcode").style.color = "green";
        } else {
            //document.getElementById("demo").innerHTML = " کد ملی وارد شده اشتباه است ";
            document.getElementById("idcode").style.color = "red";
        }
    }

    //restrict non persian text input
    function restrictInputOtherThanArabic($field) {
        // Arabic characters fall in the Unicode range 0600 - 06FF
        var arabicCharUnicodeRange = /[\u0600-\u06FF]/;

        $field.bind("keypress", function (event) {
            var key = event.which;
            // 0 = numpad
            // 8 = backspace
            // 32 = space
            // 48 -> 57 = number hey pad
            if (key == 8 || key == 0 || key === 32) {
                return true;
            }

            var str = String.fromCharCode(key);
            if (arabicCharUnicodeRange.test(str)) {
                return true;
            }

            return false;
        });
    }

    jQuery(document).ready(function () {
        // allow arabic characters only for following fields
        restrictInputOtherThanArabic($('#name'));
        restrictInputOtherThanArabic($('#lastname'));
        restrictInputOtherThanArabic($('#fathername'));
        restrictInputOtherThanArabic($('#birthplace'));
        restrictInputOtherThanArabic($('#city'));
        restrictInputOtherThanArabic($('#companyname'));
        restrictInputOtherThanArabic($('#presentername'));
    });
    //restrict non persian text input without number
    function restrictInputOtherThanArabicAndNumber($field2) {
        // Arabic characters fall in the Unicode range 0600 - 06FF
        var arabicCharUnicodeRange2 = /[\u0600-\u06FF]/;

        $field2.bind("keypress", function (event2) {
            var key = event2.which;
            // 48 -> 57 = number hey pad
            if (key == 8 || key == 0 || key === 32 || key === 48 || key === 49 || key === 50 || key === 51 || key === 52 || key === 53 || key === 54 || key === 55 || key === 56 || key === 57) {
                return true;
            }

            var str2 = String.fromCharCode(key);
            if (arabicCharUnicodeRange2.test(str2)) {
                return true;
            }

            return false;
        });
    }

    jQuery(document).ready(function () {
        // allow arabic characters only for following fields
        restrictInputOtherThanArabicAndNumber($('#quarter'));
        restrictInputOtherThanArabicAndNumber($('#street'));
        restrictInputOtherThanArabicAndNumber($('#address'));
    });
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

    //فیلتر شهر
    var optionsCache11 = [];
    function filterItems11(el11) {
        var value11 = el11.value.toLowerCase();
        var form11 = el11.form;
        var opt11, sel11 = form11.SelectFilter11;
        if (value11 == '') {
            restoreOptions11();
        } else {
            // Loop backwards through options as removing them modifies the next
            // to be visited if go forwards
            for (var i = sel11.options.length - 1; i >= 0; i--) {
                opt11 = sel11.options[i];
                if (opt11.text.toLowerCase().indexOf(value11) == -1) {
                    sel11.removeChild(opt11)
                }
            }
        }
        //open the selector
        var ItemToHide = document.getElementById('SelectFilter11');
        document.getElementById('SelectFilter11').style.display = 'block';
    }

    // Restore select to original state
    function restoreOptions11() {
        var sel11 = document.getElementById('SelectFilter11');
        sel11.options.length = 0;
        for (var i = 0, iLen = optionsCache11.length; i < iLen; i++) {
            sel11.appendChild(optionsCache11[i]);
        }
    }


    function update11() {
        var select = document.getElementById('SelectFilter11');
        var option = select.options[select.selectedIndex];
        document.getElementById('SearchFilter11').value = option.text;
        //close the selector
        document.getElementById('SelectFilter11').style.display = 'none';
    }
    //فیلتر صنف
    var optionsCache12 = [];
    function filterItems12(el12) {
        var value12 = el12.value.toLowerCase();
        var form12 = el12.form;
        var opt12, sel12 = form12.SelectFilter12;
        if (value12 == '') {
            restoreOptions12();
        } else {
            // Loop backwards through options as removing them modifies the next
            // to be visited if go forwards
            for (var i = sel12.options.length - 1; i >= 0; i--) {
                opt12 = sel12.options[i];
                if (opt12.text.toLowerCase().indexOf(value12) == -1) {
                    sel12.removeChild(opt12)
                }
            }
        }
        //open the selector
        var ItemToHide = document.getElementById('SelectFilter12');
        document.getElementById('SelectFilter12').style.display = 'block';
    }

    // Restore select to original state
    function restoreOptions12() {
        var sel12 = document.getElementById('SelectFilter12');
        sel12.options.length = 0;
        for (var i = 0, iLen = optionsCache12.length; i < iLen; i++) {
            sel12.appendChild(optionsCache12[i]);
        }
    }


    window.onload = function () {
        var sel11 = document.getElementById('SelectFilter11');
        for (var i = 0, iLen = sel11.options.length; i < iLen; i++) {
            optionsCache11.push(sel11.options[i]);
        }
        var sel12 = document.getElementById('SelectFilter12');
        for (var i = 0, iLen = sel12.options.length; i < iLen; i++) {
            optionsCache12.push(sel12.options[i]);
        }else{
            echo 'not ok';
        }
    }

    function update12() {
        var select = document.getElementById('SelectFilter12');
        var option = select.options[select.selectedIndex];
        document.getElementById('SearchFilter12').value = option.text;
        //close the selector
        document.getElementById('SelectFilter12').style.display = 'none';
    }
</script>

</html>