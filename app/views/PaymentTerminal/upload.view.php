
<link rel="stylesheet" href="<?= ROOT_URL; ?>public/assets/css/style.css">
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<!-- <script src='<?= ROOT_URL; ?>public/assets/library/jquery/3.4.1.min.js'></script>  -->
 <script src="<?= ROOT_URL; ?>public/assets/js/main.js"></script>
    <title>بارگذاری</title>
	<style>
main{
	display:block;
	margin: 0 auto;
}
.action_button {
    width: 160px;
    background-image: linear-gradient(90deg, gray 2%, white 50%, gray 98%);
    border: none;
    box-shadow: 1px 1px 3px 0 gray;
    margin: 0 auto;
    font-size: 14px;
    padding: 3px 30px;
    text-shadow: 1px 1px white;
    font-weight: 900;
}
	</style>
<script>
/*
document.documentElement.classList.add("light-mode");
function ToggleTheme(){
	document.documentElement.classList.add("dark-mode");
}
*/
//console.log(localStorage.getItem("color-scheme"));
//console.log(window.matchMedia("(prefers-color-scheme:light)").matches);
//console.log(window.matchMedia("(prefers-color-scheme:dark)").matches);

function ToggleNavBarMenu(){
	var navbar2 = document.getElementById("navbar2");
	if(navbar2.style.display == 'flex'){
		navbar2.style.display = 'none';
	}else{
		navbar2.style.display = 'flex';
	}
}
function ToggleHeaderSideMenu(){
	var navbar2 = document.getElementById("header_smallsize");
	if(navbar2.style.display == 'flex'){
		navbar2.style.display = 'none';
	}else{
		navbar2.style.display = 'flex';
	}
}
</script>
<div class='navbar' >
			<div style='width:160px;display:flex;float:left;color: white;position:relative;height:55px;' onclick='ToggleNavBarMenu();' >
			<a style='display:none;width:32px;height:32px;margin:auto;' href='/membership/notification/'>
				<img style='width: 100%;margin-top: 5px;' src='/library/images/notification.webp'>
					<div id='NotificationCounter' >
					</div>
				</img>
			</a>
			<div style='width:calc(100% - 32px);height:32px;display:flex;margin:auto;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;'>
				<div style='margin: auto;' >admin admin</div>
			</div>
			<div style='width:32px;height:32px;margin:auto 5px;'>
									<img src='/library/images/user_logo_white.webp' style='width:30px;height:30px;'></img>
							</div>
		</div>
		<div id='HeaderImage' style='display:none;'>
			<a href='./?logout=on'>
				<img src='/library/images/logout_white.webp'></img>
			</a>
			<a href='/membership/notification/'>
				<img src='/library/images/notification.webp'>
					<div id='NotificationCounter' >
						اعلانات 
						(
							100+						)
					</div>
				</img>
			</a>
		</div>
	<div id='header_hamburger_button' style='' onclick='ToggleHeaderSideMenu();' >
		<div style=''></div>
		<div style=''></div>
		<div style=''></div>
	</div>
		<div id='header_bigsize'>
		<div class='dropdown'>
			<button class='dropbtn'>
				<a>منو عمومی</a>
				<i class='fa fa-caret-down'></i>
			</button>
			<div class='dropdown-content'>
				<div class='' id=''>
					<a href='/maintenance/external/paymentservice/'>تعمیرگاه سانیار سرویس</a>
				</div>
			</div>
		</div>
	<div class='dropdown'>
				<button class='dropbtn'>
					<a>منو</a>
					<i class='fa fa-caret-down'></i>
				</button><div class='dropdown-content'><div class='' id=''><a href='../../../../../../'>منو</a></div></div><div class='dropdown-content'><div class='' id=''><a href='../../../../../../membership/'>خانه</a><a href='../../../../../../membership/profile/'>پروفایل</a><a href='../../../../../../library/logout.php'>خروج</a><a href='../../../../../../membership/bank/PaymentTerminal/V1/'>کارتخوان</a><a href='../../../../../../membership/tool/sidebyside/'>چسباندن عکس کنار هم</a><a href='../../../../../../membership/bank/PaymentTerminal/WebServices/Passargad/Query/'>استعلام سریال </a><a href='../../../../../../membership/bank/AutomaticTellerMachine/V1/'>خودپرداز</a><a href='../../../../../../Bank/Registry/'>رجیستر پذیرنده</a><a href='../../../../../../membership/bank/PaymentTerminal/Export/Terminal/Export/index.php?Acceptor=off'>خروجی ترمینال</a><a href='../../../../../../membership/maintenance/'>تعمیرات کارتخوان</a></div></div></div>	</div>
