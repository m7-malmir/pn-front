<?php
    require_once '../header-up.php';
?>
	<title>مشترک ترمینال</title>
    <?php 
    require_once '../header.php';
?>
<main>
	<section id='FunctionalMenu'>
					<div>
				<a href='GroupPassargad/' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>گروهی پاسارگاد</p>
				</a>
				<a href='GroupPassargad/Export/' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>اکسل گروهی پاسارگاد</p>
				</a>
			</div>
			<div>
				<a href='GroupParsian/' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>گروهی پارسیان</p>
				</a>
				<a href='GroupParsian/Export/' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>اکسل گروهی پارسیان</p>
				</a>
			</div>
			<div>
				<a href='Functionment/' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp' ></img>
					</button>
					<p>عملکرد ترمینال</p>
				</a>
			</div>
				<div>
							<a href='Marketers/' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p> بازاریاب </p>
				</a>
						<a href='Project/' class='classification'>
				<button style=''>
					<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
				</button>
				<p>گزارش بر مبنای پروژه</p>
			</a>
		</div>
		<div style='display:none;'>
			<a href='Export/index.php?Acceptor=off' class='classification'>
				<button style=''>
					<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
				</button>
				<p>خروجی ترمینال بدون پذیرنده</p>
			</a>
			<a href='Export/index.php?Acceptor=on' class='classification'>
				<button style=''>
					<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
				</button>
				<p>خروجی ترمینال با پذیرنده</p>
			</a>
		</div>
							<div>
				<a style='display:none;' href='' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>خروجی حجیم غیر فعال</p>
				</a>
				<a href='Archive/' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>بایگانی</p>
				</a>
			</div>
				</div>
					<div>
				<a href='Customize' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>خاص</p>
				</a>
				<a href='PayPerInstall/' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>حق نصب</p>
				</a>
			</div>
			</section>
</main>
</body>
</html>
