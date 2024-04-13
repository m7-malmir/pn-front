<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;
require_once ("{$base_dir}header-up.php");
$cas_data_arr = json_decode(json_encode($data['casdata'] ?? ''), true);
$key_id=$_GET['aWRjb2Rl'] ?? '';
?>
    <title>ترمینال</title>
    <script src="<?= ROOT_URL; ?>public/assets/js/jq.3.3.1.min.js"></script>
<style>
    @media screen and (min-width: 768px) {
        .VerifyButton {
            margin: 0 auto;
            padding: 0;
        }
    }
</style>
<?php
require_once ("{$base_dir}header.php");
if($_GET['payadelete'] ?? ''){   
    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
    require_once "{$base_dir}deletepayalist.php";
}elseif($_GET['payaedit'] ?? ''){   
    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
    require_once "{$base_dir}editpayalist.php"; 
}else{ ?>
<main>
<?php include 'sidemenu2.php' ?>
        <section id='MainSection'>
            <form style='display: none;' action='' id='DeleteRequest' method=''></form>
            <form style='display: none;' action='../request/replacement/' id='ReplacementRequest' method=''></form>
            <form style='display: none;' action='../request/attribution/' id='AttributionRequest' method=''></form>
            <form style='display: none;' target='_blank' action='Help' id='Help' method='GET'></form>
            <form style='display: none;' action='../costumer/.php' id='CostumerView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4950150413'></input>
            </form>
            <form style='display: none;' action='../document/.php' id='DocumentView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4950150413'></input>
            </form>
            <form style='display: none;' action='../request/.php' id='RequestView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4950150413'></input>
            </form>
            <form style='display: none;' action='../terminal/.php' id='TerminalView' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4950150413'></input>
            </form>
            <form style='display: none;' action='../terminal/new/' id='terminal_new' method='GET'>
                <input style='display:none;' name='aWRjb2Rl' value='4950150413'></input>
            </form>
            <?php
					foreach ($cas_data_arr as $key=> $value) {

						if($value['customer_id']==$key_id){
	
					?>
            <div style='display:flex;flex-direction:column;width:100%;'>
                <article class='Cadre' style='color: #344767;'>
                    <div style='display:flex;'>
                        <p class='CadreTitle' style='width: calc(100% - 220px);'>اطلاعات پایانه (<?= $value['contract_num']; ?>) (1)</p>
                        <div style='display:flex;width:200px;'>
                            <form style='display:none;'
                                action='/membership/bank/PaymentTerminal/WebServices/PardakhtNovin/Request/FollowupCode/'
                                id='SendToAPI' method='GET'>
                                <button class='SendButton' name='d2ViaWQ=[]' value=''
                                    style="background-image:url('/membership/bank/images/Inquiry.webp');"></button>
                            </form>
                        <form style='display: none;' action='' id='Editor' method='GET'>
                    <input type="hidden" name="aWRjb2Rl" value="<?= $key_id; ?>">
                </form>
                            <form style='display:flex;'
                                action='' id='SendToAPI'
                                method='get'>
                                <input type='hidden' name='UmVxdWVzdElE' value='7086'></input>
                                <input type='hidden' name='TerminalID' value='3939'></input>
                                <button class='SendButton' name='sid[]' value='<?= $key['customer_id']; ?>'
                                    style="background-image:url('<?= ROOT_URL; ?>public/assets/img/api.webp');"></button>
                            </form>
                            <button class='SendButton' form='Editor' name='payaedit' value="3456"
                                style="background-image:url('<?= ROOT_URL; ?>public/assets/img/edit.webp');"></button>
                            <button class='SendButton' form='DeleteRequest' name="payadelete" value="3456"
                                style="background-image:url('<?= ROOT_URL; ?>public/assets/img/red_cross.webp');"></button>
                        </div>
                    </div>
                    <div class='TableRow4'>
                        <button type='submit' class='PagingButton' name='c2lk' value='3939' form='CostumerView'>اطلاعات
                            پذیرنده</button>
                        <button type='submit' class='PagingButton' name='c2lk' value='3939' form='RequestView'>نمایش
                            درخواست</button>
                        <button type='submit' class='PagingButton' name='c2lk' value='3939' form='DocumentView'>نمایش
                            مدارک</button>
                        <button type='submit' class='PagingButton' form='terminal_new'>پایانه جدید</button>
                    </div>
        
                    <div class='TableRow4'>
                        <input value='کاربر:'></input>
                        <input value='<?= $value['customer_agent']; ?>'></input>
                        <input value='ویراستار'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='کد قرارداد:'></input>
                        <input value='<?= $value['contract_code']; ?>'></input>
                        <input value='کد ملی پذیرنده:'></input>
                        <input value='<?= $value['customer_nation_code']; ?>'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام پذیرنده:'></input>
                        <input value='<?= $value['customer_manager_name']; ?>'></input>
                        <input value=' نام خانوادگی پذیرنده:'></input>
                        <input value='<?= $value['customer_manager_family']; ?>'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='ترمینال:'></input>
                        <input value=''></input>
                        <input value='کد پذیرندگی'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='کد پیگیری:'></input>
                        <input value=''></input>
                        <input value='پروژه:'></input>
                        <input value='<?= $value['customer_service']; ?>'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='کد مدارک:'></input>
                        <input value=''></input>
                        <input value='کد PSP'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام فروشگاه:'></input>
                        <input value='<?= $value['customer_store_name']; ?>'></input>
                        <input value='صنف:'></input>
                        <input value='<?= $value['customer_cat']; ?>'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='زمان ثبت:'></input>
                        <input value='<?= $value['date']; ?>'></input>
                        <input value='زمان فعال سازی'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='نوع ترمینال:'></input>
                        <input value='GPRS'></input>
                        <input value='سریال:'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='وضعیت:'></input>
                        <input value='<?= $value['customer_terminals']; ?>'></input>
                        <input value='مدل ترمینال:'></input>
                        <input value='<?= $value['customer_device_model']; ?>'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='imei:'></input>
                        <input value=''></input>
                        <input value='شماره سیم کارت:'></input>
                        <input value=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='علل مردودی و توضیحات :'></input>
                        <input class='bigger_field_TableRow2' name='reason' value='<?= $value['reason']; ?>' placeholder=''></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='نام بانک:'></input>
                        <input value='بانک توسعه و تعاون'></input>
                        <input value='شماره حساب:'></input>
                        <input value='<?= $value['customer_num_acount']; ?>'></input>
                    </div>
                    <div class='TableRow4'>
                        <input value='شماره شبا'></input>
                        <input class='bigger_field_TableRow2' value='<?= $value['customer_iban']; ?>'></input>
                    </div>
                    <?php
						}
					}
					?>
                </article>
            </div>
        </section>
		<?php } ?>  

    </main>
</body>
<script>
</script>

</html>