</div>

<section id='navbar2' style=''>
	<div id='navbar2_content' style='' >
		<div>
			<a href='/membership/'>داشبورد</a>
		</div>
		<div>
			<a href='/membership/profile/'>پروفایل</a>
		</div>
		<div>
			<a style='' href='/membership/message/messenger/'>
				پیام ها 
				(
					0				)
			</a>
		</div>
		<div>
			<a style='' href='/membership/notification/'>
				اعلانات 
				(
					100+				)
			</a>
		</div>
					<div ><a href='/membership/admin/'>ادمین</a></div>
				<div ><a href='./?logout=on'>خروج</a></div>
	</div>
</section>

<section id='header_smallsize'>

				<div class='header_smallsize_topic'>
					<a>منو</a>
				</div>
			
				<div style='width:80%;height:1px;margin: 3px auto;background-color:#333333;'></div>
			
					<div class='header_smallsize_menu'>
						<a href='../../../../../../' >منو</a>
					</div>
				
						<div class='header_smallsize_menu'>
							<a href='../../../../../../membership/' >خانه</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../../membership/profile/' >پروفایل</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../../library/logout.php' >خروج</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../../membership/bank/PaymentTerminal/V1/' >کارتخوان</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../../membership/tool/sidebyside/' >چسباندن عکس کنار هم</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../../membership/bank/PaymentTerminal/WebServices/Passargad/Query/' >استعلام سریال </a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../../membership/bank/AutomaticTellerMachine/V1/' >خودپرداز</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../../Bank/Registry/' >رجیستر پذیرنده</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../../membership/bank/PaymentTerminal/Export/Terminal/Export/index.php?Acceptor=off' >خروجی ترمینال</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../../membership/maintenance/' >تعمیرات کارتخوان</a>
						</div>
					</section>
