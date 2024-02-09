<?php
    require_once '../header-up.php';
?>
    <title>لیست خروجی های تولید شده</title>
    <?php 
    require_once '../header.php';
?>
<style>
    main{
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        background-color: inherit;
        width: 100%;
        height: calc(100vh - 64px);
        overflow-y: scroll;
    }
    #MainSection{
		margin:0 auto;
		display: flex;
		flex-direction:column;
		background-color:inherit;
		width: 100%;
		height: calc(100vh - 64px);
		overflow-y: scroll;
	}
    @media screen and (min-width:768px) {
        #MainSection {
            width:100%0!important;
            margin-right:0!important;
        }
    }
</style>
    <main>
        <section id='MainSection' style=''>
            <section>
                <a href='../.'>
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
            <form action='report/export/' method='POST' id='Export' style='display:none;'></form>

            <section class='TableSection'>
                <div style='overflow: auto;width: 100%;position: relative;'>
                    <table style='width: 100%;max-width: 100%;background-color: inherit;'>
                        <form action='archiver.php' method='POST'>
                            <form action='./.' method='GET' id='SearchForm'>
                                <tr>
                                    <th class='' style='min-width: 50px;border-top-right-radius: 1rem;'>
                                        <div class='search_div' id='limit'>
                                            <label>تعداد نمایش</label>
                                            <input name=''></input>
                                        </div>
                                    </th>
                                    <th class='' style=''>
                                        <div class='search_div' id=''>
                                            <label>کاربر</label>
                                            <input name=''></input>
                                        </div>
                                    </th>
                                    <th class='' style=''>
                                        <div class='search_div' id=''>
                                            <label>تاریخ شروع</label>
                                            <input name=''></input>
                                        </div>
                                    </th>
                                    <th class='' style=''>
                                        <div class='search_div' id=''>
                                            <label>زمان شروع</label>
                                            <input name=''></input>
                                        </div>
                                    </th>
                                    <th class='' style=''>
                                        <div class='search_div' id=''>
                                            <label>نوع</label>
                                            <input name=''></input>
                                        </div>
                                    </th>
                                    <th class='' style=''>
                                        <div class='search_div' id=''>
                                            <label>وضعیت</label>
                                            <input name=''></input>
                                        </div>
                                    </th>
                                    <th class='' style=''>
                                        <div class='search_div' id=''>
                                            <label>فیلترها</label>
                                            <input name=''></input>
                                        </div>
                                    </th>
                                    <th class='' style=''>
                                        <div class='search_div' id=''>
                                            <label>عملیات</label>
                                            <input name=''></input>
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
                                <button style='display:none;'></button>
                            </form>
                    </table>
                </div>
            </section>

        </section>
    </main>
</body>

</html>