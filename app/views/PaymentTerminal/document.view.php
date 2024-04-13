<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
$cas_data_arr = json_decode(json_encode($data['casdata']), true);
?>
  <title>مدارک</title>
<?php 
 require_once("{$base_dir}header.php");
?>
<style>
    .AcceptButton {
        font-size: 12px!important;
    }
</style>
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
            <section class='TableSection'>
                <div style='overflow: auto;width: 100%;position: relative;'>
                    <table style='width: 100%;max-width: 100%;background-color: inherit;'>
                        <form id='CancelForm' action='./.' method='GET'></form>
                        <form id='SearchForm' action='./.' method='GET'>
                            <tr>
                                <th class='' style='min-width: 50px;border-top-right-radius: 1rem;'>
                                    <div class='search_div' id='limit' style='width:50px;'>
                                        <label>تعداد</label>
                                        <input name='bGltaXQ=' value='50' style=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='idcode'>
                                        <label>کد ملی</label>
                                        <input name='aWRjb2Rl' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='project'>
                                        <label>انتخاب پروژه</label>
                                        <select name='cHJvamVjdA=='>
                                            <option value=''>انتخاب پروژه</option>
                                            <option name='سپهر'>سپهر</option>
                                            <option name='فن آوا'>فن آوا</option>
                                            <option name='پاسارگاد'>پاسارگاد</option>
                                        </select>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id='project'>
                                        <label>وضعیت بایگانی</label>
                                        <select name='c2Vlbg=='>
                                            <option value='' class='select_option' selected>وضعیت بایگانی (2917)
                                            </option>
                                            <option value='0' class='select_option'>مردود شرکت(0)</option>
                                            <option value='1' class='select_option'>بایگانی نشده (2840)</option>
                                            <option value='2' class='select_option'>بایگانی شده (5)</option>
                                            <option value='3' class='select_option'>بررسی شده (0)</option>
                                            <option value='5' class='select_option'>مردود مرکز (0)</option>
                                            <option value='6' class='select_option'>بررسی مرکز (0)</option>
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
                                    <div class='search_div' id='serial'>
                                        <label>ترمینال</label>
                                        <input name='dGVybWluYWw=' value=''></input>
                                    </div>
                                </th>
                                <th class='' style=''>
                                    <div class='search_div' id='iban'>
                                        <label>شبا</label>
                                        <input name='aWJhbg==' value=''></input>
                                    </div>
                                </th>
                            </tr>
                            <button style='display:none;'></button>
                        </form>

                        <?php
                           $i = 0;
                        foreach ($cas_data_arr as $variable => $key) {
                            $i++;
                             ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td style='width:80px'><input value='<?= $key['date']; ?>'></input></td>
                            <td style='width:80px'><input value='پاسارگاد'></input></td>
                            <td class='LittleScreen'><input value='<?= $key['customer_name']; ?>'></input></td>
                            <td style='width:80px;'><input value='بایگانی شده'></input></td>
                            <td><input value='<?= $key['customer_nation_code']; ?>'></input></td>
                            <td><input value='<?= $key['customer_manager_name']; ?>&nbsp<?= $key['customer_manager_family']; ?>'></input></td>
                            <td class='MiddleScreen'><input value='<?= $key['customer_store_name']; ?>'></input></td>
                            <td style='width:70px;'>
                                <div style='display:flex;flex-direction:row;'>
                                    <form action='.php' method='GET' style='margin:0 auto;display:flex;'>
                                        <input style='display:none;' name='aWRjb2Rl' value='3581008734'></input>
                                        <button class='AcceptButton' name='c2lk' value='<?= $key['customer_id']; ?>'>
                                            نمایش
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <?php } ?>


                        <tr>
                            <td>2</td>
                            <td style='width:80px'><input value='1401-01-31---10:25'></input></td>
                            <td style='width:80px'><input value='پاسارگاد'></input></td>
                            <td class='LittleScreen'><input value='ساسان قاسمی'></input></td>
                            <td style='width:80px;'><input value='بایگانی نشده'></input></td>
                            <td><input value='0017245788'></input></td>
                            <td><input value='علیرضا&nbsp;مقامی راد'></input></td>
                            <td class='MiddleScreen'><input value='پی اس لند'></input></td>
                            <td style='width:70px;'>
                                <div style='display:flex;flex-direction:row;'>
                                    <form action='.php' method='GET' style='margin:0 auto;display:flex;'>
                                        <input style='display:none;' name='aWRjb2Rl' value='0017245788'></input>
                                        <button class='AcceptButton' name='c2lk' value='3'>
                                            نمایش
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </section>
            <section id='pagination'>
                <button type='submit' form='SearchForm' name='pagination' value='1'>1</button><input
                    style='text-align:center;width:40px;background-color:inherit;color:white;border:1px solid white;font-weight: 900;'
                    form='SearchForm' name='pagination' value='1'></input><button type='submit' form='SearchForm'
                    name='pagination' value='59'>59</button><button type='submit' form='SearchForm' class='PagingButton'
                    name='pagination' value='2'>»</button>
            </section>
        </section>
    </main>
</body>

<script>
</script>

</html>