<main>
<form action='../../../../../../membership/bank/PaymentTerminal/contract/Sepehr/index.php' style='display:none;' id='ContractForm4055' target='_blank' method='GET'></form>
<form action='/membership/bank/PaymentTerminal/contract/Sepehr/installation.php' style='display:none;' id='InstalationForm4055' target='_blank' method='GET'></form>
<form action='../../../../../../membership/bank/PaymentTerminal/contract/Sepehr/affidavit.php' style='display:none;' id='AffidavitForm4055' target='_blank' method='GET'></form>
<form action='' style='display:none;' id='DelegationForm4055' target='_blank' method='GET'></form>
<form action='../../../../../../membership/bank/PaymentTerminal/contract/Sepehr/account.php' style='display:none;' id='AccountForm4055' target='_blank' method='GET'></form>
<section id='main'>
	<form  id='RapidForm' method='GET' action='/membership/pos/costumer/cardreader/view.php'></form>
	<section id='Result'>
		<div class='lds_ripple' ><div></div><div></div></div>
	</section>
	<div class='TableRow4'>
		<button type='submit' class='PagingButton' name='c2lk' value='4055' form='ContractForm4055'>چاپ فرم قرارداد</button>
		<button type='submit' class='PagingButton' name='c2lk' value='4055' form='InstalationForm4055'>چاپ فرم نصب</button>
		<button type='submit' class='PagingButton' name='c2lk' value='4055' form='AffidavitForm4055'>چاپ فرم استشهاد</button>
		<button type='submit' class='PagingButton' name='c2lk' value='4055' form='DelegationForm4055'>چاپ فرم تفویض اختیار</button>
		<button type='submit' class='PagingButton' name='c2lk' value='4055' form='AccountForm4055'>چاپ فرم تغییر حساب</button>
	</div>
	<form id='uploading' action='/membership/bank/PaymentTerminal/V1/document/upload/upload.php' method='post' enctype='multipart/form-data' class='TableSection' style='margin:20px auto;'>
		<table>
			<tr>
				<th></th>
				<th>نام</th>
				<th>بارگذاری</th>
			</tr>
							<tr>
					<td colspan='3'>
						برای ارسال شدن به سمت شاپرک قرار دادن فایل های مورد نیاز الزامی است
					</td>
				</tr>
				<tr>
					<td colspan='3'>
						حجم فایل ها نباید بیش از 1.5 مگابایت باشد
					</td>
				</tr>
				<tr>
					<td colspan='3'>
						فرمت فایل باید jpg و یا jpeg باشد
						به جز برای اساسنامه که pdf باید باشد
					</td>
				</tr>
				<tr>
					<td colspan='3'>
						<div style='display:flex;'>
							<button class='action_button' name='id' value='4055' OnClick="loading();" >
								بارگذاری همه
							</button>
						</div>
					</td>
				</tr>				
				<tr><td>1</td><td><input value='روی کارت ملی*' style='color:red;'></input></td><td><div style='display:flex;'><input style='max-width:160px;margin:0 auto;' type='file' name='file26' required ></input><input type='hidden' name='img26' value='26'></input></div></td></tr><tr><td>2</td><td><input value='پشت کارت ملی*' style='color:red;'></input></td><td><div style='display:flex;'><input style='max-width:160px;margin:0 auto;' type='file' name='file27' required></input><input type='hidden' name='img27' value='27'></input></div></td></tr><tr><td>3</td><td><input value='صفحه اول شناسنامه*' style='color:red;'></input></td><td><div style='display:flex;'><input style='max-width:160px;margin:0 auto;' type='file' name='file28' required></input><input type='hidden' name='img28' value='28'></input></div></td></tr><tr><td>4</td><td><input value='تأییدیه شبا'></input></td><td><div style='display:flex;'><input id='image-file12' style='max-width:160px;margin:0 auto;' type='file' name='file12' ></input><input type='hidden' name='img12' value='12'></input></div></td></tr><tr><td>5</td><td><input value='تأییدیه کد مالیاتی'></input></td><td><div style='display:flex;'><input id='image-file10000' style='max-width:160px;margin:0 auto;' type='file' name='file10000' ></input><input type='hidden' name='img10000' value='10000'></input></div></td></tr><tr><td>6</td><td><input value='قرارداد 1*' style='color:red;'></input></td><td><div style='display:flex;'><input style='max-width:160px;margin:0 auto;' type='file' name='file11' required ></input><input type='hidden' name='img11' value='11'></input></div></td></tr><tr><td>7</td><td><input value='قرارداد 2'></input></td><td><div style='display:flex;'><input id='image-file111' style='max-width:160px;margin:0 auto;' type='file' name='file111' ></input><input type='hidden' name='img111' value='111'></input></div></td></tr><tr><td>8</td><td><input value='قرارداد 3'></input></td><td><div style='display:flex;'><input id='image-file1111' style='max-width:160px;margin:0 auto;' type='file' name='file1111' ></input><input type='hidden' name='img1111' value='1111'></input></div></td></tr><tr><td>9</td><td><input value='قرارداد 4'></input></td><td><div style='display:flex;'><input id='image-file11111' style='max-width:160px;margin:0 auto;' type='file' name='file11111' ></input><input type='hidden' name='img11111' value='11111'></input></div></td></tr><tr><td>10</td><td><input value='جواز کسب'></input></td><td><div style='display:flex;'><input id='image-file25' style='max-width:160px;margin:0 auto;' type='file' name='file25' ></input><input type='hidden' name='img25' value='25'></input></div></td></tr><tr><td>11</td><td><input value='فرم استشهاد'></input></td><td><div style='display:flex;'><input id='image-file9007' style='max-width:160px;margin:0 auto;' type='file' name='file9007' ></input><input type='hidden' name='img9007' value='9007'></input></div></td></tr><tr><td>12</td><td><input value='فرم نصب 1'></input></td><td><div style='display:flex;'><input id='image-file9004' style='max-width:160px;margin:0 auto;' type='file' name='file9004' ></input><input type='hidden' name='img9004' value='9004'></input></div></td></tr><tr><td>13</td><td><input value='فرم نصب 2 تست'></input></td><td><div style='display:flex;'><input id='image-file90041' style='max-width:160px;margin:0 auto;' type='file' name='file90041' ></input><input type='hidden' name='img90041' value='90041'></input></div></td></tr><tr><td>14</td><td><input value='قبض تلفن / تأییدیه کد پستی'></input></td><td><div style='display:flex;'><input id='image-file13' style='max-width:160px;margin:0 auto;' type='file' name='file13' ></input><input type='hidden' name='img13' value='13'></input></div></td></tr><tr><td>15</td><td><input value='اجاره نامه / سند'></input></td><td><div style='display:flex;'><input id='image-file14' style='max-width:160px;margin:0 auto;' type='file' name='file14' ></input><input type='hidden' name='img14' value='14'></input></div></td></tr><tr><td>16</td><td><input value='فرم تغییر حساب'></input></td><td><div style='display:flex;'><input id='image-file52' style='max-width:160px;margin:0 auto;' type='file' name='file52' ></input><input type='hidden' name='img52' value='52'></input></div></td></tr><tr><td>17</td><td><input value='فرم تفویض اختیار'></input></td><td><div style='display:flex;'><input id='image-file9006' style='max-width:160px;margin:0 auto;' type='file' name='file9006' ></input><input type='hidden' name='img9006' value='9006'></input></div></td></tr><tr><td>18</td><td><input value='کارت ملی/ شناسنامه تفویض اختیار دهنده'></input></td><td><div style='display:flex;'><input id='image-file9008' style='max-width:160px;margin:0 auto;' type='file' name='file9008' ></input><input type='hidden' name='img9008' value='9008'></input></div></td></tr><tr><td>19</td><td><input value='فرم بازاریابی'></input></td><td><div style='display:flex;'><input id='image-file10001' style='max-width:160px;margin:0 auto;' type='file' name='file10001' ></input><input type='hidden' name='img10001' value='10001'></input></div></td></tr><tr><td>20</td><td><input value='فرم پرفراژ'></input></td><td><div style='display:flex;'><input id='image-file10004' style='max-width:160px;margin:0 auto;' type='file' name='file10004' ></input><input type='hidden' name='img10004' value='10004'></input></div></td></tr><tr><td>21</td><td><input value='تراکنش نصب'></input></td><td><div style='display:flex;'><input id='image-file100060' style='max-width:160px;margin:0 auto;' type='file' name='file100060' ></input><input type='hidden' name='img100060' value='100060'></input></div></td></tr><tr><td>22</td><td><input value='تراکنش ابطال'></input></td><td><div style='display:flex;'><input id='image-file100070' style='max-width:160px;margin:0 auto;' type='file' name='file100070' ></input><input type='hidden' name='img100070' value='100070'></input></div></td></tr><tr><td>23</td><td><input value='امضاء پذیرنده'></input></td><td><div style='display:flex;'><input id='image-file100100' style='max-width:160px;margin:0 auto;' type='file' name='file100100' ></input><input type='hidden' name='img100100' value='100100'></input></div></td></tr><tr><td>24</td><td><input value='اثر انگشت / مهر پذیرنده'></input></td><td><div style='display:flex;'><input id='image-file100101' style='max-width:160px;margin:0 auto;' type='file' name='file100101' ></input><input type='hidden' name='img100101' value='100101'></input></div></td></tr><tr><td>25</td><td><input value='امضاء معرف اول'></input></td><td><div style='display:flex;'><input id='image-file100200' style='max-width:160px;margin:0 auto;' type='file' name='file100200' ></input><input type='hidden' name='img100200' value='100200'></input></div></td></tr><tr><td>26</td><td><input value='اثر انگشت / مهر معرف اول'></input></td><td><div style='display:flex;'><input id='image-file100201' style='max-width:160px;margin:0 auto;' type='file' name='file100201' ></input><input type='hidden' name='img100201' value='100201'></input></div></td></tr><tr><td>27</td><td><input value='امضاء معرف دوم'></input></td><td><div style='display:flex;'><input id='image-file100300' style='max-width:160px;margin:0 auto;' type='file' name='file100300' ></input><input type='hidden' name='img100300' value='100300'></input></div></td></tr><tr><td>28</td><td><input value='اثر انگشت / مهر معرف دوم'></input></td><td><div style='display:flex;'><input id='image-file100301' style='max-width:160px;margin:0 auto;' type='file' name='file100301' ></input><input type='hidden' name='img100301' value='100301'></input></div></td></tr><tr><td>29</td><td><input value='امضاء معرف سوم'></input></td><td><div style='display:flex;'><input id='image-file100400' style='max-width:160px;margin:0 auto;' type='file' name='file100400' ></input><input type='hidden' name='img100400' value='100400'></input></div></td></tr><tr><td>30</td><td><input value='اثر انگشت / مهر معرف سوم'></input></td><td><div style='display:flex;'><input id='image-file100401' style='max-width:160px;margin:0 auto;' type='file' name='file100401' ></input><input type='hidden' name='img100401' value='100401'></input></div></td></tr><tr><td>31</td><td><input value='فرم فروش'></input></td><td><div style='display:flex;'><input id='image-file100102' style='max-width:160px;margin:0 auto;' type='file' name='file100102' ></input><input type='hidden' name='img100102' value='100102'></input></div></td></tr><tr><td>32</td><td><input value='اسناد رسمی خرید'></input></td><td><div style='display:flex;'><input id='image-file100500' style='max-width:160px;margin:0 auto;' type='file' name='file100500' ></input><input type='hidden' name='img100500' value='100500'></input></div></td></tr><tr><td>33</td><td><input value='سند مالکیت'></input></td><td><div style='display:flex;'><input id='image-file100103' style='max-width:160px;margin:0 auto;' type='file' name='file100103' ></input><input type='hidden' name='img100103' value='100103'></input></div></td></tr>		</table>
	</form>
