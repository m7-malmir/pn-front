<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;
require_once ("{$base_dir}header-up.php");
$cas_data_arr = json_decode(json_encode($data['casdata'] ?? ''), true);
$key_id=$_GET['aWRjb2Rl'] ?? '';
?>
<title>پذیرنده</title>
<script src="<?= ROOT_URL; ?>public/assets/js/jq.3.3.1.min.js"></script>
<script src="<?= ROOT_URL; ?>public/assets/js/jq.1.9.1.js"></script>
<script src="<?= ROOT_URL; ?>public/assets/js/inputmask.js"></script>
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
if($_GET['sid'] ?? ''){   
    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
    require_once "{$base_dir}deletepazlist.php";
}elseif($_GET['kind'] ?? ''){   
    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
    require_once "{$base_dir}editpazlist.php"; 
}else{ ?>
<main>
<?php include 'sidemenu2.php' ?>
		<section id='MainSection'>
			<form style='display: none;' action='../costumer/view.php' id='CostumerView' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
			</form>
			<form style='display: none;' action='../document/view.php' id='DocumentView' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
			</form>
			<form style='display: none;' action='../request/view.php' id='RequestView' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
			</form>
			<form style='display: none;' action='../terminal/view.php' id='TerminalView' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
			</form>
			<form style='display: none;' action='../terminal/new/' id='terminal_new' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
			</form>
			<form style='display: none;' name="sid" action='' id='DeleteCostumer' method='get'></form>
			<?php
					foreach ($cas_data_arr as $key=> $value) {

						if($value['customer_id']==$key_id){
	
					?>
			<form action='' method='GET' style='display:flex;flex-direction:column;width:100%;'
				enctype='multipart/form-data'>
				<article class='Cadre' style='color: #344767;'>
					<div style='display:flex;'>
						<p class='CadreTitle' style='width: calc(100% - 220px);'>اطلاعات شناسایی</p>
						<div style='display:flex;width:200px;'>
							<button class='SendButton' form='DeleteCostumer' name='sid' value="3811"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/red_cross.webp')"></button>
							<button class='SendButton' name='aWRjb2Rl' value="<?= $value['customer_id']; ?>"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/edit.webp')"></button>
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
						<input value='1403-01-04'></input>
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
						<input value='<?= $value['customer_manager_name']; ?>'></input>
						<input value='نام خانوادگی:'></input>
						<input value='<?= $value['customer_manager_family']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='نام پدر:'></input>
						<input value='<?= $value['customer_fname']; ?>'></input>
						<input value='محل تولد'></input>
						<input value='Omnis ex assumenda o'></input>
					</div>
					<div class='TableRow4'>
						<input value='کد ملی:'></input>
						<input name='idcode' value='<?= $value['customer_nation_code']; ?>' maxlength='10'
							oninput='javascript: if (10 < this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
						<input value='شماره شناسنامه'></input>
						<input name='oldidcode' value='<?= $value['customer_certid']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='کشور:'></input>
						<select name='Country'>
							<option value='<?= $value['customer_birth_country']; ?>'>انتخاب کشور</option>
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
						<input id='birthday' class='birthday' name='birthday' value='<?= $value['customer_birth']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='حرف شناسنامه'></input>
						<input value='<?= $value['customer_cert_letter']; ?>'></input>
						<input value='سریال شناسنامه:'></input>
						<input name='BirthCertificateSeries' value='<?= $value['customer_cert_serial']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='ردیف شناسنامه'></input>
						<input value='<?= $value['customer_cert_row']; ?>'></input>
						<input value='کد پستی:'></input>
						<input value='<?= $value['customer_postal_code']; ?>'></input>
					</div>
					<div class='TableRow2'>
						<input style='width:24%;' value='نشانی:'></input>
						<input style='width:74%;' name='reason'
							value='<?= $value['customer_address']; ?>'
							placeholder=''></input>
					</div>
				</article>
				<article class='Cadre' style='color: #344767;'>
					<div style='display:flex;'>
						<p class='CadreTitle' style='width: calc(100% - 220px);'>مشخصات فروشگاه</p>
						<div style='display:flex;width:200px;'>
							<button class='SendButton' form='DeleteCostumer' name='sid' value="3811"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/red_cross.webp')"></button>
							<button class='SendButton' name='aWRjb2Rl' value="<?= $value['customer_nation_code']; ?>"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/edit.webp')"></button>
						</div>
					</div>
					<div class='TableRow4'>
						<input value='نام فروشگاه:'></input>
						<input value='<?= $value['customer_store_name']; ?>'></input>
						<input value='کد مالیاتی:'></input>
						<input value='<?= $value['tax_code']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='شهر:'></input>
						<input value='<?= $value['customer_city']; ?>'></input>
						<input value='استان'></input>
						<input value='تهران'></input>
					</div>
					<div class='TableRow4'>
						<input value='صنف:'></input>
						<input value='<?= $value['customer_cat']; ?>'></input>
						<input value='کد صنف:'></input>
						<input value='54990002'></input>
					</div>
					<div class='TableRow4'>
						<input value='تلفن همراه:'></input>
						<input value='<?= $value['customer_mobile']; ?>'></input>
						<input value='تلفن ثابت:'></input>
						<input value='<?= $value['customer_tel']; ?>'></input>
					</div>
					<div class='TableRow2'>
						<input style='width:24%;' value='نشانی:'></input>
						<input style='width:74%;' name='reason'
							value='<?= $value['customer_address']; ?>'
							placeholder=''></input>
					</div>
				</article>
				<article class='Cadre' style='color: #344767;'>
					<div style='display:flex;'>
						<p class='CadreTitle' style='width: calc(100% - 220px);'>مشخصات معرف نخست</p>
						<div style='display:flex;width:200px;'>
							<button class='SendButton' form='DeleteCostumer' name='sid' value="3811"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/red_cross.webp')"></button>
							<button class='SendButton' name='aWRjb2Rl' value="<?= $value['customer_nation_code']; ?>"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/edit.webp')"></button>
						</div>
					</div>
					<div class='TableRow4'>
						<input value='نام:'></input>
						<input value='<?= $value['cus_repres1_name']; ?>'></input>
						<input value='نام خانوادگی:'></input>
						<input value='<?= $value['cus_repres1_family']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='کد ملی:'></input>
						<input value='<?= $value['cus_repres1_id']; ?>'></input>
						<input value='نام پدر'></input>
						<input value='<?= $value['cus_repres1_fname']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='تلفن ثابت'></input>
						<input value='<?= $value['cus_repres1_tel']; ?>' maxlength='11'
							oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
						<input value='تلفن همراه'></input>
						<input value='<?= $value['cus_repres1_mobile']; ?>' maxlength='11'
							oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
					</div>
					<div class='TableRow2'>
						<input style='width:24%;' value='نشانی:'></input>
						<input style='width:74%;' name='reason' value='<?= $value['cus_repres1_address']; ?>' placeholder=''></input>
					</div>
				</article>
				<article class='Cadre' style='color: #344767;'>
					<div style='display:flex;'>
						<p class='CadreTitle' style='width: calc(100% - 220px);'>مشخصات معرف دوم</p>
						<div style='display:flex;width:200px;'>
							<button class='SendButton' form='DeleteCostumer' name='sid' value="3811"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/red_cross.webp')"></button>
							<button class='SendButton' name='aWRjb2Rl' value="<?= $value['customer_nation_code']; ?>+1 (162) 777-5604"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/edit.webp')"></button>
						</div>
					</div>
					<div class='TableRow4'>
						<input value='نام:'></input>
						<input value='<?= $value['cus_repres2_name']; ?>'></input>
						<input value='نام خانوادگی:'></input>
						<input value='<?= $value['cus_repres2_family']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='کد ملی:'></input>
						<input value='<?= $value['cus_repres2_id']; ?>'></input>
						<input value='نام پدر'></input>
						<input value='<?= $value['cus_repres2_fname']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='تلفن ثابت'></input>
						<input value='<?= $value['cus_repres2_tel']; ?>' maxlength='11'
							oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
						<input value='تلفن همراه'></input>
						<input value='<?= $value['cus_repres1_mobile']; ?>' maxlength='11'
							oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
					</div>
					<div class='TableRow2'>
						<input style='width:24%;' value='نشانی:'></input>
						<input style='width:74%;' name='reason' value='Laborum Et dolores ' placeholder=''></input>
					</div>
				</article>
				<article class='Cadre' style='color: #344767;'>
					<div style='display:flex;'>
						<p class='CadreTitle' style='width: calc(100% - 220px);'>مشخصات معرف سوم</p>
						<div style='display:flex;width:200px;'>
							<button class='SendButton' form='DeleteCostumer' name='sid' value="3811"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/red_cross.webp')"></button>
							<button class='SendButton' name='aWRjb2Rl' value="<?= $value['customer_nation_code']; ?>"
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/edit.webp')"></button>
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
					<?php
						}
					}
					?>
				</article> 
				</table>
			</form>
		</section>
		<?php } ?>  
	</main>
</body>

</html>