<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;
require_once ("{$base_dir}header-up.php");
$cas_data_arr = json_decode(json_encode($data['casdata'] ?? ''), true);
$key_id = $_GET['aWRjb2Rl'] ?? '';
?>
<title>پذیرنده</title>
<script src="<?= ROOT_URL; ?>public/assets/js/jq.3.3.1.min.js"></script>
<script src="<?= ROOT_URL; ?>public/assets/js/jq.1.9.1.js"></script>
<script src="<?= ROOT_URL; ?>public/assets/js/inputmask.js"></script>
<style>


	.SpecialDocumentForm {
		width: 18%;
		margin: 0 auto;
	}

	.SpecialDocumentForm input,
	.SpecialDocumentForm button {
		width: 98% !important;
	}
</style>
<?php
require_once ("{$base_dir}header.php");
if ($_GET['sid'] ?? '') {
	$ds = DIRECTORY_SEPARATOR;
	$base_dir = realpath(dirname(__FILE__) . $ds) . $ds;
	require_once "{$base_dir}deletepazlist.php";
} elseif ($_GET['kind'] ?? '') {
	$ds = DIRECTORY_SEPARATOR;
	$base_dir = realpath(dirname(__FILE__) . $ds) . $ds;
	require_once "{$base_dir}editpazlist.php";
} else { ?>
	<main>
		<?php include 'sidemenu2.php' ?>
		<section id='MainSection'>
			<form style='display: none;' action='../costumer/view.php' id='CostumerView' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='3581008734'></input>
			</form>
			<form style='display: none;' action='../document/view.php' id='DocumentView' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='3581008734'></input>
			</form>
			<form style='display: none;' action='../request/view.php' id='RequestView' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='3581008734'></input>
			</form>
			<form style='display: none;' action='../terminal/view.php' id='TerminalView' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='3581008734'></input>
			</form>
			<form style='display: none;' action='Inquiry/' id='Inquiry' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='3581008734'></input>
			</form>
			<form style='display: none;' action='/membership/bank/PaymentTerminal/Export/Document/Archiver/Single/'
				id='archiver_single' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='3581008734'></input>
			</form>
			<form style='display: none;' action='../terminal/new/' id='terminal_new' method='GET'>
				<input style='display:none;' name='aWRjb2Rl' value='3581008734'></input>
			</form>
			<form style='display: none;' action='./upload/' id='DocumentUpload' method='GET'></form>
			<form action='../../../../../membership/bank/PaymentTerminal/WebServices/Passargad/Request/' id='InquiryAPI'
				method='GET'></form>
			<form style='display:flex;' action='../../../../../membership/bank/PaymentTerminal/WebServices/Passargad/New/'
				id='SendToAPI' method='POST'>
				<input type='hidden' name='UmVxdWVzdElE' value='4'></input>
				<input type='hidden' name='TerminalID' value='2'></input>
			</form>
			<?php
					foreach ($cas_data_arr as $key=> $value) {

						if($value['customer_id']==$key_id){
	
					?>
			<form action='modify.php' method='POST' style='width:100%;'>
				<input type='hidden' name='aWRjb2Rl' value='3581008734'></input>
				<article class='Cadre' style=''>
					<div style='display:flex;'>
						<p class='CadreTitle' style='width: calc(100% - 180px);'>اطلاعات درخواست (2)</p>
						<div style='display:flex;width:160px;'>
							<button name='c2lk' class='SendButton' form='DocumentUpload' value='2'
								style="background-image:url('<?= ROOT_URL; ?>public/assets/img/upload.webp');"></button>
							<button name='c2lk' class='SendButton' value='2' type='submit'
								style='background-image:url("<?= ROOT_URL; ?>public/assets/img/GreenCheck.webp");'></button>
							<button form='InquiryAPI' class='SendButton' name='d2ViaWQ=[]' value=''
								style="display:none;background-image:url('<?= ROOT_URL; ?>public/assets/img/Inquiry.webp');">
								<button form='SendToAPI' class='SendButton' name='sid[]' value='2'
									style="display:flex;background-image:url('<?= ROOT_URL; ?>public/assets/img/api.webp');"></button>

						</div>
					</div>
					<input type='hidden' name='c2lk' value='2'></input>
					<div class='TableRow4'>
						<button type='submit' class='PagingButton' name='c2lk' value='2' form='CostumerView'>اطلاعات
							پذیرنده</button>
						<button type='submit' class='PagingButton' name='c2lk' value='2' form='TerminalView'>نمایش
							پایانه</button>
						<button type='submit' class='PagingButton' name='c2lk' value='2' form='RequestView'>نمایش
							درخواست</button>
						<button type='submit' class='PagingButton' form='terminal_new'>پایانه جدید</button>
					</div>
					<div class='TableRow4'>
						<input value='نام پذیرنده'></input>
						<input value='<?= $value['customer_manager_name']; ?>'></input>
						<input value='نام خانوادگی پذیرنده'></input>
						<input value='<?= $value['customer_manager_family']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='کد ملی'></input>
						<input value='<?= $value['customer_nation_code']; ?>'></input>
						<input value='نوع شخصیت'></input>
						<input value='<?= $value['customer_type']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='شماره ترمینال'></input>
						<input value=''></input>
						<input value='پروژه'></input>
						<input value='<?= $value['customer_service']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='نام نماینده'></input>
						<input name='suser' value=''></input>
						<input value='کاربر'></input>
						<input name='modifier' value='<?= $value['customer_agent']; ?>'></input>
					</div>
					<div class='TableRow4'>
						<input value='وضعیت بایگانی'></input>
						<select name='seen'>
							<option value='0'>مردود شرکت</option>
							<option value='1'>بایگانی نشده</option>
							<option value='2' selected>بایگانی شده</option>
							<option value='3'>بررسی شده</option>
							<option value='5'>مردود مرکز</option>
							<option value='6'>بررسی مرکز</option>
						</select>
						<input value=''></input>
						<input value=''></input>
					</div>
					<div class='TableRow2'>
						<input style='width:24%;' value='علل مردودی و توضیحات :'></input>
						<input style='width:74%;' name='reason' value='' placeholder=''></input>
					</div>
					<div class='TableRow2'>
						<button style='display:none;' type='submit' class='PagingButton' name='c2lk' value='2'
							form='Inquiry'>استعلام از سرور</button>
						<button type='submit' class='PagingButton' name='c2lk' value='2' form='archiver_single'>دانلود فایل
							فشرده</button>
					</div>
				</article>
			</form>
			<?php
						}
					}
					?>
			<article class='Cadre' style=''>
				<div class='TableRow4'>
					<form class='SpecialDocumentForm'>
						<input value='تأییدیه کد مالیاتی' placeholder=''></input>
					</form>
					<form class='SpecialDocumentForm'
						id='testdomains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/10000.jpg'>
						<button type='button'
							onclick="testing('domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/10000.jpg','domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/10000.jpg','10000','پاسارگاد')"
							class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/10000.jpg'>نمایش</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsImage.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/10000.jpg'>دانلود
							مدرک</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsPDF.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/10000.jpg'>دانلود پی دی
							اف</button>
					</form>
					<form class='SpecialDocumentForm' action='/membership/bank/PaymentTerminal/V1/document/delete.php'
						method='post'>
						<input type='hidden' name='c2lk' value='2'></input>
						<button class='PagingButton' type='submit' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/10000.jpg'>حذف</button>
					</form>
				</div>
				<div class='TableRow4'>
					<form class='SpecialDocumentForm'>
						<input value='قرارداد 1' placeholder=''></input>
					</form>
					<form class='SpecialDocumentForm'
						id='testdomains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/11.jpg'>
						<button type='button'
							onclick="testing('domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/11.jpg','domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/11.jpg','11','پاسارگاد')"
							class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/11.jpg'>نمایش</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsImage.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/11.jpg'>دانلود
							مدرک</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsPDF.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/11.jpg'>دانلود پی دی
							اف</button>
					</form>
					<form class='SpecialDocumentForm' action='/membership/bank/PaymentTerminal/V1/document/delete.php'
						method='post'>
						<input type='hidden' name='c2lk' value='2'></input>
						<button class='PagingButton' type='submit' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/11.jpg'>حذف</button>
					</form>
				</div>
				<div class='TableRow4'>
					<form class='SpecialDocumentForm'>
						<input value='قرارداد 2' placeholder=''></input>
					</form>
					<form class='SpecialDocumentForm'
						id='testdomains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/111.jpg'>
						<button type='button'
							onclick="testing('domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/111.jpg','domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/111.jpg','111','پاسارگاد')"
							class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/111.jpg'>نمایش</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsImage.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/111.jpg'>دانلود
							مدرک</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsPDF.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/111.jpg'>دانلود پی دی
							اف</button>
					</form>
					<form class='SpecialDocumentForm' action='/membership/bank/PaymentTerminal/V1/document/delete.php'
						method='post'>
						<input type='hidden' name='c2lk' value='2'></input>
						<button class='PagingButton' type='submit' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/111.jpg'>حذف</button>
					</form>
				</div>
				<div class='TableRow4'>
					<form class='SpecialDocumentForm'>
						<input value='تأییدیه شبا' placeholder=''></input>
					</form>
					<form class='SpecialDocumentForm'
						id='testdomains/pz13336.parspack.net/public_html/pnikpay/3581008734/12.jpg'>
						<button type='button'
							onclick="testing('domains/pz13336.parspack.net/public_html/pnikpay/3581008734/12.jpg','domains/pz13336.parspack.net/public_html/pnikpay/3581008734/12.jpg','12','پاسارگاد')"
							class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/12.jpg'>نمایش</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsImage.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/12.jpg'>دانلود مدرک</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsPDF.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/12.jpg'>دانلود پی دی
							اف</button>
					</form>
					<form class='SpecialDocumentForm' action='/membership/bank/PaymentTerminal/V1/document/delete.php'
						method='post'>
						<input type='hidden' name='c2lk' value='2'></input>
						<button class='PagingButton' type='submit' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/12.jpg'>حذف</button>
					</form>
				</div>
				<div class='TableRow4'>
					<form class='SpecialDocumentForm'>
						<input value='قبض تلفن / تأییدیه کد پستی' placeholder=''></input>
					</form>
					<form class='SpecialDocumentForm'
						id='testdomains/pz13336.parspack.net/public_html/pnikpay/3581008734/13.jpg'>
						<button type='button'
							onclick="testing('domains/pz13336.parspack.net/public_html/pnikpay/3581008734/13.jpg','domains/pz13336.parspack.net/public_html/pnikpay/3581008734/13.jpg','13','پاسارگاد')"
							class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/13.jpg'>نمایش</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsImage.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/13.jpg'>دانلود مدرک</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsPDF.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/13.jpg'>دانلود پی دی
							اف</button>
					</form>
					<form class='SpecialDocumentForm' action='/membership/bank/PaymentTerminal/V1/document/delete.php'
						method='post'>
						<input type='hidden' name='c2lk' value='2'></input>
						<button class='PagingButton' type='submit' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/13.jpg'>حذف</button>
					</form>
				</div>
				<div class='TableRow4'>
					<form class='SpecialDocumentForm'>
						<input value='اجاره نامه / سند' placeholder=''></input>
					</form>
					<form class='SpecialDocumentForm'
						id='testdomains/pz13336.parspack.net/public_html/pnikpay/3581008734/14.jpg'>
						<button type='button'
							onclick="testing('domains/pz13336.parspack.net/public_html/pnikpay/3581008734/14.jpg','domains/pz13336.parspack.net/public_html/pnikpay/3581008734/14.jpg','14','پاسارگاد')"
							class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/14.jpg'>نمایش</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsImage.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/14.jpg'>دانلود مدرک</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsPDF.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/14.jpg'>دانلود پی دی
							اف</button>
					</form>
					<form class='SpecialDocumentForm' action='/membership/bank/PaymentTerminal/V1/document/delete.php'
						method='post'>
						<input type='hidden' name='c2lk' value='2'></input>
						<button class='PagingButton' type='submit' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/14.jpg'>حذف</button>
					</form>
				</div>
				<div class='TableRow4'>
					<form class='SpecialDocumentForm'>
						<input value='روی کارت ملی' placeholder=''></input>
					</form>
					<form class='SpecialDocumentForm'
						id='testdomains/pz13336.parspack.net/public_html/pnikpay/3581008734/26.jpg'>
						<button type='button'
							onclick="testing('domains/pz13336.parspack.net/public_html/pnikpay/3581008734/26.jpg','domains/pz13336.parspack.net/public_html/pnikpay/3581008734/26.jpg','26','پاسارگاد')"
							class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/26.jpg'>نمایش</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsImage.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/26.jpg'>دانلود مدرک</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsPDF.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/26.jpg'>دانلود پی دی
							اف</button>
					</form>
					<form class='SpecialDocumentForm' action='/membership/bank/PaymentTerminal/V1/document/delete.php'
						method='post'>
						<input type='hidden' name='c2lk' value='2'></input>
						<button class='PagingButton' type='submit' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/26.jpg'>حذف</button>
					</form>
				</div>
				<div class='TableRow4'>
					<form class='SpecialDocumentForm'>
						<input value='صفحه اول شناسنامه' placeholder=''></input>
					</form>
					<form class='SpecialDocumentForm'
						id='testdomains/pz13336.parspack.net/public_html/pnikpay/3581008734/28.jpg'>
						<button type='button'
							onclick="testing('domains/pz13336.parspack.net/public_html/pnikpay/3581008734/28.jpg','domains/pz13336.parspack.net/public_html/pnikpay/3581008734/28.jpg','28','پاسارگاد')"
							class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/28.jpg'>نمایش</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsImage.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/28.jpg'>دانلود مدرک</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsPDF.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/28.jpg'>دانلود پی دی
							اف</button>
					</form>
					<form class='SpecialDocumentForm' action='/membership/bank/PaymentTerminal/V1/document/delete.php'
						method='post'>
						<input type='hidden' name='c2lk' value='2'></input>
						<button class='PagingButton' type='submit' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/28.jpg'>حذف</button>
					</form>
				</div>
				<div class='TableRow4'>
					<form class='SpecialDocumentForm'>
						<input value='فرم نصب' placeholder=''></input>
					</form>
					<form class='SpecialDocumentForm'
						id='testdomains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/9004.jpg'>
						<button type='button'
							onclick="testing('domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/9004.jpg','domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/9004.jpg','9004','پاسارگاد')"
							class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/9004.jpg'>نمایش</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsImage.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/9004.jpg'>دانلود
							مدرک</button>
					</form>
					<form class='SpecialDocumentForm'
						action='/membership/bank/PaymentTerminal/V1/document/DownloadAsPDF.php' method='post'>
						<button type='submit' class='PagingButton' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/9004.jpg'>دانلود پی دی
							اف</button>
					</form>
					<form class='SpecialDocumentForm' action='/membership/bank/PaymentTerminal/V1/document/delete.php'
						method='post'>
						<input type='hidden' name='c2lk' value='2'></input>
						<button class='PagingButton' type='submit' name='path'
							value='domains/pz13336.parspack.net/public_html/pnikpay/3581008734/2/9004.jpg'>حذف</button>
					</form>
				</div>
			</article>


			<div class='resultat'></div>
			<form action='transfer/' method='post' style='display:none;'>
				<button name='3581008734' style='display:none;' value='3581008734'>تبدیل</button>
			</form>
		</section>
	<?php } ?>
</main>
</body>

</html>