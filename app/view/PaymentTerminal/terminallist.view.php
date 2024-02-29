<?php
    require_once '../header-up.php';
?>
    <title>ترمینال</title>
    <?php 
    require_once '../header.php';
?>
    <main>
<?php include 'sidemenu.php' ?>
        <section id='MainSection'>
            <section>
                <a style='display:none;' href='../admin/'>
                    <button id='ReturnFormButton'>
                        <img src='<?= ROOT_URL; ?>img/return.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a style='display:none;' href='Export/'>
                    <button id='ReturnFormButton'>
                        <img src='<?= ROOT_URL; ?>img/Excel.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a style='display:none;' href='/membership/accounting/invoice/Sell/import/'>
                    <button id='ReturnFormButton'>
                        <img src='<?= ROOT_URL; ?>img/import11.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a>
                    <button id='ReturnFormButton' form="CancelForm">
                        <img src='<?= ROOT_URL; ?>img/NoFilter.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a>
                    <button id='ReturnFormButton' form="SearchForm">
                        <img src='<?= ROOT_URL; ?>img/magnifier11.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a href='../Search/'>
                    <button id='ReturnFormButton'>
                        <img src='<?= ROOT_URL; ?>img/option11.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a>
                    <button onclick="ToggleSideToolbar('SideToolbar');" id='ReturnFormButton' style='float: right;'>
                        <img src='<?= ROOT_URL; ?>img/more.webp' style='width:100%;'></img>
                    </button>
                </a>
            </section>

            <form id='ExpertSerachForm' action='../Search/#terminal' style='display: none;' method='GET'></form>
            <form id='CancelForm' action='./.' method='GET' style='display: none;'></form>
            <form action='./.' method='GET' style='display: none;'>
                <article>
                    <div class='search_div' style='display:none;'>
                        <input name='dXNlcg==' value='' placeholder='نام کاربری'>
                        <button><img src='<?= ROOT_URL; ?>img/search1-acacac.webp'></img></button>
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
                                        <input name='Y29udGFjdA==' value='' style='width:100%;' id="SearchboxFilter11"
                                            class="SearchFilter2" placeholder="نام نماینده" onkeyup="LiveFilter('11');"
                                            autocomplete='off'>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='status'>
                                        <label>وضعیت</label>
                                    
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
                                    3.89K
                                </th>
                            </tr>
                        </form>
                        <tr style="">
                            <td style='width:50px;'>
                                <div class='Counter' style='background-color:yellow;color: black;'>1</div>
                            </td>
                            <td class='MiddleScreens' style='width:35px;'>
                                <div class='ImageField'>
                                    <img src='./img/Passargad.webp'></img>
                                </div>
                            </td>
                            <td class='LittleScreens'><input value="1402-10-14 12:18"></input></td>
                            <td class=''><input value="بهزاد رزمجوحاجی ابادی"></input></td>
                            <td class=''><input value='ارسال به شرکت'></input></td>
                            <td><input value='3256313639'></input></td>
                            <td><input value='پرستو&nbsp;قاسم پور'></input></td>
                            <td class=''><input value='پوشاک ایلیا'></input></td>
                            <td class=''><input value=''></input></td>
                            <td class=''><input value=''></input></td>
                            <td class=''><input value=''></input></td>
                            <td class=''><input value=''></input></td>
                            <td class=''><input style='width:250px;' value=''></input></td>
                            <td class=''><input style='width:225px;' value='IR410150000003101079138799'></input></td>
                            <td class=''><input value='3101079138799'></input></td>
                            <td class=''><input value='NEWLAND/ME31/GPRS'></input></td>
                            <td class=''><input value=''></input></td>
                            <td id='functional_th_td' style='z-index:50;height: 28px;left:0;position: sticky;'>
                                <form action='.php#3916' style='margin-bottom:0;' method='GET'>
                                    <button id='more_button49' onclick='toggleTheFunctionalMenu1(49);' type='button'
                                        class='more_button' name='aWRjb2Rl' value='3256313639'>
                                        بیشتر
                                    </button>
                                    <input type='hidden' name='c2lk' value='3916' style=''></input>
                                </form>
                                <div id='TheFunctionalMenu149' value='3916' class='slidemenu_table'
                                    style='width: 300px;'>
                                    <form action='.php#3916'
                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                        method='GET'>
                                        <button class='more_button' name='aWRjb2Rl' value='3256313639'>
                                            نمایش
                                        </button>
                                        <input type='hidden' name='c2lk' value='3916' style=''></input>
                                    </form>
                                    <form action='/membership/bank/PaymentTerminal/V1/costumer/.php'
                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                        method='GET'>
                                        <button class='more_button' name='aWRjb2Rl' value='3256313639'>
                                            پذیرنده
                                        </button>
                                        <input type='hidden' name='c2lk' value='3916' style=''></input>
                                    </form>
                                    <form action='/membership/bank/PaymentTerminal/V1/document/.php'
                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                        method='GET'>
                                        <button class='more_button' name='aWRjb2Rl' value='3256313639'>
                                            مدارک
                                        </button>
                                        <input type='hidden' name='c2lk' value='3916' style=''></input>
                                    </form>
                                    <form action='/membership/bank/PaymentTerminal/V1/document/upload/'
                                        style='margin:2px 1px;border-radius: 50px;width:100%;background-image: linear-gradient(310deg,#17ad37,#98ec2d);'
                                        method='GET'>
                                        <button class='more_button' name='aWRjb2Rl' value='3256313639'>
                                            بارگذاری
                                        </button>
                                        <input type='hidden' name='c2lk' value='3916' style=''></input>
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
                    name='pagination' value='78'>78</button><button type='submit' form='SearchForm' class='PagingButton'
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