</section>
</main>
</body>
<script>
			$('#image-file26').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file26").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file26").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file27').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file27").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file27").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file28').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file28").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file28").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file12').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file12").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file12").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file10000').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file10000").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file10000").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file11').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file11").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file11").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file111').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file111").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file111").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file1111').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file1111").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file1111").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file11111').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file11111").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file11111").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file25').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file25").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file25").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file9007').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file9007").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file9007").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file9004').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file9004").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file9004").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file90041').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file90041").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file90041").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file13').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file13").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file13").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file14').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file14").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file14").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file52').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file52").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file52").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file9006').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file9006").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file9006").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file9008').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file9008").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file9008").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file10001').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file10001").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file10001").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file10004').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file10004").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file10004").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100060').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100060").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100060").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100070').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100070").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100070").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100100').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100100").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100100").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100101').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100101").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100101").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100200').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100200").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100200").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100201').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100201").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100201").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100300').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100300").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100300").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100301').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100301").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100301").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100400').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100400").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100400").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100401').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100401").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100401").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100102').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100102").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100102").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100500').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100500").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100500").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
			$('#image-file100103').on('change', function() {
			if (this.files[0].size / 1024 / 1024 > 1.5){
				alert('حجم فایل غیر مجاز است، می بایست حجم فایل زیر 1.5 مگابایت باشد');
				document.getElementById("image-file100103").value = "";
			}
			console.log(this.files[0]['type']);
							if(
					this.files[0]['type'] !== 'image/jpeg'
				){
				  alert('فرمت فایل نامناسب است');
				  document.getElementById("image-file100103").value = "";
				}
					  //console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
		});
		function loading(){
		document.getElementById('Result').style.display = "block";
	}
</script>
</html>