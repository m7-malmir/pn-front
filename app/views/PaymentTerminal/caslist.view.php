<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
print($necas['necas']); 
?>
        <title>پذیرندگان</title>
    <meta name='robots' content='noindex, nofollow'>
    </meta>
<?php 
 require_once("{$base_dir}header.php");
?>

    <main>

    <?php include 'sidemenu.php' ?>
        <section id='MainSection'>
            <form id='ExpertSerachForm' action='../Search/#costumer' method='GET' style='display:none;'></form>
            <form id='CancelForm' action='./.' method='GET' style='display:none;'></form>
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
                        <form action='' method='GET' id='SearchForm'>
                            <tr>
                                <th class='' style='min-width: 50px;border-top-right-radius: 1rem;'>
                                    <div class='search_div' id='limit' style='width:50px;'>
                                        <label>تعداد</label>
                                        <input name='bGltaXQ=' value='50' style=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id=''>
                                        <label>کد ملی</label>
                                        <input name='aWRjb2Rl' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id=''>
                                        <label>نام</label>
                                        <input name='bGFzdG5hbWU=' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id=''>
                                        <label>نام فروشگاه</label>
                                        <input name='Y29tcGFueW5hbWU=' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id=''>
                                        <label>تلفن همراه</label>
                                        <input name='bW9iaWxl' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id=''>
                                        <label>کد پستی</label>
                                        <input name='cG9zdGFsY29kZQ==' value=''></input>
                                    </div>
                                </th>
                                <th class=''>
                                    <div class='search_div' id=''>
                                        <label>کد مالیاتی</label>
                                        <input name='dGF4Y29kZQ==' value=''></input>
                                    </div>
                                </th>
                                <th id='functional_th_td' style='min-width:60px;border-top-right-radius: 1rem;'>
                                    <a style='display:none;margin-top:8px;margin-bottom:0;' method='GET'>
                                        <button class='more_button' type='submit' style=''>
                                            جستجو
                                        </button>
                                    </a>
                                </th>
                            </tr>
                        </form>
                        <tr>
                            <td>
                                <div class='Counter'>1</div>
                            </td>
                            <td><input class='tb_inpt' value='3256313639'></input></td>
                            <td><input class='tb_inpt' value=''></input></td>
                            <td class='MiddleScreen'><input class='tb_inpt' value='پوشاک ایلیا'></input></td>
                            <td><input class='tb_inpt' value='09384311013'></input></td>
                            <td><input class='tb_inpt' value='6718783971'></input></td>
                            <td><input class='tb_inpt' value='3253775133'></input></td>
                            <td id='functional_th_td' style='z-index:2;height: 28px;left:0;position: sticky;'>
                                <form action='.php' style='margin-bottom:0;' method='GET'>
                                    <button id='more_button' class='more_button' name='aWRjb2Rl' value='3256313639'>
                                        نمایش
                                    </button>
                                </form>
                            </td>
                        </tr>

                    </table>
                </div>
            </section>
        </section>
    </main>
</body>

</html>